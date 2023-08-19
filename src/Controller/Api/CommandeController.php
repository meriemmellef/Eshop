<?php

namespace App\Controller\Api;

use App\Entity\Commande;
use App\Entity\Parametre;
use App\Entity\User;
use App\Repository\CommandeRepository;
use App\Repository\OfferRepository;
use App\Repository\ParametreRepository;
use App\Repository\PrestationRepository;
use App\Repository\PrestationStationRepository;
use App\Repository\ProductRepository;
use App\Repository\StationRepository;
use App\Repository\UserRepository;
use App\Service\QrCodeService;
use App\Service\SendEmailService;
use App\Service\SmsHelper;
use App\Utils\SmsHelperVodafone;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Lexik\Bundle\JWTAuthenticationBundle\Encoder\JWTEncoderInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Utils\ClicToPay;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Contracts\Translation\TranslatorInterface;


/**
 * @Route("/commande")
 */
class CommandeController extends AbstractController
{
    /**
     * @Route("/testsms", name="testsms", methods={"GET"})
     */
    public function testsms(Request $request, TranslatorInterface $translator, ParametreRepository $parametreRepository, SendEmailService $sendEmailService, QrCodeService $qrcodeService, UserRepository $userRepository, CommandeRepository $commandeRepository, StationRepository $stationRepository, ProductRepository $productRepository, OfferRepository $offerRepository): Response
    {
        $smsHelperEG = new SmsHelperVodafone();
        $resultsmsGerant = $smsHelperEG->sendSms('201226656448', 'test sms');
        return new JsonResponse($resultsmsGerant, 200);


    }

    /**
     * @Route("/saveCommandeStep1", name="saveCommandeStep1", methods={"POST"})
     */
    public function saveCommandeStep1(Request $request, UserRepository $userRepository, ParametreRepository $parametreRepository, PrestationStationRepository $prestationStationRepository, PrestationRepository $prestationRepository, StationRepository $stationRepository, ProductRepository $productRepository, OfferRepository $offerRepository): Response
    {
        $marque = $request->get('marque', '');
        $modele = $request->get('modele', '');
        $year = $request->get('year', '');
        $km = $request->get('km', '');
        $carburant = $request->get('carburant', '');
        $stationId = $request->get('stationId', '');
        $offerId = $request->get('offerId', '');
        $productId = $request->get('productId', '');
        $quantity = $request->get('quantity', 1);
        $prestationsIds = $request->get('prestationsIds', '[]');
        $userId = $request->get('userId', '');
        $typeDevice = $request->get('typeDevice', '');
        $user = $userRepository->find($userId);

        $station = $stationRepository->findActiveStation($stationId);
        if (!$station) return new JsonResponse(["code" => 1, "data" => "Station indisponible."], 200);
        $offer = $offerRepository->findActiveOffer($offerId);
        $product = $productRepository->findActiveProduct($productId);
        if (!$offer && !$product) return new JsonResponse(["code" => 2, "data" => "Vous devez choisir un article."], 200);
        $prestationsStation = $prestationStationRepository->findPrestationsStation('', $station->getId(), $prestationsIds);

        $price = 0;

        $commande = new Commande();
        $commande->setMarque($marque);
        $commande->setModele($modele);
        $commande->setYear($year);
        $commande->setKm($km);
        $commande->setCarburant($carburant);
        $commande->setStation($station);
        $parametre = $parametreRepository->find(1);

        if ($parametre) {
            if($parametre->getCodePays()== 'EG'){
                $commande->setCreateAt( new \DateTime("now", new \DateTimeZone("Africa/Cairo")));
            }
            if($parametre->getCodePays()== 'TN'){
                $commande->setCreateAt( new \DateTime("now", new \DateTimeZone("Africa/Tunis")));
            }
        }
        if ($user) $commande->setUser($user);
        if ($quantity != '') $commande->setQuantity($quantity);
        if ($offer) {
            $commande->setOffer($offer);
            if ($offer->getIsPromo()) {
                $price = $price + $offer->getPricePromo() * $quantity;
            } else {
                $price = $price + $offer->getPrice() * $quantity;
            }
        }
        if ($product) {
            $commande->setProduct($product);
            if ($product->getIsPromo()) {
                $price = $price + $product->getPricePromo() * $quantity;
            } else {
                $price = $price + $product->getPrice() * $quantity;
            }
        }
        if ($typeDevice != '') $commande->setTypeDevice($typeDevice);
        foreach ($prestationsStation as $prestationStation) {
            $commande->addPrestation($prestationStation->getPrestation());
            //   $price=$price+$prestation->getPrice();
        }
        $commande->setIsCompleted(false);
        $commande->setPrice($price);
        $commande->setQuantity($quantity);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($commande);
        $entityManager->flush();
        return new JsonResponse(["code" => 3, "data" => $commande->getId()], 200);


    }

