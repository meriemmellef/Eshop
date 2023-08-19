<?php

namespace BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use WebBundle\Entity\Couleur;
use WebBundle\Entity\Produits;
use WebBundle\Entity\Size;
use WebBundle\Entity\SousCategories;
use WebBundle\Entity\Utilisateurs;

class DefaultController extends Controller
{

    /**
     * @Route("/dashboard", name= "admin_dashboard")
     */
    public function indexAction()
    {
        $authChecker = $this->container->get('security.authorization_checker');


        if ($authChecker->isGranted('ROLE_SUPER_ADMIN')) {

            return $this->redirectToRoute('pays_index');
        } elseif ($authChecker->isGranted('ROLE_GESTIONNAIRE')) {
            return $this->redirectToRoute('dashboard_index');
        } elseif ($authChecker->isGranted('ROLE_GERANT')) {
            return $this->redirectToRoute('dashboard_gerant_index');
        } else {
            return $this->redirectToRoute('logout');
        }
    }


    /**
     * @Route(path="/activate_subcat",  name="activate_subcat")
     */
    public function sendMailTestAction()
    {
        $em = $this->getDoctrine()->getManager();
        // $souscategories =$em->getRepository('WebBundle:SousCategories')->findBy(array('Pays'=>2));
        $souscategories = $em->getRepository('WebBundle:SousCategories')->getAllSousCategorieByPays(2, "", "");
        foreach ($souscategories as $selectSousCategorie) {

            //////
            $SouCattfils = $em->getRepository('WebBundle:SousCategories')->find($selectSousCategorie['id']);
            $SouCattfils->setNomEn($selectSousCategorie['nom']);
            $em->merge($SouCattfils);

            $em->flush();
        }

        // $souscategoriesdd =$em->getRepository('WebBundle:SousCategories')->getAllSousCategorieByPays(null,"","");
        $souscategoriesss = $em->getRepository('WebBundle:SousCategories')->getAllSousCategorieByPays(2, "", "");




    }



    /**
     * @Route(path="/update_password",  name="update_password")
     */
    public function UpdatePasswordAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

       // $factory = $this->get('security.encoder_factory');
     //   $encoder = $factory->getEncoder($user);
        $encoder = $this->container->get('security.password_encoder');


        if ($request->isMethod('post')) {

            $acpassword = $request->get('acpassword','');
            $nvpassword = $request->get('nvpassword','');
            $repeatpassword = $request->get('repeatpassword','');
         //   $bool = ($encoder->isPasswordValid($user->getPassword(),$password,$user->getSalt())) ? "true" : "false";
           // $encoded = $encoder->encodePassword($user, $plainPassword);

            if((strlen($acpassword)==0)||(strlen($nvpassword)==0)||(strlen($repeatpassword)==0)){
                $this->addFlash('errors', 'Vous devez inserer toutes les informations');
            }
            elseif ($encoder->isPasswordValid($user, $acpassword,$user->getSalt()) && ($nvpassword == $repeatpassword) ) {
                $encoded = $encoder->encodePassword($user, $nvpassword);
                $user->setPassword($encoded);
                $this->getDoctrine()->getManager()->flush();

                $this->addFlash('success',"passwordupdate");
            } else {

                if (!$encoder->isPasswordValid($user, $acpassword,$user->getSalt()))
                    $this->addFlash('errors', "ancienpassworderror");
                if ($nvpassword != $repeatpassword)
                    $this->addFlash('errors', "verifpassword");
            }

            return $this->redirectToRoute('update_password');
        }

