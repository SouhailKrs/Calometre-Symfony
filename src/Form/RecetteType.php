<?php

namespace App\Form;

use App\Entity\Recette;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('name')
            ->add('regime', ChoiceType::class,
                [ 'choices'=> [

                    'Hyperprotéiné'=>'Hyperprotéiné','Protéiné'=>'Protéiné','Dissocié'=>'Dissocié','Hypocalorique'=>'Hypocalorique','Végétarien'=>'Végétarien','Anticellulite.'=>'Anticellulite.',
                    'Sans sel'=>'Sans sel','Hypoglucidique'=>'Hypoglucidique'
                ],])

            ->add('aliments')
            ->add('categorie', ChoiceType::class,
                [ 'choices'=> [

                    'Sucrée'=>'Sucrée','Acide'=>'Acide','Salé'=>'Salé','Amer'=>'Amer','Umami'=>'Umami'

                ],])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recette::class,
        ]);
    }
}
