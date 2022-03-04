<?php

namespace App\Form;

use App\Entity\Livraison;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditLivraisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            //->add('Prenom')
            //->add('Nom')
            //->add('adresse')
            //->add('tel')
            //->add('email')
            ->add('etat', ChoiceType::class,
                array(
                    'choices' => array(
                        'Non livré'    =>'Non livré',
                        'En cours' => 'En cours',
                        'Livré' => 'Livré',
                        'Annulé' => 'Annulé',

            )))
            //->add('commande')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livraison::class,
        ]);
    }
}
