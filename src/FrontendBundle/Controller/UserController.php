<?php

namespace FrontendBundle\Controller;

use FrontendBundle\Controller\BaseController;
use FrontendBundle\Form\UtilisateursAdressesType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use WebBundle\Entity\Utilisateurs;
use WebBundle\Entity\UtilisateursAdresses;

/**
 * @Route("/profile")
 */
class UserController extends BaseController
{

    /**
     * @Route(path="/", name="compte")
     */
    public function indexAction(Request $request)
    {
        return $this->render('FrontendBundle:Profile:compte.html.twig');
    }

    /**
     * @Route(path="/favoris", name="favoris")
     */
    public function favorisAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $favoris = $this->getDoctrine()->getRepository('WebBundle:Favoris')->getfavorisByUser( $this->getUser()->getId());

        return $this->render('FrontendBundle:Profile:favoris.html.twig',array('favoris' => $favoris));
    }
        /**
     * @Route(path="/facture", name="facture")
     */
    public function factureAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $factures = $em->getRepository('WebBundle:Commande_Produit')->GetCommandeByUser($this->getUser());

        return $this->render('FrontendBundle:Profile:facture.html.twig',array('factures' => $factures));
    }

    /**
     * @Route(path="/facture/{id}", name="facture_detail")
     */
    public function factureDetailAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        ///get cmd  by connected user and cmd id   $this->getUser()
        $commande = $em->getRepository('WebBundle:Commandes')->byFacture($this->getUser(),$id);
     //was   $commande1 = $em->getRepository('WebBundle:Commandes')->find($id);

    //was
        $produits= $em->getRepository('WebBundle:Commande_Produit')->GetProduitByCommande($commande);


        $gerant = $em->getRepository('WebBundle:Utilisateurs')->getGerantByStation($commande->getStation());
        $station = $em->getRepository("WebBundle:Station")->find($commande->getStation());


//station
        return $this->render('FrontendBundle:Profile:factureDetail.html.twig',
            array(
                'commande' => $commande,
                "station" => $station,
                'email'=>$gerant->getEmailCanonical(),
                'commande_produit' => $produits));
    }

    /**
     * @Route(path="/adresse",  name="profile_adresse")
     */
    public function adresseAction(Request $request)
    {

        $em = $this->initEntityManager();
        $utilisateur = $this->getUser();
        $entity = new UtilisateursAdresses();
        $form = $this->createForm(new UtilisateursAdressesType($em,$utilisateur), $entity);

        if ($this->get('request')->getMethod() == 'POST') {
            $form->handleRequest($this->getRequest());
          // var_dump($form->getData());die();
           // if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setUtilisateur($utilisateur);

                $delegation = $em->getRepository('WebBundle:Delegation')->findOneBy(array('code' => $entity->getCp()));
                //var_dump($delegation);die();
                if ($delegation) {
                    $entity->setPays($delegation->getRegion()->getName());
                    $entity->setVille($delegation->getName());
                }

                $em->persist($entity);
                $em->flush();

                $this->get('session')->getFlashBag()->add('alert-success','Adresse ajouté avec succès');
                return $this->redirect($this->generateUrl('compte'));
            //}
        }

        return $this->render('FrontendBundle:Profile:adresse.html.twig', array('utilisateur' => $utilisateur,
            'form' => $form->createView()));
    }

    /**
     * @Route(path="/facturepdf/{id}",  name="facturepdf")
     */
    public function facturesPDFAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('WebBundle:Commandes')->findOneBy(array('utilisateur' => $this->getUser(),
            'valider' => 1,
            'id' => $id));

        if (!$facture) {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl('facutre'));
        }

        $this->container->get('setNewFacture')->facture($facture)->Output('Facture.pdf');

        $response = new Response();
        $response->headers->set('Content-type' , 'application/pdf');

        return $response;
    }


    public function logoutAction()
    {
        $session = $this->initSession();
        $panier = $this->initPanier();
        $date = $this->initDate();
        $commande = $this->initCommande();
        $addresse = $this->initAdresse();

        $this->get('security.context')->setToken(null);
        $this->get('request')->getSession()->invalidate();

        $session->set("panier",$panier);
        $session->set("commande",$commande);
        $session->set("adresse",$addresse);
        $session->set("date",$date);

        return $this->redirect($this->generateUrl('homepage_frontend'));
    }

    public function csrfUserFormAction()
    {
        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');


        return $this->render('FrontendBundle:User:csrfUser.html.twig', array("csrf_token" => $csrfToken));
    }



}
?>