    /**
     * @Route("/saveCommandeStep11", name="saveCommandeStep11", methods={"POST"})
     */
    public function saveCommandeStep11(Request $request, UserRepository $userRepository, ParametreRepository $parametreRepository, PrestationStationRepository $prestationStationRepository, PrestationRepository $prestationRepository, StationRepository $stationRepository, ProductRepository $productRepository, OfferRepository $offerRepository): Response
    {

        $stationId = $request->get('stationId', '');
        $productId = $request->get('productId', '');
        $quantity = $request->get('quantity', 1);
        $prestationsIds = $request->get('prestationsIds', '[]');
        $userId = $request->get('userId', '');
        $typeDevice = $request->get('typeDevice', '');

        $user = $userRepository->find($userId);

        $station = $stationRepository->findActiveStation($stationId);
        if (!$station) return new JsonResponse(["code" => 1, "data" => "Station indisponible."], 200);
        $product = $productRepository->findActiveProduct($productId);
        if (!$product) return new JsonResponse(["code" => 2, "data" => "Vous devez choisir un article."], 200);

        $price = 0;

        $commande = new Commande();
        if ($user) $commande->setUser($user);

        if ($product) {

            $commande->setProduct($product);
            if ($product->getIsPromo()) {
                $price = $price + $product->getPricePromo() * $quantity;
            } else {
                $price = $price + $product->getPrice() * $quantity;
            }
        }
        $commande->setStation($station);
        $commande->setIsCompleted(false);
        $commande->setPrice($price);
        $commande->setQuantity($quantity);
        $parametre = $parametreRepository->find(1);

        if ($parametre) {
            if($parametre->getCodePays()== 'EG'){
                $commande->setCreateAt( new \DateTime("now", new \DateTimeZone("Africa/Cairo")));
            }
            if($parametre->getCodePays()== 'TN'){
                $commande->setCreateAt( new \DateTime("now", new \DateTimeZone("Africa/Tunis")));
            }
        }

        if ($typeDevice != '') $commande->setTypeDevice($typeDevice);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($commande);
        $entityManager->flush();
        return new JsonResponse(["code" => 3, "data" => $commande->getId()], 200);


    }


    /**
     * @Route("/saveCommandeStep2", name="saveCommandeStep2", methods={"POST"})
     */
    public function saveCommandeStep2(Request $request, UserRepository $userRepository, CommandeRepository $commandeRepository, StationRepository $stationRepository, ProductRepository $productRepository, OfferRepository $offerRepository): Response
    {
        $date = $request->get('date', '');
        $hour = $request->get('hour', '');
        $id = $request->get('id', '');
        $userId = $request->get('userId', '');
        $user = $userRepository->find($userId);

        $commande = $commandeRepository->find($id);
        if (!$commande) return new JsonResponse(["code" => 1, "data" => "Commande indisponible."], 200);
        if ($user) $commande->setUser($user);
        if ($date != '') $commande->setDateOfReceipt(new \DateTime($date));
        $commande->setReceptionPeriod($hour);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();
        return new JsonResponse(["code" => 2, "data" => $commande->getId()], 200);


    }

