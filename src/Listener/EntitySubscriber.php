<?php

namespace App\Listener;

use App\Entity\Secteur;
use App\Entity\Demande;
use App\Entity\Materiel;
use App\Entity\Entreprise;
use App\Entity\Technicien;
use App\Entity\Intervention;
use Doctrine\ORM\Events;
use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class EntitySubscriber implements EventSubscriber
{

    public function getSubscribedEvents()
    {
        return array(
            Events::preUpdate,
            Events::prePersist,
        );
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if(
            $entity instanceof Secteur ||
            $entity instanceof Materiel ||
            $entity instanceof Entreprise ||
            $entity instanceof Technichien ||
            $entity instanceof Intervention
           
            )

        {
            $entity->setCreatedAt(new \DateTimeImmutable());
            $entity->setUpdatedAt(new \DateTimeImmutable());
        }
        if(($entity instanceof Demande))
        {
            $entity->setTraiter(0);
        }
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();

        if(
            $entity instanceof Secteur ||
            $entity instanceof Materiel ||
            $entity instanceof Entreprise ||
            $entity instanceof Technichien ||
            $entity instanceof Intervention
           
            )

        {
            $entity->setUpdatedAt(new \DateTimeImmutable());
        }

    }
}