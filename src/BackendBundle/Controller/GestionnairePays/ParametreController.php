<?php
namespace BackendBundle\Controller\GestionnairePays;

use BackendBundle\Form\GerantType;
use BackendBundle\Form\ParametreMailType;
use BackendBundle\Form\ParametreSmsType;
use BackendBundle\Form\PaysType;
use BackendBundle\Utils\ExportExcelStyle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use WebBundle\Entity\Pays;
use WebBundle\Entity\Utilisateurs;
use WebBundle\Repository\PaysRepository;
use Symfony\Component\Intl\Intl;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
* @Route("/parametre")
*/
class ParametreController extends Controller
{



    /**
     * @Route("/parametre_sms", name="parametre_sms", methods={"GET","POST"})
     */
    public function parametreSMS(Request $request)
    {
       // $parametre=$paysrepository->find(1);
        $em = $this->getDoctrine()->getManager();
        $pays =  $this->getUser()->getPays() ;
      //  $code = $pays->getId();

        $pays = $em->getRepository('WebBundle:Pays')->find($pays->getId());
      //  dump($pays);die();

        if(!$pays){
            $pays = new Pays();
        }
        $form = $this->createForm(ParametreSmsType::class, $pays);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
         //   $pays->setSmsConfirmCommand();
           // $pays->setSmsNewCommand();
            $em->persist($pays);
            $em->flush();

            return $this->redirectToRoute('parametre_sms');
        }

        return $this->render('@Backend/gestionnaire/parametre/sms.html.twig', [
            'parametre' => $pays,
            'form' => $form->createView(),
            'errors' => $this->getErrors($form, $form->getName())

        ]);
    }
    private function getErrors($baseForm, $baseFormName)
    {
        $errors = array();
        if ($baseForm instanceof \Symfony\Component\Form\Form) {


            foreach ($baseForm->getErrors() as $key => $error) {

                $errors[] = $error->getMessage();
            }
            foreach ($baseForm->all() as $key => $child) {


                if (($child instanceof \Symfony\Component\Form\Form)) {
                    $cErrors = $this->getErrors($child, $baseFormName . "_" . $child->getName());
                    $errors = array_merge($errors, $cErrors);
                }

            }


        }
        return $errors;
    }


    /**
     * @Route("/parametre_mail", name="parametre_mail", methods={"GET","POST"})
     */
    public function parametreMail(Request $request){
        $em = $this->getDoctrine()->getManager();
        $pays =  $this->getUser()->getPays() ;
        //  $code = $pays->getId();

        $pays = $em->getRepository('WebBundle:Pays')->find($pays->getId());
        //  dump($pays);die();

        if(!$pays){
            $pays = new Pays();
        }
        $form = $this->createForm(ParametreMailType::class, $pays);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //   $pays->setSmsConfirmCommand();
            // $pays->setSmsNewCommand();
            $em->persist($pays);
            $em->flush();

            return $this->redirectToRoute('parametre_mail');
        }

        return $this->render('@Backend/gestionnaire/parametre/mail.html.twig', [
            'parametre' => $pays,
            'form' => $form->createView(),
            'errors' => $this->getErrors($form, $form->getName())

        ]);
    }
}
