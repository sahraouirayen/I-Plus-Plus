<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopControllController extends AbstractController
{
    /**
     * @Route("/shop/controll", name="shop_controll")
     */
    public function index(): Response
    {
        return $this->render('shop_controll/index.html.twig', [
            'controller_name' => 'ShopControllController',
        ]);
    }
}