    /**
     * @Route("/saveCommandeStep3", name="saveCommandeStep3", methods={"POST"})
     */
    public function saveCommandeStep3(Request $request, TranslatorInterface $translator, ParametreRepository $parametreRepository, SendEmailService $sendEmailService, QrCodeService $qrcodeService, UserRepository $userRepository, CommandeRepository $commandeRepository, StationRepository $stationRepository, ProductRepository $productRepository, OfferRepository $offerRepository): Response
    {
        $baseurl = 'https://' . $request->getHttpHost() . $request->getBasePath();

        $userId = $request->get('userId', '');
        $id = $request->get('id', '');
        $langue = $request->get('langue', 'en');
        $commande = $commandeRepository->find($id);
        if (!$commande) return new JsonResponse(["code" => 1, "data" => "Commande indisponible."], 200);
        $user = $userRepository->find($userId);
        if (!$user) return new JsonResponse(["code" => 2, "data" => "user indisponible."], 200);
        if($commande->getIsCompleted() == false){
            $commande->setIsCompleted(true);
            $commande->setOrderStatus(1);
            $commande->setUid($commande->getId() . uniqid());
            $commande->setUser($user);
            $entityManager = $this->getDoctrine()->getManager();
          //  $entityManager->flush();
            $titregerant = '';
            $titreclient = '';
            if ($commande->getProduct()) {
                $titregerant = $translator->trans('Commande achat produit confirmée', [], 'messages', $langue);
                $titreclient = $translator->trans('Nouvelle Commande N°', [], 'messages', $langue) .
                    $commande->getId() .
                    $translator->trans(' achat produit', [], 'messages', $langue);

            }
            elseif ($commande->getOffer()) {
                $titregerant = $translator->trans('Commande forfait vidange confirmée', [], 'messages', $langue);
                $titreclient = $translator->trans('Nouvelle Commande N°', [], 'messages', $langue) .
                    $commande->getId() .
                    $translator->trans(' forfait vidange ', [], 'messages', $langue);
            }

            $resultqr = $qrcodeService->qrcode(
                $baseurl . '/commande/uid?uid=' . $commande->getUid(),
                $this->getParameter('qrcodes_directory') . $commande->getUid() . '.png',
                $commande->getUid()
            );
            $emailGerant = [];
            foreach ($commande->getStation()->getUsers() as $email) {
                $emailGerant[] = $email->getEmail();
            }

        /*
         $resultemail1 = $sendEmailService->sendEmails([$commande->getUser()->getEmail(),], $titregerant, 'emails/CommandClient.html.twig',
                ['commande' => $commande, 'langue' => $langue], 1);


            $resultemail2 = $sendEmailService->sendEmails($emailGerant, $titreclient,
                'emails/CommandGerant.html.twig', ['commande' => $commande,'langue' =>$langue], 2);
        */
            $parametre = $parametreRepository->find(1);

            dump($parametre);die;
            if ($parametre) {


                if ($parametre->getSmsConfirmCommand() and $parametre->getIsActiveSmsConfirmCommand()) {
                    $messageClient = $parametre->getSmsConfirmCommand();
                    $messageClient = str_replace('%NUM%', $commande->getId(), $messageClient);
                    if ($commande->getOffer()) {
                        $messageClient = str_replace('%TYPE%', 'forfait vidange', $messageClient);
                        $messageClient = str_replace('%PRODUCTNAME%', $commande->getOffer()->getName(), $messageClient);

                    }
                    if ($commande->getProduct()) {
                        $messageClient = str_replace('%TYPE%', 'achat produit', $messageClient);
                        $messageClient = str_replace('%PRODUCTNAME%', $commande->getProduct()->getName(), $messageClient);

                    }
                    if ($commande->getDateOfReceipt()) {
                        $messageClient = str_replace('%DATE%',
                            $commande->getDateOfReceipt()->format('Y-m-d ') . ' ' .
                            $commande->getReceptionPeriod(), $messageClient);
                    } else {
                        $messageClient = str_replace('%DATE%', $commande->getCreateAt()->format('Y-m-d  H:i'), $messageClient);
                    }
                    $messageClient = str_replace('%STATION%', $commande->getStation()->getName(), $messageClient);
                    $messageClient = str_replace('%QRCODE%', $commande->getUid(), $messageClient);
                    if ($parametre->getCodePays() == 'TN') {
                        $smsHelperTN = new SmsHelper();
                        $resultsmsClient = $smsHelperTN->sendSms($parametre->getCodePhone() . $commande->getUser()->getTel(), $messageClient);
                    } elseif ($parametre->getCodePays() == 'EG') {
                        $smsHelperEG = new SmsHelperVodafone();
                        $tel=$parametre->getCodePhone() . $commande->getUser()->getTel();
                        $tel = str_replace('+', '', $tel);
                        dump($messageClient);
                        dump($tel);die;
                        //$resultsmsClient = $smsHelperEG->sendSms($tel, $messageClient);
                    }

                }
                if ($parametre->getSmsNewCommand() and $parametre->getIsActiveSmsNewCommand()) {
                    $messageGerant = $parametre->getSmsNewCommand();

                    $messageGerant = str_replace('%NUM%', $commande->getId(), $messageGerant);
                    if ($commande->getOffer()) {
                        $messageGerant = str_replace('%TYPE%', 'forfait vidange', $messageGerant);

                    }
                    if ($commande->getProduct()) {
                        $messageGerant = str_replace('%TYPE%', 'achat produit', $messageGerant);
                    }
                    if ($commande->getDateOfReceipt()) {

                        $messageGerant = str_replace('%DATE%',
                            $commande->getDateOfReceipt()->format('Y-m-d ') . ' ' .
                            $commande->getReceptionPeriod(), $messageGerant);
                    } else {
                        $messageGerant = str_replace('%DATE%', $commande->getCreateAt()->format('Y-m-d  H:i'), $messageGerant);

                    }

                    if ($commande->getMarque()) {
                        $messageGerant = str_replace('%VEHICULE%', $commande->getMarque() . ', ' . $commande->getModele() .
                            ' ' . $commande->getYear() . ' ' . $commande->getCarburant(), $messageGerant);
                    } else {
                        $messageGerant = str_replace('%VEHICULE%', ' ', $messageGerant);
                    }
                    $messageGerant = str_replace('%CLIENTNAME%', $commande->getUser()->getUsername(), $messageGerant);
                    $messageGerant = str_replace('%CLIENTPHONE%', $commande->getUser()->getTel(), $messageGerant);

                    if ($parametre->getCodePays() == 'TN') {
                        $smsHelperTN = new SmsHelper();
                    } elseif ($parametre->getCodePays() == 'EG') {
                        $smsHelperEG = new SmsHelperVodafone();

                    }

                    foreach ($commande->getStation()->getUsers() as $user) {
                        if ($parametre->getCodePays() == 'TN') {
                            $resultsmsGerant = $smsHelperTN->sendSms($user->getTel(), $messageGerant);
                        } elseif ($parametre->getCodePays() == 'EG') {
                            $tel=$user->getTel();
                            $tel = str_replace('+', '', $tel);
                            $resultsmsGerant = $smsHelperEG->sendSms($tel, $messageGerant);
                        }
                    }
                }


            }
        }

        /*
                $dateTime=new \DateTime();
                $dateString=$dateTime->format('d-m-Y H:i:s');
                $result = $builder
                    ->data($request->getSchemeAndHttpHost().'/commande/uid?uid='.$commande->getUid())
                    ->setEncoding(new Encoding('UTF-8'))
                    ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
                    ->size(400)
                    ->margin(10)
                    ->labelText($dateString)
                    ->build();
                $result->saveToFile( $this->getParameter('qrcodes_directory').$commande->getUid().'png');
                dump( $result->getDataUri();*/

        return new JsonResponse(["code" => 3, "data" => $commande->getId()], 200);


    }


