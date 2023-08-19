<?php

namespace BackendBundle\Controller\GerantStation;


use BackendBundle\Form\ProduitType;
use BackendBundle\Form\SousCategorieType;
use BackendBundle\Form\StationType;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Monolog\Handler\IFTTTHandler;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use WebBundle\Entity\Categories;
use WebBundle\Entity\Couleur;
use WebBundle\Entity\Produits;
use WebBundle\Entity\Size;
use WebBundle\Entity\SousCategories;
use WebBundle\Entity\Station;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
/**
 * @Route("/produitgerant")
 */
class ProduitController extends Controller
{
    /**
     *
     * @Route("/", name="produit_gerant_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");
        $warn=$request->get('warn',"0");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");

        $page= $request->query->getInt('page', 1);


        $categories =$em->getRepository('WebBundle:Categories')->getCategorieByPays($this->getUser()->getPays(),"");
        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieByPays($this->getUser()->getPays(),"","");


        $produits =$em->getRepository('WebBundle:Produits')->getProduitByStation($this->getUser()->getStation(),$search,$categorie,$souscategorie);

      /*  $paginator = $this->get('knp_paginator');
        $produits_paginator = $paginator->paginate(
            $produits, $page, 10
        //Produits::NUM_ITEMS
        );
        $produits_paginator->setUsedRoute('produit_gerant_index_paginated');*/
        $paginator = $this->get('knp_paginator');

        $produits_paginator = $paginator->paginate(
            $produits, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );

        return $this->render('@Backend/gerant/produit/index.html.twig', [
            'produits' => $produits_paginator,
            'search' => $search,
            'categorie' => $categorie,
            'souscategorie' => $souscategorie,
            'categories' => $categories,
            'souscategories' => $souscategories,
            'nbproduits' => $produits,
            'page' => $page,
            'pays' => $this->getUser()->getPays(),
            'warn' =>$warn



        ]);
    }
    /**
     * @Route("/get_sous_categorie_from_categorie_gerant", name="get_sous_categorie_from_categorie_gerant", methods={"GET"})
     */
    public function getSousCategorieFromCategorie(Request $request)
    {
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
     * @Route("/new", name="new_produit_gerant", methods={"GET","POST"})
     */
    public function newAction(Request $request)
    {
        $couleurs=$request->get('couleurs',array());
        $images=$request->files->get('images',array());
        $em = $this->getDoctrine()->getManager();
        $produit = new Produits();
        $formOptions = array('pays' => $this->getUser()->getPays());
        $form = $this->createForm(ProduitType::class, $produit,$formOptions);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           /*   $image=  $form->get('imagefile')->getData();
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
                        }*/
            foreach($couleurs as $key => $c)
            {
                    $couleur=new Couleur();
                    $couleur->setCodeCouleur($c);
                    $couleur->setProduit($produit);
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

                    $sizes=$request->get('sizes'.$key,array());
                    $quantity=$request->get('quantity'.$key,array());
                    foreach($sizes as $key => $s) {
                        if ($quantity[$key] > 0) {
                            $size = new Size();
                            $size->setLibelle($s);
                            $size->setCouleur($couleur);
                            $size->setProduit($produit);
                            $size->setQuantite($quantity[$key]);
                            $em->merge($size);
                        }
                    }
                    $em->merge($couleur);
            }


            $produit->setStation($this->getUser()->getStation());
            $produit->setPays($this->getUser()->getPays());
            $code=  intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9). rand(0,9). rand(0,9) );
            $produit->setCode($code );
           // $produit->setDescription('');
            $em->merge($produit);
            $em->flush();

            $referer =$request->request->get('referer');
            if($referer == "") return $this->redirectToRoute('produit_gerant_index');
            return $this->redirect($request->request->get('referer'));
        }

        return $this->render('@Backend/gerant/produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
            'pays' => $this->getUser()->getPays()

        ]);
    }


    /**
     * @Route("/{id}/{page}/edit", name="produit_gerant_edit", methods={"GET","POST"})
     */
    public function editAction(Request $request, Produits $produit,$page)
    {
     //   if($produit->getPays() == $this->getUser()->getPays()) {
        $em = $this->getDoctrine()->getManager();
        $list_couleur = $em->getRepository('WebBundle:Couleur')->getcouleurByProduit($produit->getId());
        $formOptions = array('pays' => $this->getUser()->getPays());
        $form = $this->createForm(ProduitType::class, $produit, $formOptions);
        $form->remove('categorie');
        $form->remove('sous_categorie');

        $form->handleRequest($request);
        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");

        $categorieProduit= $em->getRepository('WebBundle:Categories')->find($produit->getCategorieId());
        $souscategorieProduit= $em->getRepository('WebBundle:SousCategories')->find($produit->getSousCategorieId());

       /* dump($categorieProduit);
        dump($souscategorieProduit);
        die();*/





        if ($form->isSubmitted() && $form->isValid()) {


            $couleurs = $request->get('couleurs', array());
            $images = $request->files->get('images', array());

            $maxcommande =  $form->get('maxcommande')->getData();
            if (($maxcommande==0) ||( $maxcommande==null)){

                return $this->render('@Backend/gerant/produit/edit.html.twig', [
                    'produit' => $produit,
                    'form' => $form->createView(),
                    'list_couleur' => $list_couleur,
                    'errorc' =>'errorc',
                    'pays' => $this->getUser()->getPays(),
                    'page'=>$page,
                    'catproduit'=>$categorieProduit,
                    'subproduit'=>$souscategorieProduit
                ]);
            }

            $prix =  $form->get('prix')->getData();
            if (($prix==0) ||( $prix==null)){

                return $this->render('@Backend/gerant/produit/edit.html.twig', [
                    'produit' => $produit,
                    'form' => $form->createView(),
                    'list_couleur' => $list_couleur,
                    'errorp' =>'errorp',
                    'pays' => $this->getUser()->getPays(),
                    'page'=>$page,
                    'catproduit'=>$categorieProduit,
                    'subproduit'=>$souscategorieProduit


                ]);
            }

            $quantite =  $form->get('quantite')->getData();
            if ((($quantite==0) ||( $quantite==null)) && (empty($couleurs))){

                return $this->render('@Backend/gerant/produit/edit.html.twig', [
                    'produit' => $produit,
                    'form' => $form->createView(),
                    'list_couleur' => $list_couleur,
                    'errorqu' =>'errorqu',
                    'pays' => $this->getUser()->getPays(),
                    'page'=>$page,
                    'catproduit'=>$categorieProduit,
                    'subproduit'=>$souscategorieProduit


                ]);
            }

         //   if ((empty($couleurs)) && ( $maxcommande > $quantite  )){
            if ( ( $maxcommande > $quantite  )){
                return $this->render('@Backend/gerant/produit/edit.html.twig', [
                    'produit' => $produit,
                    'form' => $form->createView(),
                    'list_couleur' => $list_couleur,
                    'errorquantmax' =>'errorquantmax',
                    'pays' => $this->getUser()->getPays(),
                    'page'=>$page,
                    'catproduit'=>$categorieProduit,
                    'subproduit'=>$souscategorieProduit


                ]);
            }

            $ispromo = $form->get('is_promo')->getData();
            $prix_promo = $form->get('prix_promo')->getData();

            $num_produit_promo = $form->get('num_produit_promo')->getData();
            $poucentage_promo = $form->get('poucentage_promo')->getData();

            if ($ispromo & (($prix_promo ==null) & ($num_produit_promo==null || $poucentage_promo==null )) ){

                return $this->render('@Backend/gerant/produit/edit.html.twig', [
                    'produit' => $produit,
                    'form' => $form->createView(),
                    'list_couleur' => $list_couleur,
                    'errort' =>'fill_prix',
                    'pays' => $this->getUser()->getPays(),
                    'page'=>$page,
                    'catproduit'=>$categorieProduit,
                    'subproduit'=>$souscategorieProduit


                ]);
            }





           //
         /*   $image = $form->get('imagefile')->getData();

            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . 'png';

                try {
                    $image->move(
                        $this->getParameter('image_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                $produit->setImage($newFilename);
            }*/
            foreach ($couleurs as $key => $c) {
                $couleur = $em->getRepository('WebBundle:Couleur')->findOneBy(array('codeCouleur' => $c, 'produit' => $produit));

                if ($couleur) {
                    if ($images){
                        if ($images[$key] and $images[$key] != "") {
                            $img = $images[$key];
                            $originalFilename = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME);
                            $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                            $newFilename = $safeFilename . '-' . uniqid() . '.' . 'png';

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

                    $sizes = $request->get('sizes' . $key, array());
                    $quantity = $request->get('quantity' . $key, array());
                 //   dump($sizes);
                //    dump($quantity);
               //     die();
                   // dump($key);
                   //
                 //   dump($sizes[$key]);die();

               foreach ($sizes as $key1 => $s) {
                        $size = $em->getRepository('WebBundle:Size')->findOneBy(array('couleur' => $couleur, 'produit' => $produit, 'libelle' => $s));

                        if ($size) {

                            if ($quantity[$key1] > 0) {
                                $size->setQuantite($quantity[$key1]);
                                $em->persist($size);
                            }

                        } else {

                            if ($quantity[$key1] > 0) {
                                $size = new Size();
                                $size->setLibelle($s);
                                $size->setCouleur($couleur);
                                $size->setProduit($produit);
                                $size->setQuantite($quantity[$key1]);
                                $em->merge($size);
                            }

                        }

                    }


                    $em->persist($couleur);
                } else {
                    $couleur = new Couleur();
                    $couleur->setCodeCouleur($c);
                    $couleur->setProduit($produit);
                    if ($images){
                        if ($images[$key] and $images[$key] != "") {
                            $img = $images[$key];
                            $originalFilename = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME);
                            $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                            $newFilename = $safeFilename . '-' . uniqid() . '.' . 'png';

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
                    $sizes = $request->get('sizes' . $key, array());
                    $quantity = $request->get('quantity' . $key, array());


                    foreach ($sizes as $key1 => $s) {
                        if ($quantity[$key1] > 0) {
                            $size = new Size();
                            $size->setLibelle($s);
                            $size->setCouleur($couleur);
                            $size->setProduit($produit);
                            $size->setQuantite($quantity[$key1]);
                            $em->merge($size);
                        }
                    }
                    $em->persist($couleur);

                }

            }
         //   die();

            $em->flush();
           /* $referer = $request->request->get('referer');
            if ($referer == "") return $this->redirectToRoute('produit_gerant_index');
            return $this->redirect($request->request->get('referer'));*/
            return $this->redirectToRoute('produit_gerant_index',array('page'=>$page ,
                'search'=>$search,
                'categorie'=>$categorie,
                'souscategorie'=>$souscategorie));
        }

        return $this->render('@Backend/gerant/produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
            'list_couleur' => $list_couleur,
            'pays' => $this->getUser()->getPays(),
            'page'=>$page,
            'catproduit'=>$categorieProduit,
            'subproduit'=>$souscategorieProduit


        ]);
        }
       /* else{

            return $this->redirectToRoute('produit_gerant_index',['pays' => $this->getUser()->getPays()]);

        }*/
//}



    /**
     * disable station.
     *
     * @Route("/{idcouleur}/{idproduit}/{page}/delete_couleur_gerant", name="delete_couleur_gerant", methods={"GET"})
     */
    public function deleteCouleurAction($idcouleur,$idproduit,$page)
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
            return $this->redirectToRoute('produit_gerant_index',array('id'=>$idproduit,'page'=>$page));
        }
        else{
            return $this->redirectToRoute('produit_gerant_index',array('id'=>$idproduit,'page'=>$page));
        }

    }
    /**
     * disable station.
     *
     * @Route("/{id}/{idproduit}/{page}/delete_size_gerant", name="delete_size_gerant", methods={"GET"})
     */
    public function deleteSizeAction($id,$idproduit,$page)
    {
        $em = $this->getDoctrine()->getManager();
        $size= $em->getRepository('WebBundle:Size')->find($id);
        if($size && ($size->getProduit()->getPays() == $this->getUser()->getPays())) {
            $em->remove($size);
            $em->flush();
            return $this->redirectToRoute('produit_gerant_index', array('id' => $idproduit,'page'=>$page));
        }
        else{
            return $this->redirectToRoute('produit_gerant_index', array('id' => $idproduit,'page'=>$page));
        }
    }
    /**
     * disable station.
     *
     * @Route("/edit_size_gerant", name="edit_size_gerant", methods={"GET"})
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
     * disable station.
     *
     * @Route("/{id}/{page}/disable", name="produit_gerant_disable", methods={"GET"})
     */
    public function disableAction(Produits $produit,$page)
    {
        $em = $this->getDoctrine()->getManager();
        $onestation =$em->getRepository('WebBundle:Produits')->find($produit->getId());
        if($onestation && ($onestation->getPays() == $this->getUser()->getPays())){
            $onestation->setIsActive(false);
            $em->persist($onestation);
            $em->flush();
            return $this->redirectToRoute('produit_gerant_index',array('page'=>$page));
        }
        else{
            return $this->redirectToRoute('produit_gerant_index',array('page'=>$page));
        }

    }



    /**
     * disable station.
     *
     * @Route("/{id}/{page}/delete_p_gerant", name="delete_p_gerant", methods={"GET","POST"})
     */
    public function deleteProduitAction(Request $request,Produits $produit,$page)
    {
        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");

        $em = $this->getDoctrine()->getManager();
        $onestation =$em->getRepository('WebBundle:Produits')->find($produit->getId());
        $command= $em->getRepository('WebBundle:Commande_Produit')->findBy(array("produit"=>$produit));

        if (!$command){

            if($onestation && ($onestation->getPays() == $this->getUser()->getPays())){
                try {

                    $em->remove($onestation);
                    $em->flush();

                }catch (\Exception $exception){

                }
                return $this->redirectToRoute('produit_gerant_index',array('page'=>$page,
                    'search'=>$search,
                    'categorie'=>$categorie,
                    'souscategorie'=>$souscategorie,

                ));
            }
            else{
                return $this->redirectToRoute('produit_gerant_index',array('page'=>$page,
                    'search'=>$search,
                    'categorie'=>$categorie,
                    'souscategorie'=>$souscategorie,

                ));
            }
        }else{
            return $this->redirectToRoute('produit_gerant_index',array('page'=>$page,
                'search'=>$search,
                'categorie'=>$categorie,
                'souscategorie'=>$souscategorie,
                'warn'=>"1"

            ));

        }


    }

    /**
     * @Route("/Liste_des_produits_gerant", name="ExportProduit_gerant" ,defaults={"_format"="xls","_filename"="Liste_des_stations"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/StationExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);

        if(array_key_exists('search',$output)) $search=$output['search']; else $search='';
        if(array_key_exists('categorie',$output)) $categorie=$output['categorie']; else $categorie='';
        if(array_key_exists('souscategorie',$output)) $souscategorie=$output['souscategorie']; else $souscategorie='';
        $produits =$em->getRepository('WebBundle:Produits')->getProduitByStation($this->getUser()->getStation(),$search,$categorie,$souscategorie);
        return $this->render('@Backend/excel/gerant/ProduitExcel.xlsx.twig', array(
            'Modeles' => $produits,
        ));
    }



    //activerproduits.html.twig

    /**
     *
     * @Route("/activate_produits", name="produit_toactivate_index", defaults={"page": 1})
     * @Route("/activate_produits/page/{page}", requirements={"page": "[1-9]\d*"}, name="produit_toactivate_index_paginated")
     * @Method("GET")
     */
    public function listproduitAction(Request $request,$page)
    {

        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");
       // $checkedproduits=$request->get('products',"");

        $checkedproduits= $request->get("checkboxvar","");
       //



        if ($checkedproduits){
         //dump($checkedproduits);die();

            foreach ($checkedproduits as $checkedproduit){

                $selectProduit = $em->getRepository('WebBundle:Produits')->find($checkedproduit);


                $produit = new Produits();
                $produit->setPays($this->getUser()->getPays());
                $produit->setStation($this->getUser()->getStation());

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
                $selectCategorie = $em->getRepository('WebBundle:Categories')->find($selectCategoriId);




                $produit->setCategorie($selectCategorie);
                $produit->setCategorieId($selectCategoriId);


                ///create sous_categorie  entity
                $selectSousCtegoriId =  $selectProduit->getSousCategorieId();
                $selectSousCategorie = $em->getRepository('WebBundle:SousCategories')->find($selectSousCtegoriId);


                $produit->setSousCategorie($selectSousCategorie);
                $produit->setSousCategorieId($selectSousCtegoriId);




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





                /// create sub categorie  entity
                /// create coleur entity
                /// create size entity


                ///getCouleurs
                ///getSizes
                ///setCategorie
                ///setSousCategorie




            }


         //was   return $this->redirectToRoute('produit_gerant_index');
            return $this->redirectToRoute('produit_toactivate_index');

        }


        //$categories =$em->getRepository('WebBundle:Categories')->getCategorieAdmin("");
        //        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieAdmin("","");
        $categories =$em->getRepository('WebBundle:Categories')->getCategorieByPays($this->getUser()->getPays(),"");
        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieByPays($this->getUser()->getPays(),"","");


        $produits =$em->getRepository('WebBundle:Produits')->getProduitActverInGestionnaire(null,$search,$categorie,$souscategorie,$this->getUser()->getPays());
//////////////////////
        $Mesproduits = $em->getRepository('WebBundle:Produits')->getProduitByStation($this->getUser()->getStation(),$search,$categorie,$souscategorie);


        if ( $produits){
            foreach ($produits as $produit){
                if ($Mesproduits){
                    foreach ($Mesproduits as $Mesproduit){

                        if ($produit['id']==$Mesproduit['parent_id']){
                            $key = array_search($produit, $produits);
                            unset($produits[$key]);

                        }

                    }
                }

            }



        }
 //     dump($produits);die();
        ///////
        $paginator = $this->get('knp_paginator');
        $produits_paginator = $paginator->paginate(
            $produits, $page, 10
        //Produits::NUM_ITEMS
        );
        $produits_paginator->setUsedRoute('produit_toactivate_index_paginated');

        return $this->render('@Backend/gerant/produit/activerproduits.html.twig',
            array(    'produits' => $produits_paginator,
                'search' => $search,
                'categorie' => $categorie,
                'souscategorie' => $souscategorie,
                'categories' => $categories,
                'souscategories' => $souscategories,
                'nbproduits' => $produits,
                'checkboxvar' => $checkedproduits,
                'pays' => $this->getUser()->getPays()
            )
           );
    }




    /**
     *
     * @Route("/activateall", name="activateall", methods={"GET"})
     */
    public function activate_all(Request $request){
        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");

        // $produits =$em->getRepository('WebBundle:Produits')->getProduitSuperAdmin(null,$search,$categorie,$souscategorie);

        $categories =$em->getRepository('WebBundle:Categories')->getCategorieAdmin("");
        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieAdmin("","");


        $produits =$em->getRepository('WebBundle:Produits')->getProduitActverInGestionnaire(null,$search,$categorie,$souscategorie,$this->getUser()->getPays());

//////////////////////
        $Mesproduits = $em->getRepository('WebBundle:Produits')->getProduitByStation($this->getUser()->getStation(),$search,$categorie,$souscategorie);



//////////////////////

        if ( $produits){
            foreach ($produits as $produit){
                if ($Mesproduits){
                    foreach ($Mesproduits as $Mesproduit){

                        if ($produit['id']==$Mesproduit['parent_id']){
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
                $produit->setStation($this->getUser()->getStation());

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
             //   $selectCategorieFIRSTcLONE = $em->getRepository('WebBundle:Categories')->findOneBy(array("parent_id"=>$selectCategoriId,'pays'=>$this->getUser()->getPays()));
                $categoriee = $em->getRepository('WebBundle:Categories')->find($selectCategoriId);
               // $categoriee = new Categories();
             /*   if ($selectCategorieFIRSTcLONE){
                    $categoriee = $selectCategorieFIRSTcLONE;
                    $categoriee->setNom($selectCategorieFIRSTcLONE->getNom());
                    $categoriee->setNomEn($selectCategorieFIRSTcLONE->getNomEn());
                    $em->persist($categoriee);
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
                    $em->flush();


                }*/

                $produit->setCategorie($categoriee);
                $produit->setCategorieId($categoriee->getId());

                ///create sous_categorie  entity
                $selectSousCtegoriId =  $selectProduit->getSousCategorieId();
                $SousCategoriee = $em->getRepository('WebBundle:SousCategories')->find($selectSousCtegoriId);
              //  $selectSCatFIRSTcLONE = $em->getRepository('WebBundle:SousCategories')->findOneBy(array('parent_id'=>$selectSousCtegoriId,'pays'=>$this->getUser()->getPays()));
            //    $SousCategoriee = new SousCategories();

             /*   if ($selectSCatFIRSTcLONE){
                    $SousCategoriee = $selectSCatFIRSTcLONE;
                    $SousCategoriee->setNom($selectSCatFIRSTcLONE->getNom());
                    $SousCategoriee->setNomEn($selectSCatFIRSTcLONE->getNomEn());
                    $em->persist($SousCategoriee);

                }else{
                    $SousCategoriee->setCategorie($categoriee);
                    $SousCategoriee->setNom($selectSousCategorie->getNom());
                    $SousCategoriee->setNomEn($selectSousCategorie->getNomEn());
                    $SousCategoriee->setPays($this->getUser()->getPays());
                    $SousCategoriee->setIsActive($selectSousCategorie->getIsActive());
                    $SousCategoriee->setParentId($selectSousCategorie->getId());
                    $em->persist($SousCategoriee);
                    //  $em->flush();
                }*/
                // $SousCategoriee->setCategorie($categoriee);

                $produit->setSousCategorie($SousCategoriee);

                $produit->setSousCategorieId($SousCategoriee->getId());

                $em->persist($produit);
                ///////////////////////////////


                ///create coleur  entity
                $selectColeursArray = $em->getRepository('WebBundle:Couleur')->findBy(array('produit'=>$selectProduit));
                //   $selectColeursArrayId=  $selectProduit->getCouleurs();

                if ($selectColeursArray){
                    foreach ($selectColeursArray as $selectColeur){


                        // $selectColeur = $em->getRepository('WebBundle:Couleur')->find($selectColId);
                        $color = new Couleur();
                        $color->setCodeCouleur($selectColeur->getCodeCouleur());
                        $color->setProduit($produit);
                        $color->setImage($selectColeur->getImage());

                        $selectSizes= $em->getRepository('WebBundle:Size')->findBy(array('couleur'=>$selectColeur->getId()));


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



                /////////////////////


            }



        }


        return $this->redirectToRoute('produit_gerant_index');

    }



    /**
     *
     * @Route("/activate_checked", name="activate_checked", methods={"GET","POST"})
     */
    public function activate_checked(Request $request){
        $em = $this->getDoctrine()->getManager();

        $checkedproduits= $request->get("checkboxvar","");
        //



        if ($checkedproduits){

            foreach ($checkedproduits as $checkedproduit){

                $selectProduit = $em->getRepository('WebBundle:Produits')->find($checkedproduit["id"]);

                $produit = new Produits();
                $produit->setPays($this->getUser()->getPays());
                $produit->setStation($this->getUser()->getStation());

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
                //   $selectCategorieFIRSTcLONE = $em->getRepository('WebBundle:Categories')->findOneBy(array("parent_id"=>$selectCategoriId,'pays'=>$this->getUser()->getPays()));
                $categoriee = $em->getRepository('WebBundle:Categories')->find($selectCategoriId);


                $produit->setCategorie($categoriee);
                $produit->setCategorieId($categoriee->getId());

                ///create sous_categorie  entity
                $selectSousCtegoriId =  $selectProduit->getSousCategorieId();
                $SousCategoriee = $em->getRepository('WebBundle:SousCategories')->find($selectSousCtegoriId);

                $produit->setSousCategorie($SousCategoriee);

                $produit->setSousCategorieId($SousCategoriee->getId());

                $em->persist($produit);
                ///////////////////////////////


                ///create coleur  entity
                $selectColeursArray = $em->getRepository('WebBundle:Couleur')->findBy(array('produit'=>$selectProduit));
                //   $selectColeursArrayId=  $selectProduit->getCouleurs();

                if ($selectColeursArray){
                    foreach ($selectColeursArray as $selectColeur){


                        // $selectColeur = $em->getRepository('WebBundle:Couleur')->find($selectColId);
                        $color = new Couleur();
                        $color->setCodeCouleur($selectColeur->getCodeCouleur());
                        $color->setProduit($produit);
                        $color->setImage($selectColeur->getImage());

                        $selectSizes= $em->getRepository('WebBundle:Size')->findBy(array('couleur'=>$selectColeur->getId()));


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



                /////////////////////


            }

        }

        return $this->redirectToRoute('activate_produits');
      //  return $this->redirectToRoute('produit_toactivate_index');

    }

    /**
     *
     * @Route("/editallstation", name="editallstation", methods={"GET","POST"})
     */
    public function editall(Request $request){
        $em = $this->getDoctrine()->getManager();
        $Mesproduits = $em->getRepository('WebBundle:Produits')->getProduitByStation($this->getUser()->getStation(),"","","");

        if ($Mesproduits){
            foreach ($Mesproduits as $produit){
                $Myproduit = $em->getRepository('WebBundle:Produits')->find($produit['id']);
            //    dump($Myproduit);die();

                $Myproduit->setIsActive(true);
                $em->persist($Myproduit);
            }
            $em->flush();

        }

        return $this->redirectToRoute('produit_gerant_index');


    }
    /**
     * @Route("/Activer_produits", name="Activer_produits", methods={"GET","POST"})
     */
    public function Activer_produits(Request $request){
     //   dump($request->get("produitIds"));


        $referer = $request->request->get('referer');
        if ($referer == "") return $this->redirectToRoute('produit_toactivate_index');
        return $this->redirect($request->request->get('referer'));
    }



    /**
     *
     * @Route("/{id}/activateproduit_gerant", name="activateproduit_gerant", methods={"GET"})
     */
    public function activateproduit_gerant($id)
    {
        $em = $this->getDoctrine()->getManager();

        $checkedproduit= $id;


        if ($checkedproduit){
           // foreach ($checkedproduits as $checkedproduit){

                $selectProduit = $em->getRepository('WebBundle:Produits')->find($checkedproduit);


                $produit = new Produits();
                $produit->setPays($this->getUser()->getPays());
                $produit->setStation($this->getUser()->getStation());

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
                $produit->setParentId($checkedproduit);

                ///create categorie  entity
                $selectCategoriId =  $selectProduit->getCategorieId();
                //    $selectCategorie = $em->getRepository('WebBundle:Categories')->find($selectCategoriId);
                $selectCategorieFIRSTcLONE = $em->getRepository('WebBundle:Categories')->findOneBy(array("parent_id"=>$selectCategoriId,'pays'=>$this->getUser()->getPays()));
                $selectCategorie = $em->getRepository('WebBundle:Categories')->find($selectCategoriId);
               /* $categoriee = new Categories();

                if ($selectCategorieFIRSTcLONE){
                    $categoriee = $selectCategorieFIRSTcLONE;
                    $categoriee->setNom($selectCategorieFIRSTcLONE->getNom());
                    $categoriee->setNomEn($selectCategorieFIRSTcLONE->getNomEn());
                    $em->persist($categoriee);


                }else{
                    $categoriee = new Categories();
                    $categoriee->setNom($selectCategorie->getNom());
                    $categoriee->setNomEn($selectCategorie->getNomEn());
                    $categoriee->setPays($this->getUser()->getPays());
                    $categoriee->setIsActive($selectCategorie->getIsActive());
                    $categoriee->setIsAuto($selectCategorie->getIsAuto());
                    $categoriee->setIsClothing($selectCategorie->getIsClothing());
                    $categoriee->setIsFood($selectCategorie->getIsFood());
                    $categoriee->setParentId($selectCategorie->getId());
                    $em->persist($categoriee);

                }*/


                $produit->setCategorie($selectCategorie);
                $produit->setCategorieId($selectCategoriId);


                ///create sous_categorie  entity
                $selectSousCtegoriId =  $selectProduit->getSousCategorieId();
                $selectSousCategorie = $em->getRepository('WebBundle:SousCategories')->find($selectSousCtegoriId);
            /* $selectSCatFIRSTcLONE = $em->getRepository('WebBundle:SousCategories')->findOneBy(array('parent_id'=>$selectSousCtegoriId,'pays'=>$this->getUser()->getPays()));
             $SousCategoriee = new SousCategories();

             if ($selectSCatFIRSTcLONE){
                 $SousCategoriee = $selectSCatFIRSTcLONE;
                 $SousCategoriee->setNom($selectSCatFIRSTcLONE->getNom());
                 $SousCategoriee->setNomEn($selectSCatFIRSTcLONE->getNomEn());
                 $em->persist($SousCategoriee);

             }else{
                 $SousCategoriee = new SousCategories();
                 $SousCategoriee->setCategorie($categoriee);
                 $SousCategoriee->setNom($selectSousCategorie->getNom());
                 $SousCategoriee->setNomEn($selectSousCategorie->getNomEn());
                 $SousCategoriee->setPays($this->getUser()->getPays());
                 $SousCategoriee->setIsActive($selectSousCategorie->getIsActive());
                 $SousCategoriee->setParentId($selectSousCategorie->getId());
                 $em->persist($SousCategoriee);

             }*/

                $produit->setSousCategorie($selectSousCategorie);
                $produit->setSousCategorieId($selectSousCtegoriId);




                ///create coleur  entity
                $selectColeursArray = $em->getRepository('WebBundle:Couleur')->findBy(array('produit'=>$selectProduit));
                //   $selectColeursArrayId=  $selectProduit->getCouleurs();

                if ($selectColeursArray){
                    foreach ($selectColeursArray as $selectColeur){


                        // $selectColeur = $em->getRepository('WebBundle:Couleur')->find($selectColId);
                        $color = new Couleur();
                        $color->setCodeCouleur($selectColeur->getCodeCouleur());
                        $color->setProduit($produit);
                        $color->setImage($selectColeur->getImage());

                        $selectSizes= $em->getRepository('WebBundle:Size')->findBy(array('couleur'=>$selectColeur->getId()));


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







           // return $this->redirectToRoute('produit_gerant_index');

        }


     //   return $this->redirectToRoute('activateproduit_gerant');
        return $this->redirectToRoute('produit_toactivate_index');

    }

    /**
     *
     * @Route("/{id}/{page}/enablegerant", name="enablegerant", methods={"GET"})
     */
    public function enable($id,Request $request,$page)
    {
        $em = $this->getDoctrine()->getManager();
        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");

        $checkedproduit= $id;
        $categories =$em->getRepository('WebBundle:Categories')->getCategorieByPays($this->getUser()->getPays(),"");
        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieByPays($this->getUser()->getPays(),"","");


        $produits =$em->getRepository('WebBundle:Produits')->getProduitByStation($this->getUser()->getStation(),$search,$categorie,$souscategorie);

     /*   $paginator = $this->get('knp_paginator');
        $produits_paginator = $paginator->paginate(
            $produits, 1, 10
        //Produits::NUM_ITEMS
        );
        $produits_paginator->setUsedRoute('produit_gerant_index_paginated');
*/

        $paginator = $this->get('knp_paginator');

        $produits_paginator = $paginator->paginate(
            $produits, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );


        ///////////////////////////////////////////////////
        if ($checkedproduit){
            // foreach ($checkedproduits as $checkedproduit){

            $selectProduit = $em->getRepository('WebBundle:Produits')->find($checkedproduit);
            if (  ($selectProduit->getMaxcommande()==0)   || ( $selectProduit->getQuantite()==0) || ( $selectProduit->getPrix()==0 ) ){
                ///show alert msg

                return $this->render('@Backend/gerant/produit/index.html.twig', [
                    'produits' => $produits_paginator,
                    'search' => $search,
                    'categorie' => $categorie,
                    'souscategorie' => $souscategorie,
                    'categories' => $categories,
                    'souscategories' => $souscategories,
                    'nbproduits' => $produits,
                    'pays' => $this->getUser()->getPays(),
                    'error'=>"1",
                    'page'=>$page


                ]);



            }else{

                $selectProduit->setIsActive(!$selectProduit->getIsActive());
                $em->persist($selectProduit);
                $em->flush();

                return $this->redirectToRoute('produit_gerant_index',array('page'=>$page,
                    'search' => $search,
                    'categorie' => $categorie,
                    'souscategorie' => $souscategorie,
                ));


            }

            //  }
        }



    }

}
