<?php

namespace App\Controller;

use App\Entity\Prod;
use App\Entity\Promo;
use App\Form\ProdType;
use App\Form\PromoType;
use App\Repository\ProdRepository;
use App\Repository\PromoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class PromoController extends AbstractController
{
    /**
     * @Route("/promo", name="promo")
     */
    public function index(): Response
    {
        return $this->render('promo/index.html.twig', [
            'controller_name' => 'PromoController',
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/admin/ajouterPromo",name="ajouterPromo")
     */
    public function AjouterPromotion(Request $request){
        $Promotion = new Promo();
        $form=$this->createForm(PromoType::class,$Promotion);
        $form->add('ajouter',submitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Promotion);
            $em->flush();
            return $this->redirect($request->getRequestUri());

        }
        return $this->render("promo/ajouterPromo.html.twig",['form'=>$form->createView()]);
    }

    /**
     * @param PromoRepository $repository
     * @return Response
     * @Route ("/admin/afficherPromo",name="afficherPromo")
     */

    public function AfficherPromotion(PromoRepository $repository){
        $Promotion=$repository->findAll();
        return $this->render("promo/tablePromo.html.twig",['tour'=>$Promotion]);

    }

    /**
     * @param $id
     * @param PromoRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/admin/delete/{id}",name="delete")
     */
    public function Delete($id,PromoRepository $repository){
        $Promotion=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Promotion);
        $em->flush();
        return $this->redirectToRoute('afficherPromo');
    }

    /**
     * @param $id
     * @param PromoRepository $repository
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/admin/update/{id}",name="update")
     */
    public function Update($id,PromoRepository $repository,Request $request){
        $Promotion=$repository->find($id);
        $form=$this->createForm(PromoType::class,$Promotion);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficherPromo');
        }
        return $this->render('promo/updatePromo.html.twig',['formulaire'=>$form->createView()]);
    }

    /**
     * @Route("/admrecherchelivr2", name="admrecherchelivr2")
     */
    public function searchLivAction(Request $request,PromoRepository $repository){
        $em = $this->getDoctrine()->getManager();


        $searchParameter = $request->get('Promo');
        if(strlen($searchParameter)==0)
            $entities = $em->getRepository(Promo::class)->findAll();
        else


            $entities = $repository->findByExpField($searchParameter);



        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($entities, 'json',['ignored_attributes'=>['prods']

        ]);

        $response = new Response(json_encode($jsonContent));
        $response->headers->set('Content-Type', 'application/json; charset=utf-8');

        return $response;
    }
}