    /**
     * @Route("/payCommande", name="payCommande", methods={"GET"})
     */
    public function payCommande(Request $request, SendEmailService $sendEmailService, QrCodeService $qrcodeService, UserRepository $userRepository, CommandeRepository $commandeRepository, StationRepository $stationRepository, ProductRepository $productRepository, OfferRepository $offerRepository): Response
    {

        $userId = $request->get('userId', '');
        $id = $request->get('id', '');

        $commande = $commandeRepository->find($id);
        if (!$commande) return new JsonResponse(["code" => 1, "data" => "Commande indisponible."], 200);
        $user = $userRepository->find($userId);
        if (!$user) return new JsonResponse(["code" => 2, "data" => "user indisponible."], 200);


        //TODO
        //ON prod change test.clictopay by ipay.clictopay
        /*
        if($orderId = $commande->getClicToPayOrderId() != ""){
            return new JsonResponse(["code" => 0, "data" =>  ["url" => "https://test.clictopay.com/payment/merchants/CLICTOPAY/payment_fr.html?mdOrder=".$orderId]], 200);
        }*/

        $order_number = $commande->getUid();
        $payment = new ClicToPay();
        $result = $payment->payViaClickToPay("$order_number", $commande->getPrice(), 788, "fr");


        if (isset($result->errorCode)) {
            return new JsonResponse(["code" => 3, "data" => "error, cannot connect to payment kit"], 200);
        } else {
            $orderId = $result->orderId;
            //TODO
            //save orderId
            //$commande->setClicToPayOrderId($orderId);
            //persit and flush
            return new JsonResponse(["code" => 0, "data" => ["url" => $result->formUrl]], 200);
        }
    }


