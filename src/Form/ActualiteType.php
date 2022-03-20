<?php

namespace App\Form;

use App\Entity\Actualite;
use App\Entity\CategorieActualite;
use App\Entity\CommentAct;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;




class ActualiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titreActualite')
            ->add('description')
            ->add('etendu')

            ->add('imageAct', FileType::class,['label'=>false,'multiple'=>true,'mapped'=>false,'required'=>false])

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