<?php

namespace App\Controller;

use App\Entity\Actualite;
use App\Entity\ImageAct;
use App\Form\ActualiteType;
use App\Repository\ActualiteRepository;
use App\Repository\CategorieActualiteRepository;
use App\Services\QrcodeService;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;



/**
 * @Route("/actualite")
 */
class ActualiteController extends AbstractController
{

    /**
     * @Route("/", name="actualite_index", methods={"GET"})
     */
    public function index(Request $request,ActualiteRepository $actualiteRepository, CategorieActualiteRepository $categorieActualiteRepository,PaginatorInterface $paginator): Response
    {
        $actualitesvu= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.vu desc')
            ->setMaxResults(5)
            ->getResult();
        $actualiteslike= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.ratingAct desc')
            ->setMaxResults(5)
            ->getResult();

        $actualite=$paginator->paginate($actualiteRepository->findAll(),$request->query->getInt('page',1),10);
        return $this->render('actualite/index.html.twig', [
            'actualites' => $actualite,
            'categories' => $categorieActualiteRepository->findAll(),
            'actualitesvu'=>$actualitesvu,
            'actualiteslike'=>$actualiteslike,
        ]);

    }


    /**
     * @Route("/filtreact", name="filtreact", methods={"GET", "POST"})
     */
    public function filtreact(actualiteRepository $actualiteRepository, CategorieActualiteRepository $categorieActualiteRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $actualitesvu= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.vu desc')
            ->setMaxResults(5)
            ->getResult();
        $actualiteslike= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.ratingAct desc')
            ->setMaxResults(5)
            ->getResult();
        $cat = $request->get('cat');



        $actualites = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a  WHERE a.categorie in (:list) ')
            ->setParameter('list',$cat)
            ->getResult();
        $actualites1=$paginator->paginate($actualites,$request->query->getInt('page',1),10);
        if (null != $request->get('cat')) {
            return $this->render('actualite/index.html.twig', [
                'actualites' => $actualites1,
                'categories' => $categorieActualiteRepository->findAll(),
                'actualitesvu'=>$actualitesvu,
                'actualiteslike'=>$actualiteslike,

            ]);
        }
        return $this->render('actualite/index.html.twig', [
            'actualites' => $actualites1,
            'categories' => $categorieActualiteRepository->findAll(),
            'actualitesvu'=>$actualitesvu,
            'actualiteslike'=>$actualiteslike,

        ]);

    }
    /**
     * @Route("/pdfact", name="pdfact", methods={"GET"})
     */
    public function pdfact (ActualiteRepository $actualiteRepository , Request $request): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
//        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

//        $produit = $produitRepository->findAll();

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('/actualite/pdfact.html.twig',[
            'actualites' => $actualiteRepository->findAll(),
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Actualites.pdf", [
            "Attachment" => true
        ]);
    }
    /**
     * @Route("/indextri", name="indextri", methods={"GET"})
     */
    public function indextri(Request $request,CategorieActualiteRepository $categorieActualiteRepository,ActualiteRepository $actualiteRepository,PaginatorInterface $paginator): Response
    {

        $actualitesvu= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.vu desc')
            ->setMaxResults(5)
            ->getResult();
        $actualiteslike= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.ratingAct desc')
            ->setMaxResults(5)
            ->getResult();
        $cat = $request->get('cat');
        $actualites = $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by  a.dateAct desc')
            ->getResult();
        $actualite=$paginator->paginate($actualites,$request->query->getInt('page',1),10);
        return $this->render('actualite/index.html.twig', [
            'actualites' => $actualite,
            'categories' => $categorieActualiteRepository->findAll(),
            'actualitesvu'=>$actualitesvu,
            'actualiteslike'=>$actualiteslike,

        ]);

    }
    /**
     * @Route("/searchact", name="searchact", methods={"GET"})
     */
    public function searchact(Request $request,ActualiteRepository $actualiteRepository,CategorieActualiteRepository $categorieActualiteRepository,NormalizerInterface $Normalizer, PaginatorInterface $paginator)
    {
        $actualitesvu= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.vu desc')
            ->setMaxResults(5)
            ->getResult();
        $actualiteslike= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.ratingAct desc')
            ->setMaxResults(5)
            ->getResult();
        $actualite=$paginator->paginate($actualiteRepository->findBy(['titreActualite' => $request->get('search')]),$request->query->getInt('page',1),10);
        $actualites=$paginator->paginate($actualiteRepository->findAll(),$request->query->getInt('page',1),10);
        if (null != $request->get('search')) {
            return $this->render('actualite/index.html.twig', [
                'actualites' => $actualite,
                'categories' => $categorieActualiteRepository->findAll(),
                'actualitesvu'=>$actualitesvu,
                'actualiteslike'=>$actualiteslike,

            ]);
        }
        return $this->render('actualite/index.html.twig', [
            'actualites' => $actualites,
            'categories' => $categorieActualiteRepository->findAll(),
            'actualitesvu'=>$actualitesvu,
            'actualiteslike'=>$actualiteslike,

        ]);
    }
    /**
     * @Route("/indexback", name="actualite_indexdash", methods={"GET"})
     */
    public function indexback(ActualiteRepository $actualiteRepository): Response
    {

        return $this->render('actualite/backact.html.twig', [
            'actualites' => $actualiteRepository->findAll(),
        ]);

    }
    /**
     * @Route("/back", name="actualite_indexBack", methods={"GET"})
     */
    public function back(ActualiteRepository $actualiteRepository): Response
    {
        $actualitesvu= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.vu desc')
            ->setMaxResults(5)
            ->getResult();
        $actualiteslike= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.ratingAct desc')
            ->setMaxResults(5)
            ->getResult();
        return $this->render('actualite/backact.html.twig', [
            'actualites' => $actualiteRepository->findAll(),
            'actualitesvu'=>$actualitesvu,
            'actualiteslike'=>$actualiteslike,
        ]);
    }
    /**
     * @Route("/actu/frontact/{id}", name="actualite_front", methods={"GET"})
     */
    public function indexFront($id,ActualiteRepository $actualiteRepository, EntityManagerInterface $entityManager): Response
    {
        $actualitesvu= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.vu desc')
            ->setMaxResults(5)
            ->getResult();
        $actualiteslike= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.ratingAct desc')
            ->setMaxResults(5)
            ->getResult();

        $actualite=$actualiteRepository->find($id);
        $actualite->setVu($actualite->getVu()+1);
        $entityManager->persist($actualite);
        $entityManager->flush();
        return $this->render('actualite/frontactualite.html.twig', [
            'actualites' => $actualiteRepository->find($id),
            'actualitesvu'=>$actualitesvu,
            'actualiteslike'=>$actualiteslike,
        ]);
    }
    /**
     * @Route("/like/{id}", name="like", methods={"GET"})
     */
    public function like($id,Request $request,ActualiteRepository $actualiteRepository, EntityManagerInterface $entityManager,CategorieActualiteRepository $categorieActualiteRepository,PaginatorInterface $paginator): Response
    {
        $actualitesvu= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.vu desc')
            ->setMaxResults(5)
            ->getResult();
        $actualiteslike= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.ratingAct desc')
            ->setMaxResults(5)
            ->getResult();
        $actualites=$paginator->paginate($actualiteRepository->findAll(),$request->query->getInt('page',1),10);
        $actualite=$actualiteRepository->find($id);
        $actualite->setRatingAct($actualite->getRatingAct()+1);
        $entityManager->persist($actualite);
        $entityManager->flush();
        return $this->render('actualite/index.html.twig', [
            'actualites' => $actualites,
            'categories' => $categorieActualiteRepository->findAll(),
            'actualitesvu'=>$actualitesvu,
            'actualiteslike'=>$actualiteslike,
        ]);

    }
    /**
     * @Route("/dislike/{id}", name="dislike", methods={"GET"})
     */
    public function dislike($id,Request $request,ActualiteRepository $actualiteRepository, EntityManagerInterface $entityManager,CategorieActualiteRepository $categorieActualiteRepository,PaginatorInterface $paginator): Response
    {  $actualitesvu= $this->getDoctrine()
        ->getManager()
        ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.vu desc')
        ->setMaxResults(5)
        ->getResult();
        $actualiteslike= $this->getDoctrine()
            ->getManager()
            ->createQuery('SELECT a FROM App\Entity\Actualite a order by a.ratingAct desc')
            ->setMaxResults(5)
            ->getResult();
        $actualites=$paginator->paginate($actualiteRepository->findAll(),$request->query->getInt('page',1),10);
        $actualite=$actualiteRepository->find($id);
        $actualite->setRatingAct($actualite->getRatingAct()-1);
        $entityManager->persist($actualite);
        $entityManager->flush();
        return $this->render('actualite/index.html.twig', [
            'actualites' => $actualites,
            'categories' => $categorieActualiteRepository->findAll(),
            'actualitesvu'=>$actualitesvu,
            'actualiteslike'=>$actualiteslike,
        ]);
    }
    /**
     * @Route("/new", name="actualite_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,QrcodeService $qrcodeService): Response
    {
        $qrcode=null;
        $actualite = new Actualite();
        $form = $this->createForm(ActualiteType::class, $actualite);
        $form->handleRequest($request);
        $objDateTime = new \DateTime('NOW');
        $dateString = $objDateTime->format('d-m-Y H:i:s');

        if ($form->isSubmitted() && $form->isValid()) {
            $imageAct = $form->get('imageAct')->getData();
            foreach ($imageAct as $imageAct) {
                $file = md5(uniqid()) . '.' . $imageAct->guessExtension();
                $imageAct->move(
                    $this->getParameter('upload_directory'),
                    $file
                );
                $image = new ImageAct();
                $image->setImageAct($file);
                $actualite->setimageAct($file);
            }
            $qrcode=$qrcodeService->qrcode2("http://127.0.0.1:8001/actualite",$form->get('titreActualite')->getData());

            $entityManager->persist($actualite);
            $entityManager->flush();
            return $this->redirectToRoute('actualite_indexBack', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('actualite/new.html.twig', [
            'actualite' => $actualite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idActualite}", name="actualite_show", methods={"GET"})
     */
    public function show(Actualite $actualite): Response
    {
        return $this->render('actualite/show.html.twig', [
            'actualite' => $actualite,
        ]);
    }

    /**
     * @Route("/{idActualite}/edit", name="actualite_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Actualite $actualite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActualiteType::class, $actualite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('actualite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('actualite/edit.html.twig', [
            'actualite' => $actualite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idActualite}", name="actualite_delete", methods={"POST"})
     */
    public function delete(Request $request, Actualite $actualite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$actualite->getIdActualite(), $request->request->get('_token'))) {
            $entityManager->remove($actualite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('actualite_index', [], Response::HTTP_SEE_OTHER);
    }


}