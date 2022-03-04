<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\File;
class ProduitType extends AbstractType

{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomProduit')
            ->add('descriptionProduit')
            ->add('prixProduit')
            ->add('quantiteProduit')
            ->add('Categorie', EntityType::class,[
                'class'=>Categorie::class,
                'choice_label'=>'Libelle',

            ])
            ->add('images', FileType::class, [
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false
            ])

           ->add('photo', FileType::class, array('data_class'=>null));
                  //'multiple' => true,
                    //'required' => false,'constraints' => [
                    //new All([
                      //  'constraints' => [
                        //    new File([
                          //      'maxSize' => '1024k',
                            //    'mimeTypesMessage' => 'Please upload a valid PDF document',
                              //  'mimeTypes' => [
                                //    'application/pdf',
                                  //  'application/x-pdf'
                                //]
                            //]),
                        //],
                    //]),
                //]

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
