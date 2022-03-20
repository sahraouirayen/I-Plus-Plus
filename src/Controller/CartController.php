<?php

namespace App\Controller;

use App\Entity\Prod;
use App\Repository\ProdRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * @Route("/cart", name="cart_")
 */
class CartController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(SessionInterface $session, ProdRepository $produitRepository)
    {
        $panier = $session->get("panier", []);


        $dataPanier = [];
        $total = 0;


        foreach ($panier as $id => $quantite) {
            $produit = $produitRepository->find($id);
            $dataPanier[] = [
                "produit" => $produit,
                "quantite" => $quantite
            ];
            $total += $produit->getPrixProd()*$quantite;


        }
        return $this->render('cart/index.html.twig', compact("dataPanier", "total"));
    }

    /**
     * @Route("/add/{id}", name="add")
     */
    public function add(Prod $produit,Request $request,SessionInterface $session)
    {
        $panier = $session->get("panier", []);
        $id = $produit->getId();

        if (!empty($panier[$id])) {
            if($produit->getQuantite()>$panier[$id]){
                $panier[$id]=$panier[$id]+1;
            }else{
                //afficher erreur
            }

            //dump($panier[$id]).die();
        } else {
            $panier[$id] = 1;
        }
        $session->set("panier", $panier);
        return $this->redirectToRoute("cart_index");

    }

    /**
     * @Route("/remove/{id}", name="remove")
     */
    public function remove(Prod $produit, SessionInterface $session)
    {
        $panier = $session->get("panier", []);
        $id = $produit->getId();

        if (!empty($panier[$id])) {
            if ($panier[$id] > 1) {
                $panier[$id]--;
            } else {
                unset($panier[$id]);
            }
        } else {
            $panier[$id] = 1;
        }

        $session->set("panier", $panier);

        return $this->redirectToRoute("cart_index");

    }
    /**
     * @Route("/delete/{id}", name="delete")
     */
    public function delete(Prod $produit, SessionInterface $session)
    {
        $panier = $session->get("panier", []);
        $id = $produit->getId();

        if (!empty($panier[$id])) {

            unset($panier[$id]);
        }


        $session->set("panier", $panier);

        return $this->redirectToRoute("cart_index");
    }

    /**
     * @Route("/delete", name="delete_all")
     */
    public function deleteAll( SessionInterface $session)
    {
        $session->set("panier",[]);

        return $this->redirectToRoute("cart_index");
    }

}
