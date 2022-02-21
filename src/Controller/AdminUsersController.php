<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminUsersType;
use App\Form\ModifyPassType;
use App\Form\ModifyUserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * Require ROLE_ADMIN for all the actions of this controller
 *
 * @IsGranted("ROLE_ADMIN")
 */

class AdminUsersController extends AbstractController
{
    /**
     * @Route("/admin/users", name="admin_users")
     */
    public function index(): Response
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('admin_users/index.html.twig', [
            "users"=>$users
        ]);
    }
    /**
     * @Route("/admin/users/{id}", name="admin_users_modify")
     */
    public function modifier($id , Request $request): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $form=$this->createForm(AdminUsersType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $new_role = $form->get('roles')->getData();
            $user->setRoles($new_role);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('admin_users');
        }
        return $this->render('admin_users/modifier-user.html.twig', [
            "form"=>$form->createView()
        ]);
    }
    /**
     * @Route("/admin/users/delete/{id}", name="deleteUser")
     */
    public function deleteUser($id)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute("admin_users");
    }
    /**
     * @Route("/admin/compte/modifier", name="modifier_admin")
     */
    public function modifierAdmin(Request $request): Response
    {
        if ($this->getUser()){
            $em=$this->getDoctrine()->getManager();
            $form=$this->createForm(ModifyUserType::class,$this->getUser());
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($this->getUser());
                $em->flush();
                return $this->redirectToRoute('admin_users');
            }

            return $this->render('admin_users/admin-modifier.html.twig', [
                'form' => $form->createView(),
            ]);
        }
        return $this->redirectToRoute("app_login");

    }
    /**
     * @Route("/admin/compte/modifier/mdp", name="compte_password_admin")
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
                return $this->redirectToRoute('admin_users');


            }else { $notification= "votre mot de passe actuel n'est pas le bon"; }


        }

        return $this->render('admin_users/admin-modifier-pwd.html.twig', [
            'form' => $form->createView() ,
            'notification' => $notification
        ]);
    }

}
