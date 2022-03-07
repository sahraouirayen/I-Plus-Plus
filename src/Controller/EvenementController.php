<?php

namespace App\Controller;

use App\Entity\Evenement;

use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\EvenementType;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/evenement")
 */
class EvenementController extends AbstractController
{
    /**
     * @Route("/", name="evenement_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager,Request $request): Response
    {


        $requestsql = $this->getDoctrine()->getRepository(Evenement::class)->mise_a_jour();


        $evenements = $entityManager
            ->getRepository(Evenement::class)
            ->findAll();
            if($request->isMethod("GET")){
                $search = $request->get("search");
            
                if($search!= ""){
                    $evenements = $this->getDoctrine()->getRepository(Evenement::class)->find($search);
                }
            }

        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }



    /**
     * @Route("/affiche", name="affichage", methods={"GET"})
     */
    public function affichage (EntityManagerInterface $entityManager,Request $request): Response
    {
        $evenements = $entityManager
            ->getRepository(Evenement::class)
            ->findAll();
            if($request->isMethod("GET")){
                $search = $request->get("search");
            
                if($search!= ""){
                    $evenements = $this->getDoctrine()->getRepository(Evenement::class)->find($search);
                }
            }

        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }

























    /**
     * @Route("/new", name="evenement_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($evenement);
            $entityManager->flush();

            return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idEvent}", name="evenement_show", methods={"GET"})
     */
    public function show(Evenement $evenement): Response
    {
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
        ]);
    }

    /**
     * @Route("/{idEvent}/edit", name="evenement_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idEvent}", name="evenement_delete", methods={"POST"})
     */
    public function delete(Request $request, Evenement $evenement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getIdEvent(), $request->request->get('_token'))) {
            $entityManager->remove($evenement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('evenement_index', [], Response::HTTP_SEE_OTHER);
    }























    /**
     * @Route("/e/statkarim", name="statkarim", methods={"GET"})
     */
    public function reclamation_stat(EvenementRepository $evenementRepository): Response
    {
        $nbrs[]=Array();

        $e1=$evenementRepository->find_Nb_Rec_Par_Status("Duo");
        dump($e1);
        $nbrs[]=$e1[0][1];


        $e2=$evenementRepository->find_Nb_Rec_Par_Status("Solo");
        dump($e2);
        $nbrs[]=$e2[0][1];

        /*
                $e3=$activiteRepository->find_Nb_Rec_Par_Status("Diffence");
                dump($e3);
                $nbrs[]=$e3[0][1];
        */

        dump($nbrs);
        reset($nbrs);
        dump(reset($nbrs));
        $key = key($nbrs);
        dump($key);
        dump($nbrs[$key]);

        unset($nbrs[$key]);

        $nbrss=array_values($nbrs);
        dump(json_encode($nbrss));

        return $this->render('evenement/statevenement.html.twig', [
            'nbr' => json_encode($nbrss),
        ]);
    }









    /**
     * @Route("/r/search_event", name="search_event", methods={"GET"})
     */
    public function search_event(Request $request,NormalizerInterface $Normalizer,EvenementRepository $evenementRepository ): Response
    {

        $requestString=$request->get('searchValue');
        $requestString3=$request->get('orderid');
        //dump($requestString);
        // dump($requestString2);
        $user = $evenementRepository->findevent($requestString,$requestString3);
        //dump($Hotel);
        $jsoncontentc =$Normalizer->normalize($user,'json',['groups'=>'posts:read']);
        //  dump($jsoncontentc);
        $jsonc=json_encode($jsoncontentc);
        //   dump($jsonc);
        if(  $jsonc == "[]" ) { return new Response(null); }
        else{ return new Response($jsonc); }

    }












}