    /**
     * @Route("/ConfirmPayCommande", name="ConfirmPayCommande", methods={"GET"})
     */
    public function confirmCommande(Request $request, SendEmailService $sendEmailService, QrCodeService $qrcodeService, UserRepository $userRepository, CommandeRepository $commandeRepository, StationRepository $stationRepository, ProductRepository $productRepository, OfferRepository $offerRepository): Response
    {

        $order_number = $request->get('orderId');
        //TODO
        //$commande = $commandeRepository->findOneBy(array("clic_to_pay_order_id"=>$order_number));
        //if (!$commande) return new JsonResponse(["code" => 1, "data" => "Commande indisponible."], 200);


        $payment = new ClicToPay();
        $result = $payment->verifyOrder($order_number);

        //$commande->setPaymentResult($result);

        //save json result in command object
        $status = $result->orderStatus;

        //$commande->setPaymentStatus($status);
        //save commande

        //update the status of commande and return to front the payement status
        return new JsonResponse(["code" => 0, "data" => $result->orderStatus], 200);

    }

    /**
     * @Route("/getCommande", name="getCommandee", methods={"GET"})
     */
    public function findCommande(Request $request, CommandeRepository $commandeRepository): Response
    {
        $baseurl = 'https://' . $request->getHttpHost() . $request->getBasePath();

        $id = $request->get('id');
        $commande = $commandeRepository->find($id);
        return new JsonResponse($this->getCommande($commande, $baseurl), 200);


    }

    /**
     * @Route("/getCommandesByDate", name="getCommandesByDate", methods={"GET"})
     */
    public function getCommandesByDate(Request $request, CommandeRepository $commandeRepository): Response
    {
        $baseurl = 'https://' . $request->getHttpHost() . $request->getBasePath();

        $date = $request->get('date', '');
        $commandes = $commandeRepository->findCommandesByDate($date);
        $result = [];
        foreach ($commandes as $commande) {
            array_push($result,
                $this->getCommande($commande, $baseurl . '/uploads/images/',$baseurl . '/uploads/qrcodes/')
            );
        }
        return new JsonResponse($result, 200);


    }

    /**
     * @Route("/getCommandesByUser", name="getCommandesByUser", methods={"GET"})
     */
    public function getCommandesByUser(Request $request, CommandeRepository $commandeRepository): Response
    {
        $baseurl = 'https://' . $request->getHttpHost() . $request->getBasePath();

        $user = $request->get('user', '');
        $historiques = $commandeRepository->findCommandesHistoriqueByUser($user);
        $rendezvous = $commandeRepository->findCommandesRendezVousByUser($user);
        $commandes = $commandeRepository->findCommandesByUser($user);

        $result = [];
        $result['historiques'] = [];
        $result['rendezvous'] = [];
        $result['commandes'] = [];

        foreach ($historiques as $commande) {
            array_push($result['historiques'],
                $this->getCommande($commande, $baseurl)
            );
        }
        foreach ($rendezvous as $commande) {
            array_push($result['rendezvous'],
                $this->getCommande($commande, $baseurl)
            );
        }
        foreach ($commandes as $commande) {
            array_push($result['commandes'],
                $this->getCommande($commande, $baseurl )
            );
        }
        return new JsonResponse($result, 200);


    }

    public function getCommande($data, $url)
    {

        if ($data) {
            if ($data->getDateOfReceipt()) $date = $data->getDateOfReceipt()->format('Y-m-d');
            else $date = '';
            if ($data->getCreateAt()) $createAt = $data->getCreateAt()->format('Y-m-d H:i');
            else $createAt = '';
            $commande = [
                'id' => $data->getId(),
                'vehicule' => [
                    'marque' => $data->getMarque(),
                    'modele' => $data->getModele(),
                    'year' => $data->getYear(),
                    'km' => $data->getKm(),
                    'carburant' => $data->getCarburant(),
                ],
                'price' => $data->getPrice(),
                'dateOfReceipt' => $date,
                'receptionPeriod' => $data->getReceptionPeriod(),
                'paymentStatus' => $data->getPaymentStatus(),
                'orderStatus' => $data->getOrderStatus(),
                'isCompleted' => $data->getIsCompleted(),
                'user' => $this->getUserr($data->getUser()),
                'station' => $this->getStation($data->getStation(), $url),
                'lubricant' => $this->getProduct($data->getProduct(), $url),
                'offer' => $this->getOffer($data->getOffer(), $url),
                'prestations' => $this->getPrestations($data->getPrestations(), $url),
                'qrcode' => $url . '/uploads/qrcodes/' . $data->getUid() . '.png',
                'uid' => $data->getUid(),
                'quantity' => $data->getQuantity(),
                'createAt' => $createAt
            ];
        } else $commande = '';


        return $commande;
    }

