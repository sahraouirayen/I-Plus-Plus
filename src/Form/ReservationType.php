<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Repository\EvenementRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ReservationType extends AbstractType
{

    private $userRepository;
    private $user1Repository;

    public  function __construct(EvenementRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idUser')


            ->add('idEvenement', ChoiceType::class, [

                'multiple' => false,
                'choices' =>

                    $this->userRepository->createQueryBuilder('u')->select('u.idEvent  as id')->getQuery()->getResult(),
                'choice_label' => function ($choice) {
                    return $choice;
                },
            ])






            ->add('idReservation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
