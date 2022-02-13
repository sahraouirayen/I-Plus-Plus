<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index(Request $request,UserPasswordEncoderInterface $encoder): Response
    {
        $user= new User();
        $em=$this->getDoctrine()->getManager();
        $form=$this->createForm(InscriType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $user = $form->getData();
            $password = $encoder->encodePassword($user,$user->getPassword());
            $user->setPassword($password);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('app_login');

        }

        return $this->render('user/index.html.twig',
            ['form' => $form->createView() ]

        );

    }
}