    /**
     * @Route("/annulerCommande", name="annulerCommande", methods={"POST"})
     * @throws \Lexik\Bundle\JWTAuthenticationBundle\Exception\JWTEncodeFailureException
     */
    public function annulerCommande(CommandeRepository $commandeRepository,
                                    JWTEncoderInterface $JWTEncoder,
                                    Request $request, UserRepository $userRepository,
                                    SendEmailService $sendEmailService, TranslatorInterface $translator): Response
    {
        $message = "error";
        $statut = 401;
        $email = "";
        /*  $token = $request->get('Authorization');
          if ($token) {
              try {
                  $data = $JWTEncoder->decode($token);
                  $email = $data['email'];
              } catch (\Exception $e) {
                  $message = $e->getMessage();
                  $data = array("code" => 1, "data" => $message, 'token' => $token);
                  $statut = 200;
              }

              $user = $userRepository->findOneBy(["email" => $email, "isDeleted" => false]);
              if ($user) {
                  if (!$user->getIsActive()) {
                      $message = "error";
                      $data = array("code" => 1, "data" => "Le compte est désactivé.");
                      $statut = 200;
                  } else if ($user->hasRole('ROLE_CLIENT')) {
                      */
        $commandeId = $request->get('id', '');
        $langue = $request->get('langue', 'en');
        $commande = $commandeRepository->find($commandeId);
        if (!$commande) {
            $message = "error";
            $data = array("code" => 2, "data" => "commande invalide");
            $statut = 200;
        } else {
            $commande->setOrderStatus(5);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            $titregerant = '';
            $titreclient = '';
            if ($commande->getProduct()) {
                $titreclient = $translator->trans('Commande achat produit annulée', [], 'messages', $langue);
                $titregerant = $translator->trans('Annulation Commande N°', [], 'messages', $langue) .
                    $commande->getId() .
                    $translator->trans(' achat produit', [], 'messages', $langue);

            } elseif ($commande->getOffer()) {
                $titreclient = $translator->trans('Commande forfait vidange annulée', [], 'messages', $langue);
                $titregerant = $translator->trans('Annulation Commande N°', [], 'messages', $langue) .
                    $commande->getId() .
                    $translator->trans(' forfait vidange ', [], 'messages', $langue);
            }
            $emailGerant = ['fatma.boussaid@app4mob.net'];
            foreach ($commande->getStation()->getUsers() as $email) {
                $emailGerant[] = $email->getEmail();
            }
            $resultemail1 = $sendEmailService->sendEmails([$commande->getUser()->getEmail(),
                'fatma.boussaid@app4mob.net'],
                $titregerant
                , 'emails/CommandClient.html.twig',
                ['commande' => $commande, 'titleEmail' => $translator->trans('Votre commande est annulée', [], 'messages', $langue), 'langue' => $langue], 1);

            $resultemail2 = $sendEmailService->sendEmails($emailGerant,
                $titreclient, 'emails/CommandGerant.html.twig',
                ['commande' => $commande, 'titleEmail' => $translator->trans('Une commande est annulée', [], 'messages', $langue), 'langue' => $langue], 2);
            $message = "success";
            $data = array("code" => 3, "data" => "commande modifier");
            $statut = 200;
        }
        /*   } else {
               $message = "error";
               $data = array("code" => 1, "data" => "password is incorrect");
               $statut = 200;
           }

       } else {

           $message = "error";
           $data = array("code" => 1, "data" => "username is incorrect");
           $statut = 200;
       }
   } else {
       $message = "Invalid Token";
       $data = array("code" => 1, "data" => $message, 'token' => $token);
       $statut = 200;
   }
        */

        return new JsonResponse(array(
            'message' => $message,
            'data' => $data,
            'statut' => $statut
        ), $statut);


    }

