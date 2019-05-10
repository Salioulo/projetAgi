<?php

namespace App\Form\Admin;

use App\Entity\Entreprise;
use App\Entity\Secteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;

class EntrepriseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ninea')
            ->add('nom')
            ->add('raisonSociale')
            ->add('fixe')
            ->add('mobile')
            ->add('email')
            ->add('adresse')
            ->add('typeEntreprise', ChoiceType::class, [
                'choices' => [
                    'Abonner' => 'Abonner', 
                    'Prestataire' => 'Prestataire'
                ],
            ])
            ->add('disponibilite')
            ->add('actif')
            ->add('secteur', EntityType::class, [
                'class' => Secteur::class,
                'choice_label' => 'libelle',
                'multiple' => true,
                'query_builder' => function (EntityRepository $er) {
                    $qb = $er->createQueryBuilder('s');
                return
                    $qb->andwhere($qb->expr()->eq('s.actif ', 1));   
                },
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Entreprise::class,
        ]);
    }
}
