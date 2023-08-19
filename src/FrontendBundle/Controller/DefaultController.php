<?php

namespace FrontendBundle\Controller;

use FOS\UserBundle\Util\TokenGeneratorInterface;
use FrontendBundle\Services\SmsHelper;
use Gregwar\CaptchaBundle\Type\CaptchaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Sonata\CoreBundle\Tests\Form\Type\Choice;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\SecurityContext;
use WebBundle\Entity\ContactUsFormClass;
use Symfony\Component\HttpFoundation\Request;
use WebBundle\Entity\Station;
use WebBundle\Entity\Utilisateurs;

class DefaultController extends BaseController
{

    public function modalStationAction()
    {
        $this->initSession();

        $stations = $this->getDoctrine()->getRepository('WebBundle:Station')->findBy(array("isActive" => 1, "isDeleted" => 0, "pays" => $this->pays));
        $stations_array = array();
        //dump($stations);die();
        foreach ($stations as $station) {
            if ($station->getZone())
                $stations_array[$station->getZone()->getNom()][] = $station;
        }
        //   return $this->render('FrontendBundle:Default:selectStationMap.html.twig',array("stations" => $stations_array));// array("stationL" => $arrayS,"stations" => $stations_array)
      return $this->render('FrontendBundle:Default:selectStation.html.twig', array("stations" => $stations_array));}
   // return $this->render('FrontendBundle:Default:chooseStaTest.html.twig', array("stations" => $stations_array));}
    // return $this->render('FrontendBundle:Default:chooseStaTest.html.twig', array("stations" => $stations_array));}

    /**
     * @Route("/choosestation", name="choosestation")
     */
    public function choosestationAction()
    {
        $this->initSession();


        $stations = $this->getDoctrine()->getRepository('WebBundle:Station')->findBy(array("isActive" => 1, "isDeleted" => 0, "pays" => $this->pays));
        $stations_array = array();

        //dump($stations);die();


        foreach ($stations as $station) {
            if ($station->getZone())
                $stations_array[$station->getZone()->getNom()][] = $station;
        }


     //   return $this->render('FrontendBundle:Default:chooseStation.html.twig', array("stations" => $stations_array));
        return $this->render('FrontendBundle:Default:chooseStaTest.html.twig', array("stations" => $stations_array));
    }


    /**
     * @Route("/modalStationMapAction", name="modalStationMapAction")
     */
    public function modalStationMapAction()
    {
        $this->initSession();


        $stations = $this->getDoctrine()->getRepository('WebBundle:Station')->findBy(array("isActive" => 1, "isDeleted" => 0, "pays" => $this->pays));
        $stations_array = array();

        //dump($stations);die();


        foreach ($stations as $station) {
            if ($station->getZone())
                $stations_array[$station->getZone()->getNom()][] = $station;
        }


        return $this->render('FrontendBundle:Default:selectStationMap.html.twig', array("stations" => $stations_array));
    }

    /**
     * @Route("/getliststation", name="getliststation", methods={"GET","POST"})
     */
    public function getStationAction(Request $request)
    {
        $this->initSession();

        $arrayS = [];
        $stations = $this->getDoctrine()->getRepository('WebBundle:Station')->findBy(array("isActive" => 1, "isDeleted" => 0, "pays" => $this->pays));

        foreach ($stations as $station) {
            $itemS = null;
            $itemS['id'] = $station->getId();
            if ($station->getLatitude()) {
                $itemS['latitude'] = $station->getLatitude();

            } else {
                $itemS['latitude'] = 0;

            }

            if ($station->getLongitude()) {
                $itemS['longitude'] = $station->getLongitude();

            } else {
                $itemS['longitude'] = 0;

            }
            $itemS['nom'] = $station->getNom();
            $itemS['address'] = $station->getAdresse();
            $arrayS[] = $itemS;

        }
        return new JsonResponse(array('results' => $arrayS));
    }