    /**
     * @Route("/updateDateCommande", name="updateDateCommande", methods={"POST"})
     * @throws \Lexik\Bundle\JWTAuthenticationBundle\Exception\JWTEncodeFailureException
     */
    public function updateDateCommande(CommandeRepository $commandeRepository,
                                       JWTEncoderInterface $JWTEncoder,
                                       Request $request, UserRepository $userRepository,
                                       SendEmailService $sendEmailService, TranslatorInterface $translator): Response
    {

        $message = "error";
        $statut = 401;
        $email = "";
        /*   $token = $request->get('Authorization');
           if ($token) {
               try {
                   $data = $JWTEncoder->decode($token);
                   $email = $data['email'];
               } catch (\Exception $e) {
                   $message = $e->getMessage();
                   $data = array("code" => 1, "data" => $message, 'token' => $token);
                   $statut = 200;
               }

               $user = $userRepository->findOneBy(["email" => $email, "isDeleted" => false]);
               if ($user) {
                   if (!$user->getIsActive()) {
                       $message = "error";
                       $data = array("code" => 1, "data" => "Le compte est désactivé.");
                       $statut = 200;
                   } else if ($user->hasRole('ROLE_CLIENT')) {
        */
        $date = $request->get('date', '');
        $hour = $request->get('hour', '');
        $id = $request->get('id', '');
        $langue = $request->get('langue', 'en');
        $commande = $commandeRepository->find($id);
        if (!$commande) {
            $message = "error";
            $data = array("code" => 2, "data" => "commande invalide");
            $statut = 200;
        } else {
            if ($date != '') $commande->setDateOfReceipt(new \DateTime($date));
            $commande->setReceptionPeriod($hour);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            $titregerant = '';
            $titreclient = '';
            if ($commande->getProduct()) {
                $titreclient = $translator->trans('Commande achat produit modifiée', [], 'messages', $langue);
                $titregerant = $translator->trans('Modification Commande N°', [], 'messages', $langue) .
                    $commande->getId() .
                    $translator->trans(' achat produit', [], 'messages', $langue);

            } elseif ($commande->getOffer()) {
                $titreclient = $translator->trans('Commande forfait vidange modifiée', [], 'messages', $langue);
                $titregerant = $translator->trans('Modification Commande N°', [], 'messages', $langue) .
                    $commande->getId() .
                    $translator->trans(' forfait vidange ', [], 'messages', $langue);
            }
            $emailGerant = ['fatma.boussaid@app4mob.net'];
            foreach ($commande->getStation()->getUsers() as $email) {
                $emailGerant[] = $email->getEmail();
            }
            $resultemail1 = $sendEmailService->sendEmails([$commande->getUser()->getEmail(),
                'fatma.boussaid@app4mob.net'], $titreclient, 'emails/CommandClient.html.twig',
                ['commande' => $commande, 'titleEmail' => $translator->trans('Votre commande est modifiée', [], 'messages', $langue), 'langue' => $langue], 1);

            $resultemail2 = $sendEmailService->sendEmails($emailGerant, $titregerant, 'emails/CommandGerant.html.twig',
                ['commande' => $commande, 'titleEmail' => $translator->trans('Une commande est modifiée', [], 'messages', $langue), 'langue' => $langue], 2);;

            $message = "success";
            $data = array("code" => 3, "data" => "commande modifier");
            $statut = 200;
        }
        /*  } else {
              $message = "error";
              $data = array("code" => 1, "data" => "password is incorrect");
              $statut = 200;
          }

      } else {

          $message = "error";
          $data = array("code" => 1, "data" => "username is incorrect");
          $statut = 200;
      }
  } else {
      $message = "Invalid Token";
      $data = array("code" => 1, "data" => $message, 'token' => $token);
      $statut = 200;
  }
*/

        return new JsonResponse(array(
            'message' => $message,
            'data' => $data,
            'statut' => $statut
        ), $statut);


    }

    public function getUserr($data)
    {
        if ($data) {
            $user = array(
                "id" => $data->getId(),
                "username" => $data->getUsername(),
                "tel" => $data->getTel(),
                "firstName" => $data->getFirstName(),
                "lastName" => $data->getLastName(),
                "email" => $data->getEmail(),
            );
        } else $user = '';

        return $user;
    }

