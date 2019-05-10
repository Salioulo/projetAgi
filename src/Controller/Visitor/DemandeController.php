<?php

namespace App\Controller\Visitor;

use App\Entity\Demande;
use App\Form\Visitor\DemandeType;
use App\Repository\DemandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DemandeController extends AbstractController
{
  
    public function index(DemandeRepository $demandeRepository): Response
    {
        return $this->render('visitor/demande/index.html.twig', [
            'demandes' => $demandeRepository->findAll(),
        ]);
    }

    public function new(Request $request): Response
    {
        $demande = new Demande();
        $form = $this->createForm(DemandeType::class, $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($demande);
            $entityManager->flush();

            return $this->redirectToRoute('demande_index');
        }

        return $this->render('visitor/demande/new.html.twig', [
            'demande' => $demande,
            'form' => $form->createView(),
        ]);
    }

    public function show(Demande $demande): Response
    {
        return $this->render('visitor/demande/show.html.twig', [
            'demande' => $demande,
        ]);
    }

    public function edit(Request $request, Demande $demande): Response
    {
        $form = $this->createForm(DemandeType::class, $demande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('demande_index', [
                'id' => $demande->getId(),
            ]);
        }

        return $this->render('visitor/demande/edit.html.twig', [
            'demande' => $demande,
            'form' => $form->createView(),
        ]);
    }

    public function delete(Request $request, Demande $demande): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demande->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($demande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('demande_index');
    }
}