        return $this->render('@Backend/Default/profile.html.twig');
    }
    /**
     * @Route(path="/activate_produit",  name="activate_produit")
     */
    public function activateproduit()
    {
        $em = $this->getDoctrine()->getManager();
        $ProduitsPays = $em->getRepository('WebBundle:Produits')->getAllProduitByPays(2);
        //$ProduitsSUPPays = $em->getRepository('WebBundle:Produits')->getAllProduitSUPByPays();
       // dump($ProduitsPays);die();


         foreach ($ProduitsPays as $Produit) {

             //6 687
             //////
             //$parent = 6687  + $Produit['id'] ;



             $ProduitFils = $em->getRepository('WebBundle:Produits')->find($Produit['id']);
             $CategorieFilsId = $ProduitFils->getCategorieId();
             $CategorieFils = $em->getRepository('WebBundle:Categories')->find($CategorieFilsId);
             $categorieP = $em->getRepository('WebBundle:Categories')->find($CategorieFils->getParentId());

             $SousCategorieFilsId = $ProduitFils->getSousCategorieId();
             $SousCategorieFils = $em->getRepository('WebBundle:SousCategories')->find($SousCategorieFilsId);
             $souscategorieP = $em->getRepository('WebBundle:SousCategories')->find($SousCategorieFils->getParentId());;
             $ProduitParent = new Produits();
             $code = intval("0" . rand(1, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9));
             $ProduitParent->setCode($code);

             $ProduitParent->setNom($ProduitFils->getNom());
             $ProduitParent->setNomen($ProduitFils->getNom());
             $ProduitParent->setDescription($ProduitFils->getDescription());
             $ProduitParent->setDescriptionen($ProduitFils->getDescription());

             $ProduitParent->setFile($ProduitFils->getFile());
             $ProduitParent->setPrix(0);

             $ProduitParent->setIsActive(false);
             $ProduitParent->setQuantite(0);
             $ProduitParent->setMaxcommande(0);

             $ProduitParent->setCreatedAt(new \DateTime());
             $ProduitParent->setImage($ProduitFils->getImage());

             $ProduitParent->setCategorie($categorieP);
             $ProduitParent->setCategorieId($categorieP->getId());

             $ProduitParent->setSousCategorie($souscategorieP);
             $ProduitParent->setSousCategorieId($souscategorieP->getId());

             $em->persist($ProduitParent);

             ///create coleur  entity
             $selectColeursArray = $em->getRepository('WebBundle:Couleur')->findBy(array('produit' => $Produit['id']));
             //   $selectColeursArrayId=  $selectProduit->getCouleurs();

             if ($selectColeursArray) {
                 foreach ($selectColeursArray as $selectColeur) {


                     // $selectColeur = $em->getRepository('WebBundle:Couleur')->find($selectColId);
                     $color = new Couleur();
                     $color->setCodeCouleur($selectColeur->getCodeCouleur());
                     $color->setProduit($ProduitParent);
                     $color->setImage($selectColeur->getImage());

                     $selectSizes = $em->getRepository('WebBundle:Size')->findBy(array('couleur' => $selectColeur->getId()));
                     //  dump($selectSizes);
                     //  die();

                     if ($selectSizes) {
                         foreach ($selectSizes as $selectSiz) {

                             $size = new Size();
                             $size->setLibelle($selectSiz->getLibelle());
                             $size->setCouleur($color);
                             $size->setProduit($ProduitParent);
                             $size->setQuantite($selectSiz->getQuantite());
                             $em->persist($size);

                         }
                     }


                     $em->persist($color);


                 }
                 $em->flush();


             }

             $em->flush();


             if ($ProduitParent->getId()){
                 $ProduitFils->setParentId($ProduitParent->getId()) ;

             }else{
                 $ProduitFils->setParentId(0) ;

             }
            // $ProduitFils->setParentId(0) ;
             $ProduitFils->setNomen($ProduitParent->getNom()) ;
             $em->merge($ProduitFils);
             $em->flush();

             // $souscategoriesdd =$em->getRepository('WebBundle:SousCategories')->getAllSousCategorieByPays(null,"","");
          //   $souscategoriesss = $em->getRepository('WebBundle:SousCategories')->getAllSousCategorieByPays(2, "", "");





         }


        /*
             foreach ($ProduitsSUPPays as $prodSup){
            foreach ($ProduitsPays as $Produit) {


                $ProduitFils = $em->getRepository('WebBundle:Produits')->find($Produit['id']);


                $ProduitFils->setParentId($prodSup['id']);
                $em->merge($ProduitFils);
            }

        }

        $em->flush();
         */
    }
}
