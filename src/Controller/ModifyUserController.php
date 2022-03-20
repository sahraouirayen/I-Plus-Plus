<?php

namespace App\Controller;

use App\Form\InscriType;
use App\Form\ModifyPassType;
use App\Form\ModifyUserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ModifyUserController extends AbstractController
{
    /**
     * @Route("/user/compte", name="compte_user")
     */
    public function index(): Response
    {
        if ($this->getUser()){
            return $this->render('modify_user/index.html.twig', [
                'user' => $this->getUser(),
            ]);
        }
        return $this->redirectToRoute("app_login");

    }
    /**
     * @Route("/user/compte/modifier", name="modifier_user")
     */
    public function modifier(Request $request): Response
    {
        if ($this->getUser()){
            $em=$this->getDoctrine()->getManager();
            $form=$this->createForm(ModifyUserType::class,$this->getUser());
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($this->getUser());
                $em->flush();
                return $this->redirectToRoute('compte_user');
            }

            return $this->render('modify_user/modify-user.html.twig', [
                'form' => $form->createView(),
            ]);
        }
        return $this->redirectToRoute("app_login");

    }
    /**
     * @Route("/user/compte/modifier/mdp", name="compte_password")
     */
    public function modifPass(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $notification = null;
        $user= $this->getUser();
        $entityManager=$this->getDoctrine()->getManager();
        $form = $this->createForm(ModifyPassType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid())
        {
            $old_password = $form->get('old_password')->getData();
            if($encoder->isPasswordValid($user,$old_password)){
                $new_password = $form->get('new_password')->getData();
                $password = $encoder->encodePassword($user,$new_password);
                $user->setPassword($password);
                $entityManager->persist($user);
                $entityManager->flush();
                $notification = "votre mot de passe a bien été mise à jour";
                return $this->redirectToRoute('compte_user');


            }else { $notification= "votre mot de passe actuel n'est pas le bon"; }


        }

        return $this->render('modify_user/modify-password.html.twig', [
            'form' => $form->createView() ,
            'notification' => $notification
        ]);
    }

}
