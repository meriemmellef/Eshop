<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class BaseController extends Controller
{

    public $em = null;
    public $session = null;
    public $categorie = null;
    public $panier = null;
    public $adresse = null;
    public $commande = null;
    public $station_id = null;
    public $size = null;
    public $coupon = null;
    public $visitor_country = null;
    public $pays = null;

    public function initSessionwithoutCountryCheck()
    {
        if (is_null($this->session)) {
            $this->session = $this->getRequest()->getSession();

        }

        /* if( !$this->session->get("pays")){
             header('Location: '.$this->generateUrl('select_country'));
             exit();
         }*/
        $this->initCountryon();


        if ($this->session->get("pays") && $this->session->get("pays")->getFrontLanguage() != "") {
            $this->session->set('_locale', $this->session->get("pays")->getFrontLanguage());

        }

        return $this->session;
    }

    public function initCountryon()
    {


        if ($this->session->get('visitor_country', "") == "" or $this->getRequest()->get("pays", "") != "") {
            if ($this->getRequest()->get("pays", "") != "") {
                $this->session->set('station_id', "");
                $visitor_country = $this->getRequest()->get("pays", "");
            } else {
                $visitor_country = strtolower($this->getRequest()->headers->get("Cf-Ipcountry", ""));

            }


            $this->session->set('visitor_country', $visitor_country);
            $this->pays = $this->getDoctrine()->getRepository("WebBundle:Pays")->findOneBy(array("code" => strtolower($visitor_country), "isActive" => 1));


            $this->session->set('pays', $this->pays);
        }

        // dump($this->session->get("pays"));  dump($this->session->get('visitor_country'));         die;
        $this->visitor_country = $this->session->get('visitor_country');
        if ($this->visitor_country) {

            $this->pays = $this->getDoctrine()->getRepository("WebBundle:Pays")->findOneBy(array("code" => strtolower($this->visitor_country), "isActive" => 1));

            $this->session->set('pays', $this->pays);
        }
        $this->pays = $this->session->get('pays');


        $this->session->set('pays', $this->pays);

        return $this->pays;
        //$country = $request->headers
    }


    public function initSession()
    {
        if (is_null($this->session)) {
            $this->session = $this->getRequest()->getSession();

        }
        $this->initCountry();

        if (!$this->session->get("pays")) {
            header('Location: ' . $this->generateUrl('select_country'));
            exit();
        }

        // $stations = $this->getDoctrine()->getRepository('WebBundle:Station')->findBy(array("pays"=>$this->session->get("pays")));
        // if(sizeof($stations) == 0) return $this->redirectToRoute("select_country");

        if ($this->session->get("pays") && $this->session->get("pays")->getFrontLanguage() != "") {
            $this->session->set('_locale', $this->session->get("pays")->getFrontLanguage());

        }

        //  dump($this->session->get("_locale")); die;
        return $this->session;
    }

    public function initEntityManager()
    {
        if (is_null($this->em))
            $this->em = $this->getDoctrine()->getManager();
        return $this->em;
    }

    public function initCountry()
    {


        if ($this->session->get('visitor_country', "") == "" or $this->getRequest()->get("pays", "") != "") {
           //make sure if it is mg comment the test and keep the else on eshop
             if ($this->getRequest()->get("pays", "") != "") {
                $this->session->set('station_id', "");
                $visitor_country = $this->getRequest()->get("pays", "");
            } else {
                $visitor_country = strtolower($this->getRequest()->headers->get("Cf-Ipcountry", ""));

            }

             ///if eshop
          //  $visitor_country = "mg";


            $this->session->set('visitor_country', $visitor_country);
            $this->pays = $this->getDoctrine()->getRepository("WebBundle:Pays")->findOneBy(array("code" => strtolower($visitor_country), "isActive" => 1));


            if (!$this->pays) {


                    header('Location: ' . $this->generateUrl('select_country'));
                    exit();

            }



            $this->session->set('pays', $this->pays);
        }

        // dump($this->session->get("pays"));  dump($this->session->get('visitor_country'));         die;
        $this->visitor_country = $this->session->get('visitor_country');
        if ($this->visitor_country) {

            $this->pays = $this->getDoctrine()->getRepository("WebBundle:Pays")->findOneBy(array("code" => strtolower($this->visitor_country), "isActive" => 1));

            $this->session->set('pays', $this->pays);
        }
        $this->pays = $this->session->get('pays');


        $this->session->set('pays', $this->pays);

        return $this->pays;
        //$country = $request->headers
    }


    public function initPanier()
    {
        if (!$this->session->has('panier')) $this->session->set('panier', array());

        $this->panier = $this->session->get('panier');
        return $this->panier;
    }


    public function initCoupon()
    {
        if (!$this->session->has('coupon')) $this->session->set('coupon', "");

        $this->coupon = $this->session->get('coupon');
        return $this->coupon;
    }

    public function initSize()
    {
        if (!$this->session->has('size')) $this->session->set('size', array());

        $this->size = $this->session->get('size');
        return $this->size;
    }

    public function initAdresse()
    {
        if (!$this->session->has('adresse')) $this->session->set('adresse', array());

        $this->adresse = $this->session->get('adresse');
        return $this->adresse;
    }

    public function initStation()
    {
        if (!$this->session->has('station_id')) $this->session->set('station_id', "");

        $this->station_id = $this->session->get('station_id');
        return $this->station_id;
    }

    public function initDate()
    {
        if (!$this->session->has('date')) $this->session->set('date', array());
        $this->adresse = $this->session->get('date');
        return $this->adresse;
    }

    public function initCommande()
    {
        if (!$this->session->has('commande')) $this->session->set('commande', array());

        $this->commande = $this->session->get('commande');
        return $this->commande;
    }


    public function initCategorie()
    {
        if (!$this->session->has('categorie')) $this->session->set('categorie', array());

        $this->categorie = $this->session->get('categorie');
        return $this->categorie;
    }

    public function getProduitBy($params)
    {
        return $this->em->getRepository('WebBundle:Produits')->findBy($params);
    }

    public function getOneProduitById($id)
    {
        return $this->em->getRepository('WebBundle:Produits')->findOneById($id);
    }

    public function getProduitsFiltred($unite_id, $categorie_id, $min_price, $max_price, $sort, $keyword, $sub_categorie_id = "", $station_id = "")
    {
        return $this->em->getRepository('WebBundle:Produits')->getProduitsFiltred($unite_id, $categorie_id, $min_price, $max_price, $sort, $keyword, $sub_categorie_id, $station_id);
    }

    public function getProduitsWithoutsubcatgerorie($unite_id, $categorie_id, $min_price, $max_price, $sort, $keyword, $station_id = "")
    {
        return $this->em->getRepository('WebBundle:Produits')->getProduitsWithoutsubcatgerorie($unite_id, $categorie_id, $min_price, $max_price, $sort, $keyword, $station_id);
    }

    public function getProduitsByIds($ids)
    {
        return $this->em->getRepository('WebBundle:Produits')->getProduitsByIds($ids);
    }

    public function getAllCategories()
    {
        return $this->em->getRepository('WebBundle:Categories')->findAll();
    }

    public function getAllUnites()
    {
        return $this->em->getRepository('WebBundle:Unite')->findAll();
    }


}
