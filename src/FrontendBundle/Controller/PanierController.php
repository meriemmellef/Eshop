<?php

namespace FrontendBundle\Controller;

use FrontendBundle\Form\UtilisateursAdressesType;
use Lyra\Client;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use WebBundle\Entity\Commande_Produit;
use WebBundle\Entity\Commandes;
use WebBundle\Entity\Produits;
use WebBundle\Entity\UtilisateursAdresses;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use WebBundle\Entity\Favoris;

class PanierController extends BaseController
{
    public function menuAction()
    {
        $this->initSession();

        $this->initPanier();
        $this->initEntityManager();
        $this->initStation();
        $this->initCoupon();
        $this->initCategorie();
        //dump($this->session->clear());die;
        $articles = $this->getProduitsByIds(array_keys($this->panier));
        if ($this->station_id) {
            //was   $categories_collection = $this->em->getRepository("WebBundle:Categories")->getAllCategories($this->pays->getCode(),$this->station_id);
            $categories_collection = $this->initCategorie();

        } else {
            $categories_collection = [];
        }

        /*
         * was
           $categories = array("auto"=>array(),"food"=>array(),"clothing"=>array(),"other"=>array());
        foreach ($categories_collection as $category) {
           if ($category->isFood()) {
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
            }

    }
         */


        //  dump($categories_collection);
        //  die();

        $pays = $this->getDoctrine()->getRepository("WebBundle:pays")->findBy(array("isActive" => 1));
        //$stations = $this->getDoctrine()->getRepository('WebBundle:Station')->findBy(array("isActive" => 1,"isDeleted" => 0, "pays" => 2));
        /* $stations = $this->getDoctrine()->getRepository('WebBundle:Station')->findBy(array("isActive" => 1, "isDeleted" => 0, "pays" => $this->pays));

         $stations_array = array();
         foreach ($stations as $station) {
             if ($station->getZone())
                 $stations_array[$station->getZone()->getNom()][] = $station;
         }*/
        $station = $this->getDoctrine()->getRepository('WebBundle:Station')->find($this->station_id);
        $coupon = $this->getDoctrine()->getRepository("WebBundle:Coupon")->find($this->coupon);
        if ($this->getUser()) {
            $favoris = $this->getDoctrine()->getRepository('WebBundle:Favoris')->getfavorisByUser($this->getUser()->getId());

        } else {
            $favoris = [];
        }

        return $this->render('FrontendBundle:Blocks:navbar.html.twig', array(
            'station' => $station,
            'panier' => $this->panier,
            'articles' => $articles,
            "categories" => $categories_collection,
            "pays" => $pays,
            "favoris" => $favoris,
            //"stations" => $stations_array,
            "coupon" => $coupon
        ));
    }

    /**
     * @Route(path="/size", name="getSizeCouleur")
     */
    public function getSizeCouleur(Request $request)
    {
        // Get Entity manager and repository

        $em = $this->getDoctrine()->getManager();

        $produitid = $request->get('produitid');
        $couleurid = $request->get('couleurid');

        // Search the neighborhoods that belongs to the city with the given id as GET parameter "cityid"
        $sizes = $em->getRepository("WebBundle:Size")->getSizeByProduitCouleur($couleurid, $produitid);

        // Serialize into an array the data that we need, in this case only name and id
        // Note: you can use a serializer as well, for explanation purposes, we'll do it manually
        $responseArray = array();
        foreach ($sizes as $size) {
            $responseArray[] = array(
                "id" => $size->getId(),
                "libelle" => $size->getLibelle()
            );
        }
        return new JsonResponse($responseArray);

    }

    /**
     * @Route(path="/size_from_id", name="size_from_id")
     */
    public function getSizeFromId(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $size = $em->getRepository("WebBundle:Size")->find(intval($request->get('sizeid')));
        if ($size) return new JsonResponse($size->getQuantite());
        else return new JsonResponse(null);

    }

