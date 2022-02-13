<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewControlleController extends AbstractController
{
    /**
     * @Route("/new/controlle", name="new_controlle")
     */
    public function index(): Response
    {
        return $this->render('new_controlle/index.html.twig', [
            'controller_name' => 'NewControlleController',
        ]);
    }
}