    public function getOffer($data, $url)
    {

        if ($data) {
            $offer = [
                'id' => $data->getId(),
                'name' => $data->getName(),
                'nameEn' => $data->getNameEn(),
                'nameAr' => $data->getNameAr(),
                'description' => $data->getDescription(),
                'descriptionEn' => $data->getDescriptionEn(),
                'descriptionAr' => $data->getDescriptionAr(),
                'price' => $data->getPrice(),
                'pricePromo' => $data->getPricePromo(),
                'isPromo' => $data->getIsPromo(),
                'image' => $url . '/uploads/images/' . $data->getImage(),
                'imageEn' => $url . '/uploads/images/' . $data->getImageEn(),
                'imageAr' => $url . '/uploads/images/' . $data->getImageAr(),
                'file' => $data->getProduct()->getFile(),
                'filePath' => $url . '/uploads/files/' . $data->getProduct()->getFile(),
                'fileEn' => $data->getProduct()->getFileEn(),
                'filePathEn' => $url . '/uploads/files/' . $data->getProduct()->getFileEn(),
                'fileAr' => $data->getProduct()->getFileAr(),
                'filePathAr' => $url . '/uploads/files/' . $data->getProduct()->getFileAr(),
                'quantity' => $data->getQuantity(),
                'product' => $this->getProduct($data->getProduct(), $url),
                'prestations' => $this->getPrestations($data->getPrestations(), $url),

            ];
        } else $offer = '';

        return $offer;
    }

    public function getStation($data, $url)
    {
        $station = [];
        if ($data) {
            if ($data->getIsActive() == true && $data->getIsDeleted() == false) {
                $station = [
                    'id' => $data->getId(),
                    'name' => $data->getName(),
                    'nameEn' => $data->getNameEn(),
                    'nameAr' => $data->getNameAr(),
                    'address' => $data->getAddress(),
                    'addressEn' => $data->getAddressEn(),
                    'addressAr' => $data->getAddressAr(),
                    'tel' => $data->getTel(),
                    'horaires' => $data->getHoraires(),
                    'isClosedSunday' => $data->getIsClosedSunday(),
                    'isOilChange' => $data->getIsOilChange(),
                    'prestationStations' => $this->getPrestationsStation($data->getPrestationStations(), $url),
                    'image' => $url . '/uploads/images/' . $data->getImage(),
                    'file' => $data->getFile(),
                    'filePath' => $url . '/uploads/files/' . $data->getFile(),
                    'fileEn' => $data->getFileEn(),
                    'filePathEn' => $url . '/uploads/files/' . $data->getFileEn(),
                    'fileAr' => $data->getFileAr(),
                    'filePathAr' => $url . '/uploads/files/' . $data->getFileAr(),
                ];
            }
        }


        return $station;
    }

    public function getPrestationsStation($data, $url)
    {
        $prestations = [];
        foreach ($data as $prestation) {
            array_push($prestations, [
                'id' => $prestation->getId(),
                'prestation' => $this->getPrestation($prestation->getPrestation(), $url)
            ]);

        }
        return $prestations;
    }

    public function getPrestation($data, $url)
    {
        if ($data->getIsActive() == true && $data->getIsDeleted() == false) {
            return [
                'id' => $data->getId(),
                'name' => $data->getName(),
                'nameEn' => $data->getNameEn(),
                'nameAr' => $data->getNameAr(),
                'icon' => $url . $data->getIcon()

            ];
        } else {
            return [];
        }


    }

    public function getProduct($data, $url)
    {
        if ($data) {
            $product = [
                'id' => $data->getId(),
                'name' => $data->getName(),
                'nameEn' => $data->getNameEn(),
                'nameAr' => $data->getNameAr(),
                'description' => $data->getDescription(),
                'descriptionEn' => $data->getDescriptionEn(),
                'descriptionAr' => $data->getDescriptionAr(),
                'price' => $data->getPrice(),
                'pricePromo' => $data->getPricePromo(),
                'isPromo' => $data->getIsPromo(),
                'image' => $url . '/uploads/images/' . $data->getImage(),
                'quantity' => $data->getQuantity(),

            ];
        } else $product = '';

        return $product;
    }

    public function getPrestations($data, $url)
    {
        $prestations = [];
        foreach ($data as $prestation) {
            if ($prestation->getIsActive() == true && $prestation->getIsDeleted() == false) {
                array_push($prestations, [
                    'id' => $prestation->getId(),
                    'name' => $prestation->getName(),
                    'nameEn' => $prestation->getNameEn(),
                    'nameAr' => $prestation->getNameAr(),
                    'icon' => $url . '/uploads/images/' . $prestation->getIcon(),
                ]);
            }

        }
        return $prestations;
    }
}