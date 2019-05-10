<?php

namespace App\Controller\Admin;

use App\Entity\Secteur;
use App\Form\Admin\SecteurType;
use App\Repository\SecteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SecteurController extends AbstractController
{
    
    public function index(SecteurRepository $secteurRepository): Response
    {
        return $this->render('admin/secteur/index.html.twig', [
            'secteurs' => $secteurRepository->findAll(),
        ]);
    }

    
    public function new(Request $request): Response
    {
        $secteur = new Secteur();
        $form = $this->createForm(SecteurType::class, $secteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$secteur->setCreatedAt(new \DateTimeImmutable());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($secteur);
            $entityManager->flush();

            return $this->redirectToRoute('admin_secteur_index');
        }

        return $this->render('admin/secteur/new.html.twig', [
            'secteur' => $secteur,
            'form' => $form->createView(),
        ]);
    }

    public function show(Secteur $secteur): Response
    {
        return $this->render('admin/secteur/show.html.twig', [
            'secteur' => $secteur,
        ]);
    }

    
    public function edit(Request $request, Secteur $secteur): Response
    {
        $form = $this->createForm(SecteurType::class, $secteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$secteur->setUpdatedAt(new \DateTimeImmutable());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_secteur_index', [
                'id' => $secteur->getId(),
            ]);
        }

        return $this->render('admin/secteur/edit.html.twig', [
            'secteur' => $secteur,
            'form' => $form->createView(),
        ]);
    }

    public function delete(Request $request, Secteur $secteur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$secteur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($secteur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_secteur_index');
    }
}
