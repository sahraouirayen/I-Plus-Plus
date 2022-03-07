<?php
namespace App\Controller;

use App\Entity\Calendar;
use App\Repository\CalendarRepository;
use App\Form\CalendarType;

use App\Entity\Chambre;
use App\Form\ChambreType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\HttpFoundation\Request;
 use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
 use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Doctrine\Common\Collections\ArrayCollection;


use PHPUnit\Runner\Hook;
use Symfony\Component\HttpFoundation\JsonResponse;
 class CalendarController extends AbstractController

{
  /**
     * @Route("/Backoffice/calendar", name="calendar_index")
     */
    public function index(CalendarRepository $calendar): Response
    {
        $events = $calendar->findAll();
        $rdvs = [];
        foreach ($events as $event){
            $rdvs[]=[
                'id'=>$event->getId(),
                'start'=>$event->getStart()->format('Y-m-d H:i:s'),
                'end'=>$event->getEnd()->format('Y-m-d H:i:s'),
                'title'=>$event->getTitle(),
                'description'=>$event->getDescription(),
                'backgroundColor'=>$event->getBackgroundColor(),
                'borderColor'=>$event->getBordorColor(),
                'textColor'=>$event->getTextColor(),
                'allDay'=>$event->getAllDay(),


            ];
        }
        $data = json_encode($rdvs);
        return $this->render('prod/calendar/index.html.twig', compact('data'));
    }

    /**
     * @Route("Backoffice/calendar/new", name="calendar_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $calendar = new Calendar();
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($calendar);
            $entityManager->flush();

            return $this->redirectToRoute('calendar_index');
        }

        return $this->render('prod/calendar/new.html.twig', [
            'calendar' => $calendar,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("Backoffice/calendar/{id}", name="calendar_show", methods={"GET"})
     * @param Calendar $calendar
     * @return Response
     */
    public function show(Calendar $calendar): Response
    {
        return $this->render('prod/calendar/show.html.twig', [
            'calendar' => $calendar,
        ]);
    }

    /**
     * @Route("Backoffice/calendar/{id}/edit", name="calendar_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Calendar $calendar
     * @return Response
     */
    public function edit(Request $request, Calendar $calendar): Response
    {
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('calendar_index');
        }

        return $this->render('prod/calendar/edit.html.twig', [
            'calendar' => $calendar,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("Backoffice/calendar/{id}", name="calendar_delete", methods={"DELETE"})
     * @param Request $request
     * @param Calendar $calendar
     * @return Response
     */
    public function delete(Request $request, Calendar $calendar): Response
    {
        if ($this->isCsrfTokenValid('delete'.$calendar->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($calendar);
            $entityManager->flush();
        }

        return $this->redirectToRoute('calendar_index');
    }
   
}