    /**
     * @Route(path="/promotion/{id}/{qte}",options={"expose"=true}, name="promotion")
     */
    public function getPricePromotion($id, $qte)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository("WebBundle:Produits")->find($id);
        return new JsonResponse($produit->getTotalPrice($qte));

    }

    /**
     * @Route(path="/delete_item_from_cart/{id}",options={"expose"=true}, name="delete_item_from_cart")
     */
    public function supprimerAction($id)
    {

        $this->initSession();
        $this->initPanier();
        $this->initSize();


        if (array_key_exists($id, $this->panier)) {
            unset($this->panier[$id]);
            unset($this->size[$id]);
            $this->session->set('panier', $this->panier);
            $this->session->set('size', $this->size);

            //$this->get('session')->getFlashBag()->add('success', 'Article supprimé avec succès');
        }

        return $this->menuAction();
    }

    /**
     * @Route(path="/verificationCoupon", name="verificationCoupon")
     */
    public function verificationCoupon(Request $request)
    {
        // Get Entity manager and repository
        $em = $this->getDoctrine()->getManager();

        $code = $request->get('coupon');
        $this->initSession();
        $station_id = $this->initStation();
        $station = $em->getRepository("WebBundle:Station")->find($station_id);
        // Search the neighborhoods that belongs to the city with the given id as GET parameter "cityid"
        $coupon = $em->getRepository("WebBundle:Coupon")->findOneBy(array('code' => $code, 'is_active' => true, 'is_deleted' => false, 'pays' => $station->getPays()));




        if ($coupon and $coupon->getType()) {

            if ($coupon->getIsNbrcoupon()) {
                $Nbrcoupon = $coupon->getNbrcoupon();
                $newNbr = $Nbrcoupon -1 ;

                if($newNbr>=0){
                    //update nbr


                    //
                    return new JsonResponse(array(
                        "montant" => $coupon->getMontant(),
                        "pourcentage" => $coupon->getPourcentage(),
                        "type" => $coupon->getType(),
                        "result" => true,

                    ));
                    // $coupon->setNbrcoupon($Nbrcoupon -1 );

                }else{
                    return new JsonResponse(array(
                        "result" => false,
                        "nbr" => "invalid number",

                    ));
                }


            } else {
                return new JsonResponse(array(
                    "montant" => $coupon->getMontant(),
                    "pourcentage" => $coupon->getPourcentage(),
                    "type" => $coupon->getType(),
                    "result" => true
                ));
            }


        } else
            return new JsonResponse(array(
                "result" => false
            ));
    }

    /**
     * @Route(path="/executeCoupon", name="executeCoupon")
     */
    public function executeCoupon(Request $request)
    {
        // Get Entity manager and repository

        $em = $this->getDoctrine()->getManager();

        $code = $request->get('coupon');
        $session = $this->initSession();

        $station_id = $this->initStation();
        $this->initCoupon();
        $coupon_session = $this->coupon;
        $station = $em->getRepository("WebBundle:Station")->find($station_id);
        // Search the neighborhoods that belongs to the city with the given id as GET parameter "cityid"
        $coupon = $em->getRepository("WebBundle:Coupon")->findOneBy(array('code' => $code, 'is_active' => true, 'is_deleted' => false, 'pays' => $station->getPays()));

        $result = array();
        if ($coupon && $coupon->getType()) {
            if ($coupon && (!$session->has('coupon') || $session->get('coupon') == "" || count($coupon_session) == 0)) {
                $coupon_session = $coupon->getId();
                $this->session->set('coupon', $coupon_session);
                $result = array(
                    "pourcentage" => $coupon->getPourcentage(),
                    "type" => $coupon->getType(),

                    "montant" => $coupon->getMontant(),
                    "result" => true
                );

            } elseif ($coupon && $session->has('coupon') && $coupon_session != "" && count($coupon_session) > 0) {

                $coupon_value = $em->getRepository("WebBundle:Coupon")->find($coupon_session);
                $ancientype = $coupon_value->getType();
                if ($coupon_value->getType() == 1) {
                    $ancien = floatval($coupon_value->getMontant());
                }
                if ($coupon_value->getType() == 2) {
                    $ancien = floatval($coupon_value->getPourcentage());
                }


                $result = array(
                    "ancientype" => $ancientype,
                    "ancien" => $ancien,
                    "pourcentage" => $coupon->getPourcentage(),
                    "type" => $coupon->getType(),
                    "montant" => $coupon->getMontant(),
                    "result" => false
                );
                $coupon_session = [];
                $coupon_session = $coupon->getId();
                $this->session->set('coupon', $coupon_session);
            }
        } else {
            $result = array("result" => false);
        }
        //  dump($this->session);die;
        return new JsonResponse($result);
    }

    /**
     * @Route(path="/delete_size_from_cart/{id}/{sizeid}",options={"expose"=true}, name="delete_size_from_cart")
     */
    public function supprimersizeAction($id, $sizeid)
    {

        $this->initSession();
        $this->initPanier();
        $this->initSize();

        if (array_key_exists($id, $this->size)) {
            $sizes = $this->size[$id];
            if (array_key_exists($sizeid, $sizes)) {
                $qte = $this->panier[$id] - $sizes[$sizeid];
                $this->panier[$id] = $qte;
                unset($sizes[$sizeid]);
                if (empty($sizes)) {
                    unset($this->panier[$id]);
                    unset($this->size[$id]);
                } else {
                    $this->size[$id] = $sizes;
                }
            }


            //$this->get('session')->getFlashBag()->add('success', 'Article supprimé avec succès');
        }

        $this->session->set('panier', $this->panier);
        $this->session->set('size', $this->size);

        return $this->menuAction();
    }

    /**
     * @Route(path="/add_favoris/{id}",options={"expose"=true},  name="add_favoris")
     */
    public function addfavorisAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $this->getDoctrine()->getRepository('WebBundle:Produits')->find($id);
        $favoris = $this->getDoctrine()->getRepository('WebBundle:Favoris')->findOneBy(array("produit" => $produit, "utilisateur" => $this->getUser()));

        if ($favoris && ($favoris->getUtilisateur() == $this->getUser())) {
            $em->remove($favoris);

        } else {
            $favoris = new Favoris();
            $favoris->setUtilisateur($this->getUser());
            $favoris->setProduit($produit);
            $em->persist($favoris);

        }
        $em->flush();
        return $this->menuAction();

        //was bfor rw change  return $this->menuAction();

        //   return $this->redirect($this->generateUrl('homepage_frontend'));


    }


    /**
     * @Route(path="/add_item_to_cart/{id}",options={"expose"=true},  name="add_item_to_cart")
     */
    public function ajouterAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $produit = $this->getDoctrine()->getRepository('WebBundle:Produits')->find($id);
        if ($produit) {
            $this->initSession();
            $this->initPanier();
            $panier = $this->panier;
            if (array_key_exists($id, $panier)) {
                $panier[$id]++;
                //$this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
            } else {
                if (is_null($this->getRequest()->query->get('qte')))
                    $panier[$id] = 1;
                else
                    $panier[$id] = $this->getRequest()->query->get('qte');
                // $this->get('session')->getFlashBag()->add('success', 'Article ajouté avec succès');
            }

            $this->session->set('panier', $panier);
        }


        return $this->menuAction();
    }

    /**
     * @Route(path="/delete_quantity_to_cart/{id}",options={"expose"=true},  name="delete_quantity_to_cart")
     */
    public function quantiydeleteAction($id)
    {
        $this->initSession();
        $this->initPanier();

        $panier = $this->panier;

        if (array_key_exists($id, $panier)) {
            $quantite = $panier[$id] - 1;
            if ($quantite == 0) {
                unset($panier[$id]);
                $this->session->set('panier', $panier);
            } else if ($quantite > 0) {
                $panier[$id]--;
            }

            //$this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        }

        $this->session->set('panier', $panier);

        return $this->menuAction();
    }

    /**
     * @Route(path="/add_quantity_to_cart/{id}",options={"expose"=true},  name="add_quantity_to_cart")
     */
    public function quantiyaddAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $produit = $this->getDoctrine()->getRepository('WebBundle:Produits')->find($id);
        if ($produit) {
            $this->initSession();
            $this->initPanier();

            $panier = $this->panier;

            if (array_key_exists($produit->getId(), $panier)) {
                $panier[$id]++;
                //$this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
            } else {
                if (is_null($this->getRequest()->query->get('qte')))
                    $panier[$produit->getId()] = 1;
                else
                    $panier[$produit->getId()] = $this->getRequest()->query->get('qte');
                // $this->get('session')->getFlashBag()->add('success', 'Article ajouté avec succès');
            }

            $this->session->set('panier', $panier);
        }
        return $this->menuAction();
    }


    /**
     * @Route(path="/add_many_quantity_to_cart/{id}/{qte}",options={"expose"=true},  name="add_many_quantity_to_cart")
     */
    public function quantiyaddManyAction($id, $qte)
    {

        $em = $this->getDoctrine()->getManager();
        $produit = $this->getDoctrine()->getRepository('WebBundle:Produits')->find($id);
        if ($produit) {
            $this->initSession();
            $this->initPanier();

            $panier = $this->panier;
            // var_dump($qte);die();

            if (array_key_exists($produit->getId(), $panier)) {
                // $panier[$id]++;
                $panier[$produit->getId()] = $panier[$produit->getId()] + $qte;
                //$this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
                // var_dump($qte);die();
            } else {
                if (is_null($qte))
                    $panier[$produit->getId()] = 1;
                else {

                    $panier[$produit->getId()] = $qte;
                    // $this->get('session')->getFlashBag()->add('success', 'Article ajouté avec succès');
                    //   var_dump($qte);die();
                }
            }

            $this->session->set('panier', $panier);
        }
        return $this->menuAction();
    }


    /**
     * @Route(path="/add_quantity_to_cart_with_size/{id}/{sizeid}/{qte}",options={"expose"=true},  name="add_quantity_to_cart_with_size")
     */
    public function addtocartwithsizeAction($id, $sizeid, $qte)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $this->getDoctrine()->getRepository('WebBundle:Produits')->find($id);
        $sizeitem = $this->getDoctrine()->getRepository('WebBundle:Size')->find($sizeid);
        if ($produit && $sizeitem && ($sizeitem->getProduit() == $produit)) {
            $this->initSession();
            $this->initPanier();
            $this->initSize();
            $panier = $this->panier;
            $size = $this->size;
            if (array_key_exists($produit->getId(), $panier)) {
                $panier[$produit->getId()] = $panier[$produit->getId()] + $qte;

                if (array_key_exists($produit->getId(), $size)) {

                    $sizes = $size[$produit->getId()];
                    if (isset($sizes[intval($sizeitem->getId())])) {
                        $sizes[$sizeitem->getId()] = $sizes[$sizeitem->getId()] + $qte;
                        $size[$produit->getId()] = $sizes;
                    } else {
                        $sizes[$sizeitem->getId()] = $qte;
                        $size[$produit->getId()] = $sizes;
                    }
                } else {
                    $size[$produit->getId()] . push(array($sizeitem->getId() => $qte));
                }

                //$this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
            } else {

                if ($qte) {
                    $panier[$id] = $qte;
                    $size[$id] = array($sizeid => $qte);
                } else {
                    $panier[$id] = 1;
                    $size[$id] = array($sizeid => 1);

                }
                // $this->get('session')->getFlashBag()->add('success', 'Article ajouté avec succès');
            }


            $this->session->set('panier', $panier);
            $this->session->set('size', $size);

        }

        return $this->menuAction();
    }


    /**
     * @Route(path="/update_cart",options={"expose"=true},  name="update_cart")
     */
    public function updateAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $this->initSession();
        $panier = $this->initPanier();
        $size = $this->initSize();
        $qts = $request->query->get('qte');
        $i = 0;


        foreach ($panier as $key => $value) {
            $produit = $em->getRepository('WebBundle:Produits')->find($key);

            if ($produit) {
                if (!array_key_exists($produit->getId(), $size) and $qts[$i] > $produit->getQuantite()) {

                    if ($produit->getQuantite() == 0) {
                        $this->get('session')->getFlashBag()->add('produitfini', 'Le produit ' . $produit->getNom() . ' est hors stock');

                    } else {
                        $this->get('session')->getFlashBag()->add('produitfini', 'Il ne reste que ' . $produit->getQuantite() . ' ' . $produit->getNom());

                    }


                } elseif ($produit->getMaxcommande() and $produit->getMaxcommande() > 0 and $qts[$i] > $produit->getMaxcommande()) {
                    $this->get('session')->getFlashBag()->add('produitfini', 'Vous ne pouvez commander que ' . $produit->getMaxcommande() . ' ' . $produit->getNom());

                } else {
                    //$this->get('session')->getFlashBag()->add('produitfini', 'Vous pouvez commander que '.$qts[$i].' key issss'.$key);

                    if ($qts[$i] == 0) {
                        //delete produit
                        unset($panier[$key]);


                    } else {
                        //update quantite
                        $panier[$key] = $qts[$i];

                    }
                }
                $i++;
            }


        }
        $this->session->set('panier', $panier);
        return $this->redirect($this->generateUrl('panier'));
    }


    /**
     * @Route(path="/panier",  name="panier")
     */
    public function panierAction()
    {
        $this->initSession();
        $panier = $this->initPanier();
        $size = $this->initSize();
        $date = $this->initDate();
        $this->initEntityManager();
        $this->initStation();
        $this->initCoupon();
        $station = $this->getDoctrine()->getRepository('WebBundle:Station')->find($this->station_id);

//$this->panier['256'] =35;
//dump($this->panier);die;
        $produits = $this->getProduitsByIds(array_keys($this->panier));

        $coupon = $this->getDoctrine()->getRepository("WebBundle:Coupon")->find($this->coupon);


        return $this->render('FrontendBundle:panier:panier.html.twig',
            array(
                'produits' => $produits,
                'panier' => $panier,
                'size' => $size,
                "date" => $date,
                "station" => $station,
                "coupon" => $coupon

            ));
    }

    /**
     * @Route(path="/deleteAdresse/{id}",  name="deleteAdresse")
     */
    public function adresseSuppressionAction(Request $request, $id)
    {
        $em = $this->initEntityManager();
        $entity = $em->getRepository('WebBundle:UtilisateursAdresses')->find($id);

        if ($this->getUser() != $entity->getUtilisateur() || !$entity)
            return $this->redirect($this->generateUrl('modereception'));
        //was   return $this->redirect($this->generateUrl('livraison'));

        if ($entity && ($entity->getUtilisateur() == $this->getUser())) {
            try {
                $em->remove($entity);
                $em->flush();

            } catch (\Exception $exception) {

            }

            if ($request->get("from_profile", 0) == 1)
                return $this->redirect($this->generateUrl('profile_adresse'));
        }


        //return $this->redirect($this->generateUrl('livraison'));
        return $this->redirect($this->generateUrl('modereception'));
    }

    /**
     * @Route(path="/verification_panier",options={"expose"=true}, name="verification_panier")
     */
    public function verifPanierAction(Request $request)
    {
        $this->initSession();
        $panier = $this->initPanier();
        $size = $this->initSize();
        $date = $this->initDate();
        $em = $this->initEntityManager();
        $this->initStation();
        $station = $this->getDoctrine()->getRepository('WebBundle:Station')->find($this->station_id);
        $produits = $this->getProduitsByIds(array_keys($this->panier));
        $stockproduit = 0;
        $prixtotal = 0;

        foreach ($produits as $produit) {
            $prixHT = $produit->getTotalPrice($panier[$produit->getId()]);
            $prixtotal += $prixHT["prix"];
            if (array_key_exists($produit->getId(), $size)) {
                $sizes = $size[$produit->getId()];
                foreach ($sizes as $key => $value) {

                    $s = $this->getDoctrine()->getRepository('WebBundle:Size')->find($key);
                    if ($s->getQuantite() == 0) {
                        $this->get('session')->getFlashBag()->add('produitfini', 'La taille ' . $s->getLibelle() . ' de ' . $produit->getNom() . ' est hors stock');
                        $stockproduit++;
                    } else if ($s->getQuantite() < $value) {
                        $this->get('session')->getFlashBag()->add('produitfini', 'Il ne reste que ' . $s->getQuantite() . ' ' . $produit->getNom() . ' ' . ' taille ' . $s->getLibelle());
                        $stockproduit++;

                    }


                }
            } else {
                //dump($produit->getQuantite()< $panier[$produit->getId()]);die;
                if ($produit->getQuantite() == 0) {
                    $this->get('session')->getFlashBag()->add('produitfini', 'Le produit ' . $produit->getNom() . ' est hors stock');
                    $stockproduit++;

                } else if ($produit->getQuantite() < $panier[$produit->getId()]) {
                    $this->get('session')->getFlashBag()->add('produitfini', 'Il ne reste que ' . $produit->getQuantite() . ' ' . $produit->getNom());
                    $stockproduit++;

                } elseif ($produit->getMaxcommande() and $panier[$produit->getId()] > $produit->getMaxcommande()) {
                    $this->get('session')->getFlashBag()->add('produitfini', 'Vous ne pouvez commander que ' . $produit->getMaxcommande() . ' ' . $produit->getNom());
                    $stockproduit++;

                }
            }


        }
        if ($stockproduit == 0 && $station->getIsDelivered() && $station->getMinprixLivraison() < $prixtotal)
            return $this->redirect($this->generateUrl('modereception'));
        if ($stockproduit == 0 && $station->getIsDelivered() && $station->getMinprixLivraison() > $prixtotal)
            //was return $this->redirect($this->generateUrl('livraison'));
            return $this->redirect($this->generateUrl('modereception'));
        if ($stockproduit == 0 && !$station->getIsDelivered())
            //   return $this->redirect($this->generateUrl('livraison'));
            return $this->redirect($this->generateUrl('modereception'));

        else return $this->redirect($this->generateUrl('panier'));


    }

    /**
     * @Route(path="/livraison",  name="livraison")
     */
    public function livraisonAction(Request $request)
    {
        $this->initSession();
        $panier = $this->initPanier();
        $date = $this->initDate();
        $em = $this->initEntityManager();
        $utilisateur = $this->getUser();
        $entity = new UtilisateursAdresses();
        $form = $this->createForm(new UtilisateursAdressesType($em, $utilisateur), $entity);
        if ($this->get('request')->getMethod() == 'POST') {
            $form->handleRequest($this->getRequest());
            //if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setUtilisateur($utilisateur);

            $delegation = $em->getRepository('WebBundle:Delegation')->findOneBy(array('code' => $entity->getCp()));
            if ($delegation) {
                $entity->setPays($delegation->getRegion()->getName());
                $entity->setVille($delegation->getName());
            }

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('livraison'));
            //}
        }

        $station_id = $this->initStation();
        $station = $em->getRepository("WebBundle:Station")->find($station_id);
        return $this->render('FrontendBundle:panier:livraison.html.twig', array('utilisateur' => $utilisateur,
            'form' => $form->createView(), 'panier' => $panier, "station" => $station));
    }


    /**
     * @Route(path="/modereception",  name="modereception")
     */
    public function modereceptionAction(Request $request)
    {
        $this->initSession();
        $panier = $this->initPanier();
        $date = $this->initDate();
        $em = $this->initEntityManager();
        $utilisateur = $this->getUser();
        $station_id = $this->initStation();
        $this->initCoupon();

        $station = $em->getRepository("WebBundle:Station")->find($station_id);

        $entity = new UtilisateursAdresses();

        //  $formOptions = array('user' => $this->getUser());
        //  $form = $this->createForm( UtilisateursAdressesType::class, $entity, $formOptions);
        $station = $this->getDoctrine()->getRepository('WebBundle:Station')->find($this->station_id);
        $produits = $this->getDoctrine()->getRepository('WebBundle:Produits')->getProduitsByIds(array_keys($this->panier));
        $prixtotal = 0;
        foreach ($produits as $produit) {
            $prixHT = $produit->getTotalPrice($panier[$produit->getId()]);
            $prixtotal += $prixHT["prix"];
        }


        $form = $this->createForm(new UtilisateursAdressesType($em, $utilisateur), $entity);


        if ($this->get('request')->getMethod() == 'POST') {
            $form->handleRequest($this->getRequest());
            //if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $entity->setUtilisateur($utilisateur);

            $delegation = $em->getRepository('WebBundle:Delegation')->findOneBy(array('code' => $entity->getCp()));
            if ($delegation) {

                $region = $em->getRepository('WebBundle:Region')->find($delegation->getRegionId());
                $entity->setPays($region->getName());
                $entity->setVille($delegation->getName());
            }

            $em->persist($entity);
            $em->flush();
            //   dump($entity->getId());die();
            //gotoaddress
            $idAddress = $entity->getId();
            ///rahma test

            if ($station->getMinprixLivraison() > $prixtotal)
                return $this->redirect($this->generateUrl('modereception'));


            return $this->redirect($this->generateUrl('validationAdresse', array('livraison' => $idAddress, 'mode' => 1)));
            /* return $this->render('FrontendBundle:panier:modereception.html.twig', array('utilisateur' => $utilisateur,
                 'form' => $form->createView(), 'panier' => $panier, "station" => $station,"mode"=>1));*/
            //}
        }


        $coupon = $this->getDoctrine()->getRepository("WebBundle:Coupon")->find($this->coupon);

        return $this->render('FrontendBundle:panier:modereception.html.twig', array('utilisateur' => $utilisateur,
            'form' => $form->createView(), 'panier' => $panier, 'produits' => $produits,
            "station" => $station, "mode" => 0, "coupon" => $coupon, "total_price" => $prixtotal));
    }

    public function checkifCandolivraison()
    {
        $this->initSession();
        $panier = $this->initPanier();
        $size = $this->initSize();
        $date = $this->initDate();
        $em = $this->initEntityManager();
        $this->initStation();
        $station = $this->getDoctrine()->getRepository('WebBundle:Station')->find($this->station_id);
        $produits = $this->getProduitsByIds(array_keys($this->panier));
        $stockproduit = 0;
        $prixtotal = 0;

        foreach ($produits as $produit) {
            $prixHT = $produit->getTotalPrice($panier[$produit->getId()]);
            $prixtotal += $prixHT["prix"];


        }


        if ($station->getMinprixLivraison() > $prixtotal)
            return $this->redirect($this->generateUrl('modereception'));

    }


    public function setLivraisonOnSession($livraison)
    {
        $session = $this->getRequest()->getSession();
        //var_dump($livraison);die;
        if (!$session->has('adresse')) $session->set('adresse', array());
        $adresse = $session->get('adresse');
        if ($livraison != null) {
            $adresse['livraison'] = $livraison;

        } else {
            return $this->redirect($this->generateUrl('validation'));
        }

        $session->set('adresse', $adresse);
        return $this->redirect($this->generateUrl('validationAdresseLivraison'));
    }


    /**
     * @Route(path="/validationAdresse",  name="validationAdresse")
     */
    public function validationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $periode = $request->get("periode", 1);
        $adresse = $request->get("livraison", "");
        $mode = $request->get("mode", 0);

        //$livraison = $request->get("livraison");
        //$facturation = $request->get("facturation");

        $date = $request->get("date", date("Y-m-d"));
        $session = $this->initSession();
        $session_date = $this->initDate();
        $session_adresse = $this->initAdresse();

        $size = $this->initSize();
        $station_id = $this->initStation();
        if ($station_id == "") {
            return $this->redirectToRoute('homepage_frontend');
        }


        if ($request->query->has("periode") && $request->query->has("date")) {
            $session_date["periode"] = $periode;
            $session_date["date"] = $date;
            $this->session->set("date", $session_date);
        }
        if ($mode == 1) {
            ///rahma add
            // dump("rrrr");die();
            $this->initSession();
            $panier = $this->initPanier();
            $station = $this->getDoctrine()->getRepository('WebBundle:Station')->find($this->station_id);
            // $produits = $this->getProduitsByIds(array_keys($this->panier));
            $produits = $this->getDoctrine()->getRepository('WebBundle:Produits')->getProduitsByIds(array_keys($this->panier));
            $prixtotal = 0;

            foreach ($produits as $produit) {
                $prixHT = $produit->getTotalPrice($panier[$produit->getId()]);
                $prixtotal += $prixHT["prix"];
            }

            if ($station->getMinprixLivraison() > $prixtotal)
                return $this->redirect($this->generateUrl('modereception'));

            $session_adresse["livraison"] = $adresse;
            $this->session->set("adresse", $session_adresse);
        }

        //if ($this->get('request')->getMethod() == 'GET')
        // $this->setLivraisonOnSession($livraison,$facturation);


        //was $prepareCommande = $this->forward('FrontendBundle:Commandes:prepareCommande', array('mode' => $mode));
        $prepareCommande = $this->prepareCommandeAction($mode);

        // $commande = $em->getRepository('WebBundle:Commandes')->find($prepareCommande->getContent());
        if ($this->session->get('commande')['id']) {

            $commande = $em->getRepository("WebBundle:Commandes")->find($this->session->get('commande')['id']);
            $station = $em->getRepository("WebBundle:Station")->find($session->get("station_id", ""));
            $produits = $em->getRepository("WebBundle:Commande_Produit")->GetProduitByCommandeInvalid($commande);

            $gerant = $em->getRepository('WebBundle:Utilisateurs')->getGerantByStation($commande->getStation());
            return $this->render('FrontendBundle:panier:validation.html.twig',
                array(
                    'adresse' => $adresse,
                    'periode' => $periode,
                    'commande' => $commande,
                    "station" => $station,
                    'size' => $size,
                    'produits' => $produits,
                    'email' => $gerant->getEmailCanonical()
                ));

        } else {
            return $this->redirect($this->generateUrl('panier'));
        }
    }

    /**
     * @Route(path="/validationAdresseLivraison",  name="validationAdresseLivraison")
     */
    public function validationLivraisonAction(Request $request)
    {

        $livraison = $request->get("livraison");
        $idb = $request->get("idb");
        $session = $this->initSession();
        if ($this->get('request')->getMethod() == 'GET')

            $this->setLivraisonOnSession($livraison);

        $em = $this->getDoctrine()->getManager();

        $prepareCommande = $this->forward('FrontendBundle:Commandes:prepareCommande');


        //$commande = $em->getRepository('WebBundle:Commandes')->find($prepareCommande->getContent());


        $commande = $this->session->get('commande')[$idb];
        if ($commande) {

            return $this->render('FrontendBundle:panier:validation.html.twig', array(
                'commande' => $commande,
                "message" => null,
                'last_username' => null,
                'error' => null,
                'csrf_token' => null,
            ));
        } else {
            return $this->redirect($this->generateUrl('panier', array('idb' => $idb)));
        }
    }

    /**
     * @Route(path="/delegations/{cp}",options={"expose"=true},  name="delegations")
     */
    public function delegationsAction(Request $request, $cp)
    {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $villeCodePostal = $em->getRepository('WebBundle:Delegation')->findBy(array('code' => $cp));

            if ($villeCodePostal) {
                $villes = array();
                foreach ($villeCodePostal as $ville) {
                    $villes[str_replace("  ", "", $ville->getName())] = $ville->getName();
                }
            } else {
                $villes = null;
            }

            $response = new JsonResponse();
            //var_dump($response->setData(array('ville' => $villes)));die();
            return $response->setData(array('ville' => $villes));
        } else {
            throw new \Exception('Erreur');
        }
    }


    /**
     * @Route(path="/payment",  name="payement_commande")
     */
    public function PayementCommandeAction()
    {

        $session = $this->initSession();
        $panier = $this->initPanier();
        $s_commande = $this->initCommande();

        if (!isset($s_commande["id"])) {
            return $this->redirectToRoute('homepage_frontend');
        }
        $id = $s_commande["id"];

        require_once __DIR__ . '/../../../vendor/lyracom/rest-php-sdk/src/autoload.php';
        $client = new Client();
        /* Username, password and endpoint used for server to server web-service calls */


        //MODE TEST
        $client->setUsername("81181512");
        $client->setPassword("testpassword_oYQ6zgrzhT10g9ThrhA562n5TaUXW4mDZ15V1omInilum");
        $client->setEndpoint("https://api.payzen.eu");
        $client->setPublicKey("81181512:testpublickey_hUBZKbn4dd6hSEPQIQr3y4JUOQXoaTjMwrRWEEK9MA3MN");
        $client->setSHA256Key("0VyOVIVhaXZFtRMilhQkKOfP3VwrZ2EqOUsPoSXmQffUM");


        //MODE PROD
        /*  $client->setUsername("52351668");
          $client->setPassword("prodpassword_CqSkdjHbVht06Q0GHfwQZKgnsbDKYZYxv7YJzlAqDE7eD");
          $client->setEndpoint("https://api.payzen.eu");
          $client->setPublicKey("52351668:publickey_gDEw4jduFHGxAnAQ0SHgO7eVcasqy9TZMnfIIqbfv6Zxg");
          $client->setSHA256Key("ZvaqQoQQksWlAt3Q6h5ZAk5CnvPSyl0oEfvcF9XGivuDE");*/


        $em = $this->initEntityManager();
        $commande = $em->getRepository('WebBundle:Commandes')->find($id);


        if (!$commande || $commande->getValider() == 1)
            return $this->redirectToRoute('homepage_frontend');

        // $commande->setValider(1);
        // $commande->setReference($this->container->get('setNewReference')->reference()); //Service
        // $em->flush();


        $produits = $this->getProduitsByIds(array_keys($panier));


        /**
         * I create a formToken
         * @var Commandes $commande
         */
        $price = $commande->getPrix();


        $store = array("amount" => $price * 100,
            "currency" => "EUR",
            "orderId" => "DRIVE_" . $commande->getReference(),
            "customer" => array("email" => $commande->getUtilisateur()->getEmail()
            ));

        $response = $client->post("V4/Charge/CreatePayment", $store);


        /* I check if there are some errors */
        if ($response['status'] != 'SUCCESS') {
            $reference = $commande->getReference();
            $email = $commande->getUtilisateur()->getEmail();
            $message = json_encode($response);
            exec("echo orderId:  $reference >> payzen_error.txt");
            exec("echo amount:  $price >> payzen_error.txt");
            exec("echo customer: $email >> payzen_error.txt");
            exec("echo $message >> payzen_error.txt");
            $this->get('session')->getFlashBag()->add('errorpayzen', 'une erreur suspendu veuillez réessayer une autre fois');
            return $this->redirect($this->generateUrl('validationAdresse'));

            //      $error = $response['answer'];
            //       throw new \Exception("error " . $error['errorCode'] . ": " . $error['errorMessage']);
        }


        $formToken = $response["answer"]["formToken"];


        return $this->render('FrontendBundle:panier:payment.html.twig',
            array(
                'commande' => $commande,
                'produits' => $produits,
                'total_price' => $commande->getPrix(),
                'panier' => $panier,
                "reference" => $commande->getReference(),
                "client" => $client,
                "formToken" => $formToken
            ));
    }

    private function store_error($response)
    {
        $message = "=========";
        foreach ($response as $key => $value) {
            $message .= "- $key = $value ||";
        }
        dump($message);
        die;
        exec("echo $message >> payzen_error.txt");
    }


    public function facture($c, $mode)
    {


        $em = $this->getDoctrine()->getManager();
        $generator = $this->container->get('security.secure_random');

        $session = $this->getRequest()->getSession();
        $coupon = $session->get('coupon');
        $station_id = $this->initStation();
        $panier = $session->get('panier');
        $size = $session->get('size');
        $commande = $this->commande;
        $totalHT = 0;
        $stockproduit = 0;
        $station = $em->getRepository('WebBundle:Station')->find($station_id);
        $produits = $em->getRepository('WebBundle:Produits')->findArray(array_keys($panier));

        // if ($produits){// rahma add need check befor upload
        foreach ($produits as $produit) {
            if (array_key_exists($produit->getId(), $size)) {
                $sizes = $size[$produit->getId()];
                $prixHT = $produit->getTotalPrice($panier[$produit->getId()]);
                $totalHT += $prixHT["prix"];
                $commande['produit'][$produit->getId()] = array(
                    'id' => $produit->getId(),
                    'categorie' => $produit->getCategorie()->getNom(),
                    'souscategorie' => $produit->getSousCategorie()->getNom(),
                    'nom' => $produit->getNom(),
                    'quantite' => $panier[$produit->getId()],
                    'prix' => round($produit->getPrix(), 3),
                    'image' => $produit->getImage()
                );

                $cp = new Commande_Produit();
                $cp->setProduit($produit);
                $cp->setQuantite($panier[$produit->getId()]);
                $cp->setCommande($c);
                $cp->setPrix($prixHT["prix"]);


                foreach ($sizes as $idsize => $qte) {
                    $s = $em->getRepository('WebBundle:Size')->find(intval($idsize));
                    if ($s) {
                        // $s->setQuantite($s->getQuantite()- intval($qte));
                        $cp->addSizes(array($idsize => $qte));

                        $em->merge($s);
                    }
                }

                $em->persist($cp);
            } else {
                if (($produit->getQuantite() - $panier[$produit->getId()]) >= 0) {
                    $prixHT = $produit->getTotalPrice($panier[$produit->getId()]);
                    $totalHT += $prixHT["prix"];
                    $commande['produit'][$produit->getId()] = array(
                        'id' => $produit->getId(),
                        'categorie' => $produit->getCategorie()->getNom(),
                        'souscategorie' => $produit->getSousCategorie()->getNom(),
                        'nom' => $produit->getNom(),
                        'quantite' => $panier[$produit->getId()],
                        'prix' => round($produit->getPrix(), 3),
                        'image' => $produit->getImage()
                    );
                    $cp = new Commande_Produit();
                    $cp->setProduit($produit);
                    $cp->setQuantite($panier[$produit->getId()]);
                    $cp->setCommande($c);
                    $cp->setPrix($prixHT["prix"]);
                    // $produit->setQuantite($produit->getQuantite() - $panier[$produit->getId()]);
                    $em->persist($produit);
                    $em->persist($cp);

                } else {
                    if ($produit->getQuantite() == 0) {
                        $this->get('session')->getFlashBag()->add('produitfini', 'Le produit ' . $produit->getNom() . ' est hors stock');
                    } else {
                        $this->get('session')->getFlashBag()->add('produitfini', 'Il ne reste que ' . $produit->getQuantite() . ' ' . $produit->getNom());

                    }
                    $stockproduit++;
                }
            }

        }
        if ($coupon && $coupon != "") {

            $coupon_c = $em->getRepository("WebBundle:Coupon")->findOneBy(array('id' => $coupon, 'is_active' => true, 'is_deleted' => false));
            if ($coupon_c) {
                $c->setCoupon($coupon_c);
                if ($coupon_c->getType() == 1) $totalHT = $totalHT - $coupon_c->getMontant();
                if ($coupon_c->getType() == 2) $totalHT = $totalHT / 100 * (100 - $coupon_c->getPourcentage());
            }


        }
        if ($mode == 1) {
            $totalHT += $station->getPrixLivraison();

            $c->setPrix(round($totalHT, 3));
        } else {
            $c->setPrix(round($totalHT, 3));
        }


        $em->merge($c);


        $em->flush();
        $c->setReference($c->getId() + 1000);
        $em->flush();

        $commande['reference'] = $c->getReference();
        $commande['prix'] = round($totalHT, 3);
        $commande['id'] = $c->getId();
        $commande['token'] = bin2hex($generator->nextBytes(20));
        if ($mode == 1) {
            $adresse = $session->get('adresse');
            $livraison = $em->getRepository('WebBundle:UtilisateursAdresses')->find($adresse['livraison']);
            $commande['prix'] = round($totalHT, 3) + round($station->getPrixLivraison(), 3);
            $commande['livraison'] = array(
                'prenom' => $livraison->getPrenom(),
                'nom' => $livraison->getNom(),
                'telephone' => $livraison->getTelephone(),
                'adresse' => $livraison->getAdresse(),
                'cp' => $livraison->getCp(),
                'ville' => $livraison->getVille(),
                'pays' => $livraison->getPays(),
                'complement' => $livraison->getComplement()
            );
        }

        //  }


        return $commande;
    }


    public function prepareCommandeAction($mode)
    {

        $session = $this->initSession();
        $size = $session->get('size');
        $em = $this->initEntityManager();
        $date = $this->initDate();
        $station_id = $this->initStation();
        $adresse = $session->get('adresse');
        //var_dump($session->get('commande'));
        //exit();
        if (!$session->has('commande') || !isset($session->get("commande", array())["id"])) {
            //var_dump($session->has('commande'));exit();
            $commande = new Commandes();
            //var_dump($commande);exit();
        } else {
            //var_dump($session->get('commande'));exit();
            $commande = $em->getRepository('WebBundle:Commandes')->find($session->get('commande')["id"]);

            $produits = $em->getRepository('WebBundle:Commande_Produit')->findBy(array('commande' => $commande));
            foreach ($produits as $produit) {
                $em->remove($produit);
            }
            $em->flush();
        }
        //$commande = new Commandes();
        // var_dump($commande);die();
        $commande->setUtilisateur($this->getUser());
        $commande->setValider(0);
        $commande->setReference(0);
        // $commande->setCommande($this->facture());
        $commande->setStatutpayement(0);
        // var_dump($adresse);die();

        if ($mode == 1) {
            $addressId = $adresse['livraison'];

            $livraison = $em->getRepository('WebBundle:UtilisateursAdresses')->find($addressId);
            $commande->setAdresselivraison($livraison);
            // $date  = date("Y-m-d");
            /*   $date = date('Y-m-d');
               $startDate = new \DateTime($date);

               $commande->setDateReception($startDate);*/


            $em->persist($commande);

        } else {
            $commande->setDateReception(\DateTime::createFromFormat('Y-m-d', $date["date"]));
            $commande->setPeriodeReception($date['periode']);

        }

        $station = $em->getRepository('WebBundle:Station')->find($station_id);
        $commande->setStation($station);
        $commande->setPays($station->getPays());
        $commande->setUid("");
        // $em->flush();

        //  dump($commande);die;
        $c = $this->facture($commande, $mode);

        if ($c) {
            $this->session->set('commande', $c);
            return new Response($c['id']);
        } else {
            return new Response(null);
        }
    }


}
