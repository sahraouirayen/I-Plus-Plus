<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\PublisherInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index(Request $request,UserPasswordEncoderInterface $encoder,PublisherInterface $publisher): Response
    {
        $user= new User();
        $em=$this->getDoctrine()->getManager();
        $form=$this->createForm(InscriType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $user = $form->getData();
            $password = $encoder->encodePassword($user,$user->getPassword());
            $user->setPassword($password);
            $update = new Update(
                "/home",
                json_encode([$form->get("nom")->getData(),$form->get("email")->getData()])

            );

            $publisher($update);
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_login');

        }

        return $this->render('user/index.html.twig',
            ['form' => $form->createView() ]

        );

    }
    /**
     * @Route("/notfound", name="not_found")
     */
    public function notfound(): Response
    {
        return $this->render('user/notfound.html.twig', [
            'controller_name' => 'NewController',
        ]);
    }
    /**
     * @Route("/push",name="push")
     */
    public function push(Request $request,PublisherInterface $publisher){

        $update = new Update(
            "/home",
            json_encode(['message'=>'Hello World'])
        );
        $publisher($update);
        return $this->json("DOne");
    }
    /**
     * @Route("/notif",name="notif")
     */
    public function notif(): Response
    {
        return $this->render('admin_users/notif.html.twig', [
            'controller_name' => 'NewController',
        ]);
    }

}
