<?php

namespace App\Controller;

use App\Entity\CategorieActualite;
use App\Form\CategorieActualiteType;
use App\Repository\CategorieActualiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/categorie/actualite")
 */
class CategorieActualiteController extends AbstractController
{
    /**
     * @Route("/", name="categorie_actualite_index", methods={"GET"})
     */
    public function index(CategorieActualiteRepository $categorieActualiteRepository): Response
    {
        return $this->render('categorie_actualite/index.html.twig', [
            'categorie_actualites' => $categorieActualiteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="categorie_actualite_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categorieActualite = new CategorieActualite();
        $form = $this->createForm(CategorieActualiteType::class, $categorieActualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categorieActualite);
            $entityManager->flush();

            return $this->redirectToRoute('categorie_actualite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categorie_actualite/new.html.twig', [
            'categorie_actualite' => $categorieActualite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idCatActualite}", name="categorie_actualite_show", methods={"GET"})
     */
    public function show(CategorieActualite $categorieActualite): Response
    {
        return $this->render('categorie_actualite/show.html.twig', [
            'categorie_actualite' => $categorieActualite,
        ]);
    }

    /**
     * @Route("/{idCatActualite}/edit", name="categorie_actualite_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, CategorieActualite $categorieActualite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CategorieActualiteType::class, $categorieActualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('categorie_actualite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categorie_actualite/edit.html.twig', [
            'categorie_actualite' => $categorieActualite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idCatActualite}", name="categorie_actualite_delete", methods={"POST"})
     */
    public function delete(Request $request, CategorieActualite $categorieActualite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorieActualite->getIdCatActualite(), $request->request->get('_token'))) {
            $entityManager->remove($categorieActualite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('categorie_actualite_index', [], Response::HTTP_SEE_OTHER);
    }
}
