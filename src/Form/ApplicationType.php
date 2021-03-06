<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;

class ApplicationType extends AbstractType
{


    /**
     * Permet d'avoir la configuration de base d'un champ ! 
     * 
     * @param string $label
     * @param string $placeholder
     * 
     * @return array 
     */
    protected function getConfiguration($label, $placeholder)
    {

        return [
            'label' => $label,
            'attr' => [
                'placeholder' => $placeholder
            ]

        ];
    }
}