    /**
     * @Route("/country", name="select_country")
     */
    public function selectCountryAction(Request $request)
    {
        //  dump(  $this->getRequest()->getPreferredLanguage());die();

        //$locale = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);

        /*  $PreferredLanguage =  $_SERVER['HTTP_ACCEPT_LANGUAGE'];

          $pos = strpos($PreferredLanguage, "en");

          if ($pos){
              $this->initSession();
              $this->session->set('_locale', "en");

          }else{
              $this->initSession();
              $this->session->set('_locale', "fr");

          }
                $this->initSession();
          $this->session->set('_locale', "en");

        */

        $this->session = $this->getRequest()->getSession();

        $PreferredLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        $pos = strpos($PreferredLanguage, "en");

        if ($pos === false) {

            $this->session->set('_locale', "fr");

        } else {
            $this->session->set('_locale', "en");

        }


        //i added this for mg because if we tap other country in url it works


        //for test     return $this->redirectToRoute('select_country_trans');

        // dump($request->headers->get('referer'));die();


        $pays = $this->getDoctrine()->getRepository('WebBundle:Pays')->findBy(array("isActive" => 1));


        return $this->render('FrontendBundle:Default:select_country.html.twig', array("pays" => $pays));
    }

    /**
     * @Route("/select_country", name="select_country_trans")
     */
    public function selectCountryFromtransAction(Request $request)
    {

        $referer = $request->headers->get('referer');

        return $this->redirect($referer);
        $pays = $this->getDoctrine()->getRepository('WebBundle:Pays')->findBy(array("isActive" => 1));
        //  dump($pays);die();
        return $this->render('FrontendBundle:Default:select_country.html.twig', array("pays" => $pays));
    }

    /**
     * @Route("/", name="homepage_frontend")
     */
    public function indexAction(Request $request)
    {

         $this->initSession();

        $this->session = $this->getRequest()->getSession();
        $this->initCategorie();

        $station_id = $this->session->get("station_id", "");
       // $this->pays = $this->getDoctrine()->getRepository("WebBundle:Pays")->findOneBy(array("code"=>strtolower("mg"),"isActive"=>1));

    // dump($this->pays);die();
        if ($this->pays) {
            $stations = $this->getDoctrine()->getRepository('WebBundle:Station')->findBy(array("pays" => $this->pays));
            if (sizeof($stations) == 0) return $this->redirectToRoute("select_country");
        }

        if ($station_id){
            $produits = $this->getDoctrine()->getRepository('WebBundle:Produits')->getTopProduits(6, $station_id);
            $produitspromo = $this->getDoctrine()->getRepository('WebBundle:Produits')->getPromoProduits(4, $station_id);
           $categories_collection = $this->getDoctrine()->getRepository("WebBundle:Categories")->getAllCategories($this->pays->getCode(),$station_id);
            $this->session->set("categorie", $categories_collection);
        }else{
            $produits=[];
            $produitspromo=[];
            $categories_collection=[];
           // $this->session->set("categorie", []);


        }


        if ($this->getUser()) $favoris = $this->getDoctrine()->getRepository('WebBundle:Favoris')->getfavorisByUser($this->getUser()->getId());
        else $favoris = null;
        $request = $this->container->get('request');
        $routeName = $request->get('_route');

        ////render les categorie in coutry

      /* was  $categories = array("auto"=>array(),"food"=>array(),"clothing"=>array(),"other"=>array());
        foreach ($categories_collection as $category) {
            $categories["other"][] = $category;
        }*/
        //


        return $this->render('FrontendBundle:Default:index.html.twig', array(
            'produits' => $produits,
            'produitspromo' => $produitspromo,
            'cp' => $routeName,
            'favoris' => $favoris,
            'categories'=>$categories_collection
          //  'categories'=>$this->initCategorie()
        ));

    }


