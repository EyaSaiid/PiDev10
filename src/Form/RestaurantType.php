<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\ProduitPlat;
use App\Entity\Restaurant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\ChoiceList\ArrayChoiceList;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class RestaurantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_restaurant')
            ->add('desc_restaurant')
            ->add('capacite')
            ->add('num_tel')
            ->add('adresse')
            ->add('specialite',ChoiceType::class, [
                'choices'  => [
                    'Tunisien' => 'Tunisien',
                    'Chinois' => 'Chinois',
                    'thailandais' => 'thailandais',
                    'Italien' => 'Italien',
                    'Libanais' => 'Libanais' ,
                ],
            ])
//            ->add('produitplats')

               /* ->add('produitplats', ChoiceType::class, [
                    'class' => ProduitPlat::class,
                    'group_by' => ChoiceList::groupBy($this, 'id_categorie'),
                ])*/


            ->add('produitplats',
                EntityType::class,[
                    'class' => ProduitPlat::class,
                    'choice_label' => 'nom_produitplat',
                    'group_by' => function(ProduitPlat $pdt) {
                        return $pdt->getCategories()->getNomCategorie();
                    },
                    'expanded'=>'true',
                    'multiple'=>'true',
                ])


        ;


    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Restaurant::class,
        ]);
    }
}
