<?php

namespace App\Controller;

use App\Entity\ImageAct;
use App\Form\ImageActType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/image/act")
 */
class ImageActController extends AbstractController
{
    /**
     * @Route("/", name="image_act_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $imageActs = $entityManager
            ->getRepository(ImageAct::class)
            ->findAll();

        return $this->render('image_act/index.html.twig', [
            'image_acts' => $imageActs,
        ]);
    }

    /**
     * @Route("/new", name="image_act_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $imageAct = new ImageAct();
        $form = $this->createForm(ImageActType::class, $imageAct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($imageAct);
            $entityManager->flush();

            return $this->redirectToRoute('image_act_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('image_act/new.html.twig', [
            'image_act' => $imageAct,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idImage}", name="image_act_show", methods={"GET"})
     */
    public function show(ImageAct $imageAct): Response
    {
        return $this->render('image_act/show.html.twig', [
            'image_act' => $imageAct,
        ]);
    }

    /**
     * @Route("/{idImage}/edit", name="image_act_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ImageAct $imageAct, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ImageActType::class, $imageAct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('image_act_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('image_act/edit.html.twig', [
            'image_act' => $imageAct,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idImage}", name="image_act_delete", methods={"POST"})
     */
    public function delete(Request $request, ImageAct $imageAct, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$imageAct->getIdImage(), $request->request->get('_token'))) {
            $entityManager->remove($imageAct);
            $entityManager->flush();
        }

        return $this->redirectToRoute('image_act_index', [], Response::HTTP_SEE_OTHER);
    }
}