    /**
     * @Route(path="/ViewAll", name="view_all")
     */
    public function ViewAllAction(Request $request)
    {
        $this->initSession();

        $station_id = $this->session->get("station_id", "");
        $subcategorie_id = $request->get("subcategorie_id", "");

        if ($this->pays) {
            $stations = $this->getDoctrine()->getRepository('WebBundle:Station')->findBy(array("pays" => $this->pays));
            if (sizeof($stations) == 0) return $this->redirectToRoute("select_country");

        }

        $produits = $this->getDoctrine()->getRepository('WebBundle:Produits')->getAllProducts(6, $station_id);
        $produitspromo = $this->getDoctrine()->getRepository('WebBundle:Produits')->getAllPromoProduits($station_id,$subcategorie_id);

        if ($this->getUser()) $favoris = $this->getDoctrine()->getRepository('WebBundle:Favoris')->getfavorisByUser($this->getUser()->getId());
        else $favoris = null;
        $request = $this->container->get('request');
        $routeName = $request->get('_route');
        $categories_collection = $this->getDoctrine()->getRepository("WebBundle:Categories")->getAllCategories($this->pays->getCode(),$station_id);
        $categories = array("auto"=>array(),"food"=>array(),"clothing"=>array(),"other"=>array());
        foreach ($categories_collection as $category) {
            /*if ($category->isFood()) {
                $categories["food"][] = $category;
            }
            elseif ($category->isAuto()){
                $categories["auto"][] = $category;
            }
            elseif ($category->isClothing()) {
                $categories["clothing"][] = $category;
            }
            else {
                $categories["other"][] = $category;
            }*/
            $categories["other"][] = $category;

        }

        return $this->render('FrontendBundle:Default:view_all.html.twig', array(
            'produits' => $produits,
            'produitspromo' => $produitspromo,
            'cp' => $routeName,
            'favoris' => $favoris,
             "categories" => $categories)
        );
    }

//detail_produits



    /**
     * @Route(path="/detail_produits", name="detail_produits",methods={"GET","POST"})
     */
    public function DetailProductAction(Request $request)
    {


        $selectedProdId = $request->get("produitid", "");


        $this->initSession();

        $station_id = $this->session->get("station_id", "");
        if ($this->pays) {
            $stations = $this->getDoctrine()->getRepository('WebBundle:Station')->findBy(array("pays" => $this->pays));
            if (sizeof($stations) == 0) return $this->redirectToRoute("select_country");

        }

        $selectedProd = $this->getDoctrine()->getRepository('WebBundle:Produits')->getProductInstationById($station_id,$selectedProdId);
     //  $selectedProd0 = $this->getDoctrine()->getRepository('WebBundle:Produits')->find($selectedProdId);


        if ($selectedProd){
            $categorie_id = $selectedProd->getCategorie()->getId();

        }else{
            $categorie_id = "";

        }




        $similairProducts = $this->getDoctrine()->getRepository('WebBundle:Produits')->getProduitsWithoutsubcatgerorie("", $categorie_id, "", "", "", "", $station_id);

//$station_id


        if ($this->getUser()) $favoris = $this->getDoctrine()->getRepository('WebBundle:Favoris')->getfavorisByUser($this->getUser()->getId());
        else $favoris = null;
        $request = $this->container->get('request');
        $routeName = $request->get('_route');


        return $this->render('FrontendBundle:Default:detailsproduit.html.twig', array(
            'produits' => $similairProducts,
            'produit' => $selectedProd,
            'cp' => $routeName,
            'favoris' => $favoris));
    }




    /**
     * @Route(path="/view_products", name="view_products")
     */
    public function ViewOurProdAction(Request $request)
    {
        $this->initSession();


        $station_id = $this->session->get("station_id", "");
        $subcategorie_id = $request->get("subcategorie_id", "");

        if ($this->pays) {
            $stations = $this->getDoctrine()->getRepository('WebBundle:Station')->findBy(array("pays" => $this->pays));
            if (sizeof($stations) == 0) return $this->redirectToRoute("select_country");

        }

        $produits = $this->getDoctrine()->getRepository('WebBundle:Produits')->getAllProducts(6, $station_id);
        $allproduits = $this->getDoctrine()->getRepository('WebBundle:Produits')->getAllProduits($station_id,$subcategorie_id);

        if ($this->getUser()) $favoris = $this->getDoctrine()->getRepository('WebBundle:Favoris')->getfavorisByUser($this->getUser()->getId());
        else $favoris = null;
        $request = $this->container->get('request');
        $routeName = $request->get('_route');

        $categories_collection = $this->getDoctrine()->getRepository("WebBundle:Categories")->getAllCategories($this->pays->getCode(),$station_id);
        $categories = array("auto"=>array(),"food"=>array(),"clothing"=>array(),"other"=>array());
        foreach ($categories_collection as $category) {
            /*if ($category->isFood()) {
                $categories["food"][] = $category;
            }
            elseif ($category->isAuto()){
                $categories["auto"][] = $category;
            }
            elseif ($category->isClothing()) {
                $categories["clothing"][] = $category;
            }
            else {
                $categories["other"][] = $category;
            }*/
            $categories["other"][] = $category;

        }


        return $this->render('FrontendBundle:Default:view_all_products.html.twig', array(
            'produits' => $produits,
            'produitspromo' => $allproduits,
            'cp' => $routeName,
            'favoris' => $favoris,
            "categories" => $categories ));
    }





