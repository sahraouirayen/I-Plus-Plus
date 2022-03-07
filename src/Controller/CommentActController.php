<?php

namespace App\Controller;

use App\Entity\CommentAct;
use App\Form\CommentActType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/comment/act")
 */
class CommentActController extends AbstractController
{
    /**
     * @Route("/", name="comment_act_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $commentActs = $entityManager
            ->getRepository(CommentAct::class)
            ->findAll();

        return $this->render('comment_act/index.html.twig', [
            'comment_acts' => $commentActs,
        ]);
    }

    /**
     * @Route("/new", name="comment_act_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commentAct = new CommentAct();
        $form = $this->createForm(CommentActType::class, $commentAct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commentAct);
            $entityManager->flush();

            return $this->redirectToRoute('comment_act_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('comment_act/new.html.twig', [
            'comment_act' => $commentAct,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idComment}", name="comment_act_show", methods={"GET"})
     */
    public function show(CommentAct $commentAct): Response
    {
        return $this->render('comment_act/show.html.twig', [
            'comment_act' => $commentAct,
        ]);
    }

    /**
     * @Route("/{idComment}/edit", name="comment_act_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, CommentAct $commentAct, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommentActType::class, $commentAct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('comment_act_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('comment_act/edit.html.twig', [
            'comment_act' => $commentAct,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idComment}", name="comment_act_delete", methods={"POST"})
     */
    public function delete(Request $request, CommentAct $commentAct, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commentAct->getIdComment(), $request->request->get('_token'))) {
            $entityManager->remove($commentAct);
            $entityManager->flush();
        }

        return $this->redirectToRoute('comment_act_index', [], Response::HTTP_SEE_OTHER);
    }
}
