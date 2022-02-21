<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Livraison;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class LivraisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Prenom')
            ->add('Nom')
            ->add('adresse')
            ->add('tel')
            ->add('email',EmailType::class)
            //->add('etat')
            ->add('commande' , EntityType::class, [
                'class'=>Commande::class,
                'choice_label'=>'id'
            ])
        ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livraison::class,
        ]);
    }
}