    //  /**
    //  * @Route("/contact", name="contact_us")
    //  */
    /*
    public function contactAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $contactEntity = new ContactUsFormClass();


        $form = $this->createFormBuilder($contactEntity)
            ->add('civilite', ChoiceType::class,
                array('choices' => array(
                    'M.' => 'Monsieur',
                    'Mme.' => 'Madame'),
                    'choices_as_values' => true,
                    'multiple'=>false,
                    'expanded'=>true))
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('adresse', TextType::class)
            ->add('ville', TextType::class)
            ->add('zone', TextType::class)
            ->add('email', EmailType::class,array('required' => true ))
            ->add('tel', TextType::class,array('required' => true ))
            ->add('object', ChoiceType::class,array(
                'required' => true,
                'multiple'=>true,
                'choices'=>array(
                    'Prix'=>'Prix',
                    'Réclamation'=>'Réclamation',
                    'Assistance technique'=>'Assistance technique',
                    'Formation'=>'Formation',
                    'Autre'=>'Autre',
                ),
            ))
            ->add('sujet', TextType::class,array('required' => true ))
            ->add('message', TextareaType::class)
            ->add('captcha', CaptchaType::class,array(
                'reload' => true,
                'as_url' => true,
            ))
            ->getForm();
        $done = 0;
        if ($this->get('request')->getMethod() == 'POST') {
            $form->handleRequest($this->getRequest());
            //var_dump($form->getData());die();
            if ($form->isValid()) {
                $sexe = $contactEntity->getCivilite();
                $nom = $contactEntity->getNom();
                $prenom = $contactEntity->getPrenom();
                $ville = $contactEntity->getVille();
                $zone = $contactEntity->getZone();
                $email = $contactEntity->getEmail();
                $tel = $contactEntity->getTel();
                $objet = $contactEntity->getObject();
                $adresse = $contactEntity->getAdresse();
                $sujet = $contactEntity->getSujet();
                $message = $contactEntity->getMessage();


                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact utilisateur')
                    ->setFrom(array($email => "Utilisateur Total B2B"))
                    ->setTo("b2b.total@gmail.com")
                    ->setCharset('utf-8')
                    ->setContentType('text/html')
                    ->setBody($this->renderView('FrontendBundle:SwiftLayout:contactContent.html.twig', array(
                        'sexe' => $sexe,
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'adresse' => $adresse,
                        'ville' => $ville,
                        'zone' => $zone,
                        'email' => $email,
                        'tel' => $tel,
                        'objet' => $objet,
                        'sujet' => $sujet,
                        'msg' => $message)), 'text/html');

                $this->get('mailer')->send($message);
                $done = 1;
            }
        }
        $request = $this->container->get('request');
        $routeName = $request->get('_route');
        return $this->render('FrontendBundle:Default:contact.html.twig',array('cp'=>$routeName,'form' => $form->createView(),'done'=>$done));
    }
    */

    /**
     * @Route("/cart")
     */
    public function cartAction()
    {
        return $this->render('@Frontend/Default/cart.html.twig');
    }

    /**
     * @Route("/produits", name="list_produits")
     */
    public function produitsAction()
    {
        return $this->render('FrontendBundle:Default:produits.html.twig');
    }

    /**
     * @Route("/detailsproduit", name="details_produit")
     */
    public function detailsproduitAction()
    {
        return $this->render('FrontendBundle:Default:detailsproduit.html.twig');
    }

    /**
     * @Route("/setStation", name="setStation")
     */
    public function setStationAction(Request $request)
    {
        $station_id = $request->get("station_id");
        $this->initSession();
        $this->session->set('station_id', $station_id);
        $this->session->set('panier', array());
        if ($this->session->get("pays", "")) {
            $to = $this->pays->getFrontLanguage();
            $this->session->set('_locale', $to);
        } else {
            $this->session->set('_locale', "en");

        }
       return $this->redirectToRoute("homepage_frontend");
      //  $referer = $request->headers->get('referer');
      //  return $this->redirect($referer);

    }

