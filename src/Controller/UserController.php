<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\User;
use App\Form\ChangePasswordType;
use App\Form\AdminRegistrationType;
use App\Repository\ProductRepository;
use App\Repository\CartRepository;
use App\Repository\EventRepository;
use App\Repository\RecetteRepository;
use App\Repository\UserRepository;
use Pagerfanta\Doctrine\ORM\QueryAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use App\Security\AppAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use App\Security\EmailVerifier;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class UserController extends AbstractController
{

    private $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }


    /**
     * @Route("/profile", name="user")
     */
    public function index(CartRepository $cart, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        $currentCart = $user->getCart();
        return $this->render('user/user.html.twig', [
            'controller_name' => 'UserController',
            'currentCart' => $currentCart
        ]);
    }

    /**
     * @Route("/admin_home", name="admin_home")
     */
    public function admin(UserRepository $repo, ProductRepository $productRepository, UserRepository $ur, EventRepository $er, ProductRepository $pr, RecetteRepository $rr): Response
    {
        $recettes = $rr->findAll();
        $user = $this->getUser();
        $listUsers = $ur->findAll();
        $user = $this->getUser();
        $events = $er->findAll();
        $products = $pr->findAll();
        if ($user->getRoles() == ["ROLE_ADMIN"]) {

            return $this->render(
                'admin_home/index.html.twig',
                [
                    "listusers" => $listUsers,
                    'events' => $events,
                    'products' => $products,
                    'recettes' => $recettes
                ]
            );
        } else {
            return $this->redirectToRoute('error');
        }
    }

    /**
     * @Route("/error", name="error")
     */
    public function error(): Response
    {
        return $this->render('error.html.twig');
    }

    /**
     * @Route("/home", name="home")
     */
    public function home(EntityManagerInterface $em, ProductRepository $productRepository, UserRepository $ur, EventRepository $er, ProductRepository $pr): Response
    {
        $listUsers = $ur->findAll();
        $user = $this->getUser();
        $events = $er->findAll();
        $products = $pr->findAll();

        if ($user != null) {


            $user = $this->getUser();
            $currentCart = $user->getCart();

            return $this->render('home.html.twig', [
                'currentCart' => $currentCart,
                "listusers" => $listUsers,
                'events' => $events,
                'products' => $products
            ]);
        } else {
            return $this->render('home.html.twig', ["listusers" => $listUsers, 'events' => $events, 'products' => $products]);
        }
    }

    /**
     * @Route("/user/change_password", name="edit_user")
     */
    public function editPassword(Request $req, UserPasswordEncoderInterface $encoder): Response
    {
        $user = $this->getUser();
        $currentCart = $user->getCart();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(ChangePasswordType::class, $user)
            ->add('old_password', PasswordType::class, ['mapped' => false, 'label' => 'Ancien mot de passe', 'attr' => ['placeholder' => '...']])
            ->add('new_password', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'required' => true,
                'first_options' => [
                    'label' => 'Nouveau  mot de passe',
                    'attr' => [
                        'placeholder' => '...',
                    ]
                ],
                'second_options' => [
                    'label' => 'Confimer mot de passe',
                    'attr' => [
                        'placeholder' => '...',
                    ]
                ]
            ]);
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {

            $old_password = $form->get('old_password')->getData();
            if ($encoder->isPasswordValid($user, $old_password)) {
                $new_password = $form->get('new_password')->getData();
                $password = $encoder->encodePassword($user, $new_password);
                $user->setPassword($password);
                $em->flush();
                return $this->redirectToRoute('app_logout', [
                    'currentCart' => $currentCart
                ]);
            }
        }
        return $this->render('registration/change_password.html.twig', [
            'form' => $form->createView(),
            'currentCart' => $currentCart
        ]);
    }

    /**
     * @Route("/delete", name="delete_account")
     */
    public function deleteAccount(): Response
    {
        $user = $this->getUser();
        $session = $this->get('session');
        $session = new Session();
        $session->invalidate();
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();

        return $this->redirectToRoute('app_logout');
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function back(): Response
    {
        return $this->render('user/admin.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route("/admin/signup", name="register_account")
     */
    public function registerAdmin(Request $request, UserPasswordEncoderInterface $userPasswordEncoder, GuardAuthenticatorHandler $guardHandler, AppAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {

        $user = new User();
        $form = $this->createForm(AdminRegistrationType::class, $user);
        // ->add('Firstname', TextType::class,  ['disabled' => true])
        // ->add('Lastname', TextType::class,  ['disabled' => true])
        // ->add('email', TextType::class,  ['disabled' => true])
        // ->add('Phonenumber', NumberType::class, ['disabled' => true]);
        // ->add('change', SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $profilePicture = $form->get('profile_picture')->getData();
            if ($profilePicture) {
                // this is needed to safely include the file name as part of the URL
                $newFilename = uniqid() . '.' . $profilePicture->guessExtension();
                // Move the file to the directory where pictures are stored
                try {
                    $profilePicture->move(
                        $this->getParameter('profile_picture_dir'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $user->setProfilePicture($newFilename);
            }
            // encode the plain password
            $user->setPassword(
                $userPasswordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $user->setRoles(["ROLE_ADMIN"]);
            $entityManager->persist($user);
            $entityManager->flush();
            if ($this->getUser()) {
                return $this->redirectToRoute('users_list');
            }


            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation(
                'app_verify_email',
                $user,
                (new TemplatedEmail())
                    ->from(new Address('crinnxx@gmail.com', 'calometreBot'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email


            // do anything else you need here, like send an email

            return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );
        }


        return $this->render('registration/adminregister.html.twig', [
            'AdminRegistration' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/change_password", name="edit_admin")
     */
    public function editAdminAccount(Request $req, UserPasswordEncoderInterface $encoder): Response
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(ChangePasswordType::class, $user)
            ->add('old_password', PasswordType::class, [
                'mapped' => false,
                'label' => false,
                'attr' => ['placeholder' => 'Ancien mot de passe']
            ])
            ->add('new_password', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'required' => true,
                'first_options' => [
                    'label' => '   ',
                    'attr' => [
                        'placeholder' => 'New password',
                    ]
                ],
                'second_options' => [
                    'label' => '  ',
                    'attr' => [
                        'placeholder' => 'Confirm password',
                    ]
                ]
            ]);
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            // $profilePicture = $form->get('profilePicture')->getData();
            // if ($profilePicture) {
            //     // this is needed to safely include the file name as part of the URL
            //     $newFilename = uniqid() . '.' . $profilePicture->guessExtension();
            //     // Move the file to the directory where pictures are stored
            //     try {
            //         $profilePicture->move(
            //             $this->getParameter('profile_picture_dir'),
            //             $newFilename
            //         );
            //     } catch (FileException $e) {
            //         // ... handle exception if something happens during file upload
            //     }

            //     // updates the 'brochureFilename' property to store the PDF file name
            //     // instead of its contents
            //     $user->setProfilePicture($newFilename);
            // }
            $old_password = $form->get('old_password')->getData();
            if ($encoder->isPasswordValid($user, $old_password)) {
                $new_password = $form->get('new_password')->getData();
                $password = $encoder->encodePassword($user, $new_password);
                $user->setPassword($password);
                $em->flush();
                return $this->redirectToRoute('app_logout');
            }
        }
        return $this->render('user/admin.profile.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/users_list/{page<\d+>}", name="users_list", methods={"GET"})
     */
    public function list_users(UserRepository $repo, int $page = 1)
    {
        $user = $this->getUser();
        if ($user == null) {
            return $this->redirectToRoute('app_login');
        }
        if ($user->getRoles() == ["ROLE_ADMIN"]) {
            $qb = $repo->createQueryBuilder('user')->select('user');

            $pagerfanta = new Pagerfanta(
                new QueryAdapter($qb)
            );
            $pagerfanta->setMaxPerPage(4);
            $pagerfanta->setCurrentPage($page);

            return $this->render('user/listusers.html.twig', [
                "users" => $pagerfanta,
            ]);
        } else {
            //TODO: generte a 404 page.
            return $this->redirectToRoute('error');
        }
    }

    /**
     * @Route("/users_list/search", name="users_list_recherche", methods={"GET"})
     */
    public function list_usersrecherche(UserRepository $repo, int $page = 1)
    {
        $user = $this->getUser();
        if ($user == null) {
            return $this->redirectToRoute('app_login');
        }
        if ($user->getRoles() == ["ROLE_ADMIN"]) {
            if (isset($_GET["q"])) {
                return $this->render('user/listusersrecherche.html.twig', [
                    "users" => $repo->findEntitiesByStringUser($_GET["q"])
                ]);
            } else {
                return $this->render('user/listusersrecherche.html.twig', [
                    "users" => $repo->findAll()
                ]);
            }
        } else {
            //TODO: generte a 404 page.
            return $this->redirectToRoute('error');
        }
    }

    /**
     * @Route("/user/change_mail", name="edit_mail")
     */
    public function editEmail(Request $req, UserPasswordEncoderInterface $encoder): Response
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(ChangePasswordType::class, $user)
            ->add('email', EmailType::class)
            ->add('old_password', PasswordType::class, ['mapped' => false, 'attr' => ['placeholder' => 'Ancien mot de passe']])
            ->add('change', SubmitType::class);
        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {

            $password = $form->get('old_password')->getData();
            if ($encoder->isPasswordValid($user, $password)) {
                $em->flush();
                return $this->redirectToRoute('user');
            }
        }
        return $this->render('registration/change_mail.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/ban/{id}",name="ban_user")
     */
    public function banUser($id): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        if ($user->getRoles() == ["ROLE_ADMIN"]) {
            $em = $this->getDoctrine()->getManager();
            $user = $this->getDoctrine()->getRepository(User::class)->find($id);
            $user->setIsBanned(true);
            $em->flush();

            return $this->redirectToRoute('users_list');
        } else {
            //TODO: redirect to a 404 page
            return $this->redirectToRoute('error');
        }
    }

    /*CODENAME ONE*/

    /**
     * @Route("/mobile/user/register", name="mobile_user_register")
     */
    public function mobileRegister(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $email = $request->query->get("email");
        $roles = $request->query->get("roles");
        $password = $request->query->get("password");
        $countrycode = $request->query->get("countrycode");
        $phonenumber = $request->query->get("phonenumber");
        $firstName = $request->query->get("firstname");
        $lastName = $request->query->get("lastname");

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return new Response("email invalid");
        }

        $user = new User();
        $user->setEmail($email);
        if ($roles == "Client") {
            $user->setRoles(["ROLE_CLIENT"]);
        } else {
            $user->setRoles(["ROLE_COACH"]);
        }

        $user->setPassword($passwordEncoder->encodePassword($user, $password));
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setCountryCode($countrycode);
        $user->setPhonenumber($phonenumber);
        $user->setProfilePicture("image");
        $user->setIsBanned(false);
        $user->setIsVerified(false);

        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return new JsonResponse("welcome to CALOMETRE");
        } catch (\Exception $e) {
            return new JsonResponse("error while creating account");
        }
    }

    /**
     * @Route("/mobile/user/login", name="mobile_user_login")
     */
    public function mobileLogin(Request $request)
    {
        $email = $request->query->get("email");
        $password = $request->query->get("password");

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);

        if ($user) {
            if (password_verify($password, $user->getPassword())) {
                $serializer = new Serializer([new ObjectNormalizer()]);
                $formatted = $serializer->normalize($user);
                return new JsonResponse($formatted);
            } else {
                return new Response("incorrect password");
            }
        } else {
            return new Response("no user with such email");
        }
    }

    /**
     * @Route("/mobile/user/showProfile", name="mobile_show_user_profile")
     */
    public function showUserProfileMobile(Request $request)
    {
        $id = $request->query->get('id');
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(["id" => $id]);

        $encoders = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);
        $json = $serializer->serialize($user, 'json', [
            'circular_reference_handler' => function ($object) {
                return $object->getId();
            }
        ]);

        $response = new Response($json);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/mobile/user/delete", name="user_mobile_delete")
     */
    public function deleteMobileUser(Request $request): Response
    {
        $id = $request->query->get('id');
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => $id]);
        try {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
            return new JsonResponse("user removed successfully");
        } catch (\Exception $e) {
            return new JsonResponse("error on " . $e->getMessage());
        }
    }

    /**
     * @Route("/mobile/editUser", name="editUserMobile")
     */
    public function editUserMobile(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        $id = $request->query->get('id');
        $user = $this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => $id]);

        $firstname = $request->query->get('firstname');
        $lastname = $request->query->get('lastname');
        $phonenumber = $request->query->get('phonenumber');
        $password = $request->query->get('password');

        $user->setFirstName($firstname);
        $user->setLastName($lastname);
        $user->setPhonenumber($phonenumber);
        $user->setPassword($passwordEncoder->encodePassword($user, $password));

        try {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return new JsonResponse("USER edited successfully");
        } catch (\Exception $e) {
            return new JsonResponse("error on " . $e->getMessage());
        }
    }
}