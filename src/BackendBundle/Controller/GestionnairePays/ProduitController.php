<?php

namespace BackendBundle\Controller\GestionnairePays;


use BackendBundle\Form\ProduitType;
use BackendBundle\Form\StationType;
use Doctrine\ORM\EntityRepository;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Validator\Constraints\Image;
use WebBundle\Entity\Categories;
use WebBundle\Entity\Couleur;
use WebBundle\Entity\Produits;
use WebBundle\Entity\Size;
use WebBundle\Entity\SousCategories;
use WebBundle\Entity\Station;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
/**
 * @Route("/produit")
 */
class ProduitController extends Controller
{
    /**
     *
     * @Route("/", name="produit_index")
     * @Method("GET")
     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");
        $station=$request->get('station',"");
        $page= $request->query->getInt('page', 1);

        $categories =$em->getRepository('WebBundle:Categories')->getCategorieByPays($this->getUser()->getPays(),"");
        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieByPays($this->getUser()->getPays(),"","");
        $stations =$em->getRepository('WebBundle:Station')->getStationByPays($this->getUser()->getPays(),"");
        $produits =$em->getRepository('WebBundle:Produits')->getProduitByPays($this->getUser()->getPays(),$search,$categorie,$souscategorie,$station);

              /*
                $paginator = $this->get('knp_paginator');
        $produits_paginator = $paginator->paginate(
            $produits, $page, 10
        //Produits::NUM_ITEMS
        );
        $produits_paginator->setUsedRoute('produit_index_paginated');

        */
        $paginator = $this->get('knp_paginator');