    /**
     * @Route("/getConditionVente", name="getConditionVente")
     */
    public function getConditionVenteAction(Request $request)
    {
        $session = $this->initSession();
        $id = $session->get("station_id", 0);
        $em = $this->initEntityManager();
        /**
         * @var Station $station
         */
        $station = $em->getRepository("WebBundle:Station")->find($id);
        if ($station) echo "/uploads/condition_vente/" . $station->getFileVente();
        echo "#";
        die;
    }


    /**
     * @Route("/translate", name="translate")
     */
    public function translationAction(Request $request)
    {
        /* $language =   $this->pays->getFrontLanguage(); //$this->session->get("station_id", "");

          if ($language){
              // $this->session->set('_locale', "en");
              // $referer = $request->headers->get('referer');
              //  return $this->redirect($referer);


              $this->session->set('_locale', $language);


              $referer = $request->headers->get('referer');
              return $this->redirect($referer);

          }*/
        // $this->session->set('_locale', "en");
        /*  if ($this->session->get("pays", "")){

              $to= $this->pays->getFrontLanguage();
              $this->session->set('_locale', $to);

              // $this->get('request')->attributes->set('_locale', "en");

          }else{
              $this->session->set('_locale', "en");
              //    $this->get('request')->attributes->set('_locale', "en");

          }*/
        $this->session = $this->getRequest()->getSession();

        $to = $request->get('to', 'en');

        $this->session->set('_locale', $to);
        return $this->redirectToRoute("select_country_trans");

        /*$referer = $request->headers->get('referer');


        return $this->redirect($referer);*/


    }

    /**
     * @Route("/translatelogin", name="translatelogin")
     */
    public function translationLoginAction(Request $request)
    {

        $to = $request->get('to', 'fr');
        $this->session->set('_locale', $to);
        return $this->redirectToRoute('app_login');

    }


    /**
     * @Route("/translatelanding", name="translatelanding")
     */
    public function translatelandingAction(Request $request)
    {
        $this->session = $this->getRequest()->getSession();


        $to = $request->get('to', 'en');


        $this->session->set('_locale', $to);
        return $this->redirectToRoute('select_country_trans');


        $referer = $request->headers->get('referer');
        if ($referer) {
            return $this->redirect($referer);

        } else {
            return $this->redirectToRoute('select_country');
        }
        /*   $this->session = $this->getRequest()->getSession();

           $to = $request->get('to', 'en');

           $this->session->set('_locale', $to);
           return $this->redirectToRoute("select_country_trans");*/

        // dump( $this->session->get('_locale'));die();

        // return $this->render('FrontendBundle:Default:select_country.html.twig', array("pays"=>$pays));

    }

