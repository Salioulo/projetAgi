<?php

namespace App\Form\Admin;

use App\Entity\Technicien;
use App\Entity\Secteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TechnicienType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cni')
            ->add('nom')
            ->add('prenom')
            ->add('telephone')
            ->add('email')
            ->add('adresse')
            ->add('specialite')
            ->add('niveau')
            ->add('disponibilite')
            ->add('actif')
            ->add('secteur', EntityType::class, [
                'class' => Secteur::class,
                'choice_label' => 'libelle'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Technicien::class,
        ]);
    }
}
