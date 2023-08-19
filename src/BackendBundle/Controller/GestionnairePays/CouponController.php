<?php

namespace BackendBundle\Controller\GestionnairePays;


use BackendBundle\Form\CouponType;
use BackendBundle\Form\ProduitType;
use BackendBundle\Form\StationType;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use WebBundle\Entity\Coupon;
use WebBundle\Entity\Produits;
use WebBundle\Entity\Station;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/coupon")
 */
class CouponController extends Controller
{
    /**
     *
     * @Route("/", name="coupon_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $search = $request->get('search', "");
        $page = $request->query->getInt('page', 1);

        $coupons = $em->getRepository('WebBundle:Coupon')->getCouponByCountry($this->getUser()->getPays(), $search);

        /*
                $paginator = $this->get('knp_paginator');
        $coupons_paginator = $paginator->paginate(
            $coupons, $page, 10
        //Produits::NUM_ITEMS
        );
        $coupons_paginator->setUsedRoute('coupon_index_paginated');

        */

        $paginator = $this->get('knp_paginator');

        $coupons_paginator = $paginator->paginate(
            $coupons, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            10/*limit per page*/
        );
        return $this->render('@Backend/gestionnaire/coupon/index.html.twig', array(
            'coupons' => $coupons_paginator,
            'search' => $search,
            'nbcoupons' => $coupons,
            'pays' => $this->getUser()->getPays(),
            'page' => $page
        ));
    }

    /**
     * @Route("/new", name="new_coupon", methods={"GET","POST"})
     */
    public function newAction(Request $request)
    {
        $coupon = new Coupon();

        $form = $this->createForm(CouponType::class, $coupon);

        $form->add('nbrcoupon', NumberType::class, array(
            'required' => true,
        ));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $recaptcha = $request->get('g-recaptcha-response', "");

            if ($this->verifyRecaptcha($recaptcha)) {
                $entityManager = $this->getDoctrine()->getManager();
                $coupon->setPays($this->getUser()->getPays());
                $coupon->setIsActive(true);

                $coupon->setIsNbrcoupon(true);

                $entityManager->persist($coupon);
                $entityManager->flush();


                return $this->redirectToRoute('coupon_index');
            } else {

                return $this->render('@Backend/gestionnaire/coupon/new.html.twig', array(
                    'coupon' => $coupon,
                    'error' => 1,
                    'form' => $form->createView(),
                ));
            }


        }

        return $this->render('@Backend/gestionnaire/coupon/new.html.twig', array(
            'coupon' => $coupon,
            'form' => $form->createView(),
        ));
    }


    /**
     * @Route("/{id}/{page}/edit", name="coupon_edit", methods={"GET","POST"})
     */
    public function editAction(Request $request, Coupon $coupon, $page)
    {

        if ($coupon->getPays() == $this->getUser()->getPays()) {
            $form = $this->createForm(CouponType::class, $coupon);


            if ($coupon->getIsNbrcoupon()) {

                $form->add('nbrcoupon', NumberType::class, array(
                    'required' => true,
                ));
            }

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $recaptcha = $request->get('g-recaptcha-response', "");
                if ($this->verifyRecaptcha($recaptcha)) {

                    $coupon->setIsActive(true);

                    $this->getDoctrine()->getManager()->flush();

                    return $this->redirectToRoute('coupon_index', array('page' => $page));

                } else {
                    if ($coupon->getIsNbrcoupon()) {
                        return $this->render('@Backend/gestionnaire/coupon/editcopwithNbr.html.twig', array(
                            'coupon' => $coupon,
                            'error' => 1,
                            'form' => $form->createView(),
                        ));
                    } else {
                        return $this->render('@Backend/gestionnaire/coupon/edit.html.twig', array(
                            'coupon' => $coupon,
                            'error' => 1,
                            'form' => $form->createView(),
                        ));
                    }

                }


            }

            if ($coupon->getIsNbrcoupon()) {
                return $this->render('@Backend/gestionnaire/coupon/editcopwithNbr.html.twig', array(
                    'coupon' => $coupon,
                    'form' => $form->createView(),
                ));
            } else {
                return $this->render('@Backend/gestionnaire/coupon/edit.html.twig', array(
                    'coupon' => $coupon,
                    'form' => $form->createView(),
                ));
            }


        }


        return $this->redirectToRoute('coupon_index', array('page' => $page));


    }

    /**
     *
     * @Route("/genererparprix", name="generer_coupon_prix", methods={"GET","POST"})
     */
    public function genererparprixAction(Request $request)
    {

        if ($request->getMethod() == "POST") {
            $nbcoupon = $request->request->get('nbcoupon', '');
            $montant = $request->request->get('montant', '');
            if ($this->verifyRecaptcha($request->get('g-recaptcha-response'))) {

                if ($nbcoupon != '' && $montant != '') {
                    $entityManager = $this->getDoctrine()->getManager();
                    for ($i = 0; $i < $nbcoupon; $i++) {

                        $coupon = new Coupon();
                        $coupon->setPays($this->getUser()->getPays());
                        $coupon->setMontant($montant);
                        $coupon->setType(1);
                        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $longueurMax = strlen($caracteres);
                        $chaineAleatoire = '';
                        for ($j = 0; $j < 10; $j++) {
                            $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
                        }
                        $coupon->setCode($chaineAleatoire);
                        $entityManager->persist($coupon);
                    }

                }


                $entityManager->flush();
                /*  $referer =$request->request->get('referer');
                  if($referer == "") return $this->redirectToRoute('coupon_index');
                  return $this->redirect($request->request->get('referer'));*/
                return $this->redirectToRoute('coupon_index');
                // return $this->redirectToRoute('coupon_index');


            } else {

                return $this->render('@Backend/gestionnaire/coupon/generer.html.twig', array(
                    'error' => 1,
                ));
            }
        }

        return $this->render('@Backend/gestionnaire/coupon/generercouponprix.html.twig');
    }

    /**
     *
     * @Route("/genererparpourcentage", name="generer_coupon_pourcentage", methods={"GET","POST"})
     */
    public function genererparpourcentageAction(Request $request)
    {

        if ($request->getMethod() == "POST") {
            $nbcoupon = $request->request->get('nbcoupon', '');
            $pourcentage = $request->request->get('pourcentage', '');
            if ($this->verifyRecaptcha($request->get('g-recaptcha-response'))) {
                if ($nbcoupon != '' && $pourcentage != '') {
                    $entityManager = $this->getDoctrine()->getManager();
                    for ($i = 0; $i < $nbcoupon; $i++) {
                        $coupon = new Coupon();
                        $coupon->setPays($this->getUser()->getPays());
                        $coupon->setPourcentage($pourcentage);
                        $coupon->setType(2);
                        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $longueurMax = strlen($caracteres);
                        $chaineAleatoire = '';
                        for ($j = 0; $j < 10; $j++) {
                            $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
                        }
                        $coupon->setCode($chaineAleatoire);
                        $entityManager->persist($coupon);
                    }
                    $entityManager->flush();

                }

            } else {
                return $this->render('@Backend/gestionnaire/coupon/generer.html.twig', array(
                    'error' => 1,
                ));

            }


            // return $this->redirectToRoute('coupon_index');
            /*   $referer =$request->request->get('referer');
                if($referer == "") return $this->redirectToRoute('coupon_index');
                return $this->redirect($request->request->get('referer'));*/
            return $this->redirectToRoute('coupon_index');
        }

        return $this->render('@Backend/gestionnaire/coupon/generercouponpourcentage.html.twig');
    }


    /**
     *
     * @Route("/generer_coupon", name="generer_coupon", methods={"GET","POST"})
     */
    public function genererCoupanAction(Request $request)
    {
        return $this->render('@Backend/gestionnaire/coupon/generer.html.twig');


    }

    /**
     *
     * @Route("/{id}/{page}/delete", name="coupon_delete", methods={"GET"})
     */
    public function deleteAction(Coupon $coupon, $page)
    {
        if ($coupon->getPays() == $this->getUser()->getPays()) {
            $em = $this->getDoctrine()->getManager();
            $onecoupon = $em->getRepository('WebBundle:Coupon')->find($coupon->getId());
            $onecoupon->setIsDeleted(true);
            $onecoupon->setIsActive(false);
            $em->merge($onecoupon);
            $em->flush();
            return $this->redirectToRoute('coupon_index', array('page' => $page));
        }

        return $this->redirectToRoute('coupon_index', array('page' => $page));

    }

    /**
     * @Route("/ExportCoupon", name="ExportCoupon" ,defaults={"_format"="xls","_filename"="Liste_des_stations"}, requirements={"_format"="csv|xls|xlsx"})
     * @Template("@Backend/excel/StationExcel.xlsx.twig")
     */
    public function ExportModeleAction($_filename, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        parse_str(parse_url($this->getRequest()->headers->get('referer'), PHP_URL_QUERY), $output);

        if (array_key_exists('search', $output)) $search = $output['search']; else $search = '';
        if (array_key_exists('categorie', $output)) $categorie = $output['categorie']; else $categorie = '';
        if (array_key_exists('souscategorie', $output)) $souscategorie = $output['souscategorie']; else $souscategorie = '';
        $produits = $em->getRepository('WebBundle:Produits')->getProduitByStation($this->getUser()->getStation(), $search, $categorie, $souscategorie);
        return $this->render('@Backend/excel/gestionnaire/ProduitExcel.xlsx.twig', array(
            'Modeles' => $produits,
        ));
    }


    private function verifyRecaptcha($recaptchaResponse)
    {
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, array("secret" => "6LedckodAAAAAA270Y19aTXUpHaNHzxW4LjmaNm5", "response" => $recaptchaResponse));
        $response = curl_exec($ch);
        curl_close($ch);
        // $data = json_decode($response);
        $result = json_decode($response, true);

        return !empty($result['success']);
    }

}
