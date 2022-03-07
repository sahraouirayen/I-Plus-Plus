<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopControlleController extends AbstractController
{
    /**
     * @Route("/shop/controlle", name="shop_controlle")
     */
    public function index(): Response
    {
        return $this->render('shop_controlle/index.html.twig', [
            'controller_name' => 'ShopControlleController',
        ]);
    }
}
