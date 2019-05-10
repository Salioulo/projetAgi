<?php

namespace App\Controller\Admin;

use App\Entity\Technicien;
use App\Form\Admin\TechnicienType;
use App\Repository\TechnicienRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TechnicienController extends AbstractController
{
    
    public function index(TechnicienRepository $technicienRepository): Response
    {
        return $this->render('admin/technicien/index.html.twig', [
            'techniciens' => $technicienRepository->findAll(),
        ]);
    }

    public function new(Request $request): Response
    {
        $technicien = new Technicien();
        $form = $this->createForm(TechnicienType::class, $technicien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $technicien->setCreatedAt(new \DateTimeImmutable());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($technicien);
            $entityManager->flush();

            return $this->redirectToRoute('admin_technicien_index');
        }

        return $this->render('admin/technicien/new.html.twig', [
            'technicien' => $technicien,
            'form' => $form->createView(),
        ]);
    }

    public function show(Technicien $technicien): Response
    {
        return $this->render('admin/technicien/show.html.twig', [
            'technicien' => $technicien,
        ]);
    }

    public function edit(Request $request, Technicien $technicien): Response
    {
        $form = $this->createForm(TechnicienType::class, $technicien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $technicien->setUpdatedAt(new \DateTimeImmutable());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_technicien_index', [
                'id' => $technicien->getId(),
            ]);
        }

        return $this->render('admin/technicien/edit.html.twig', [
            'technicien' => $technicien,
            'form' => $form->createView(),
        ]);
    }

    public function delete(Request $request, Technicien $technicien): Response
    {
        if ($this->isCsrfTokenValid('delete'.$technicien->getId(), $request->request->get('_token'))) {
            $technicien->setDeletedAt(new \DateTimeImmutable());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($technicien);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_technicien_index');
    }
}
