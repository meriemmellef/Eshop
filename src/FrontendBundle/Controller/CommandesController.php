<?php

namespace FrontendBundle\Controller;

use DateTimeZone;
use FrontendBundle\Services\SmsHelper;
use DateTime;
use Swift_SmtpTransport;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use WebBundle\Entity\Commande_Produit;
use WebBundle\Entity\Commandes;
use WebBundle\Entity\Commandes_grossiste;

class CommandesController extends BaseController
{
    public function facture($c,$mode)
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


       // if ($produits){
            foreach ($produits as $produit) {
                if( array_key_exists($produit->getId(), $size)){
                    $sizes=$size[$produit->getId()];
                    $prixHT = $produit->getTotalPrice($panier[$produit->getId()]) ;
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


                    foreach ($sizes as $idsize => $qte){
                        $s = $em->getRepository('WebBundle:Size')->find(intval($idsize));
                        if($s){
                            // $s->setQuantite($s->getQuantite()- intval($qte));
                            $cp->addSizes(array($idsize => $qte));

                            $em->merge($s);
                        }
                    }

                    $em->persist($cp);
                }
                else{
                    if (($produit->getQuantite() -  $panier[$produit->getId()]) >= 0) {
                        $prixHT = $produit->getTotalPrice($panier[$produit->getId()]) ;
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

                    }
                    else {
                        if($produit->getQuantite() == 0)
                        {
                            $this->get('session')->getFlashBag()->add('produitfini', 'Le produit '.$produit->getNom().' est hors stock');
                        }
                        else{
                            $this->get('session')->getFlashBag()->add('produitfini', 'Il ne reste que ' . $produit->getQuantite() . ' '.$produit->getNom());

                        }
                        $stockproduit++;
                    }
                }

            }
       // }

