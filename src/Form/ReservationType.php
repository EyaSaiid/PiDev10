<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Restaurant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           // ->add('id_restaurant')
           // ->add('id_client')
            ->add('nombre')
            ->add('date_reservation', DateType::class, [
                'widget' => 'choice',
                'format' => 'yyyy-MM-dd',
                'years' => range(("2022")+3, date("Y")),
                'data' => new \DateTime()
                ])
            ->add('restaurants',
                EntityType::class,[
                    'class' => Restaurant::class,
                    'choice_label' => 'nom_restaurant',

                ])
        ;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
