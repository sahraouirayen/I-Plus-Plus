<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\LigneCommande;
use App\Form\CommandeType;
use App\Form\ValidcomaandeType;
use App\Repository\CommandeRepository;
use App\Repository\LigneCommandeRepository;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

/**
 * @Route("/commande")
 */
class CommandeController extends AbstractController
{
    /**
     * @Route("/print", name="listcommandes")
     */
    public function list()
    {

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $commandes=$this->getDoctrine()->getRepository(Commande::class)->findAll();
        $lignesCommandes=$this->getDoctrine()->getRepository(LigneCommande::class)->findAll();
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('commande/mypdf.html.twig', [
            'title' => "Commandes",'lignesCommandes'=>$lignesCommandes
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }
    /**
     * @Route("/add", name="commande_add")
     */
    public function success(SessionInterface $session, ProduitRepository $productRepository,UserRepository  $userRepository )
    {

        $panier = $session->get('panier' , []);
        $panierWithData = [];
        $total=0;
        foreach ($panier as $id => $quantity){
            $produit=$productRepository->find($id);
            $panierWithData[] = [
                'produit' => $produit,
                'quantite' => $quantity
            ];
            $total += $produit->getPrice() * $quantity;
        }
        $order=new Commande();
        //$order->setIdUser($this->getUser());
        $order->setUser($userRepository->find(1));
        $order->setMontantCommande($total);
        $order->setDateCommande(new \DateTime());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($order);
        $this->getDoctrine()->getManager()->flush();

        foreach ($panierWithData as $item) {
            $productOrder=new LigneCommande();

            $productOrder->setQuantite($item['quantite']);
            $productOrder->setProduit($productRepository->find($item['produit']));
            $productOrder->setPrice($productRepository->find($item['produit'])->getPrice()*$item['quantite']);
            $order->addLigneCommande($productOrder);
            $productOrder->setCommande($order);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($productOrder);
            $product=$productRepository->find($item['produit']);
            $product->setQuantite($product->getQuantite()-$item['quantite']);
            $this->getDoctrine()->getManager()->flush();

        }
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($order);
        $this->getDoctrine()->getManager()->flush();
        $session->remove('panier');
        return $this->redirectToRoute('registration');
        //return $this->render('commande/new.html.twig', [
           // 'commande' => $order,
        //]);


    }
    /**
     * @Route("/", name="app_commande_index", methods={"GET"})
     */
    public function index(CommandeRepository $commandeRepository,LigneCommandeRepository $ligneCommandeRepository): Response
    {
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findAll(),
            'lignesCommandes'=>$ligneCommandeRepository->findAll()
        ]);
    }

    /**
     * @Route("/new", name="app_commande_new", methods={"GET", "POST"})
     */
    public function new(Request $request, CommandeRepository $commandeRepository): Response
    {
        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commandeRepository->add($commande);
            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_commande_show", methods={"GET"})
     */
    public function show(Commande $commande): Response
    {
        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_commande_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Commande $commande, CommandeRepository $commandeRepository): Response
    {
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commandeRepository->add($commande);
            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_commande_delete", methods={"POST"})
     */
    public function delete(Request $request, Commande $commande, CommandeRepository $commandeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->request->get('_token'))) {
            $commandeRepository->remove($commande);
        }

        return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/stats", name="stats")
     */
    public function statistiques(CommandeRepository $commandeRepository){

        $commndes=$commandeRepository.findAll();

    }

}
