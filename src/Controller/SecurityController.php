<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ForgotPasswordType;
use App\Form\InscriType;
use App\Form\ResetPasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('new');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/user-login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout(): void
    {

        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
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
     * @Route("/mot-passe-oublié",name="mot_de_passe_oublié")
     */
    public function forgottenPassword(Request $request, UserPasswordEncoderInterface $encoder, \Swift_Mailer $mailer, TokenGeneratorInterface $tokenGenerator): Response{
        $form = $this->createForm(ForgotPasswordType::class);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();

        if($form->isSubmitted() && $form->isValid()){
            $email = $form->get('email')->getData();
            $user = $entityManager->getRepository(User::class)->findOneByEmail($email);
            if ($user[0] === null) {
                $this->addFlash('danger', 'Email Inconnu, recommence !');
                return $this->redirectToRoute('mot_de_passe_oublié');
            }
            $token = $tokenGenerator->generateToken();
            try {
                $user[0]->setResetToken($token);
                $entityManager->flush();
            }catch (\Exception $e){
                $this->addFlash('warning', $e->getMessage());
                return $this->redirectToRoute('new');
            }
            $url = $this->generateUrl('app_reset_password', array('token' => $token), UrlGeneratorInterface::ABSOLUTE_URL);

            $message = (new \Swift_Message('Oubli de mot de passe - Réinisialisation'))
                ->setFrom('sassiwale1999@gmail.com')
                ->setTo($user[0]->getEmail())
                ->setBody(
                    $this->renderView(
                        'security/resetPasswordMail.html.twig',
                        [
                            'user'=>$user[0],
                            'url'=>$url
                        ]
                    ),
                    'text/html'
                );
            $mailer->send($message);

            $this->addFlash('notice', 'Mail envoyé, tu vas pouvoir te connecter à nouveau !');

            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/forgottenPassword.html.twig',["form"=>$form->createView()]);
    }
    /**
     * @Route("/reinitialiser-mot-de-passe/{token}", name="app_reset_password")
     */
    public function resetPassword(Request $request, string $token, UserPasswordEncoderInterface $passwordEncoder)
    {
        if ($request->isMethod('POST')) {
            $entityManager = $this->getDoctrine()->getManager();

            $user = $entityManager->getRepository(User::class)->findOneByResetToken($token);
            /* @var $user User */

            if ($user[0] === null) {
                $this->addFlash('danger', 'Mot de passe non reconnu');
                return $this->redirectToRoute('new');
            }

            $user[0]->setResetToken("");
            $user[0]->setPassword($passwordEncoder->encodePassword($user[0], $request->request->get('password')));
            $entityManager->flush();

            $this->addFlash('notice', 'Mot de passe mis à jour !');

            return $this->redirectToRoute('app_login');
        }else {

            return $this->render('security/resetPassword.html.twig', ['token' => $token]);
        }


    }

}