    /**
     * @Route("/sendSmstest", name="sendSmstest")
     */
    public function sendSmstest(Request $request)
    {
        $em = $this->initEntityManager();
        $this->initSession();


        /*  $em = $this->initEntityManager();
          $this->initSession();

          $smsHelper = new SmsHelper();
         $resultsmsGerant = $smsHelper->sendSms("216"."55409569", "hello it is me ");
          $pays = $this->session->get("pays","");

          $pays = $em->getRepository('WebBundle:Pays')->find($pays->getId());*/

        $pays = $this->session->get("pays", "");

        $pays = $em->getRepository('WebBundle:Pays')->find($pays->getId());
        $id = "107";

        $commande = $em->getRepository('WebBundle:Commandes')->find($id);
        $produits = $em->getRepository("WebBundle:Commande_Produit")->findBy(array('commande' => $commande));

        if ($pays) {
            $smsHelper = new SmsHelper();

            /***send sms to client ***/
            if ($pays->getSmsConfirmCommand() and $pays->getIsActiveSmsConfirmCommand()) {
                $messageClient = $pays->getSmsConfirmCommand();

                $messageClient = str_replace('%NUM%', $commande->getId(), $messageClient);
                //  dump("messageClientNUM".$messageClient);
                $productsName = "";
                $data1 = "";
                if ($produits) {
                    foreach ($produits as $produit) {
                        $productsName .= "," . $produit->getProduit()->getNom();

                    }
                }
                //dump($productsName);die();
                $messageClient = str_replace('%PRODUCTNAME%', $productsName, $messageClient);


                //  $messageClient = str_replace('%PRODUCTNAME%',  $produits[0]->getProduit()->getNom(), $messageClient);

                if ($commande->getDateReservation()) {
                    //$period = ;
                    $messageClient = str_replace('%DATE%',
                        $commande->getDateReservation()->format('Y-m-d ') . ' ' .
                        $commande->getPeriodeToString(), $messageClient);
                } else {
                    $messageClient = str_replace('%DATE%', $commande->getCreatedAt()->format('Y-m-d  H:i'), $messageClient);
                }


                $messageClient = str_replace('%STATION%', trim($commande->getStation()->getNom()), $messageClient);
                $messageClient = str_replace('%QRCODE%', $commande->getUid(), $messageClient);
                //  dump($commande->getUid());
                //  dump($messageClient);
                //   die();

                $messageClient = str_replace('%CLIENTPHONE%', $commande->getUtilisateur()->getTel(), $messageClient);
                $messageClient = str_replace('%CLIENTNAME%', trim($commande->getUtilisateur()->getUsername()), $messageClient);
                $messageClient = preg_replace('/(\v|\s)+/', ' ', $messageClient);

                ///send sms to client
                // dump($messageClient);
                $resultsmsClient = $smsHelper->sendSms($pays->getCodePhone() . "55409569", $messageClient);//
                //    $resultsmsClient = $smsHelper->sendSms($pays->getCodePhone().$commande->getUtilisateur()->getTel(), $messageClient);//
                dump("resultsmsClient");
                dump($resultsmsClient);

                //  die();
                //  dump($resultsmsClient);
                //  die();


                //   dump("smstoclient".$pays->getCodePhone().$commande->getUtilisateur()->getTel());
                //  dump("messageClient".$messageClient);
            }

            //   dump("getSmsConfirmCommand".$pays->getSmsConfirmCommand());
            //     dump("getIsActiveSmsConfirmCommand".$pays->getIsActiveSmsConfirmCommand());

            /***send sms to gerant ***/
            if ($pays->getSmsNewCommand() and $pays->getIsActiveSmsNewCommand()) {
                $messageGerant = $pays->getSmsNewCommand();

                $messageGerant = str_replace('%NUM%', $commande->getId(), $messageGerant);

                $productsName = "";
                if ($produits) {
                    foreach ($produits as $produit) {
                        $productsName .= "," . $produit->getProduit()->getNom();
                    }
                }
                $messageGerant = str_replace('%PRODUCTNAME%', $productsName, $messageGerant);


                if ($commande->getDateReservation()) {
                    //$period = ;
                    $messageGerant = str_replace('%DATE%',
                        $commande->getDateReservation()->format('Y-m-d ') . ' ' .
                        $commande->getPeriodeToString(), $messageGerant);
                } else {
                    $messageGerant = str_replace('%DATE%', $commande->getCreatedAt()->format('Y-m-d  H:i'), $messageGerant);
                }

                $messageGerant = str_replace('%CLIENTNAME%', $commande->getUtilisateur()->getUsername(), $messageGerant);
                $messageGerant = str_replace('%CLIENTPHONE%', $commande->getUtilisateur()->getTel(), $messageGerant);


                if ($commande->getStation()->getGerant()) {
                    $messageGerant = preg_replace('/(\v|\s)+/', ' ', $messageGerant);

                    $resultsmsGerant = $smsHelper->sendSms($pays->getCodePhone() . "55409569", $messageGerant);
                    // $resultsmsGerant = $smsHelper->sendSms($pays->getCodePhone().$commande->getStation()->getGerant()->getTel(), $messageGerant);
                    // dump("resultsmsGerant");
                    //  dump($resultsmsGerant);
                    //  die();

                }
                // dump("smstoGerant".$pays->getCodePhone().$commande->getStation()->getGerant()->getTel());

                ///send to
            }


            //  dump($pays);

            //////send sms to superadmin////
        }

        die();

    }