        if($coupon && $coupon != ""){

            $coupon_c=$em->getRepository("WebBundle:Coupon")->findOneBy(array('id'=>$coupon,'is_active'=>true,'is_deleted'=>false));
            if($coupon_c){
                $c->setCoupon($coupon_c);
                if($coupon_c->getType()== 1) $totalHT=$totalHT-$coupon_c->getMontant();
                if($coupon_c->getType()== 2) $totalHT=$totalHT/100 *(100-$coupon_c->getPourcentage());
            }


        }
        if($mode == 1){
            $totalHT += $station->getPrixLivraison();

            $c->setPrix(round($totalHT, 3));
        }
        else{
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
            if($mode == 1){
                $adresse = $session->get('adresse');
                $livraison = $em->getRepository('WebBundle:UtilisateursAdresses')->find($adresse['livraison']);
                $commande['prix'] = round($totalHT, 3)+round($station->getPrixLivraison(), 3);
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

            $produits = $em->getRepository('WebBundle:Commande_Produit')->findBy(array('commande'=>$commande));
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



        if($mode==1 ){

            $livraison = $em->getRepository('WebBundle:UtilisateursAdresses')->find($adresse['livraison']);

            $commande->setAdresselivraison($livraison);
        }


        $commande->setDateReception(\DateTime::createFromFormat('Y-m-d', $date["date"]));
        $commande->setPeriodeReception($date['periode']);
        $station = $em->getRepository('WebBundle:Station')->find($station_id);
        $commande->setStation($station);
        $commande->setPays($station->getPays());
        $commande->setUid("");

      //  dump($commande);die;
        $c = $this->facture($commande,$mode);

        if ($c) {
            $this->session->set('commande', $c);
            return new Response($c['id']);
        } else {
            return new Response(null);
        }
    }

    /*
     * Cette methode remplace l'api banque.
     */
    /**
     * @Route(path="/mail_test/{id}",  name="send_mail_test")
     */
    public function sendMailTestAction($id)
    {
        $em = $this->initEntityManager();
        $commande = $em->getRepository('WebBundle:Commandes')->find($id);
        $produits = $em->getRepository("WebBundle:Commande_Produit")->findBy(array('commande' => $commande));
         $client  =$em->getRepository('WebBundle:Utilisateurs')->find("106");
        $pays  =$em->getRepository('WebBundle:Pays')->find($commande->getPays()->getId());


        //Ici le mail de validation
        $message = \Swift_Message::newInstance()
            ->setSubject('Validation de votre commande')
            ->setFrom(array('station.drive.re@gmail.com' => "Total B2B"))
            ->setTo("wannassirahma@gmail.com")
            ->setCharset('utf-8')
            ->setContentType('text/html')
            ->setBody($this->renderView('FrontendBundle:SwiftLayout:validationCommande.html.twig', array('commande' => $commande,'email' => "wannassirahma@gmail.com",'produits'=>$produits,'client' => $client)), 'text/html');

        $this->get('mailer')->send($message);
        // $result = $mailer->send($message);
        //var_dump($result);die();
        return $this->render('FrontendBundle:SwiftLayout:validationCommande.html.twig'
            , array('commande' => $commande,'email' => "wannassirahma@gmail.com",'produits'=>$produits,'client' => $client,'pays' => $pays));
    }

    /**
     * @Route(path="/validation_commande",  name="validation_commande")
     */
    public function validationCommandeAction(Request $request)
    {

        // $payzen_response = json_decode($request->get("kr-answer", "{}"));


        $status_payement = 0;
        /*   if (property_exists($payzen_response, "orderStatus") && $payzen_response->orderStatus == "PAID") {
               $status_payement = 1;
           }*/

        // $payzen_response = json_decode($payzen_response);

        $em = $this->initEntityManager();
        $session = $this->initSession();

        if(!$this->pays){
            return $this->redirectToRoute('select_country');
        }

        $s_commande = $this->initCommande();

        if (!isset($s_commande["id"])) {
            return $this->redirectToRoute('homepage_frontend');
        }

        $id = $s_commande["id"];
        $panier = $this->initPanier();
        $size = $this->initSize();
        $adresse = $this->initAdresse();
        $csession = $this->initCommande();
        $size = $this->initSize();

        /**
         * @var Commandes $commande
         */
        $commande = $em->getRepository('WebBundle:Commandes')->find($id);
        $gerant = $em->getRepository('WebBundle:Utilisateurs')->getGerantByStation($commande->getStation());



       /*rahma comment  $command_prix = $commande->getPrix();
        $prix_livraison = $commande->getStation()->getPrixLivraison();
        $Is_livraison =   $commande->getAdresselivraison();
        if ($Is_livraison){
            //add prix livraison  to command e
            $command_prix = $commande->getPrix() + $prix_livraison ;
            $commande->setPrix($command_prix);

        }*/
        $commande->setValider(1);
        $commande->setStatutpayement($status_payement);
        // $commande->setPayzenResponse($payzen_response);
        $commande->setDateReservation(new DateTime('now'));
        $pays = $this->session->get("pays","");

        if ($pays->getCode()=="mg"){
            $commande->setCreatedAt(new DateTime('now',new DateTimeZone('Africa/Nairobi')));// GMT +3
        }

        if ($pays->getCode()=="tg"){
            $commande->setCreatedAt(new DateTime('now',new DateTimeZone('Africa/Lome')));// GMT
        }


        $commande->setUid($id . "ary" . uniqid());

        $this->generateQrCodeByCommande($commande);

        $commande_valid = $session->get('commande');
        $produits = $em->getRepository("WebBundle:Commande_Produit")->findBy(array('commande' => $commande));
        $i = 0;
        $message = 'Attention, dans votre stock, il ne vous reste que ';
        foreach ($produits as $produit) {
            if( array_key_exists($produit->getProduit()->getId(), $size)){
                $sizes=$size[$produit->getProduit()->getId()];
                foreach ($sizes as $idsize => $qte){
                    $s = $em->getRepository('WebBundle:Size')->find(intval($idsize));
                    if($s){
                        $s->setQuantite($s->getQuantite()- intval($qte));
                        if ($s->getQuantite() <= 3) {
                            $i++;
                            $message = $message . $s->getQuantite() . ' ' . $produit->getProduit()->getNom() .' taille '.$s->getLibelle(). ', ';
                        }

                        $em->merge($s);
                    }
                }

            }
            else{
                $produit->getProduit()->setQuantite($produit->getProduit()->getQuantite() - $produit->getQuantite());

                if ($produit->getProduit()->getQuantite() <= 3) {
                    $i++;
                    $message = $message . $produit->getProduit()->getQuantite() . ' ' . $produit->getProduit()->getNom() . ', ';
                }
                $em->merge($produit);
            }



        }
        $gerant = $em->getRepository('WebBundle:Utilisateurs')->getGerantByStation($commande->getStation());

        if ($i > 0) {

            $message_gerant = \Swift_Message::newInstance()
                ->setSubject('Alert Stock')
                ->setFrom(array('station.drive.re@gmail.com' => "Drive"))
                ->setTo($gerant->getEmailCanonical())
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody($message);
            $this->get('mailer')->send($message_gerant);




        }
////////////////////////send mail on command upload
        if ($pays){
                if ( $pays->getIsActiveMailConfirmCommand() and $pays->getMailConfirmCommand() ){

                    $subject = 'Commande Validée';
                    $Email = $commande->getUtilisateur()->getEmail();
                    $MailClient = $pays->getMailConfirmCommand();

                    $MailClient = str_replace('%NUM%', $commande->getReference(), $MailClient);
                    $productsName="";
                    if ($produits) {
                        foreach ($produits as $produit) {
                            $productsName .= ",".$produit->getProduit()->getNom();
                        }
                    }
                    $MailClient = str_replace('%PRODUCTNAME%',  $productsName, $MailClient);
                    $MailClient = str_replace('%PRIX%',$commande->getPrix().$pays->getDevise()  , $MailClient);

                    if ($commande->getDateReservation()) {
                        //$period = ;
                        $MailClient = str_replace('%DATE%',
                            $commande->getDateReservation()->format('Y-m-d ') . ' ' .
                            $commande->getPeriodeToString(), $MailClient);
                    } else {
                        $MailClient = str_replace('%DATE%', $commande->getCreatedAt()->format('Y-m-d  H:i'), $MailClient);
                    }


                    $MailClient = str_replace('%STATION%', $commande->getStation()->getNom(), $MailClient);
                 /*
                     if ($commande->getUid()){
                        $MailClient = str_replace('%QRCODE%', $commande->getUid(), $MailClient);


                    }else{
                        $MailClient = str_replace('%QRCODE%',"", $MailClient);

                    }
                    */


                    //         $message->setContentType('text/html');

                    $MailClient = preg_replace('/(\v|\s)+/', ' ', $MailClient);

                  $this->sendMessageWithGmail($subject,$Email,$pays ,$MailClient,$commande,"wannassirahma@gmail.com");


            }else{
                $message_client = \Swift_Message::newInstance()
                    ->setSubject('Commande Validée')
                    ->setFrom(array('station.drive.re@gmail.com' => "Drive"))
                    ->setTo($commande->getUtilisateur()->getEmail())
                    ->setCharset('utf-8')
                    ->setContentType('text/html')
                    ->setBody($this->renderView('FrontendBundle:SwiftLayout:validationCommande.html.twig',
                        array('commande' => $commande, 'produits' => $produits, 'email' => $gerant->getEmailCanonical(),'size' => $size)));

                $this->get('mailer')->send($message_client);

            }

            $gestionPays = $em->getRepository('WebBundle:Utilisateurs')->getGestionnaireByPays($pays->getId());//


            $gestionsPays = $em->getRepository('WebBundle:Utilisateurs')->getGestionnairesPays($pays->getId());//
            $arrayGesmails=array();
            foreach ($gestionsPays as $gestion){
                $arrayGesmails[]=$gestion->getEmail();
            }
            ////list mail gerant
            $Gerantmails = $em->getRepository('WebBundle:Utilisateurs')->getAllGerantByStation($commande->getStation());//
            $arrayGerantmails=array();
            foreach ($Gerantmails as $gerant){
                $arrayGerantmails[]=$gerant->getEmail();
            }
            if ( $pays->getIsActiveMailNewCommand() and $pays->getMailNewCommand() ){

                $subject = 'Nouvelle Commande';
                $Email =$gerant->getEmail();
                $EmailGestion =$gestionPays->getEmail();
                $MailGerant = $pays->getMailNewCommand();

                $MailGerant = str_replace('%NUM%', $commande->getReference(), $MailGerant);
                $productsName="";
                if ($produits) {
                    foreach ($produits as $produit) {
                        $productsName .= ",".$produit->getProduit()->getNom();
                    }
                }
                $MailGerant = str_replace('%PRODUCTNAME%',  $productsName, $MailGerant);
                $MailGerant = str_replace('%PRIX%',$commande->getPrix().$pays->getDevise()  , $MailGerant);

                if ($commande->getDateReservation()) {
                    //$period = ;
                    $MailGerant = str_replace('%DATE%',
                        $commande->getDateReservation()->format('Y-m-d ') . ' ' .
                        $commande->getPeriodeToString(), $MailGerant);
                } else {
                    $MailGerant = str_replace('%DATE%', $commande->getCreatedAt()->format('Y-m-d  H:i'), $MailGerant);
                }

                /////
                $MailGerant = str_replace('%CLIENTMAIL%',  $commande->getUtilisateur()->getEmail(), $MailGerant);
                if($commande->getUtilisateur()->getFirstName()){
                    $MailGerant = str_replace('%CLIENTNAME%',  $commande->getUtilisateur()->getFirstName(), $MailGerant);

                }else{
                    $MailGerant = str_replace('%CLIENTNAME%', "", $MailGerant);

                }

              /*
               *   if ($commande->getUid()){
                    $MailGerant = str_replace('%QRCODE%', $commande->getUid(), $MailGerant);

                }else{
                    $MailGerant = str_replace('%QRCODE%',"", $MailGerant);

                }
              */

                $MailGerant = preg_replace('/(\v|\s)+/', ' ', $MailGerant);

               //was $this->sendMessageWithGmail($subject,$Email,$pays ,$MailGerant,$commande,$arrayGesmails);
                $this->sendMessageWithGmail($subject,$arrayGerantmails,$pays ,$MailGerant,$commande,$arrayGesmails);


            }else{
                $message_gerant = \Swift_Message::newInstance()
                    ->setSubject('Nouvelle Commande')
                    ->setFrom(array('b2b.total@gmail.com' => "Drive"))
                    ->setTo($arrayGerantmails)
                   // ->setTo($gerant->getEmail())
                    //->setCc($gestionPays->getEmail())
                    ->setCc($arrayGesmails)
                    ->setCharset('utf-8')
                    ->setContentType('text/html')
                    ->setBody($this->renderView('FrontendBundle:SwiftLayout:nouvelleCommande.html.twig',
                        array('client' => $this->getUser(), 'commande' => $commande, 'produits' => $produits,'size' => $size)));

                $this->get('mailer')->send($message_gerant);

            }
        }

          $this->initCoupon();
          $coupon_session=$this->coupon;

        // ADD SMS TO DGERANT CLIENT SUPERADMIN//
        //  $gerant = $em->getRepository('WebBundle:Utilisateurs')->getGerantByStation($commande->getStation());
         // ->setTo($gerant->getEmailCanonical())
           //$commande->getUtilisateur()->getEmail()
        //Super admin get tel
        /*****send sms to gérant station ****/
        /*****send sms de confirm cmd  to client  ****/
        /*****send sms de confirm cmd to SuperAdmin  ****/

       // $pays = $this->pays;

        $pays = $em->getRepository('WebBundle:Pays')->find($pays->getId());


        if ($pays){
            $smsHelper = new SmsHelper();
            /***send sms to client ***/
            if ($pays->getSmsConfirmCommand() and $pays->getIsActiveSmsConfirmCommand()){
                $messageClient = $pays->getSmsConfirmCommand();
                $messageClient = str_replace('%NUM%', $commande->getReference(), $messageClient);


                $productsName="";
                if ($produits) {
                    foreach ($produits as $produit) {
                        $productsName .= ",".$produit->getProduit()->getNom();
                    }
                }
                $messageClient = str_replace('%PRODUCTNAME%',  $productsName, $messageClient);


                if ($commande->getDateReservation()) {
                    //$period = ;
                    $messageClient = str_replace('%DATE%',
                        $commande->getDateReservation()->format('Y-m-d ') . ' ' .
                        $commande->getPeriodeToString(), $messageClient);
                } else {
                    $messageClient = str_replace('%DATE%', $commande->getCreatedAt()->format('Y-m-d  H:i'), $messageClient);
                }


                $messageClient = str_replace('%STATION%', $commande->getStation()->getNom(), $messageClient);
                $messageClient = str_replace('%PRIX%', $commande->getPrix().$pays->getDevise(), $messageClient);





                $messageClient = preg_replace('/(\v|\s)+/', ' ', $messageClient);
               

                ///send sms to client
           //     $resultsmsClient = $smsHelper->sendSms('+216'.$commande->getUtilisateur()->getTel(), $messageClient);


            }


            /***send sms to gerant ***/
            if ( $pays->getSmsNewCommand() and $pays->getIsActiveSmsNewCommand() ){
                $messageGerant = $pays->getSmsNewCommand();

                $messageGerant = str_replace('%NUM%', $commande->getReference(), $messageGerant);
              /*  if ($produits) {
                    foreach ($produits as $produit) {
                        $messageClient = str_replace('%PRODUCTNAME%',  $produit->getProduit()->getNom(), $messageClient);
                    }
                }*/

                $productsName="";
                if ($produits) {
                    foreach ($produits as $produit) {
                        $productsName .= ",".$produit->getProduit()->getNom();
                    }
                }
                $messageGerant = str_replace('%PRODUCTNAME%',  $productsName, $messageGerant);

                $messageGerant = str_replace('%PRIX%', $commande->getPrix().$pays->getDevise(), $messageGerant);

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


                    $gerantsStation = $em->getRepository('WebBundle:Utilisateurs')->getAllGerantByStation($commande->getStation());//
                    if ($gerantsStation){
                        foreach ($gerantsStation as $gerant){
                           $resultsmsGerant = $smsHelper->sendSms($pays->getCodePhone().$gerant->getTel(), $messageGerant);
                            $resultsmsteltwo = $smsHelper->sendSms($pays->getCodePhone().$gerant->getTelFacultatif(), $messageGerant);
                            }
                        }
                   }


                
                $gestionsPays = $em->getRepository('WebBundle:Utilisateurs')->getGestionnairesPays($pays->getId());//
                foreach ($gestionsPays as $gestion){      
                    $resultsmsGestion = $smsHelper->sendSms($pays->getCodePhone().$gestion->getTel(), $messageGerant);
                    
                }

                ///send to
            }



            //////send sms to superadmin////


        }





        if($coupon_session){

            $coupon= $em->getRepository("WebBundle:Coupon")->find($coupon_session);

            if($coupon->getIsNbrcoupon()){
                $Nbrcoupon =   $coupon->getNbrcoupon();
                $newNbr = $Nbrcoupon -1 ;
                $coupon->setNbrcoupon($newNbr);

            }else{
                $coupon->setIsActive(false);

            }

            $em->merge($coupon);

        }

        $p = $panier;
        $panier = [];
        $coupon_session = [];
        $csession = [];
        $adresse = [];
        $this->session->set('panier', $panier);
        $this->session->remove('coupon', $coupon_session);
        $this->session->set('size', []);
        $this->session->remove('commande');
        $em->flush();

        return $this->render(
            'FrontendBundle:panier:thanks.html.twig',
            array(
                'station' => $commande->getStation(),
                'size' => $size,
                'produits' => $produits,
                'totale' => $commande->getPrix(),
                "commande" => $commande,
                "message" => null,
                'last_username' => null,
                'error' => null,
                'csrf_token' => null,
                'email'=>$gerant->getEmailCanonical(),
            )
        );


    }


