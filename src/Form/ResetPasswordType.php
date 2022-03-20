<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResetPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('new_password',RepeatedType::class ,[
                'type'=> PasswordType::class,
                'invalid_message' => 'le mot de passe et la confirmation doivent etre identique',
                'label'=>'Votre mot de passe' ,
                'mapped' => false ,
                'required'=> true,

                'first_options'=>
                    [
                        'label' => 'Nouveau mot de passe',
                        'attr' =>[
                            'placeholder'=>'Votre nouveau mot de passe'

                        ]
                    ],
                'second_options'=> [
                    'label' => 'Confirmer vote de passe',
                    'attr' =>[
                        'placeholder'=>'Merci de confirmer votre nouveau mot de passe'
                    ]
                ]
            ])
            ->add("Valider",SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