    /**
     * @Route("/forgetPassword", name="updatePasswordApi")
     * @param Utilisateurs $user
     */
    public function updatePasswordAction(Request $request)
    {


        $em = $this->initEntityManager();
        $this->initSession();
        // $this->get('session')->remove('forgetpassword');
        // $this->get('session')->remove('forgetpswdfail');

        //$email = $request->get("email", "");


       /// recaptcher check
        $recaptcha  = $request->get('g-recaptcha-response',"") ;

        if ($this->verifyRecaptcha($recaptcha)){


            $email = $request->get("username", "wannassirahma@gmail.com");

            $user = $em->getRepository('WebBundle:Utilisateurs')->findOneBy(array("email" => $email));
            $pays = $this->session->get("pays", "");
            $pays = $em->getRepository('WebBundle:Pays')->find($pays->getId());


            /**
             * @var Utilisateurs $user
             */
            if ($user) {

                if (null === $user->getConfirmationToken()) {
                    /** @var $tokenGenerator TokenGeneratorInterface */
                    $tokenGenerator = $this->get('fos_user.util.token_generator');
                    $user->setConfirmationToken($tokenGenerator->generateToken());
                }

             //   $resultat=  $this->get('fos_user.mailer')->sendResettingEmailMessage($user);
                $user->setPasswordRequestedAt(new \DateTime());
                $this->get('fos_user.user_manager')->updateUser($user);

              ///  $url = $this->get('router')->generate('fos_user_registration_confirm', array('token' => $user->getConfirmationToken()), true);
                $url = $this->get('router')->generate('fos_user_resetting_reset', array('token' => $user->getConfirmationToken()), true);
                $resultat = $this->sendMail($user->getEmail(), "Forgot your password", "emails/forgetPassword.html.twig",$url, $user, $pays);

                return $this->render('FrontendBundle:Resetting:request.html.twig', [
                    'success' => '0'
                ]);









                //$generator = rand(10000, 99999);
              /*  $numSeed = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $getNumber = "";
                for ($i = 0; $i < 9; $i++) {
                    $getNumber .= $numSeed[rand(0, strlen($numSeed))];

                }

                $generator = $getNumber . "*";
                //dump($generator);die();
                $user->setPlainPassword($generator);
                $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $user->getPlainPassword());
                $user->setPassword($password);
                $em->merge($user);
                $em->flush();
                if ($pays->getFrontLanguage() == 'fr' || $pays->getFrontLanguage() == 'FR') {
                    $resultat = $this->sendMail($user->getEmail(), "Mot de passe oublié", "emails/forgetPassword.html.twig", $generator, $user, $pays);

                } else {
                    $resultat = $this->sendMail($user->getEmail(), "Forgot your password", "emails/forgetPassword.html.twig", $generator, $user, $pays);

                }*/




               /**************/


               /**************/


                $result["status"] = "success";
                $result["code"] = "0";
                $result["result"] = $resultat;
                $result["data"] = array("message" => "Please check your email to get your new password");

                //$this->get('session')->getFlashBag()->set('forgetpassword', 'Please check your email to get your new password');
                //   return $this->render('FrontendBundle:Resetting:request.html.twig' );
                return $this->render('FrontendBundle:Resetting:request.html.twig', [
                    'success' => '1'
                ]);
                //  return new JsonResponse($result);

            }

            $result["status"] = "failure";
            $result["code"] = "2";
            $result["data"] = array("message" => "user Not found");
            //                //forgetpasswordfail //fos_user_resetting_request
            //  $this->container->get('session')->set('forgetpswdfail', "user Not found");
            //    $this->get('session')->getFlashBag()->set('forgetpswdfail', 'user Not found');

            //  return $this->render('FrontendBundle:Resetting:request.html.twig' );
            return $this->render('FrontendBundle:Resetting:request.html.twig', [
                'success' => '0'
            ]);
            // return new JsonResponse($result);
            //return new JsonResponse($result);


        }else{

            return $this->render('FrontendBundle:Resetting:request.html.twig', [
                'success' => '2'
            ]);
        }






    }


    private function verifyRecaptcha($recaptchaResponse)
    {
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, array("secret"=>"6LedckodAAAAAA270Y19aTXUpHaNHzxW4LjmaNm5","response"=>$recaptchaResponse));
        $response = curl_exec($ch);
        curl_close($ch);
        // $data = json_decode($response);
        $result = json_decode($response, true);

