<?php

namespace App\Form;

use App\Entity\Prod;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProdType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomProd')
            ->add('prixProd')
            ->add('statusProd')
            ->add('rateProd')
            ->add('descriptionProd')
            ->add('categorieProd')
            ->add('imgProd',fileType::class, array('data_class' => null))
            ->add('idPromo')

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Prod::class,
        ]);
    }
}
