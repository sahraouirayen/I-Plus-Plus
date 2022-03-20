<?php

namespace App\Controller;

use App\Entity\Prod;
use App\Form\ProdType;
use App\Repository\ProdRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\Pagina\torInterface;
use Symfony\Component\HttpKernel\KernelInterface;

class ProdController extends AbstractController
{
    /**
     * @Route("/prod", name="prod")
     */
    public function index(): Response
    {
        return $this->render('prod/index.html.twig', [
            'controller_name' => 'ProdController',
        ]);
    }
    /**
     * @Route("/search", name="search")
     */
    public function search(): Response
    {
        return $this->render('prod/searchtab.html.twig');
    }
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/admin/ajouterProd",name="ajouterProd")
     */

    public function AjouterProduit(Request $request,KernelInterface $kernel){
        $produit = new Prod();
        $form=$this->createForm(ProdType::class,$produit);
        $form->add('ajouter',submitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $file = $form->get('imgProd')->getData();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $imagesDir = $kernel->getProjectDir().'/public/uploads/images'; // equivalent à $this->getParameter('images_directory')
            dump($imagesDir) ;
            try{
                $file->move($imagesDir,
                    $fileName);
            }catch(FileException $e){

            }
            $em=$this->getDoctrine()->getManager();
            $produit->setImgProd($fileName);
            $em->persist($produit);
            $em->flush();
            return $this->redirect($request->getRequestUri());
            //return $this->redirectToRoute('test');
        }
        return $this->render("prod/ajouterProd.html.twig",['form'=>$form->createView()]);
    }

    /**
     * @param ProdRepository $repository
     * @return Response
     * @Route ("/admin/afficherProd",name="afficherProd")
     */

    public function AfficherProduit(ProdRepository $repository){
        $produit=$repository->findAll();
        return $this->render("prod/tableProd.html.twig",['tour'=>$produit]);

    }
    /**
     * @param ProdRepository $repository
     * @return Response
     * @Route ("/afficherProdfront",name="afficherProdfront")
     */

    public function AfficherProduitfront(ProdRepository $repository){
        $produit=$repository->findAll();
        return $this->render("prod/produitFront.html.twig",['tour'=>$produit]);

    }

    /**
     * @param ProdRepository $repository
     * @return Response
     * @Route ("/new",name="new")
     */
    public function AfficherProduit2(ProdRepository $repository){
        $produit=$repository->findAll();
        return $this->render("base.html.twig",['tour'=>$produit]);

    }

    /**
     * @param $id
     * @param ProdRepository $repository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/admin/supprimer/{id}",name="supprimer")
     */
    public function Delete($id,ProdRepository $repository){
        $produit=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();
        return $this->redirectToRoute('afficherProd');
    }

    /**
     * @param $id
     * @param ProdRepository $repository
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/admin/modifier/{id}",name="modifier")
     */
    public function Update($id,ProdRepository $repository,Request $request){
        $produit=$repository->find($id);
        $form=$this->createForm(ProdType::class,$produit);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficherProd');
        }
        return $this->render('prod/updateProd.html.twig',['f'=>$form->createView()]);
    }

    /**
     * @Route("/admrecherchelivr1", name="admrecherchelivr1")
     */
    public function searchLivAction(Request $request,ProdRepository $repository){
        $em = $this->getDoctrine()->getManager();


        $searchParameter = $request->get('Prod');
        if(strlen($searchParameter)==0)
            $entities = $em->getRepository(Prod::class)->findAll();
        else


            $entities = $repository->findByExpField($searchParameter);



        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];

        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($entities, 'json',['ignored_attributes'=>['idPromo']

        ]);

        $response = new Response(json_encode($jsonContent));
        $response->headers->set('Content-Type', 'application/json; charset=utf-8');

        return $response;
    }

    /**
     *@Route("/facture/pdfnav", name="panier_pdfnav", methods={"GET"})
     */

   public function pdfnav(ProdRepository $repository)
    {

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        $prod=$repository->findAll();




        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $html= $this->render("prod/facture.html.twig",['tour'=>$prod]);



        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        $dompdf->render();

        $dompdf->stream("Facture.pdf", [
            "Attachment" => false
        ]);
    }

}


