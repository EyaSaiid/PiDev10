<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\ProduitPlat;
use App\Entity\Restaurant;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitPlatType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
//            ->add('id_categorie')
            ->add('nom_produitplat')
            ->add('desc_produitplat')
            ->add('prix')
            /*->add('restaurants',
                EntityType::class,[
                    'class' => Restaurant::class,
                    'choice_label' => 'nom_restaurant',
                ])*/
            ->add('categories',
                EntityType::class,[
                    'class' => Categorie::class,
                    'choice_label' => 'nom_categorie',
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ProduitPlat::class,
        ]);
    }
}
