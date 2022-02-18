<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminUsersType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

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

}
