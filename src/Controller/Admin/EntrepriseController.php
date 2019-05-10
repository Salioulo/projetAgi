<?php

namespace App\Controller\Admin;

use App\Entity\Entreprise;
use App\Entity\Secteur;
use App\Form\Admin\EntrepriseType;
use App\Repository\EntrepriseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class EntrepriseController extends AbstractController
{
    
    public function index(EntrepriseRepository $entrepriseRepository): Response
    {
        return $this->render('admin/entreprise/index.html.twig', [
            'entreprises' => $entrepriseRepository->findAll(),
        ]);
    }

    public function new(Request $request): Response
    {
        $entreprise = new Entreprise();
        $form = $this->createForm(EntrepriseType::class, $entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entreprise->setCreatedAt(new \DateTimeImmutable());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($entreprise);
            $entityManager->flush();

            return $this->redirectToRoute('admin_entreprise_index');
        }

        return $this->render('admin/entreprise/new.html.twig', [
            'entreprise' => $entreprise,
            'form' => $form->createView(),
        ]);
    }

    public function show(Entreprise $entreprise): Response
    {
        return $this->render('admin/entreprise/show.html.twig', [
            'entreprise' => $entreprise,
        ]);
    }

    public function edit(Request $request, Entreprise $entreprise): Response
    {
        $form = $this->createForm(EntrepriseType::class, $entreprise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entreprise->setCreatedAt(new \DateTimeImmutable());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_entreprise_index', [
                'id' => $entreprise->getId(),
            ]);
        }

        return $this->render('admin/entreprise/edit.html.twig', [
            'entreprise' => $entreprise,
            'form' => $form->createView(),
        ]);
    }

    public function delete(Request $request, Entreprise $entreprise): Response
    {
        if ($this->isCsrfTokenValid('delete'.$entreprise->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($entreprise);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_entreprise_index');
    }
}