        $produits_paginator = $paginator->paginate(
            $produits, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );
        return $this->render('@Backend/gestionnaire/produit/index.html.twig', [
            'produits' => $produits_paginator,
            'search' => $search,
            'categorie' => $categorie,
            'souscategorie' => $souscategorie,
            'station' => $station,
            'categories' => $categories,
            'souscategories' => $souscategories,
            'stations' => $stations,
            'nbproduits' => $produits,
            'pays' => $this->getUser()->getPays(),
            'page' => $page
        ]);
    }






    /**
     *
     * @Route("/produit_gestion", name="produit_gestion_index")
     * @Method("GET")
     */
    public function Myproduit(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");
        $station=$request->get('station',null);
        $page= $request->query->getInt('page', 1);

        $categories =$em->getRepository('WebBundle:Categories')->getCategorieByPays($this->getUser()->getPays(),"");
        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieByPays($this->getUser()->getPays(),"","");
        $stations =$em->getRepository('WebBundle:Station')->getStationByPays($this->getUser()->getPays(),"");
      //  $produits =$em->getRepository('WebBundle:Produits')->getProduitByPa($this->getUser()->getPays());
      //  dump($produits);die();
        $produits =$em->getRepository('WebBundle:Produits')->getProduitByPays($this->getUser()->getPays(),$search,$categorie,$souscategorie,$station);
  //   dump($produits);die();
       /* $paginator = $this->get('knp_paginator');
        $produits_paginator = $paginator->paginate(
            $produits, $page, 10
        //Produits::NUM_ITEMS
        );
        $produits_paginator->setUsedRoute('produit_index_paginatedf');*/
        $paginator = $this->get('knp_paginator');

        $produits_paginator = $paginator->paginate(
            $produits, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );
        return $this->render('@Backend/gestionnaire/produit/index.html.twig', [
            'produits' => $produits_paginator,
            'search' => $search,
            'categorie' => $categorie,
            'souscategorie' => $souscategorie,
            'station' => $station,
            'categories' => $categories,
            'souscategories' => $souscategories,
            'stations' => $stations,
            'nbproduits' => $produits,
            'pays' => $this->getUser()->getPays(),
            'page'=>$page
        ]);
    }

    /**
     * @Route("/get_sous_categorie_from_categorie", name="get_sous_categorie_from_categorie", methods={"GET"})
     */
    public function getSousCategorieFromCategorie(Request $request)
    {
       // dump("soucaetgoriiiii");die();
        // Get Entity manager and repository
        $em = $this->getDoctrine()->getManager();
        $sousCaregorieRepository = $em->getRepository("WebBundle:SousCategories");

        // Search the neighborhoods that belongs to the city with the given id as GET parameter "cityid"
        $sousCategories = $sousCaregorieRepository->createQueryBuilder("sc")
            ->where("sc.categorie = :categorieid")
            ->setParameter("categorieid", $request->query->get("categorieid"))
            ->getQuery()
            ->getResult();

        // Serialize into an array the data that we need, in this case only name and id
        // Note: you can use a serializer as well, for explanation purposes, we'll do it manually
        $responseArray = array();
        foreach($sousCategories as $souscategorie){
            $responseArray[] = array(
                "id" => $souscategorie->getId(),
                "nom" => $souscategorie->getNom()
            );
        }

        return new JsonResponse($responseArray);

    }
    /**
     * @Route("/{id}/{page}/edit", name="produit_edit", methods={"GET","POST"})
     */
    public function editAction(Request $request, Produits $produit,$page)
    {
        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");



        if($produit->getPays() == $this->getUser()->getPays()){
            $em = $this->getDoctrine()->getManager();
            $produits_station =$em->getRepository('WebBundle:Produits')->getProduitByPaysByParent($produit->getId(),$this->getUser()->getPays());
//dump($produits_station);die();
            $list_couleur= $em->getRepository('WebBundle:Couleur')->getcouleurByProduit($produit->getId());
            $pays = $this->getUser()->getPays();
            $formOptions = array('pays' => $this->getUser()->getPays());
            $form = $this->createForm(ProduitType::class, $produit,$formOptions);
            ////imagefile


            $form ->add('imagefile', FileType::class, [
                'mapped' => false,
                'required' => false,
                'translation_domain' => 'messages',

                'constraints' => [
                    new Image([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/*',
                            'application/jpg',
                            'application/jpeg',
                            'application/png',
                            'application/x-png',
                        ],
                        'notFoundMessage' => 'L\'image n\'a pas été trouvé',
                        'maxSizeMessage' => 'L\'image est trop grosse ({{ size }} {{ suffix }}). La taille maximum est de  {{ limit }} {{ suffix }}.',
                        'disallowEmptyMessage' => 'Il n\'est pas possible d\'envoyer un fichier vide',
                        'uploadNoFileErrorMessage' => 'L\'image n\'a pas été envoyée',
                    ])
                ],
            ]);
            $form->remove('isActiveInAllStation');

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {



                $ispromo = $form->get('is_promo')->getData();
                $prix_promo = $form->get('prix_promo')->getData();
                $prix = $form->get('prix')->getData();

                $num_produit_promo = $form->get('num_produit_promo')->getData();
                $poucentage_promo = $form->get('poucentage_promo')->getData();


                $couleurs=$request->get('couleurs',array());
                $images=$request->files->get('images',array());
                $image= $form->get('imagefile')->getData();

                if (!$prix){
                    $produit->setPrix(0);
                }

                if (($pays->getFrontLanguage()=="fr") || ($pays->getFrontLanguage()=="FR")){
                    ///FR
                    $produit->setNom($produit->getNom());
                }else{
                    /// EN
                    $produit->setNomen($produit->getNomen());
                }

                if($filename = $this->uploadDocument($form['file']->getData(),"legal_notice_directory")){
                    $produit->setFile($filename);
                }

                if ($image) {
                    $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.'png';

                    try {
                        $image->move(
                            $this->getParameter('image_directory'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                    }
                    $produit->setImage($newFilename);
                }

                foreach ($produits_station as $productS){
                    if (($pays->getFrontLanguage()=="fr") || ($pays->getFrontLanguage()=="FR")){
                        ///FR
                        $productS->setNom($produit->getNom());
                        $productS->setDescription($produit->getDescription());
                    }else{
                        /// EN
                        $productS->setNomen($produit->getNomen());
                        $productS->setDescriptionen($produit->getDescriptionen());

                    }


                    $productS->setFile($produit->getFile());

                    $productS->setImage($produit->getImage());
                    $em->persist($productS);



                }

                foreach($couleurs as $key => $c)
                {
                    $couleur= $em->getRepository('WebBundle:Couleur')->findOneBy(array('codeCouleur'=>$c,'produit'=>$produit));

                    if($couleur){
                        if ($images){
                            if($images[$key] and $images[$key] != ""){
                                $img=$images[$key] ;
                                $originalFilename = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME);
                                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                                $newFilename = $safeFilename.'-'.uniqid().'.'.'png';

                                try {
                                    $img->move(
                                        $this->getParameter('image_directory'),
                                        $newFilename
                                    );
                                } catch (FileException $e) {
                                }
                                $couleur->setImage($newFilename);

                            }
                        }

                        $sizes=$request->get('sizes'.$key,array());
                        $quantity=$request->get('quantity'.$key,array());
                        //  dump($key);die;
                        foreach($sizes as $key1 => $s){
                            $size= $em->getRepository('WebBundle:Size')->findOneBy(array('couleur'=>$couleur,'produit'=>$produit,'libelle'=>$s));
                            if($size){
                                if($quantity[$key1]>0){
                                    $size->setQuantite($quantity[$key1]);
                                    $em->persist($size);
                                }

                            }
                            else{
                                if($quantity[$key1]>0){
                                    $size=new Size();
                                    $size->setLibelle($s);
                                    $size->setCouleur($couleur);
                                    $size->setProduit($produit);
                                    $size->setQuantite($quantity[$key1]);
                                    $em->merge($size);
                                }

                            }

                        }
                        $em->persist($couleur);
                    }
                    else{
                        $couleur=new Couleur();
                        $couleur->setCodeCouleur($c);
                        $couleur->setProduit($produit);
                        if ($images){
                            if($images[$key] and $images[$key] != ""){
                                $img=$images[$key] ;
                                $originalFilename = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME);
                                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                                $newFilename = $safeFilename.'-'.uniqid().'.'.'png';

                                try {
                                    $img->move(
                                        $this->getParameter('image_directory'),
                                        $newFilename
                                    );
                                } catch (FileException $e) {
                                }
                                $couleur->setImage($newFilename);
                                $couleur->setProduit($produit);
                            }

                        }
                        $sizes=$request->get('sizes'.$key,array());
                        $quantity=$request->get('quantity'.$key,array());
                        foreach($sizes as $key1 => $s) {
                            if ($quantity[$key1] > 0) {
                                $size = new Size();
                                $size->setLibelle($s);
                                $size->setCouleur($couleur);
                                $size->setProduit($produit);
                                $size->setQuantite($quantity[$key1]);
                                $em->persist($size);
                            }
                        }
                        $em->persist($couleur);

                    }
                }

                $em->merge($produit);

                if ($ispromo & (($prix_promo ==null) & ($num_produit_promo==null || $poucentage_promo==null )) ){

                    return $this->render('@Backend/gestionnaire/produit/edit.html.twig', [
                        'produit' => $produit,
                        'form' => $form->createView(),
                        'list_couleur'=>$list_couleur,
                        'pays' => $this->getUser()->getPays(),
                        'errort' =>'fill_prix'


                    ]);
                }

                $em->flush();
             //   return $this->redirect($request->request->get('referer'));
             /*   $referer =$request->request->get('referer');
                if($referer == "") return $this->redirectToRoute('produit_index');
                return $this->redirect($request->request->get('referer'));*/

               return $this->redirectToRoute('produit_gestion_index',array('page'=>$page,
                   'search'=>$search,
                   'categorie'=>$categorie,
                   'souscategorie'=>$souscategorie
               ));
            }
            return $this->render('@Backend/gestionnaire/produit/edit.html.twig', [
                'produit' => $produit,
                'form' => $form->createView(),
                'list_couleur'=>$list_couleur,
                'pays' => $this->getUser()->getPays(),
                'search'=>$search,
                'categorie'=>$categorie,
                'souscategorie'=>$souscategorie


            ]);
        }
        else{
            return $this->redirectToRoute('produit_gestion_index',array('page'=>$page,
                        'search'=>$search,
                        'categorie'=>$categorie,
                        'souscategorie'=>$souscategorie));

            /* $referer =$request->request->get('referer');
             if($referer == "") return $this->redirectToRoute('produit_index');
             return $this->redirect($request->request->get('referer'));*/
        }

    }

    /**
     * disable station.
     *
     * @Route("/{id}/{page}/disable", name="produit_disable", methods={"GET"})
     */
    public function disableAction(Produits $produit,$page)
    {
        $em = $this->getDoctrine()->getManager();
        $onestation =$em->getRepository('WebBundle:Produits')->find($produit->getId());
        if($onestation && ($onestation->getPays() == $this->getUser()->getPays())){
            $onestation->setIsActive(false);
            $em->persist($onestation);
            $em->flush();
            return $this->redirectToRoute('produit_gestion_index',array('page'=>$page));
        }
        else{
            return $this->redirectToRoute('produit_gestion_index',array('page'=>$page));
        }

    }
    /**
     * disable station.
     *
     * @Route("/{idcouleur}/{idproduit}/delete_couleur", name="delete_couleur", methods={"GET"})
     */
    public function deleteCouleurAction($idcouleur,$idproduit)
    {
        $em = $this->getDoctrine()->getManager();
        $couleur =$em->getRepository('WebBundle:Couleur')->find($idcouleur);
        if($couleur && ($couleur->getProduit()->getPays() == $this->getUser()->getPays())){
            $produit =$em->getRepository('WebBundle:Produits')->find($idproduit);

            $sizes= $em->getRepository('WebBundle:Size')->findBy(array('couleur'=>$couleur,'produit'=>$produit));
            foreach($sizes as $size) {
                if($size->getProduit()->getPays() == $this->getUser()->getPays()) {
                    $em->remove($size);
                }
            }
            $em->remove($couleur);
            $em->flush();
            return $this->redirectToRoute('produit_edit',array('id'=>$idproduit));
        }
        else{
            return $this->redirectToRoute('produit_edit',array('id'=>$idproduit));
        }

    }
    /**
     * disable station.
     *
     * @Route("/{id}/{idproduit}/delete_size", name="delete_size", methods={"GET"})
     */
    public function deleteSizeAction($id,$idproduit)
    {
        $em = $this->getDoctrine()->getManager();
        $size= $em->getRepository('WebBundle:Size')->find($id);
        if($size && ($size->getProduit()->getPays() == $this->getUser()->getPays())) {
            $em->remove($size);
            $em->flush();
            return $this->redirectToRoute('produit_edit', array('id' => $idproduit));

        }
        else{
            return $this->redirectToRoute('produit_edit', array('id' => $idproduit));
        }
    }
    /**
     * disable station.
     *
     * @Route("/edit_size", name="edit_size", methods={"GET"})
     */
    public function editSizeAction(Request $request)
    {
        $id=$request->get('id');
        $quantite=$request->get('quantite');

        $em = $this->getDoctrine()->getManager();
        $size= $em->getRepository('WebBundle:Size')->find($id);
        if($size && ($size->getProduit()->getPays() == $this->getUser()->getPays()) ){
            $size->setQuantite($quantite);
            $em->merge($size);
            $em->flush();
            return new JsonResponse($id);
        }

        return new JsonResponse([
            'error' => 'not found '
        ], 404);
    }
    /**
     * @Route("/Liste_des_produits", name="ExportProduit" ,defaults={"_format"="xls","_filename"="Liste_des_stations"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/StationExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);

        if(array_key_exists('search',$output)) $search=$output['search']; else $search='';
        if(array_key_exists('categorie',$output)) $categorie=$output['categorie']; else $categorie='';
        if(array_key_exists('souscategorie',$output)) $souscategorie=$output['souscategorie']; else $souscategorie='';
        if(array_key_exists('station',$output)) $station=$output['station']; else $station='';

        $produits =$em->getRepository('WebBundle:Produits')->getProduitByPays($this->getUser()->getPays(),$search,$categorie,$souscategorie,$station);
        return $this->render('@Backend/excel/ProduitExcel.xlsx.twig', array(
            'Modeles' => $produits,
        ));
    }


/////////////////////////////////////activate produit //////
    /**
     *
     * @Route("/{id}/activateproduit", name="activateproduit", methods={"GET"})
     */
    public function activateproduit($id)
    {
        $em = $this->getDoctrine()->getManager();

        $checkedproduit= $id;

        if ($checkedproduit){
            // foreach ($checkedproduits as $checkedproduit){

            $selectProduit = $em->getRepository('WebBundle:Produits')->find($checkedproduit);
            $produit = new Produits();
            $produit->setPays($this->getUser()->getPays());

            $code=  intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9). rand(0,9). rand(0,9) );
            $produit->setCode($code );
            $produit->setNom($selectProduit->getNom() );
            $produit->setNomen($selectProduit->getNomen() );
            $produit->setFile($selectProduit->getFile() );
            $produit->setDescription($selectProduit->getDescription() );
            $produit->setDescriptionen($selectProduit->getDescriptionen() );
            $produit->setPrix($selectProduit->getPrix() );
            $produit->setDisponible($selectProduit->getDisponible() );
            $produit->setIsActive(true );
            $produit->setNbAchat($selectProduit->getNbAchat() );
            $produit->setCreatedAt(new \DateTime() );
            $produit->setQuantite($selectProduit->getQuantite());
            $produit->setMaxcommande($selectProduit->getMaxcommande());
            $produit->setMincommande($selectProduit->getMincommande());
            $produit->setPrixPromo($selectProduit->getPrixPromo());
            $produit->setIsPromo($selectProduit->getIsPromo());
            $produit->setTitrePromo($selectProduit->getTitrePromo());
            $produit->setPoucentagePromo($selectProduit->getPoucentagePromo());
            $produit->setNumProduitPromo($selectProduit->getNumProduitPromo());
            $produit->setImage($selectProduit->getImage());
            $produit->setParentId($selectProduit->getId());

            ///create categorie  entity
            $selectCategoriId =  $selectProduit->getCategorieId();
            $selectCategorieFIRSTcLONE = $em->getRepository('WebBundle:Categories')->findOneBy(array("parent_id"=>$selectCategoriId,'pays'=>$this->getUser()->getPays()));
            $selectCategorie = $em->getRepository('WebBundle:Categories')->find($selectCategoriId);
            $categoriee = new Categories();

            if ($selectCategorieFIRSTcLONE){
                $categoriee = $selectCategorieFIRSTcLONE;
                $categoriee->setNom($selectCategorie->getNom());
                $categoriee->setNomEn($selectCategorie->getNomEn());
                $categoriee->setIsActive(true);
                $categoriee->setCreatedAt(new \DateTime());

                $em->persist($categoriee);


            }else{
                $categoriee->setNom($selectCategorie->getNom());
                $categoriee->setNomEn($selectCategorie->getNomEn());
                $categoriee->setPays($this->getUser()->getPays());
                $categoriee->setIsActive(true);
                $categoriee->setIsAuto($selectCategorie->getIsAuto());
                $categoriee->setIsClothing($selectCategorie->getIsClothing());
                $categoriee->setIsFood($selectCategorie->getIsFood());
                $categoriee->setParentId($selectCategorie->getId());
                $categoriee->setCreatedAt(new \DateTime());

                $em->persist($categoriee);

            }

            $produit->setCategorie($categoriee);
            $produit->setCategorieId($categoriee->getId());

            ///create sous_categorie  entity
            $selectSousCtegoriId =  $selectProduit->getSousCategorieId();
            $selectSousCategorie = $em->getRepository('WebBundle:SousCategories')->find($selectSousCtegoriId);
            $selectSCatFIRSTcLONE = $em->getRepository('WebBundle:SousCategories')->findOneBy(array('parent_id'=>$selectSousCtegoriId,'pays'=>$this->getUser()->getPays()));
            $SousCategoriee = new SousCategories();

            if ($selectSCatFIRSTcLONE){
                $SousCategoriee = $selectSCatFIRSTcLONE;
                $SousCategoriee->setNom($selectSousCategorie->getNom());
                $SousCategoriee->setNomEn($selectSousCategorie->getNomEn());
                $SousCategoriee->setIsActive(true);

                $em->persist($SousCategoriee);


            }else{
                $SousCategoriee->setCategorie($categoriee);

                $SousCategoriee->setNom($selectSousCategorie->getNom());
                $SousCategoriee->setNomEn($selectSousCategorie->getNomEn());
                $SousCategoriee->setPays($this->getUser()->getPays());
                $SousCategoriee->setIsActive(true);
                $SousCategoriee->setParentId($selectSousCategorie->getId());
                $em->persist($SousCategoriee);

            }
            // $SousCategoriee->setCategorie($categoriee);

            $produit->setSousCategorie($SousCategoriee);

            $produit->setSousCategorieId($SousCategoriee->getId());

            ///create coleur  entity
            $selectColeursArray = $em->getRepository('WebBundle:Couleur')->findBy(array('produit'=>$checkedproduit));
            //   $selectColeursArrayId=  $selectProduit->getCouleurs();

            if ($selectColeursArray){
                foreach ($selectColeursArray as $selectColeur){


                    // $selectColeur = $em->getRepository('WebBundle:Couleur')->find($selectColId);
                    $color = new Couleur();
                    $color->setCodeCouleur($selectColeur->getCodeCouleur());
                    $color->setProduit($produit);
                    $color->setImage($selectColeur->getImage());

                    $selectSizes= $em->getRepository('WebBundle:Size')->findBy(array('couleur'=>$selectColeur->getId()));
                    //  dump($selectSizes);
                    //  die();

                    if ($selectSizes){
                        foreach ($selectSizes as $selectSiz){

                            $size = new Size();
                            $size->setLibelle($selectSiz->getLibelle());
                            $size->setCouleur($color);
                            $size->setProduit($produit);
                            $size->setQuantite($selectSiz->getQuantite());
                            $em->persist($size);

                        }
                    }


                    $em->persist($color);



                }

                $em->persist($produit);
                $em->flush();

            }else{

                $em->persist($produit);
                $em->flush();

            }


          //was  return $this->redirectToRoute('produit_gestion_index');



            //  }
        }
        return $this->redirectToRoute('produit_gestion_toactivate_index');

    }


    /**
     *
     * @Route("/{id}/{page}/enable", name="enable", methods={"GET"})
     */
    public function enable($id,Request $request,$page)
    {
        $em = $this->getDoctrine()->getManager();

        $checkedproduit= $id;

        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");
        $station=$request->get('station',null);

        $categories =$em->getRepository('WebBundle:Categories')->getCategorieByPays($this->getUser()->getPays(),"");
        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieByPays($this->getUser()->getPays(),"","");
        $stations =$em->getRepository('WebBundle:Station')->getStationByPays($this->getUser()->getPays(),"");
        //  $produits =$em->getRepository('WebBundle:Produits')->getProduitByPa($this->getUser()->getPays());
        //  dump($produits);die();
        $produits =$em->getRepository('WebBundle:Produits')->getProduitByPays($this->getUser()->getPays(),$search,$categorie,$souscategorie,$station);
        //   dump($produits);die();
        $paginator = $this->get('knp_paginator');
        $produits_paginator = $paginator->paginate(
            $produits, 1, 10
        //Produits::NUM_ITEMS
        );
        $produits_paginator->setUsedRoute('produit_index_paginatedf');





        if ($checkedproduit){
            // foreach ($checkedproduits as $checkedproduit){

            $selectProduit = $em->getRepository('WebBundle:Produits')->find($checkedproduit);

            $selectProduit->setIsActive(!$selectProduit->getIsActive());
            $em->persist($selectProduit);
            $em->flush();

            return $this->redirectToRoute('produit_gestion_index',array('page'=>$page,
                'search' => $search,'categorie' => $categorie,'souscategorie' => $souscategorie));

            /*  if (($selectProduit->getQuantite()==0) & ($selectProduit->getMaxcommande()==0) &( $selectProduit->getPrix()==0 )){
                  ///show alert msg

                  return $this->render('@Backend/gestionnaire/produit/index.html.twig', [
                      'produits' => $produits_paginator,
                      'search' => $search,
                      'categorie' => $categorie,
                      'souscategorie' => $souscategorie,
                      'station' => $station,
                      'categories' => $categories,
                      'souscategories' => $souscategories,
                      'stations' => $stations,
                      'nbproduits' => $produits,
                      'pays' => $this->getUser()->getPays(),
                      'error'=>"2"
                  ]);

              }else{

                  $selectProduit->setIsActive(true);
                  $em->persist($selectProduit);
                  $em->flush();

                  return $this->redirectToRoute('produit_gestion_index');


              }*/

            //  }
        }


    }


    /**
     *
     * @Route("/activate_all", name="activate_all", methods={"GET"})
     */
    public function activate_all(Request $request){
        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");

       // $produits =$em->getRepository('WebBundle:Produits')->getProduitSuperAdmin(null,$search,$categorie,$souscategorie);


        $categories =$em->getRepository('WebBundle:Categories')->getCategorieAdmin("");
        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieAdmin("","");


        $produits =$em->getRepository('WebBundle:Produits')->getProduitSuperAdmin(null,$search,$categorie,$souscategorie);
        $Mesproduits =$em->getRepository('WebBundle:Produits')->getProduitByPays($this->getUser()->getPays(),$search,$categorie,$souscategorie,"");


        if ( $produits){
            foreach ($produits as $produit){
                if ($Mesproduits){
                    foreach ($Mesproduits as $Mesproduit){

                        if ($produit['id']===$Mesproduit['parent_id']){
                            $key = array_search($produit, $produits);

                            unset($produits[$key]);

                            //  $produits->unset($produits[$produit]);
                        }

                    }
                }

            }
        }



        //////////////////////////

        if ($produits){
            foreach ($produits as $checkedproduit){

                $selectProduit = $em->getRepository('WebBundle:Produits')->find($checkedproduit["id"]);

                $produit = new Produits();
                $produit->setPays($this->getUser()->getPays());

                $code=  intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9). rand(0,9). rand(0,9) );
                $produit->setCode($code );
                $produit->setNom($selectProduit->getNom() );
                $produit->setNomen($selectProduit->getNomen() );
                $produit->setFile($selectProduit->getFile() );
                $produit->setDescription($selectProduit->getDescription() );
                $produit->setDescriptionen($selectProduit->getDescriptionen() );
                $produit->setPrix($selectProduit->getPrix() );
                $produit->setDisponible($selectProduit->getDisponible() );
                $produit->setIsActive(true );
                $produit->setNbAchat($selectProduit->getNbAchat() );
                $produit->setCreatedAt(new \DateTime() );
                $produit->setQuantite($selectProduit->getQuantite());
                $produit->setMaxcommande($selectProduit->getMaxcommande());
                $produit->setMincommande($selectProduit->getMincommande());
                $produit->setPrixPromo($selectProduit->getPrixPromo());
                $produit->setIsPromo($selectProduit->getIsPromo());
                $produit->setTitrePromo($selectProduit->getTitrePromo());
                $produit->setPoucentagePromo($selectProduit->getPoucentagePromo());
                $produit->setNumProduitPromo($selectProduit->getNumProduitPromo());
                $produit->setImage($selectProduit->getImage());
                $produit->setParentId($selectProduit->getId());

                ///create categorie  entity
                $selectCategoriId =  $selectProduit->getCategorieId();
                $selectCategorieFIRSTcLONE = $em->getRepository('WebBundle:Categories')->findOneBy(array("parent_id"=>$selectCategoriId,'pays'=>$this->getUser()->getPays()));
                $selectCategorie = $em->getRepository('WebBundle:Categories')->find($selectCategoriId);
                $categoriee = new Categories();
                if ($selectCategorieFIRSTcLONE){
                    $categoriee = $selectCategorieFIRSTcLONE;
                    $categoriee->setNom($selectCategorieFIRSTcLONE->getNom());
                    $categoriee->setNomEn($selectCategorieFIRSTcLONE->getNomEn());
                    $categoriee->setIsActive(true);
                    $categoriee->setCreatedAt(new \DateTime());

                    $em->persist($categoriee);

                }else{
                    $categoriee->setNom($selectCategorie->getNom());
                    $categoriee->setNomEn($selectCategorie->getNomEn());
                    $categoriee->setPays($this->getUser()->getPays());
                    $categoriee->setIsActive(true);
                    $categoriee->setIsAuto($selectCategorie->getIsAuto());
                    $categoriee->setIsClothing($selectCategorie->getIsClothing());
                    $categoriee->setIsFood($selectCategorie->getIsFood());
                    $categoriee->setParentId($selectCategorie->getId());
                    $categoriee->setCreatedAt(new \DateTime());

                    $em->persist($categoriee);
                    $em->flush();


                }

                $produit->setCategorie($categoriee);
                $produit->setCategorieId($categoriee->getId());

                ///create sous_categorie  entity
                $selectSousCtegoriId =  $selectProduit->getSousCategorieId();
                $selectSousCategorie = $em->getRepository('WebBundle:SousCategories')->find($selectSousCtegoriId);
                $selectSCatFIRSTcLONE = $em->getRepository('WebBundle:SousCategories')->findOneBy(array('parent_id'=>$selectSousCtegoriId,'pays'=>$this->getUser()->getPays()));
                $SousCategoriee = new SousCategories();

                if ($selectSCatFIRSTcLONE){
                    $SousCategoriee = $selectSCatFIRSTcLONE;
                    $SousCategoriee->setNom($selectSCatFIRSTcLONE->getNom());
                    $SousCategoriee->setNomEn($selectSCatFIRSTcLONE->getNomEn());
                    $SousCategoriee->setIsActive(true);

                    $em->persist($SousCategoriee);

                }else{
                    $SousCategoriee->setCategorie($categoriee);
                    $SousCategoriee->setNom($selectSousCategorie->getNom());
                    $SousCategoriee->setNomEn($selectSousCategorie->getNomEn());
                    $SousCategoriee->setPays($this->getUser()->getPays());
                    $SousCategoriee->setIsActive(true);
                    $SousCategoriee->setParentId($selectSousCategorie->getId());
                    $em->persist($SousCategoriee);
                  //  $em->flush();
                }
               // $SousCategoriee->setCategorie($categoriee);

                $produit->setSousCategorie($SousCategoriee);

                $produit->setSousCategorieId($SousCategoriee->getId());

                $em->persist($produit);
                $em->flush();

            }



        }


        return $this->redirectToRoute('produit_gestion_index');

    }


    /**
     *
     * @Route("/editallpays", name="editallpays", methods={"GET","POST"})
     */
    public function editall(Request $request){
        $em = $this->getDoctrine()->getManager();
        $pays =  $this->getUser()->getPays();
        $Mesproduits =$em->getRepository('WebBundle:Produits')->getProduitByPays($this->getUser()->getPays(),"","","","");
        if ($Mesproduits){
            foreach ($Mesproduits as $produit){
                $Myproduit = $em->getRepository('WebBundle:Produits')->find($produit['id']);

                $Myproduit->setIsActive(true);
                $em->persist($Myproduit);
            }
            $em->flush();

        }

        return $this->redirectToRoute('produit_gestion_index');


    }

    /**
     *
     * @Route("/activate_produits", name="produit_gestion_toactivate_index", defaults={"page": 1})
     * @Route("/activate_produits/page/{page}", requirements={"page": "[1-9]\d*"}, name="produit_gestion_toactivate_index_paginated")
     * @Method("GET")
     */
    public function listproduitAction(Request $request,$page)
    {

        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");
        // $checkedproduits=$request->get('products',"");

       //was $checkedproduits= $request->get("checkboxvar","");

        /* was befor so nnow it become by one that why i comment it maybe khalil change his mind
            $checkedproduits= $request->get("checkboxvar","");

        if ($checkedproduits){
          //sdump($checkedproduits);die();
            foreach ($checkedproduits as $checkedproduit){

                $selectProduit = $em->getRepository('WebBundle:Produits')->find($checkedproduit);

             //   $pays = $em->getRepository('WebBundle:Pays')->find($this->getUser()->getPays()->getId());
              //  dump($pays->getNom());die();

                $produit = new Produits();
                $produit->setPays($this->getUser()->getPays());
              //  $produit->setStation($this->getUser()->getStation());

                $code=  intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9). rand(0,9). rand(0,9) );
                $produit->setCode($code );
                $produit->setNom($selectProduit->getNom() );
                $produit->setNomen($selectProduit->getNomen() );
                $produit->setFile($selectProduit->getFile() );
                $produit->setDescription($selectProduit->getDescription() );
                $produit->setDescriptionen($selectProduit->getDescriptionen() );
                $produit->setPrix($selectProduit->getPrix() );
                $produit->setDisponible($selectProduit->getDisponible() );
                $produit->setIsActive(false );
                $produit->setNbAchat($selectProduit->getNbAchat() );
                $produit->setCreatedAt(new \DateTime() );
                $produit->setQuantite($selectProduit->getQuantite());
                $produit->setMaxcommande($selectProduit->getMaxcommande());
                $produit->setMincommande($selectProduit->getMincommande());
                $produit->setPrixPromo($selectProduit->getPrixPromo());
                $produit->setIsPromo($selectProduit->getIsPromo());
                $produit->setTitrePromo($selectProduit->getTitrePromo());
                $produit->setPoucentagePromo($selectProduit->getPoucentagePromo());
                $produit->setNumProduitPromo($selectProduit->getNumProduitPromo());
                $produit->setImage($selectProduit->getImage());
                $produit->setParentId($selectProduit->getId());

                ///create categorie  entity
                $selectCategoriId =  $selectProduit->getCategorieId();
                $selectCategorieFIRSTcLONE = $em->getRepository('WebBundle:Categories')->findOneBy(array("parent_id"=>$selectCategoriId,'pays'=>$this->getUser()->getPays()));
                $selectCategorie = $em->getRepository('WebBundle:Categories')->find($selectCategoriId);
                $categoriee = new Categories();

                if ($selectCategorieFIRSTcLONE){
                    $categoriee = $selectCategorieFIRSTcLONE;


                }else{
                    $categoriee->setNom($selectCategorie->getNom());
                    $categoriee->setNomEn($selectCategorie->getNomEn());
                    $categoriee->setPays($this->getUser()->getPays());
                    $categoriee->setIsActive($selectCategorie->getIsActive());
                    $categoriee->setIsAuto($selectCategorie->getIsAuto());
                    $categoriee->setIsClothing($selectCategorie->getIsClothing());
                    $categoriee->setIsFood($selectCategorie->getIsFood());
                    $categoriee->setParentId($selectCategorie->getId());

                    $em->persist($categoriee);

                }

                $produit->setCategorie($categoriee);
                $produit->setCategorieId($categoriee->getId());

                ///create sous_categorie  entity
                $selectSousCtegoriId =  $selectProduit->getSousCategorieId();
                $selectSousCategorie = $em->getRepository('WebBundle:SousCategories')->find($selectSousCtegoriId);
                $selectSCatFIRSTcLONE = $em->getRepository('WebBundle:SousCategories')->findOneBy(array('parent_id'=>$selectSousCtegoriId,'pays'=>$this->getUser()->getPays()));
                $SousCategoriee = new SousCategories();

                if ($selectSCatFIRSTcLONE){
                    $SousCategoriee = $selectSCatFIRSTcLONE;

                }else{
                    $SousCategoriee->setCategorie($categoriee);

                    $SousCategoriee->setNom($selectSousCategorie->getNom());
                    $SousCategoriee->setNomEn($selectSousCategorie->getNomEn());
                    $SousCategoriee->setPays($this->getUser()->getPays());
                    $SousCategoriee->setIsActive($selectSousCategorie->getIsActive());
                    $SousCategoriee->setParentId($selectSousCategorie->getId());
                    $em->persist($SousCategoriee);

                }
               // $SousCategoriee->setCategorie($categoriee);

                $produit->setSousCategorie($SousCategoriee);

                $produit->setSousCategorieId($SousCategoriee->getId());

                ///create coleur  entity
                $selectColeursArray = $em->getRepository('WebBundle:Couleur')->findBy(array('produit'=>$checkedproduit));
                //   $selectColeursArrayId=  $selectProduit->getCouleurs();

                if ($selectColeursArray){
                    foreach ($selectColeursArray as $selectColeur){


                        // $selectColeur = $em->getRepository('WebBundle:Couleur')->find($selectColId);
                        $color = new Couleur();
                        $color->setCodeCouleur($selectColeur->getCodeCouleur());
                        $color->setProduit($produit);
                        $color->setImage($selectColeur->getImage());

                        $selectSizes= $em->getRepository('WebBundle:Size')->findBy(array('couleur'=>$selectColeur->getId()));
                        //  dump($selectSizes);
                        //  die();

                        if ($selectSizes){
                            foreach ($selectSizes as $selectSiz){

                                $size = new Size();
                                $size->setLibelle($selectSiz->getLibelle());
                                $size->setCouleur($color);
                                $size->setProduit($produit);
                                $size->setQuantite($selectSiz->getQuantite());
                                $em->persist($size);

                            }
                        }


                        $em->persist($color);



                    }

                    $em->persist($produit);
                    $em->flush();

                }else{

                    $em->persist($produit);
                    $em->flush();

                }





            }
            return $this->redirectToRoute('produit_gestion_index');



        }

         */

        $categories =$em->getRepository('WebBundle:Categories')->getCategorieAdmin("");
        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieAdmin("","");


        $produits =$em->getRepository('WebBundle:Produits')->getProduitSuperAdmin(null,$search,$categorie,$souscategorie);
        $Mesproduits =$em->getRepository('WebBundle:Produits')->getProduitByPays($this->getUser()->getPays(),$search,$categorie,$souscategorie,"");


        if ( $produits){
            foreach ($produits as $produit){
                if ($Mesproduits){
                    foreach ($Mesproduits as $Mesproduit){

                        if ($produit['id']===$Mesproduit['parent_id']){
                            $key = array_search($produit, $produits);

                            unset($produits[$key]);

                            //  $produits->unset($produits[$produit]);
                        }

                    }
                }

            }
        }



       // dump($produits);die();
        $paginator = $this->get('knp_paginator');
        $produits_paginator = $paginator->paginate(
            $produits, $page, 10
        //Produits::NUM_ITEMS
        );
        $produits_paginator->setUsedRoute('produit_gestion_toactivate_index_paginated');

        return $this->render('@Backend/gestionnaire/produit/activerproduits.html.twig',
            array('produits' => $produits_paginator,
                'search' => $search,
                'categorie' => $categorie,
                'souscategorie' => $souscategorie,
                'categories' => $categories,
                'souscategories' => $souscategories,
                'nbproduits' => $produits,
                'checkboxvar' => "",
                'pays' => $this->getUser()->getPays()

            )
        );
    }




    ///////new produit gestionnaire ////////////
    /// new_produit_gstionnaire
    /**
     * @Route("/newptoduit", name="new_produit_gstionnaire", methods={"GET","POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = new Produits();
        $formOptions = array('pays' => $this->getUser()->getPays());
        $pays = $this->getUser()->getPays();
        $form = $this->createForm(ProduitType::class, $produit,$formOptions);
        $form->handleRequest($request);
        $pays = $this->getUser()->getPays() ;
        $language= $pays->getFrontLanguage() ;



        if ($form->isSubmitted() && $form->isValid()) {
            $stations= $em->getRepository('WebBundle:Station')->getStationByPays($this->getUser()->getPays(),"");

            //
            $couleurs=$request->get('couleurs',array());
            $images=$request->files->get('images',array());
            $ispromo = $form->get('is_promo')->getData();
            $prix_promo = $form->get('prix_promo')->getData();
            $prix = $form->get('prix')->getData();
            $num_produit_promo = $form->get('num_produit_promo')->getData();
            $poucentage_promo = $form->get('poucentage_promo')->getData();


            if (($pays->getFrontLanguage()=="fr") || ($pays->getFrontLanguage()=="FR")){
                $nomproduit = $form->get("nom")->getData() ; ;
                $produit->setNomen($nomproduit);
                $produit->setNom($nomproduit);
            }else{
                $nomproduit = $form->get("nomen")->getData() ;

                $produit->setNom($nomproduit);
                $produit->setNomen($nomproduit);

            }

           $activateInAllStation= $form->get('isActiveInAllStation')->getData();

            if($filename = $this->uploadDocument($form['file']->getData(),"legal_notice_directory")){
                $produit->setFile($filename);
            }

           $image=  $form->get('imagefile')->getData();

           // dump($image);die();
            if ($image) {
                             $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                             $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);

                            $newFilename = $safeFilename.'-'.uniqid().'.'.'png';

                             try {
                                 $image->move(
                                     $this->getParameter('image_directory'),
                                     $newFilename
                                 );
                             } catch (FileException $e) {
                             }
                             $produit->setImage($newFilename);
                         }
            foreach($couleurs as $key => $c)
            {
                $couleur=new Couleur();
                $couleur->setCodeCouleur($c);
                $couleur->setProduit($produit);
                if ($images){
                    if($images[$key] and $images[$key] != ""){
                        $img=$images[$key] ;
                        $originalFilename = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME);
                        $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                        $newFilename = $safeFilename.'-'.uniqid().'.'.'png';

                        try {
                            $img->move(
                                $this->getParameter('image_directory'),
                                $newFilename
                            );
                        } catch (FileException $e) {
                        }
                        $couleur->setImage($newFilename);
                        $couleur->setProduit($produit);
                    }

                }
                $sizes=$request->get('sizes'.$key,array());
                $quantity=$request->get('quantity'.$key,array());
             // dump($sizes);
            //  dump($key);
            //  dump($quantity);

                foreach($sizes as $key => $s) {
                    if ($quantity[$key] > 0) {
                        $size = new Size();
                        $size->setLibelle($s);
                        $size->setCouleur($couleur);
                        $size->setProduit($produit);
                        $size->setQuantite($quantity[$key]);
                        $em->persist($size);
                    }
                }
                $em->persist($couleur);


            }
            $produit->setPays($this->getUser()->getPays());
            $code=  intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9). rand(0,9). rand(0,9) );
            $produit->setCode($code );
            if (!$prix){
                $produit->setPrix(0);
            }
            // $produit->setDescription('');

            $em->persist($produit);


            if ($ispromo & (($prix_promo == null) & ($num_produit_promo==null || $poucentage_promo==null )) ){
              // $this->get('session')->getFlashBag()->add( 'errort',   'fill_prix');
              //  $form->get('imagefile')->setData($image);

              return $this->render('@Backend/gestionnaire/produit/new.html.twig', [
                    'produit' => $produit,
                    'form' => $form->createView(),
                    'pays' => $this->getUser()->getPays(),
                    'errort' =>'fill_prix'
                ]);
            }

            $em->flush();
          if ($activateInAllStation){
                if ($stations) {
                    foreach ($stations as $stationitem) {

                    ///activate this product in all stations
                     $station = $em->getRepository('WebBundle:Station')->find($stationitem["id"]);
                    $selectProduit = $em->getRepository('WebBundle:Produits')->find($produit->getId());


                        $product = new Produits();
                    $product->setPays($this->getUser()->getPays());
                    $product->setStation($station);
                    $code = intval("0" . rand(1, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9));
                    $product->setCode($code);
                    $product->setNom($selectProduit->getNom());
                    $product->setNomen($selectProduit->getNomen());
                    $product->setFile($selectProduit->getFile());
                    $product->setDescription($selectProduit->getDescription());
                    $product->setDescriptionen($selectProduit->getDescriptionen());
                    $product->setPrix($selectProduit->getPrix());
                    $product->setDisponible($selectProduit->getDisponible());
                    $product->setIsActive(false);
                    $product->setNbAchat($selectProduit->getNbAchat());
                    $product->setCreatedAt(new \DateTime());
                    $product->setQuantite($selectProduit->getQuantite());
                    $product->setMaxcommande($selectProduit->getMaxcommande());
                    $product->setMincommande($selectProduit->getMincommande());
                    $product->setPrixPromo($selectProduit->getPrixPromo());
                    $product->setIsPromo($selectProduit->getIsPromo());
                    $product->setTitrePromo($selectProduit->getTitrePromo());
                    $product->setPoucentagePromo($selectProduit->getPoucentagePromo());
                    $product->setNumProduitPromo($selectProduit->getNumProduitPromo());
                    $product->setImage($selectProduit->getImage());
                    $product->setParentId($selectProduit->getId());
                    ///create categorie  entity


                    $selectCategoriId = $selectProduit->getCategorie()->getId();
                    $selectCategorie = $em->getRepository('WebBundle:Categories')->find($selectCategoriId);
                    $product->setCategorie($selectCategorie);
                    $product->setCategorieId($selectCategoriId);
                    ///create sous_categorie  entity
                    $selectSousCtegoriId = $selectProduit->getSousCategorie()->getId();
                    $selectSousCategorie = $em->getRepository('WebBundle:SousCategories')->find($selectSousCtegoriId);
                    $product->setSousCategorie($selectSousCategorie);
                    $product->setSousCategorieId($selectSousCtegoriId);
                    ///create coleur  entity
                    $selectColeursArray = $em->getRepository('WebBundle:Couleur')->findBy(array('produit' => $produit->getId()));
                    //   $selectColeursArrayId=  $selectProduit->getCouleurs();

                    if ($selectColeursArray) {
                        foreach ($selectColeursArray as $selectColeur) {


                            // $selectColeur = $em->getRepository('WebBundle:Couleur')->find($selectColId);
                            $color = new Couleur();
                            $color->setCodeCouleur($selectColeur->getCodeCouleur());
                            $color->setProduit($product);
                            $color->setImage($selectColeur->getImage());

                            $selectSizes = $em->getRepository('WebBundle:Size')->findBy(array('couleur' => $selectColeur->getId()));


                            if ($selectSizes) {
                                foreach ($selectSizes as $selectSiz) {

                                    $size = new Size();
                                    $size->setLibelle($selectSiz->getLibelle());
                                    $size->setCouleur($color);
                                    $size->setProduit($product);
                                    $size->setQuantite($selectSiz->getQuantite());
                                    $em->persist($size);

                                }
                            }


                            $em->persist($color);


                        }

                        $em->persist($product);
                        $em->flush();

                    } else {
                        $em->persist($product);
                        $em->flush();

                    }
                }
                }

            }

           //was return $this->redirectToRoute('produit_gestion_index');
           $referer =$request->request->get('referer');
            if($referer == "") return $this->redirectToRoute('produit_gestion_index');
            return $this->redirect($request->request->get('referer'));


        }

        return $this->render('@Backend/gestionnaire/produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
            'pays' => $this->getUser()->getPays()
        ]);
    }



    /**
     * delete produit.
     *
     * @Route("/{id}/{page}/delete_p_gestionnaire", name="delete_p_gestionnaire", methods={"GET","POST"})
     */
    public function deleteProduitAction(Request $request ,Produits $produit,$page)
    {

        $em = $this->getDoctrine()->getManager();
        $onestation =$em->getRepository('WebBundle:Produits')->find($produit->getId());
        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");

        if($onestation && ($onestation->getPays() == $this->getUser()->getPays())){
            try {
                $em->remove($onestation);
                $em->flush();

            }catch (\Exception $exception){

            }
            return $this->redirectToRoute('produit_gestion_index',array('page'=>$page,'search' => $search,'categorie' => $categorie,'souscategorie' => $souscategorie));
        }
        else{
            return $this->redirectToRoute('produit_gestion_index',array('page'=>$page,'search' => $search,'categorie' => $categorie,'souscategorie' => $souscategorie));
        }

    }

    public function uploadDocument($file, $dir_name){

        if ($file) {
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            // this is needed to safely include the file name as part of the URL
            $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.'pdf';
            // Move the file to the directory where brochures are stored
            try {
                $file->move(
                    $this->getParameter($dir_name),
                    $newFilename
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
                return false;
            }

            // updates the 'brochureFilename' property to store the PDF file name
            // instead of its contents
            return $newFilename;
        }
        return false;
    }

}
