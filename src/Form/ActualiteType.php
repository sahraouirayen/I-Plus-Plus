<?php

namespace App\Form;

use App\Entity\Actualite;
use App\Entity\CategorieActualite;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ActualiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titreActualite')
            ->add('description')
            ->add('categorie',EntityType::class,['class'=>CategorieActualite::class,'choice_label'=>'nomCatActualite','multiple'=>false,'expanded'=>true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Actualite::class,
        ]);
    }
}
