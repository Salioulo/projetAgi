<?php

namespace App\Controller\Admin;

use App\Entity\Intervention;
use App\Entity\Technicien;
use App\Entity\Entreprise;
use App\Entity\Demande;
use App\Form\Admin\InterventionType;
use App\Repository\InterventionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class InterventionController extends AbstractController
{
   
    public function index(InterventionRepository $interventionRepository): Response
    {
        return $this->render('admin/intervention/index.html.twig', [
            'interventions' => $interventionRepository->findAll(),
        ]);
    }

    public function new(Request $request): Response
    {
        $intervention = new Intervention();
        $form = $this->createForm(InterventionType::class, $intervention);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($intervention);
            $entityManager->flush();

            return $this->redirectToRoute('admin_intervention_index');
        }

        return $this->render('admin/intervention/new.html.twig', [
            'intervention' => $intervention,
            'form' => $form->createView(),
        ]);
    }

    public function show(Intervention $intervention): Response
    {
        return $this->render('admin/intervention/show.html.twig', [
            'intervention' => $intervention,
        ]);
    }

    public function edit(Request $request, Intervention $intervention): Response
    {
        $form = $this->createForm(InterventionType::class, $intervention);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_intervention_index', [
                'id' => $intervention->getId(),
            ]);
        }

        return $this->render('admin/intervention/edit.html.twig', [
            'intervention' => $intervention,
            'form' => $form->createView(),
        ]);
    }

    public function delete(Request $request, Intervention $intervention): Response
    {
        if ($this->isCsrfTokenValid('delete'.$intervention->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($intervention);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_intervention_index');
    }
}
