<?php

namespace App\Controller;

use App\Entity\Actualite;
use App\Entity\Evenement;
use App\Entity\Panier;
use App\Entity\Prod;
use App\Entity\Promo;
use App\Entity\Reclamation;
use App\Entity\Reservation;
use App\Entity\Typereclamations;
use App\Entity\User;
use App\Form\ForgotPasswordType;
use App\Repository\ProdRepository;
use App\Repository\ProduitRepository;
use App\Repository\ReclamationRepository;
use App\Repository\TypereclamationsRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use const Grpc\STATUS_INTERNAL;
use const Grpc\STATUS_OK;

/**
 * @Route("/mobile", name="mobile")
 */
class MobileController extends AbstractController
{
    const ATTRIBUTES_TO_SERIALIZE =['id','userId','sujetRec','niveau'];
    const ATTRIBUTES_TO_SERIALIZE1=['id','niveau'];


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
     * @Route("/getusers",name="get_users")
     */
    public function getusers(Request $request,NormalizerInterface $normalizer):Response{
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        if($users){

            $json = $normalizer->normalize($users,'json');
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
if($user){
    $json3 = $normalizer->normalize($user[0],'json');
    return new JsonResponse($json3);
}



                return new JsonResponse("null");

            }
    /**
     * @Route("/resetpassword",name="mobile_reset_passeword")
     */
    public function resetpass(Request $request,NormalizerInterface $normalizer, UserPasswordEncoderInterface $encoder, \Swift_Mailer $mailer, TokenGeneratorInterface $tokenGenerator): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $id = $request->get('id');
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        if($user){
            $password = $encoder->encodePassword($user,$request->get('password'));
            $user->setPassword($password);
$entityManager->persist($user);
$entityManager->flush();
            $json3 = $normalizer->normalize($user,'json');

            return new JsonResponse($json3);
        }



        return new JsonResponse("null");

    }

    /**
     * @Route("/admin/edit-user",name="admin_edit_user")
     */
    public function adminedituser(Request $request,NormalizerInterface $normalizer):Response{
        $adminid = $request->get('adminid');
        $entityManager = $this->getDoctrine()->getManager();

        $superuser = $this->getDoctrine()->getRepository(User::class)->find($adminid);


        if($superuser->isSuperAdmin()){
            $id = $request->get('id');
            $user = $this->getDoctrine()->getRepository(User::class)->find($id);

            if($user){
                $role=$request->get("role");
                $arrayrole = str_split($role,20);

                var_dump($arrayrole[0]);
              $user->setRoles($arrayrole);
                $entityManager->persist($user);
                $entityManager->flush();

                $json = $normalizer->normalize($user,'json');
                return new JsonResponse($json);
            }

        }
        $json1 = $normalizer->normalize("null",'json');
        return new JsonResponse("null");

    }

