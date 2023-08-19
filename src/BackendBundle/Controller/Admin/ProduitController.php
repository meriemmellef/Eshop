<?php

namespace BackendBundle\Controller\Admin;


use BackendBundle\Form\ProduitType;
use BackendBundle\Form\StationType;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Validator\Constraints\File;
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
 * @Route("/produitadmin")
 */
class ProduitController extends Controller {

    /**
     *
     * @Route("/", name="produit_admin_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $page= $request->query->getInt('page', 1);
        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");
        $categories =$em->getRepository('WebBundle:Categories')->getCategorieAdmin("");
        $souscategories =$em->getRepository('WebBundle:SousCategories')->getSousCategorieAdmin("","");
        $produits =$em->getRepository('WebBundle:Produits')->getProduitSuperAdmin(null,$search,$categorie,$souscategorie);
       //dump($produits);die();
     //  dump($page);die();


     /*   $pays = $em->getRepository('WebBundle:Pays')->find(2) ; //Mg
       // $prodPaysMG =$em->getRepository('WebBundle:Produits')->findBy(array('pays'=>$pays));
        $prodSuperAdm =$em->getRepository('WebBundle:Produits')->findBy(array('pays'=>null));

        if ($prodSuperAdm){
            foreach ($prodSuperAdm as $Produit){
                $prodd = $em->getRepository('WebBundle:Produits')->findOneBy(array('image'=>$Produit->getImage()));
                if ($prodd){
                    $prodd->setParentId($Produit->getId()) ;
                    $em->persist($prodd);

                    $em->flush();
                }

            }
        }*/
        //   dump($this->getUser()->getPays());die();
        // get produit mg and activate in super admin  and categories sub categorie and activate in super admin add pays null station null

         /* $pays = $em->getRepository('WebBundle:Pays')->find(2) ;
          $prodPaysMG =$em->getRepository('WebBundle:Produits')->getProduitByPays($pays,$search,$categorie,$souscategorie,"");
          if($prodPaysMG){
              foreach ($prodPaysMG as $selectProduit){

                  $produit = new Produits();
                  //  $produit->setStation($this->getUser()->getStation());
                  $code=  intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9). rand(0,9). rand(0,9) );
                  $produit->setCode($code );
                  $produit->setNom($selectProduit['nom'] );
                  $produit->setNomen($selectProduit['nomen'] );
                  $produit->setDescription($selectProduit['description']);
                  $produit->setDescriptionen($selectProduit['descriptionen']);
                  $produit->setFile($selectProduit['file'] );
                  $produit->setPrix(0 );

                  $produit->setIsActive(false);
                  $produit->setQuantite(0);
                  $produit->setMaxcommande(0);

                  $produit->setCreatedAt(new \DateTime() );
                  $produit->setImage($selectProduit['image']);
                  $selectCategoriId =  $selectProduit['categorie_id'];
                //  $selectCategorieFIRSTcLONE = $em->getRepository('WebBundle:Categories')->findOneBy(array("parent_id"=>$selectCategoriId,'pays'=>$this->getUser()->getPays()));
                  $selectCategorie = $em->getRepository('WebBundle:Categories')->find($selectCategoriId);
                  $categoriee = new Categories();
                  $cattt = $em->getRepository('WebBundle:Categories')->findOneBy(array("nom"=>$selectCategorie->getNom(),'pays'=>null ));

                  if ($cattt){
                      $categoriee = $cattt ;
                  }else{
                      $categoriee->setNom($selectCategorie->getNom());
                      $categoriee->setIsActive($selectCategorie->getIsActive());
                      $categoriee->setIsAuto($selectCategorie->getIsAuto());
                      $categoriee->setIsClothing($selectCategorie->getIsClothing());
                      $categoriee->setIsFood($selectCategorie->getIsFood());

                      $em->persist($categoriee);

                  }
                  $selectCategorie->setParentId($categoriee->getId());

                  $em->persist($selectCategorie);



                  $produit->setCategorie($categoriee);
                  $produit->setCategorieId($categoriee->getId());

                  ///create sous_categorie  entity
                  $selectSousCtegoriId =  $selectProduit['sous_categorie_id'];
                  $selectSousCategorie = $em->getRepository('WebBundle:SousCategories')->find($selectSousCtegoriId);
               //   $selectSCatFIRSTcLONE = $em->getRepository('WebBundle:SousCategories')->findOneBy(array('parent_id'=>$selectSousCtegoriId,'pays'=>$this->getUser()->getPays()));

                  $Soucattt = $em->getRepository('WebBundle:SousCategories')->findOneBy(array("nom"=>$selectSousCategorie->getNom(),'pays'=>null ));
                  $SousCategoriee = new SousCategories();

                  if ($Soucattt){
                      $SousCategoriee = $Soucattt ;
                  }else{
                      $SousCategoriee->setCategorie($categoriee);
                      $SousCategoriee->setNom($selectSousCategorie->getNom());
                      //$SousCategoriee->setPays($this->getUser()->getPays());
                      $SousCategoriee->setIsActive($selectSousCategorie->getIsActive());
                      $em->persist($SousCategoriee);

                  }

                  /////
                  $selectSousCategorie->setParentId($SousCategoriee->getId());
                  $em->persist($selectSousCategorie);

                  // $SousCategoriee->setCategorie($categoriee);



                  $produit->setSousCategorie($SousCategoriee);

                  $produit->setSousCategorieId($SousCategoriee->getId());

                  ///create coleur  entity
                  $selectColeursArray = $em->getRepository('WebBundle:Couleur')->findBy(array('produit'=>$selectProduit['id']));
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
                      $prodS =$em->getRepository('WebBundle:Produits')->find($selectProduit['id']);
                      $prodS->setParentId($produit->getId());
                      $em->persist($prodS);

                      $em->flush();

                  }else{

                      $em->persist($produit);

                      $prodS =$em->getRepository('WebBundle:Produits')->find($selectProduit['id']);
                      $prodS->setParentId($produit->getId());

                      $em->persist($prodS);

                      $em->flush();

                  }
              }
          }
*/

