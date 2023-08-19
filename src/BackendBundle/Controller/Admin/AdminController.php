<?php

namespace BackendBundle\Controller\Admin;

use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends BaseController {

   
    
    /**
     * @Route("/backend", name="easyadmin")
     */
    public function indexAction(Request $request) {

        // if the URL doesn't include the entity name, this is the index page
        if (null === $request->query->get('entity')) {
            // define this route in any of your own controllers
            return $this->redirectToRoute('admin_dashboard');
        }

        // don't forget to add this line to serve the regular backend pages
        return parent::indexAction($request);
    }

    public function preUpdateProduitsEntity($produit)
    {
        if ($produit) {
            $produit->setUpdatedAt(new \DateTime());
        }
    }
    public function prePersistProduitsEntity($produit)
    {

        if ($produit) {
            $produit->setUpdatedAt(new \DateTime());
        }
        //var_dump($produit);die();
    }

    public function showAction()
    {
        $commande = $this->getDoctrine()->getRepository('WebBundle:Commandes')->findOneById($this->request->query->get('id'));

        return $this->render('@Backend/admin/commande/listeDesProduits.html.twig', array('posts' => $commande));
    }

    public function affecterAction()
    {

        $em = $this->getDoctrine()->getManager();
        $commande = $this->getDoctrine()->getRepository('WebBundle:Commandes')->findOneById($this->request->query->get('id'));

        $delegation_grossiste = $em->getRepository('WebBundle:Delegation')->findOneBy(array('code'=>$commande->getCommande()["livraison"]["cp"]))->getGrossiste();

        if ($commande->getGrossiste() == null){
        if ($delegation_grossiste!= null){
            $commande->setGrossiste($delegation_grossiste);
        } else {
            $commande->setGrossiste(null);
            return $this->redirectToRoute('easyadmin', array(
                'action' => 'list',
                'entity' => $this->request->query->get('entity'),
                'errcmd' => 'Pas du grossistes trouvés',
            ));
        }
        $em->flush();
            return $this->redirectToRoute('easyadmin', array(
                'action' => 'list',
                'entity' => $this->request->query->get('entity'),
                'suc' => 'Grossiste affecté avec succés',
            ));
        }else {
            return $this->redirectToRoute('easyadmin', array(
                'action' => 'list',
                'entity' => $this->request->query->get('entity'),
                'errcmd' => 'Commande est déjà affecter à un grossiste',
            ));
        }

    }
}