    /**
     * @Route("/admin/delete-user",name="admin_delete_user")
     */
    public function admindeleteuser(Request $request,NormalizerInterface $normalizer):Response{
        $adminid = $request->get('adminid');
        $entityManager = $this->getDoctrine()->getManager();

        $superuser = $this->getDoctrine()->getRepository(User::class)->find($adminid);


        if($superuser->isSuperAdmin()){
            $id = $request->get('id');
            $user = $this->getDoctrine()->getRepository(User::class)->find($id);

            if($user){

                $entityManager->remove($user);
                $entityManager->flush();

                $json = $normalizer->normalize($user,'json');
                return new JsonResponse($json,Response::HTTP_ACCEPTED);
            }

        }
        $json1 = $normalizer->normalize("null",'json');
        return new JsonResponse("null",Response::HTTP_BAD_REQUEST);

    }
    /**
     * @Route("/evenement", name="events")
     */
    public function events(): JsonResponse
    {
        $event=$this->getDoctrine()->getRepository(Evenement::class)->findAll();
        $dt=array();
        foreach ($event as $key=>$ev){
            $dt[$key]['id_event']=$ev->getIdEvent();
            $dt[$key]['nom_event']=$ev->getNomEvent();
            $dt[$key]['date']=$ev->getDate();
            $dt[$key]['lieu ']=$ev->getLieu();
            $dt[$key]['desc_event']=$ev->getDescEvent();
            $dt[$key]['type']=$ev->getType();
        }
        return new JsonResponse($dt);

}
    /*ajout evenement*/
    /**
     * @Route("/addevent",name="add_ev")
     */
    public function addevent(Request $request,NormalizerInterface $normalizer):Response
    {

        $nom_event=$request->get('nom_event');
        $date=$request->get('date');
        $lieu=$request->get('lieu');
        $desc_event=$request->get('desc_event');
        $type=$request->get('type');
        $event=new Evenement();
        $event->setNomEvent($nom_event);
        $event->setDate(new \DateTime($date));
        $event->setLieu($lieu);
        $event->setDescEvent($desc_event);
        $event->setType($type);

        $em=$this->getDoctrine()->getManager();
        $em->persist($event);
        $em->flush();

        $json =$normalizer->normalize($event,'json');
        return new JsonResponse($json);
    }
    /*modif event*/
    /**
     * @Route("/modifevent",name="modif_ev")
     */
    public function editevent(Request $request,NormalizerInterface $normalizer):Response{
        $id = $request->get('id');
        $entityManager = $this->getDoctrine()->getManager();

        $event = $this->getDoctrine()->getRepository(Evenement::class)->find($id);


        if($event){
            $nom_event=$request->get('nom_event');
            $date=$request->get('date');
            $lieu=$request->get('lieu');
            $desc_event=$request->get('desc_event');
            $type=$request->get('type');
            $event->setNomEvent($nom_event);
            $event->setDate(new \DateTime($date));
            $event->setLieu($lieu);
            $event->setDescEvent($desc_event);
            $event->setType($type);
            $entityManager->persist($event);
            $entityManager->flush();

            $json = $normalizer->normalize($event,'json');
            return new JsonResponse($json);

        }
        $json1 = $normalizer->normalize("null",'json');
        return new JsonResponse("null");

    }
    /*suppression event*/
    /**
     * @Route("/deleteevent",name="delete_event")
     */
    public function deleteevent(Request $request,NormalizerInterface $normalizer):Response{
        $id_event  = $request->get('id_event');
        $entityManager = $this->getDoctrine()->getManager();

        $event = $this->getDoctrine()->getRepository(Evenement::class)->find($id_event );






                if($event){
                    $entityManager->remove($event);
                    $entityManager->flush();

                    $json = $normalizer->normalize($event,'json');
                    return new JsonResponse($json,Response::HTTP_ACCEPTED);
                }



        $json1 = $normalizer->normalize("null",'json');
        return new JsonResponse($json1,Response::HTTP_BAD_REQUEST);

    }
    /* commande*/
    /**
     * @Route("/affmobPanier", name="affmobPanierbyid")
     */
    public function affmobPanier(SessionInterface $session,Request $request,NormalizerInterface $normalizer,ProdRepository $produitRepository)
    {
        $panier=$this->getDoctrine()->getRepository(Panier::class)->findAll();

        $jsonContent = $normalizer->normalize($panier,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/paniermobile/new", name="ajouterpanier")
     */
    public function addmobpanier(Request $request,NormalizerInterface $normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $total = 0;

        $produit = $this->getDoctrine()->getRepository(Prod::class)->find($request->get('id_produit'));
        $Panierr = $this->getDoctrine()->getRepository(Panier::class)->findOneBy([
            'produit' => $produit->getId()
        ]);
        if (!empty($Panierr)) {
            if($produit->getQuantite()>$Panierr->getQuantite()){

                $Panierr->setQuantite( $Panierr->getQuantite()+1);
                $total += $produit->getPrixProd() * $Panierr->getQuantite();

                $Panierr->setTotal( $total);

            }else{
                //afficher erreur
            }

            //dump($panier[$id]).die();
        } else {
            $Panierr = new Panier();
            $Panierr->setProduit($produit);
            $Panierr->setQuantite( 1);
            $total += $produit->getPrixProd() * $Panierr->getQuantite();
            $Panierr->setTotal( $total);
            $em->persist($Panierr);

        }
        $em->flush();
        $jsonContent = $normalizer->normalize($Panierr,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/paniermob/edit", name="editmobPanier")
     */
    public function editmobPanier(Request $request,NormalizerInterface $normalizer)
    {   $em=$this->getDoctrine()->getManager();
        $Panierr = $em->getRepository(Panier::class)->findOneBy([
            'produit' => $request->get('id_produit')
        ]);
        $Panierr->setQuantite($request->get('quantity'));
        $Panierr->setTotal($request->get('total'));
        $em->flush();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $normalizer->setCircularReferenceHandler(function ($Panierr) {
            return $Panierr->getId();
        });
        $encoders = [new JsonEncoder()];
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers,$encoders);
        $formatted = $serializer->normalize($Panierr);
        return new JsonResponse($formatted);
    }
    /**
     * @Route("/Panier/del", name="deletpanier")
     */
    public function delmobcategorie(Request $request,NormalizerInterface $normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $Panier = $this->getDoctrine()->getRepository(Panier::class)->findOneBy([
            'produit' => $request->get('id_produit')
        ]);

        $em->remove($Panier);
        $em->flush();
        $jsonContent = $normalizer->normalize($Panier   ,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
/**
* @Route("/addprod", name="addchambremlbile")
*/
    public function addddproduit(Request $request, NormalizerInterface $Normalizer )
    {

        $em = $this->getDoctrine()->getManager();
        $prod = new Prod();


        $prod->setPrixProd($request->get('prix'));
        $prod->setNomProd($request->get('nom'));
        $prod->setStatusProd($request->get('status'));
        $prod->setRateProd($request->get('rate'));
        $prod->setDescriptionProd($request->get('des'));
        $prod->setCategorieProd($request->get('cat'));



        $em->persist($prod);
        $em->flush();
        $jsonContent = $Normalizer->normalize($prod, 'json',['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));



    }

    /**
     * @Route("/suppprod/{id}",name="supchambmobile")

     */
    public function suprimerrod(Request $request, NormalizerInterface $Normalizer,$id)
    {
        //  if($this->isCsrfTokenValid("SUP".$hotel->getReferHotel(),$request->get("_token")) )
        //  {
        //  $image = $this->getDoctrine()->getRepository($imagehotel)->findAll();

        // unlink($img->getImage());
        //    var_dump($image);
        // exit();

        $prod = $this->getDoctrine()->getRepository(Prod::class)->find($id);

        $em=$this->getDoctrine()->getManager();
        $em->remove($prod);


        $em->flush();
        $this->addFlash('success',"L'action a ete effectué");
        //   }
        return new Response("success");


    }

    /**
     * @Route("/listeprod/", name="listechambremob")
     */

    public function listprod(Request $request ,NormalizerInterface $Normalizer)
    {
        $prod= $this->getDoctrine()->getRepository(Prod::class)->findAll();


        $jsonContent = $Normalizer->normalize($prod, 'json',['groups'=>'post:read']);


        $response = new Response(json_encode($jsonContent));
        $response->headers->set('Content-Type', 'application/json; charset=UTF-8');

        return $response;

    }


    /**
     * @Route("/editprodmob", name="addchambremlbile3")
     */
    public function editproduit(Request $request, NormalizerInterface $Normalizer )
    {

        $em = $this->getDoctrine()->getManager();
        $prod = $this->getDoctrine()->getRepository(Prod::class)->find($request->get('id'));


        $prod->setPrixProd($request->get('prix'));
        $prod->setNomProd($request->get('nom'));
        $prod->setStatusProd($request->get('status'));
        $prod->setRateProd($request->get('rate'));
        $prod->setDescriptionProd($request->get('desc'));
        $prod->setCategorieProd($request->get('cat'));


$em->persist($prod);
        $em->flush();
        $jsonContent = $Normalizer->normalize($prod, 'json',['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));

    }
/**
* @Route("/addprom", name="addchambremlbile2")
*/
    public function addpromo(Request $request, NormalizerInterface $Normalizer )
    {

        $em = $this->getDoctrine()->getManager();
        $prom = new Promo();


        $prom->setPourcentPromo($request->get('pourcent'));
        $prom->setDateExp($request->get('date'));




        $em->persist($prom);
        $em->flush();
        $jsonContent = $Normalizer->normalize($prom, 'json',['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));



    }

    /**
     * @Route("/suppprom/{id}",name="supprommobile")


     */
    public function suprimerprom(Request $request, NormalizerInterface $Normalizer,$id)
    {
        //  if($this->isCsrfTokenValid("SUP".$hotel->getReferHotel(),$request->get("_token")) )
        //  {
        //  $image = $this->getDoctrine()->getRepository($imagehotel)->findAll();

        // unlink($img->getImage());
        //    var_dump($image);
        // exit();

        $prom = $this->getDoctrine()->getRepository(Promo::class)->find($id);

        $em=$this->getDoctrine()->getManager();
        $em->remove($prom);


        $em->flush();
        $this->addFlash('success',"L'action a ete effectué");
        //   }
        return new Response("success");


    }
    /**
     * @Route("/listeprom/", name="listechambremob5")

     */

    public function listprom(Request $request ,NormalizerInterface $Normalizer)
    {
        $prom= $this->getDoctrine()->getRepository(Promo::class)->findAll();


        $jsonContent = $Normalizer->normalize($prom, 'json',['groups'=>'post:read']);


        $response = new Response(json_encode($jsonContent));
        $response->headers->set('Content-Type', 'application/json; charset=UTF-8');

        return $response;

    }

    /**
     * @Route("/editprommob", name="addchambremlbile4")
     */
    public function editpromo(Request $request, NormalizerInterface $Normalizer )
    {

        $em = $this->getDoctrine()->getManager();
        $prom = new Promo();


        $prom->setPourcentPromo($request->get('pourcent'));
        $prom->setDateExp($request->get('date'));



        $em->flush();
        $jsonContent = $Normalizer->normalize($prom, 'json',['groups'=>'post:read']);

        return new Response(json_encode($jsonContent));

    }
    /**
     * @Route("/reclamation/list")
     * @param ReclamationRepository $repo
     */
    public function getList(ReclamationRepository $repo,SerializerInterface $serializer):Response{

        $reclamations=$repo->findAll();
        $json=$serializer->serialize($reclamations,'json', ['groups' => ['reclamation']]);


        return $this->json(['reclamation'=>$reclamations],Response::HTTP_OK,[],[
            'attributes'=>self::ATTRIBUTES_TO_SERIALIZE
        ]);



    }
    /**
     * @Route("/modifier/reclamation/{id}" , name="rec_edit" ,  methods={"GET", "POST"}, requirements={"id":"\d+"})
     */
    public function reclamationModif(TypereclamationsRepository $repotype,Request $request,SerializerInterface $serializer,$id,ReclamationRepository $repo)
    {
        $reclamation=$repo->findOneById($id);
        $sujet=$request->query->get('sujet');
        $niveau=$request->query->get('niveau');


        $em=$this->getDoctrine()->getManager();

        $reclamation->setSujetRec($sujet);
        $reclamation->setNiveau($niveau);
        $reclamation->setUserId(1);
        $type=$repotype->findOneById(1);
        $reclamation->setTypereclamations($type);

        $em->persist($reclamation);
        $em->flush();
        $json = $serializer->serialize(
            $reclamation,
            'json',
            ['groups' => 'reclamation']
        );
        // $serializer=new Serializer([new ObjectNormalizer()]);
        // $formatted=$serializer->normalize($reclamation);
        return new JsonResponse($json);
    }


    /**
     * @Route("/reclamation/delete", name="supprimer_rec")
     */
    public function supprimerReclamation(Request $request, ReclamationRepository $repo): Response
    {

        $id =$request->get("id");
        $em=$this->getDoctrine()->getManager();

        $d=   $repo->find($id);

        if($d != null){
            $em->remove($d);
            $em->flush();
            $serializer=new Serializer([new ObjectNormalizer()]);
            $formatted=$serializer->normalize("reclamation a eté supprimeé");
            return new JsonResponse($formatted);
        }

        return  new JsonResponse("Id Invalide");
    }

    /**
     * @Route("/AddReclamation/json", name="AddReclamation")
     */
    public function AddReclamationJSON(Request $request,NormalizerInterface $Normalizer,TypereclamationsRepository $repo)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = new Reclamation();
        $idType=$request->get('idType');
        $Type = $repo->findOneById($idType);
        $reclamation->setTypereclamations($Type);
        $reclamation->setSujetRec($request->get('sujet'));
        $reclamation->setNiveau($request->get('niveau'));
        $reclamation->setUserId(1);

        $em->persist($reclamation);
        $em->flush();

        $jsonContent= $Normalizer->normalize($reclamation,'json',['groups'=>"reclamation:read"]);
        return new Response(json_encode($jsonContent));;
    }


    /**
     * @Route("/AllReclamation/type/json")
     * @param TypeReclamationRepository $repo
     */
    public function getReclamationListByType(TypereclamationsRepository $repo,ReclamationRepository $reclamationRepository,Request $request,SerializerInterface $serializer):Response{

        $id=$request->query->get('id');
        $type=$repo->findOneById($id);
        $typeId=$type->getId();
        $reclamations=$type->getReclamations();
        $json=$serializer->serialize($reclamations,'json', ['groups' => ['reclamation']]);


        return $this->json(['reclamation'=>$reclamations],Response::HTTP_OK,[],[
            'attributes'=>self::ATTRIBUTES_TO_SERIALIZE
        ]);

    }
    /**
     * @Route("/actt/AllActualite", name="AllActualite")
     */
    public function AllActualite(EntityManagerInterface $entityManager,NormalizerInterface $Normalizer): Response
    {
        $repository = $this->getDoctrine()->getRepository(Actualite::class);
        $actualite = $repository->findAll();
        $jsonContent = $Normalizer->normalize($actualite, 'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/AddActualitejson/new", name="AddActualitejson")
     */
    public function AddActualitejson(Request $request, EntityManagerInterface $entityManager,NormalizerInterface $Normalizer): Response
    {

        $actualite = new Actualite();

        $objDateTime = new \DateTime('NOW');
        $actualite->setDateAct($objDateTime);
        $actualite->setTitreActualite($request->get('titreActualite'));
        $actualite->setDescription($request->get('description'));
        $actualite->setEtendu($request->get('etendu'));
        $actualite->setImageAct($request->get('imageAct'));
        $actualite->setVu(0);

        $entityManager->persist($actualite);
        $entityManager->flush();

        $jsonContent = $Normalizer->normalize($actualite, 'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));

    }

    /**
     * @Route("/UpdateActualitejson/{idActualite}/edit", name="UpdateActualitejson")
     */
    public function UpdateActualitejson(Request $request, EntityManagerInterface $entityManager,NormalizerInterface $Normalizer): Response
    {

        $actualite = new Actualite();

        $objDateTime = new \DateTime('NOW');
        $actualite->setDateAct($objDateTime);
        $actualite->setTitreActualite($request->get('titreActualite'));
        $actualite->setDescription($request->get('description'));
        $actualite->setEtendu($request->get('etendu'));
        $actualite->setImageAct($request->get('imageAct'));
        $actualite->setVu(0);

        $entityManager->persist($actualite);
        $entityManager->flush();

        $jsonContent = $Normalizer->normalize($actualite, 'json',['groups'=>'post:read']);
        return new Response("information updated successfully".json_encode($jsonContent));

    }

    /**
     * @Route("/deleteActualitejson/{id}", name="deleteActualitejson")
     */
    public function deleteActualitejson(Request $request, Actualite $actualite, EntityManagerInterface $entityManager,NormalizerInterface $Normalizer,$id): Response
    {
        $entityManager=$this->getDoctrine()->getManager();
        $actualite=$entityManager->getRepository(Actualite::class)->find($id);
        $entityManager->remove($actualite);
        $entityManager->flush();
        $jsonContent = $Normalizer->normalize($actualite, 'json',['groups'=>'post:read']);
        return new Response("information deleted successfully".json_encode($jsonContent));


    }
    /**
     * @Route("/AddType/json", name="Addtype")
     */
    public function AddPostsJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $Type = new Typereclamations();
        $Type->setNiveau($request->get('niveau'));

        $em->persist($Type);
        $em->flush();

        $jsonContent= $Normalizer->normalize($Type,'json',['groups'=>"type:read"]);
        return new Response(json_encode($jsonContent));;
    }

    /**
     * @Route("/type/list")
     * @param TypeReclamationsRepository $repo
     */
    public function getList1(TypeReclamationsRepository $repo,SerializerInterface $serializer):Response{

        $typereclamations=$repo->findAll();
        $json=$serializer->serialize($typereclamations,'json', ['groups' => ['typereclamation']]);


        return $this->json(['typereclamation'=>$typereclamations],Response::HTTP_OK,[],[
            'attributes'=>self::ATTRIBUTES_TO_SERIALIZE1
        ]);



    }

    /**
     * @Route("/reservation/{idevent}/{idUser}", name="app_reservation_new", methods={"GET", "POST"})
     */
    public function new(Request $request,$idevent,$idUser,NormalizerInterface $Normalizer, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();

        $reservation->setidUser(intval($idUser));
        $reservation->setidEvenement(intval($idevent));

            $entityManager->persist($reservation);
            $entityManager->flush();
        $jsonContent= $Normalizer->normalize($reservation,'json',['groups'=>"post:read"]);
        return new Response(json_encode($jsonContent));;


    }
    /**
     * @Route("/panier/add", name="commande_mobadd")
     */
    public function successmob(SessionInterface $session,NormalizerInterface $normalizer, ProduitRepository $productRepository,UserRepository  $userRepository )
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
        $jsonContent = $normalizer->normalize($order,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));


    }

}