        $paginator = $this->get('knp_paginator');
      /*  $produits_paginator = $paginator->paginate(
            $produits, $pageee, 10
        //Produits::NUM_ITEMS
        );
        //$produits_paginator->setUsedRoute('produit_admin_index_paginated');*/

        ////////////
        $produits_paginator = $paginator->paginate(
            $produits, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );
        return $this->render('@Backend/admin/produit/index.html.twig', [
            'produits' => $produits_paginator,
            'search' => $search,
            'categorie' => $categorie,
            'souscategorie' => $souscategorie,
            'categories' => $categories,
            'souscategories' => $souscategories,
            'nbproduits' => $produits,
            'page' => $page

        ]);
    }



    /**
     *
     * @Route("/activateall_admin", name="activateall_admin")
     * @Method("GET")
     */
    public function activateall_admin(Request $request){
        $em = $this->getDoctrine()->getManager();

        $Mesproduits =$em->getRepository('WebBundle:Produits')->getProduitSuperAdmin(null,"","","");
        if ($Mesproduits){
            foreach ($Mesproduits as $produit){
                $Myproduit = $em->getRepository('WebBundle:Produits')->find($produit['id']);

                $Myproduit->setIsActive(true);
                $em->persist($Myproduit);
            }
            $em->flush();

        }

        return $this->redirectToRoute('produit_admin_index');


    }
    /**
     * @Route("/get_sous_categorie_from_categorie_admin", name="get_sous_categorie_from_categorie_admin", methods={"GET"})
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
     * @Route("/new", name="new_produit_admin", methods={"GET","POST"})
     */
    public function newAction(Request $request)
    {
        $couleurs=$request->get('couleurs',array());
        $images=$request->files->get('images',array());
        $em = $this->getDoctrine()->getManager();
        $produit = new Produits();
        $formOptions = array('pays' => null);
        //$formOptions = array('pays' => $this->getUser()->getPays());

        $form = $this->createForm(ProduitType::class, $produit,$formOptions);

        $form->handleRequest($request);



            if ($form->isSubmitted() && $form->isValid()) {
            //
            $nomEn=  $form->get('nomen')->getData();
            $nomFR=  $form->get('nom')->getData();

            $produit->setPrix(0);
            $produit->setIsActive(false);
            $produit->setQuantite(0);
            $produit->setMaxcommande(0);
            ///////

          //  $file = $form['file']->getData() ;
           // $fileSize= filesize($file);

            if($filename = $this->uploadDocument($form['file']->getData(),"legal_notice_directory")){
                $produit->setFile($filename);
            }

            $image=  $form->get('imagefile')->getData();
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
                        $size->setQuantite(0);
                        $em->persist($size);
                    }
                }
                $em->persist($couleur);


            }
                $code=  intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9). rand(0,9). rand(0,9) );
                $produit->setCode($code );

                $em->persist($produit);

                if (!$nomFR){

                  //  dump($produit);die();

                    return $this->render('@Backend/admin/produit/new.html.twig', [
                        'produit' => $produit,
                        'form' => $form->createView(),
                        'error' => "2",
                    ]);
                }
                if (!$nomEn){

                    return $this->render('@Backend/admin/produit/new.html.twig', [
                        'produit' => $produit,
                        'form' => $form->createView(),
                        'error' => "2",
                    ]);

                }

           // $produit->setStation(null);
           // $produit->setPays(null);

         //   $produit->setDescription('');
            $em->flush();
            return $this->redirectToRoute('produit_admin_index');
          /*  $referer =$request->request->get('referer');
            if($referer == "") return $this->redirectToRoute('produit_admin_index');
            return $this->redirect($request->request->get('referer'));*/
        }

        return $this->render('@Backend/admin/produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    protected function getErrorMessages(\Symfony\Component\Form\Form $form)
    {
        $errors = array();

        foreach ($form->getErrors() as $key => $error) {
            $errors[] = $error->getMessage();
        }

        foreach ($form->all() as $child) {
            if (!$child->isValid()) {
                $errors[$child->getName()] = $this->getErrorMessages($child);
            }
        }

        return $errors;
    }
    /**
     * @Route("/{id}/{page}/edit", name="produit_admin_edit", methods={"GET","POST"})
     */
    public function editAction(Request $request, Produits $produit,$page)
    {

        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");


        $em = $this->getDoctrine()->getManager();
        $list_couleur = $em->getRepository('WebBundle:Couleur')->getcouleurByProduit($produit->getId());
      //  $formOptions = array('pays' => $this->getUser()->getPays());
        $formOptions = array('pays' => null);

        $form = $this->createForm(ProduitType::class, $produit, $formOptions);
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

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $nomEn=  $form->get('nomen')->getData();
            $nomFR=  $form->get('nom')->getData();
            if (!$nomFR){
                return $this->render('@Backend/admin/produit/edit.html.twig', [
                    'produit' => $produit,
                    'form' => $form->createView(),
                    'list_couleur' => $list_couleur,
                    'error' => "2",
                ]);
            }
            if (!$nomEn){
                return $this->render('@Backend/admin/produit/edit.html.twig', [
                    'produit' => $produit,
                    'form' => $form->createView(),
                    'list_couleur' => $list_couleur,
                    'error' => "2",
                ]);


            }

            $produit->setIsActive(false);

            $couleurs = $request->get('couleurs', array());
            $images = $request->files->get('images', array());
            $image = $form->get('imagefile')->getData();




            if($filename = $this->uploadDocument($form['file']->getData(),"legal_notice_directory")){
                $produit->setFile($filename);
            }
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
            }
            foreach ($couleurs as $key => $c) {
                $couleur = $em->getRepository('WebBundle:Couleur')->findOneBy(array('codeCouleur' => $c, 'produit' => $produit));

                if ($couleur) {
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
                    $sizes = $request->get('sizes' . $key, array());
                    $quantity = $request->get('quantity' . $key, array());
                    //  dump($key);die;
                    foreach ($sizes as $key => $s) {
                        $size = $em->getRepository('WebBundle:Size')->findOneBy(array('couleur' => $couleur, 'produit' => $produit, 'libelle' => $s));
                        if ($size) {
                            if ($quantity[$key] > 0) {
                                $size->setQuantite($quantity[$key]);
                                $em->merge($size);
                            }

                        } else {
                            if ($quantity[$key] > 0) {
                                $size = new Size();
                                $size->setLibelle($s);
                                $size->setCouleur($couleur);
                                $size->setProduit($produit);
                                $size->setQuantite($quantity[$key]);
                                $em->persist($size);
                            }

                        }

                    }
                    $em->merge($couleur);
                } else {
                    $couleur = new Couleur();
                    $couleur->setCodeCouleur($c);
                    $couleur->setProduit($produit);
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
                    $sizes = $request->get('sizes' . $key, array());
                    $quantity = $request->get('quantity' . $key, array());
                    foreach ($sizes as $key => $s) {
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
            }
            $em->flush();
           /* $referer = $request->request->get('referer');
            if ($referer == "") return $this->redirectToRoute('produit_admin_index');
            return $this->redirect($request->request->get('referer'));*/

            return $this->redirectToRoute('produit_admin_index',array(
                'page'=>$page,
                'search'=>$search,
                'categorie'=>$categorie,
                'souscategorie'=>$souscategorie)
            );
        }

        return $this->render('@Backend/admin/produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
            'list_couleur' => $list_couleur
        ]);
    }



    /**
     * disable station.
     *
     * @Route("/{idcouleur}/{idproduit}/delete_couleur_admin", name="delete_couleur_admin", methods={"GET"})
     */
    public function deleteCouleurAction($idcouleur,$idproduit)
    {
        $em = $this->getDoctrine()->getManager();
        $couleur =$em->getRepository('WebBundle:Couleur')->find($idcouleur);
        if($couleur && ($couleur->getProduit()->getPays() == $this->getUser()->getPays())){
            $produit =$em->getRepository('WebBundle:Produits')->find($idproduit);
            $sizes= $em->getRepository('WebBundle:Size')->findBy(array('couleur'=>$couleur,'produit'=>$produit));
            foreach($sizes as $size) {
                $em->remove($size);
               /* if($size->getProduit()->getPays() == $this->getUser()->getPays()) {
                    $em->remove($size);
                }*/
            }
            $em->remove($couleur);
            $em->flush();
            return $this->redirectToRoute('produit_admin_index',array('id'=>$idproduit));
        }
        else{
            return $this->redirectToRoute('produit_admin_index',array('id'=>$idproduit));
        }

    }
    /**
     * disable station.
     *
     * @Route("/{id}/{idproduit}/delete_size_admin", name="delete_size_admin", methods={"GET"})
     */
    public function deleteSizeAction($id,$idproduit)
    {
        $em = $this->getDoctrine()->getManager();
        $size= $em->getRepository('WebBundle:Size')->find($id);
        if($size && ($size->getProduit()->getPays() == $this->getUser()->getPays())) {
            $em->remove($size);
            $em->flush();
            return $this->redirectToRoute('produit_admin_index', array('id' => $idproduit));
        }
        else{
            return $this->redirectToRoute('produit_admin_index', array('id' => $idproduit));
        }
    }
    /**
     * disable station.
     *
     * @Route("/edit_size_admin", name="edit_size_admin", methods={"GET"})
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
     * @Route("/{id}/{page}/disable", name="produit_admin_disable", methods={"GET"})
     */
    public function disableAction(Produits $produit,$page)
    {
        $em = $this->getDoctrine()->getManager();
        $onestation =$em->getRepository('WebBundle:Produits')->find($produit->getId());
        if($onestation && ($onestation->getPays() == $this->getUser()->getPays())){
            $onestation->setIsActive(false);
            $em->persist($onestation);
            $em->flush();
            //['page' => 1]
            return $this->redirectToRoute('produit_admin_index',array('page'=>$page));
        }
        else{
            return $this->redirectToRoute('produit_admin_index',array('page'=>$page));
        }

    }
    /**
     * @Route("/{id}/{page}/enableadmin", name="enableadmin", methods={"GET","POST"})
     */
    public function enbleAction(Produits $produit,$page,Request $request)
    {
        $pageeee =$request->get('page',$page) ;
        $request->query->get('page');

        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");

        $em = $this->getDoctrine()->getManager();
        $onestation =$em->getRepository('WebBundle:Produits')->find($produit->getId());
        $onestation->setIsActive(!$onestation->getIsActive());
        $em->persist($onestation);
        $em->flush();

        return $this->redirectToRoute('produit_admin_index',array('page'=>$pageeee,
                         'search'=>$search,
                      'categorie'=>$categorie,
                'souscategorie'=>$souscategorie
));


    }


    /**
     * @Route("/{id}/{page}/deleteproduitadmin", name="deleteproduitadmin", methods={"GET","POST"})
     */
    public function deleteAction(Produits $produit,Request $request, $page)
    {
        $em = $this->getDoctrine()->getManager();
       // dump($page);die();
      //  $page=$request->get('page',"");
        $search=$request->get('search',"");
        $categorie=$request->get('categorie',"");
        $souscategorie=$request->get('souscategorie',"");



        $onestation =$em->getRepository('WebBundle:Produits')->find($produit->getId());
        try {
            $em->remove($onestation);
            $em->flush();
        }catch (\Exception $exception){

        }

        return $this->redirectToRoute('produit_admin_index',array('page'=>$page,
            'search'=>$search,
            'categorie'=>$categorie,
            'souscategorie'=>$souscategorie
        ));


    }
    /**
     * @Route("/Liste_des_produits_admin", name="ExportProduit_admin" ,defaults={"_format"="xls","_filename"="Liste_des_stations"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/StationExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);

        if(array_key_exists('search',$output)) $search=$output['search']; else $search='';
        if(array_key_exists('categorie',$output)) $categorie=$output['categorie']; else $categorie='';
        if(array_key_exists('souscategorie',$output)) $souscategorie=$output['souscategorie']; else $souscategorie='';
        $produits =$em->getRepository('WebBundle:Produits')->getProduitSuperAdmin(null,$search,$categorie,$souscategorie);
        return $this->render('@Backend/excel/gerant/ProduitAdmin.xlsx.twig', array(
            'Modeles' => $produits,
        ));
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