        return !empty($result['success']);
    }
    public function sendMail($to, $subject, $template, $confirmationUrl, $extradata, $pays)
    {
        $username = "5b22c62fb7827a7f00d2e4e4d4cdc9aa";
        $passwordd = "b6b9dfc5a042ecaa1b6a0fdd9f27f52c";
        $host ="in-v3.mailjet.com";
        $port = "587";
        $security = "tls";
      //  $from = $pays->getMailUsername();
     //   $host = $pays->getMailHost();
     //   $security = $pays->getMailEncryption();
     //   $username = $pays->getMailUsername();
     //   $passwordd = $pays->getMailPassword();
        $from ="E-Shop@mail02.totalenergies.com";


        ///////////////
        $result = 1;
        try {
            $transport = \Swift_SmtpTransport::newInstance($host, $port, $security)->setUsername($username)->setPassword($passwordd);


            $message = \Swift_Message::newInstance()
                ->setSubject($subject)
                ->setTo($to)
                ->setFrom(array($from => "Drive"))
                ->setBody(
                    $this->renderView(
                        $template, array("confirmationUrl" => $confirmationUrl, "user" => $extradata)
                    ),
                    'text/html'
                );
            /*  $transport = (new \Swift_SmtpTransport($host, $host,$security))
                  ->setUsername($username)
                  ->setPassword($passwordd);*/
            // don't really need it*/

            $mailer = \Swift_Mailer::newInstance($transport);


            $result = $mailer->send($message);

        } catch (\Exception $ex) {
            return false;

        }


        return $result;
        //return $this->get('mailer')->send($message);

    }


    /**
     * @Route(path="/commandes/{uid}",  name="getPublicCommandByUid")
     */
    public function getPublicCommandByUidAction(Request $request)
    {


        $uid = $request->get("uid", "");

        $em = $this->initEntityManager();

        $commande = $em->getRepository("WebBundle:Commandes")->findOneBy(array("uid" => $uid));


        if ($commande) {
            $pays = $em->getRepository("WebBundle:Pays")->find($commande->getPays());
            $session = $this->getRequest()->getSession();


            $station_id = $session->set("station_id", $commande->getStation()->getId());
            $paysvc = $session->set("pays", $pays);
            $lang = $session->set('_locale', "en");
            $vistorCountry = $session->set('visitor_country', $pays->getId());

            //  $this->initSessionwithoutCountryCheck();

            //    dump($commande);die();

            //was      $this->generateQrCodeByCommande($commande);

            $produits = $em->getRepository("WebBundle:Commande_Produit")->findBy(array('commande' => $commande));
            $gerant = $em->getRepository('WebBundle:Utilisateurs')->getGerantByStation($commande->getStation());
            return $this->render(
                'FrontendBundle:Profile:DetailQrcodeScan.html.twig',
                array(
                    'station' => $commande->getStation(),
                    'produits' => $produits,
                    'totale' => $commande->getPrix(),
                    "commande" => $commande,
                    "message" => null,
                    'last_username' => null,
                    'error' => null,
                    'csrf_token' => null,
                    'email' => $gerant->getEmailCanonical(),
                    'commande_produit' => $produits
                )
            );
            /*  return $this->render(
                  'FrontendBundle:panier:thanks.html.twig',
                  array(
                      'station' => $commande->getStation(),
                      'produits' => $produits,
                      'totale' => $commande->getPrix(),
                      "commande" => $commande,
                      "message" => null,
                      'last_username' => null,
                      'error' => null,
                      'csrf_token' => null,
                      'email'=>$gerant->getEmailCanonical(),
                  )
              );*/
        } else {
            dump("hello");
            die();
        }
    }

    public function generateQrCodeByCommande($commande)
    {
        $options = array(
            'code' => 'https://eshop-station.com/commandes/' . $commande->getUid(),
            'type' => 'qrcode',
            'format' => 'png',
            'width' => 5,
            'height' => 5,
            'color' => array(0, 0, 0),
        );

        $barcode = $this->get('skies_barcode.generator')->generate($options);
        $savePath = 'uploads/commandes/';
        $fileName = $commande->getUid() . '.png';
        file_put_contents($savePath . $fileName, base64_decode($barcode));
    }

}
