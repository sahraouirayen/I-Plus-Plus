<?php

namespace App\Controller;

use App\Form\ValidcomaandeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ValidComaandeController extends AbstractController
{
    /**
     * @Route("/registration", name="registration")
     */
    public function registrer(Request $request, \Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(ValidcomaandeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $registration = $form->getData();
            $message = (new \Swift_Message('Validation Commande'))
                ->setFrom('bensalah.yass@esprit.tn')
                ->setTo($registration['email'])
                ->setBody(
                    $this->renderView(
                        'ValidComaande/valid.html.twig', compact('registration')
                    ),
                    'text/html'
                );

            // On envoie le message

            $mailer->send($message);

            $this->addFlash('message', 'Le message a bien été envoyé');
            //return $this->redirectToRoute('');
        }

        return $this->render('ValidComaande/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
