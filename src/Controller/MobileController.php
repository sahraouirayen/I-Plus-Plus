<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/mobile", name="mobile")
 */
class MobileController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('mobile/index.html.twig', [
            'controller_name' => 'MobileController',
        ]);
    }
    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription(Request $request , NormalizerInterface $normalizer,UserPasswordEncoderInterface $encoder): Response
    {
        $nom = $request->get('nom');
        $prenom=$request->get('prenom');
        $email=$request->get('email');
        $numTel=$request->get('numTel');
        $user = new User();
        $password = $encoder->encodePassword($user,$request->get('pass'));
        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setNumTel($numTel);
        $em=$this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        $json = $normalizer->normalize($user,'json');
        return new JsonResponse($json);
    }
    /**
     * @Route("/connexion",name="connexion")
     */
    public function login(Request $request,NormalizerInterface $normalizer,UserPasswordEncoderInterface $passwordEncoder):Response{
        $email = $request->get('email');
        $user = $this->getDoctrine()->getRepository(User::class)->findOneByEmail($email);
        $pass=$request->get("password");
        if ($passwordEncoder->isPasswordValid($user[0],$pass)){
            $json = $normalizer->normalize($user,'json');
            return new JsonResponse($json);
        }elseif (!$passwordEncoder->isPasswordValid($user[0],$pass)){
            return new Response("echec");

        }
        return new Response("OK");




    }
}
