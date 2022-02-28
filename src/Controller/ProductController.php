<?php

namespace App\Controller;
use App\Entity\Images;
use App\Entity\Product;
use App\Form\Product1Type;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;





/**
 * @Route("/product")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/recherche_product", name="ajaxsearch")
     */
    public function searchAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $product = $em->getRepository(Product::class)->findEntitiesByString($requestString);
        if(!$product)
        {
            $result['product']['error']="product introuvable :( ";

        }else{
            $result['product']=$this->getRealEntities($product);
            
            
        }
        return new Response(json_encode($result));

    }
    public function getRealEntities($product){
        foreach ($product as $product){
            $realEntities[$product->getId()] = [$product->getName(), $product->getPrice(), $product->getDescription(), $product->getCategory(), $product->getQuantity(), $product->getImages()];
        }
        return $realEntities;
    }

     
    /**
     * @Route("/", name="product_index", methods={"GET"})
     */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('product/indextest.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="product_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $product = new Product();
        $form = $this->createForm(Product1Type::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $images = $form->get('images')->getData();

            
            foreach($images as $image){
                
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );

                
                $img = new Images();
                $img->setName($fichier);
                $product->addImage($img);

            }

            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('product_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('product/new.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }
     
    /**
     * @Route("/{id}", name="product_show", methods={"GET"})
     */
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="product_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Product1Type::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            
             $images = $form->get('images')->getData();

            
             foreach($images as $image){
                
                 $fichier = md5(uniqid()) . '.' . $image->guessExtension();
 
                
                 $image->move(
                     $this->getParameter('images_directory'),
                     $fichier
                 );
 
                 
                 $img = new Images();
                 $img->setName($fichier);
                 $product->addImage($img);
             }
 
             $this->getDoctrine()->getManager()->flush();
 
             return $this->redirectToRoute('product_index', [], Response::HTTP_SEE_OTHER);
        }
            

        return $this->render('product/edit.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }
    
    

    /**
     * @Route("/{id}", name="product_delete", methods={"POST"})
     */
    public function delete(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $entityManager->remove($product);
            $entityManager->flush();
        }

        return $this->redirectToRoute('product_index', [], Response::HTTP_SEE_OTHER);
    }
    
   /**
     * @Route("/delete/image/{id}", name="product_delete_image", methods={"DELETE"})
     */
    public function deleteImage(Images $image, Request $request ){
        
        $data = json_decode($request->getContent(), true);

      
        if($this->isCsrfTokenValid('delete'.$image->getId(), $data['_token'])){
            
            $nom = $image->getName();
            
            unlink($this->getParameter('images_directory').'/'.$nom);

            
            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();

            
            return new JsonResponse(['success' => 1]);
        }else{
            return new JsonResponse(['error' => 'Token Invalide'], 400);
            
        }
    }
   /**
     * @Route("/front/products", name="product_front_index", methods={"GET"})
     */
    public function indexFront(ProductRepository $productRepository): Response
    {
        return $this->render('product/indexFront.html.twig', [
            'products' => $productRepository->findAll(),
            
        ]);
    }
    /**
     * @Route("/front/products/{id}", name="product_front_show", methods={"GET"})
     */
    public function showFront(Product $product): Response
    {
        return $this->render('product/showFront.html.twig', [
            'product' => $product,
        ]);
    }
  
    
}


