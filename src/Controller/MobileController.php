<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ForgotPasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
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
       if($user){
           if ($passwordEncoder->isPasswordValid($user[0],$pass)){
               $json = $normalizer->normalize($user,'json');
               return new JsonResponse($json);
           }
       }
        $json1 = $normalizer->normalize("null",'json');
        return new JsonResponse("null");

    }
    /**
     * @Route("/give-user",name="give_user")
     */
    public function giveuser(Request $request,NormalizerInterface $normalizer):Response{
        $id = $request->get('id');
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        if($user){

                $json = $normalizer->normalize($user,'json');
                return new JsonResponse($json);

        }
        $json1 = $normalizer->normalize("null",'json');
        return new JsonResponse("null");

    }
    /**
     * @Route("/edit-user",name="edit_user")
     */
    public function edituser(Request $request,NormalizerInterface $normalizer):Response{
        $id = $request->get('id');
        $entityManager = $this->getDoctrine()->getManager();

        $user = $this->getDoctrine()->getRepository(User::class)->find($id);


        if($user){
            $nom=$request->get("nom");
            $prenom=$request->get("prenom");
            $email=$request->get("email");
            $adresse=$request->get("adresse");
            $numTel=$request->get("numTel");
            $user->setNom($nom);
            $user->setPrenom($prenom);
            $user->setEmail($email);
            $user->setAdresse($adresse);
            $user->setNumTel($numTel);
            $entityManager->persist($user);
            $entityManager->flush();

            $json = $normalizer->normalize($user,'json');
            return new JsonResponse($json);

        }
        $json1 = $normalizer->normalize("null",'json');
        return new JsonResponse("null");

    }
    /**
     * @Route("/motpasseoublie",name="mobile_mot_de_passe_oublié")
     */
    public function forgottenPassword(Request $request,NormalizerInterface $normalizer, UserPasswordEncoderInterface $encoder, \Swift_Mailer $mailer, TokenGeneratorInterface $tokenGenerator): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $email = $request->get('email');
        $user = $this->getDoctrine()->getRepository(User::class)->findOneByEmail($email);
        $token = $tokenGenerator->generateToken();



                try {
                    $user[0]->setResetToken($token);
                    $entityManager->flush();
                } catch (\Exception $e) {
                    $json2 = $normalizer->normalize("something occured", 'json');
                    return new JsonResponse(null);
                }
                $url = $this->generateUrl('app_reset_password', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);

                $message = (new \Swift_Message('Oubli de mot de passe - Réinisialisation'))
                    ->setFrom('sassiwale1999@gmail.com')
                    ->setTo($user[0]->getEmail())
                    ->setBody(
                        $this->renderView(
                            'security/resetPasswordMail.html.twig',
                            [
                                'user' => $user[0],
                                'url' => $url
                            ]
                        ),
                        'text/html'
                    );
                $mailer->send($message);
                $json3 = $normalizer->normalize($user[0],'json');
                return new JsonResponse($json3);

            }




}
