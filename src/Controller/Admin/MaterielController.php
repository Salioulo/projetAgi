<?php

namespace App\Controller\Admin;

use App\Entity\Materiel;
use App\Entity\Entreprise;
use App\Form\Admin\MaterielType;
use App\Repository\MaterielRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class MaterielController extends AbstractController
{
    
    public function index(MaterielRepository $materielRepository): Response
    {
        return $this->render('admin/materiel/index.html.twig', [
            'materiels' => $materielRepository->findAll(),
        ]);
    }

    
    public function new(Request $request): Response
    {
        $materiel = new Materiel();
        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $materiel->setCreatedAt(new \DateTimeImmutable());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($materiel);
            $entityManager->flush();

            return $this->redirectToRoute('admin_materiel_index');
        }

        return $this->render('admin/materiel/new.html.twig', [
            'materiel' => $materiel,
            'form' => $form->createView(),
        ]);
    }

    public function show(Materiel $materiel): Response
    {
        return $this->render('admin/materiel/show.html.twig', [
            'materiel' => $materiel,
        ]);
    }

    public function edit(Request $request, Materiel $materiel): Response
    {
        $form = $this->createForm(MaterielType::class, $materiel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $materiel->setCreatedAt(new \DateTimeImmutable());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_materiel_index', [
                'id' => $materiel->getId(),
            ]);
        }

        return $this->render('admin/materiel/edit.html.twig', [
            'materiel' => $materiel,
            'form' => $form->createView(),
        ]);
    }

    public function delete(Request $request, Materiel $materiel): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materiel->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($materiel);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_materiel_index');
    }
}