    public function generateQrCodeByCommande($commande)
    {
        $options = array(
            'code' => 'https://eshop-station.com/commandes/'.$commande->getUid(),
            'type' => 'qrcode',
            'format' => 'png',
            'width' => 5,
            'height' => 5,
            'color' => array(0, 0, 0),
        );

        $barcode = $this->get('skies_barcode.generator')->generate($options);
        $savePath = $this->container->getParameter('qr_directory');
      //  dump($savePath);die;
        $fileName = $commande->getUid().'.png';
        file_put_contents($savePath . $fileName, base64_decode($barcode));
    }


    public function sendMessageWithGmail($Subject,$Email,$pays ,$Body,$commande,$emailgestionn)
    {
        /*$port = $pays->getMailPort();
        $from ="E-Shop@mail02.totalenergies.com";
        $host = $pays->getMailHost();
        $security =  $pays->getMailEncryption();
        $username= $pays->getMailUsername();
        $password = $pays->getMailPassword();*/
//E-Shop@mail02.totalenergies.com

      /*$transport = (new Swift_SmtpTransport('in-v3.mailjet.com', 587, 'tls'))
            ->setUsername('6be0499012bf45cf8bdf8dc89a9a5c63')
            ->setPassword('ec346b1800e32819f9dedfe7c1d1fddc')
        ;
      $transport = (new \Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
            ->setUsername('pumpattendee@gmail.com')
            ->setPassword('incentive123');*/
        $username = "5b22c62fb7827a7f00d2e4e4d4cdc9aa";
        $password = "b6b9dfc5a042ecaa1b6a0fdd9f27f52c";
        $host ="in-v3.mailjet.com";
        $port = "587";
        $security = "tls";
        //  $from = $pays->getMailUsername();
        //   $host = $pays->getMailHost();
        //   $security = $pays->getMailEncryption();
        //   $username = $pays->getMailUsername();
        //   $passwordd = $pays->getMailPassword();
        $from ="E-Shop@mail02.totalenergies.com";

        $transport = (new \Swift_SmtpTransport($host, $port, $security))
            ->setUsername($username)
            ->setPassword($password);
        $transport->setLocalDomain('[127.0.0.1]'); // don't really need it*/
        $mailer=new \Swift_Mailer($transport);



        try {
            $message = (new \Swift_Message($Subject))
                ->setFrom(array($from => "Drive"))
                ->setTo( $Email)
              ->setCc($emailgestionn);

       if ($commande->getUid()){

                $Body = str_replace('%QRCODE%',"", $Body);
                $message ->setBody($Body, 'text/html');

                $message->attach(\Swift_Attachment::fromPath($this->container->get('kernel')->getRootDir() . '/../web/uploads/commandes/' . $commande->getUid().'.png'));


            }else{

                $Body = str_replace('%QRCODE%',"", $Body);
                $message->setBody($Body, 'text/html');

            }

               $result=$mailer->send($message);

        } catch (\Exception $e) {
           // dump($e);die();

            return $e->getMessage();
        }

        return $result;


    }

}
