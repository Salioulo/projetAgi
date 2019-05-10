<?php

namespace App\Form\Admin;

use App\Entity\Intervention;
use App\Entity\Technicien;
use App\Entity\Demande;
use App\Entity\Entreprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class InterventionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDebut')
            ->add('description', TextareaType::class, array(
                'required' => false,
                'attr' => ['class' => 'form-control', 'rows' => '5', 'cols' => '50']
            ))
            ->add('resultat')
            ->add('modePayment')
            ->add('modeTransaction')
            ->add('montant')
            ->add('typeIntervention')
            ->add('technicien', EntityType::class, [
                'class' => Technicien::class,
                'choice_label' => 'nom',
                'multiple' => true
            ])
            ->add('entreprise', EntityType::class, [
                'class' => Entreprise::class,
                'choice_label' => 'nom',
                'required' => false,
                'multiple' => false,
                'query_builder' => function (EntityRepository $er) {
                    $qb = $er->createQueryBuilder('e');
                return
                    $qb->andwhere($qb->expr()->eq('e.actif ', 1));   
                },
            ])
            ->add('demande', EntityType::class, [
                'class' => Demande::class,
                'choice_label' => 'nom',
                'required' => false,
                //'multiple' => true,
                'query_builder' => function (EntityRepository $er) {
                    $qb = $er->createQueryBuilder('d');
                return
                    $qb->andwhere($qb->expr()->eq('d.traiter ', 0));   
                },
            ])
            ->add('dateFin')
           // ->add('createdAt')
            //->add('updatedAt')
            //->add('createdBy')
            //->add('updatedBy')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Intervention::class,
        ]);
    }
}
