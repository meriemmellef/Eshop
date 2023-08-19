<?php

namespace BackendBundle\Controller\Admin;


use BackendBundle\Form\PaysType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;
use WebBundle\Entity\Pays;
use WebBundle\Repository\PaysRepository;
use Symfony\Component\Intl\Intl;

/**
 * @Route("/pays")
 */
class PaysController extends Controller
{
    /**
     * @Route("/", name="pays_index", methods={"GET"})
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $code = $request->get('code', "");

        $pays = $em->getRepository('WebBundle:Pays')->getAllPays($code);
        return $this->render('@Backend/admin/pays/index.html.twig', [
            'code' => $request->get('code'),
            'pays' => $pays,
            'listpays' => $em->getRepository('WebBundle:Pays')->findAll()
        ]);


        // return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/new", name="pays_new", methods={"GET","POST"})
     */
    public function newAction(Request $request)
    {
        $countries = Intl::getRegionBundle()->getCountryNames();
        $codes = array();
        foreach ($countries as $key => $value) {
            $codes[strtolower($key)] = $value;

        }

        $formOptions = array('code' => $codes);
        $pays = new Pays();
        $form = $this->createForm(PaysType::class, $pays, $formOptions);
        $local = $this->get('session')->get('_locale', "fr");


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {


            $code = $form->get('code')->getData() ;
            $string = strtoupper($code);

            $countryname = $countries[$string] ;
            $pays->setNom($countryname);

         /*was   if(!$this->checkEmailConfig($pays)){
                return $this->render('@Backend/admin/pays/new.html.twig', [
                    'pay' => $pays,
                    'form' => $form->createView(),
                ]);
            }*/
            if ($request->get('hasphoto')==1){
                $pays->setImage1('');
                $pays->setImage2('');
                $pays->setImage3('');
                $pays->setImage4('');

            }else{
                if($filename = $this->uploadSlider($form['image1']->getData(),"image_directory")){
                    $pays->setImage1($filename);
                }
                if($filename = $this->uploadSlider($form['image2']->getData(),"image_directory")){
                    $pays->setImage2($filename);
                }
                if($filename = $this->uploadSlider($form['image3']->getData(),"image_directory")){
                    $pays->setImage3($filename);
                }
                if($filename = $this->uploadSlider($form['image4']->getData(),"image_directory")){
                    $pays->setImage4($filename);
                }
            }

            //how_to_buy_help
            $web_site_filiale =$form->get('web_site_name_filiale')->getData() ;
            $web_site_url_filiale ='https://'.$web_site_filiale ;
          //  dump($web_site_url_filiale);die();
            $pays->setWebSiteUrlFiliale($web_site_url_filiale);

            if (!$form->get('how_to_buy_help')->getData()){
                $pays->setHowToBuyHelp(" ");

            }
            if (!$form->get('station_popup_title')->getData()){
                $pays->setStationPopupTitle(" ");
            }

            if (!$form->get('station_popup_description')->getData()){
                $pays->setStationPopupDescription(" ");
            }
            if (!$form->get('cgu_file_upload')->getData()){
                $pays->setCguFile("");
            }

            if (!$form->get('personel_data_file_upload')->getData()){
                $pays->setPersonelDataFile("");
            }

            if (!$form->get('cgv_file_upload')->getData()){
                $pays->setCgvFile("");
            }

            if (!$form->get('mention_legale_file_upload')->getData()){
                $pays->setMentionLegaleFile("");
            }

            if (!$form->get('rappel_rgpd_text')->getData()){
                $pays->setRappelRgpdText("");
            }

            if (!$form->get('cookies_banner')->getData()){
                $pays->setCookiesBanner("");
            }


            //symfony forms treat blank caracter as empty value
            if ($request->request->get("pays")["devise_thousands_separator"] === " ")
                $pays->setDeviseThousandsSeparator(" ");
            if ($request->request->get("pays")["devise_decimal_separator"] === " ")
                $pays->setDeviseDecimalSeparator(" ");


            /////cgu_file les file
            if($filename = $this->uploadDocument($form['cgu_file_upload']->getData(),"condition_general_directory")){
                $pays->setCguFile($filename);
            }
            if($filename = $this->uploadDocument($form['cgv_file_upload']->getData(),"condition_vente_directory")){
                $pays->setCgvFile($filename);
            }
            if($filename = $this->uploadDocument($form['personel_data_file_upload']->getData(),"personal_data_directory")){
                $pays->setPersonelDataFile($filename);
            }
            if($filename = $this->uploadDocument($form['mention_legale_file_upload']->getData(),"legal_notice_directory")){
                $pays->setMentionLegaleFile($filename);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pays);
            $entityManager->flush();

            return $this->redirectToRoute('pays_index');
        }

        return $this->render('@Backend/admin/pays/new.html.twig', [
            'pay' => $pays,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pays_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Pays $pays)
    {
     //   dump($pays);die();
        $countries = Intl::getRegionBundle()->getCountryNames();
        $codes = array();
        foreach ($countries as $key => $value) {
            $codes[strtolower($key)] = $value;
        }
        $formOptions = array('code' => $codes);
        $form = $this->createForm(PaysType::class, $pays, $formOptions);

        $form

            ->add("mail_password",  PasswordType::class,array(
                'required' => false,'empty_data' => $pays->getMailPassword()            ))

            ->add('cgu_file_upload', FileType::class, [
        'attr' => ['placeholder' => 'choisir un fichier'],
        'mapped' => false,
        'required' => false,
            'translation_domain' => 'messages',
            'constraints' => [
            new File([
                'maxSize' => '1024k',
                'mimeTypes' => [
                    'application/pdf',
                ],
                //'mimeTypesMessage' => 'Veuillez télécharger un fichier  pdf',

            ])
        ],
    ])
        ->add('personel_data_file_upload', FileType::class, [
            'attr' => ['placeholder' => 'choisir un fichier'],
            'translation_domain' => 'messages',

            'mapped' => false,
            'required' => false,
            'constraints' => [
                new File([
                    'maxSize' => '1024k',

                    'mimeTypes' => [
                        'application/pdf',
                    ],
                   // 'mimeTypesMessage' => 'Veuillez télécharger un fichier  pdf',

                ])
            ],
        ])
        ->add('cgv_file_upload', FileType::class, [
            'attr' => ['placeholder' => 'choisir un fichier'],
            'translation_domain' => 'messages',

            'mapped' => false,
            'required' => false,
            'constraints' => [
                new File([
                    'maxSize' => '1024k',

                    'mimeTypes' => [
                        'application/pdf',
                    ],
                   // 'mimeTypesMessage' => 'Veuillez télécharger un fichier  pdf',

                ])
            ],
        ])
        ->add('mention_legale_file_upload', FileType::class, [
            'attr' => ['placeholder' => 'choisir un fichier'],
            'mapped' => false,
            'required' => false,
            'translation_domain' => 'messages',

            'constraints' => [
                new File([
                    'maxSize' => '1024k',

                    'mimeTypes' => [
                        'application/pdf',
                    ],
                  //  'mimeTypesMessage' => 'Veuillez télécharger un fichier  pdf',

                ])
            ],
        ]);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $code = $pays->getCode() ;
            $string = strtoupper($code);

            $countryname = $countries[$string] ;
            $pays->setNom($countryname);

          /*was  if(!$this->checkEmailConfig($pays)){
                return $this->render('@Backend/admin/pays/edit.html.twig', [
                    'pay' => $pays,
                    'form' => $form->createView(),
                ]);
            }*/

            if ($request->get('hasphoto')==1){
                $pays->setImage1('');
                $pays->setImage2('');
                $pays->setImage3('');
                $pays->setImage4('');

            }else{
                if($filename = $this->uploadSlider($form['image1']->getData(),"image_directory")){
                    $pays->setImage1($filename);
                }
                if($filename = $this->uploadSlider($form['image2']->getData(),"image_directory")){
                    $pays->setImage2($filename);
                }
                if($filename = $this->uploadSlider($form['image3']->getData(),"image_directory")){
                    $pays->setImage3($filename);
                }
                if($filename = $this->uploadSlider($form['image4']->getData(),"image_directory")){
                    $pays->setImage4($filename);
                }
            }



            $web_site_filiale =$form->get('web_site_name_filiale')->getData() ;
            $web_site_url_filiale ='https://'.$web_site_filiale ;
            $pays->setWebSiteUrlFiliale($web_site_url_filiale);


            if (!$form->get('how_to_buy_help')->getData()){
                $pays->setHowToBuyHelp(" ");

            }
            if (!$form->get('station_popup_title')->getData()){
                $pays->setStationPopupTitle(" ");
            }

            if (!$form->get('station_popup_description')->getData()){
                $pays->setStationPopupDescription(" ");
            }
          /*  if (!$form->get('cgu_file_upload')->getData()){
                $pays->setCguFile("");
            }

            if (!$form->get('personel_data_file_upload')->getData()){
                $pays->setPersonelDataFile("");
            }

            if (!$form->get('cgv_file_upload')->getData()){
                $pays->setCgvFile("");
            }

            if (!$form->get('mention_legale_file_upload')->getData()){
                $pays->setMentionLegaleFile("");
            }*/

            if (!$form->get('rappel_rgpd_text')->getData()){
                $pays->setRappelRgpdText("");
            }

            if (!$form->get('cookies_banner')->getData()){
                $pays->setCookiesBanner("");
            }
            if($filename = $this->uploadDocument($form['cgu_file_upload']->getData(),"condition_general_directory")){
                $pays->setCguFile($filename);
            }
            if($filename = $this->uploadDocument($form['cgv_file_upload']->getData(),"condition_vente_directory")){
                $pays->setCgvFile($filename);
            }
            if($filename = $this->uploadDocument($form['personel_data_file_upload']->getData(),"personal_data_directory")){
                $pays->setPersonelDataFile($filename);
            }
            if($filename = $this->uploadDocument($form['mention_legale_file_upload']->getData(),"legal_notice_directory")){
                $pays->setMentionLegaleFile($filename);
            }



            //symfony forms treat blank caracter as empty value
            if ($request->request->get("pays")["devise_thousands_separator"] === " ")
                $pays->setDeviseThousandsSeparator(" ");
            if ($request->request->get("pays")["devise_decimal_separator"] === " ")
                $pays->setDeviseDecimalSeparator(" ");


            $entityManager->merge($pays);
            $entityManager->flush();

            return $this->redirectToRoute('pays_index');
        }

        return $this->render('@Backend/admin/pays/edit.html.twig', [
            'pay' => $pays,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pays_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Pays $pay)
    {
        if ($this->isCsrfTokenValid('delete' . $pay->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pay);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pays_index');
    }

    /**
     * enable pays.
     *
     * @Route("/{id}/enable", name="pays_enable", methods={"GET"})
     */
    public function enableAction(Pays $pays)
    {
        $em = $this->getDoctrine()->getManager();

        $em = $this->getDoctrine()->getManager();
        $onepays = $em->getRepository('WebBundle:Pays')->find($pays->getId());
        $onepays->setIsActive(!$onepays->getIsActive());
        $em->persist($onepays);
        $em->flush();
        return $this->redirectToRoute('pays_index');
    }

    /**
     * disable pays.
     *
     * @Route("/{id}/disable", name="pays_disable", methods={"GET"})
     */
    public function disableAction(Pays $pays, PaysRepository $paysRepository)
    {
        $em = $this->getDoctrine()->getManager();
        $onepays = $paysRepository->find($pays->getId());
        $onepays->setIsActive(false);
        $em->persist($onepays);
        $em->flush();
        return $this->redirectToRoute('pays_index');
    }


    public function checkEmailConfig(Pays $pays)
    {
     // dump($pays);die();
     $transport = (new \Swift_SmtpTransport($pays->getMailHost(), $pays->getMailPort(), $pays->getMailEncryption()))
            ->setUsername($pays->getMailUsername())
            ->setPassword($pays->getMailPassword());
      /*  $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
            ->setUsername('totalstopcard@gmail.com')
              ->setPassword('Password11*');*/

        $transport->setLocalDomain('[127.0.0.1]'); // don't really need it

        $mailer = \Swift_Mailer::newInstance($transport);

        //$mailer = new \Swift_Mailer($transport);
      //  dump($pays->getMailUsername());die();

        try {
            $message = (new \Swift_Message("Test send mail"))
                ->setFrom(array($pays->getMailUsername()=>"test mail"))
                ->setTo("wannassirahma@gmail.com")
                ->setBody("Check test mail");
            $result = $mailer->send($message);

        }catch (\Exception $ex){
            $this->addFlash('danger',"Fail To send Email: " . $ex->getMessage());
            return false;
        }


        if($result)
          return true;

        //dump($result);die();
        $this->addFlash('danger',"Fail To send Email: " . $result);

        return false;

    }

    public function uploadDocument($file, $dir_name){

        if ($file) {
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            // this is needed to safely include the file name as part of the URL
            $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.'pdf';
            // Move the file to the directory where brochures are stored
            try {
                $file->move(
                    $this->getParameter($dir_name),
                    $newFilename
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
                return false;
            }

            // updates the 'brochureFilename' property to store the PDF file name
            // instead of its contents
            return $newFilename;
        }
        return false;
    }


    public function uploadSlider($file, $dir_name){

        if ($file) {
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            // this is needed to safely include the file name as part of the URL
            $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
            $newFilename = $safeFilename.'-'.uniqid().'.'.'png';
            // Move the file to the directory where brochures are stored
            try {
                $file->move(
                    $this->getParameter($dir_name),
                    $newFilename
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
                return false;
            }

            // updates the 'brochureFilename' property to store the PDF file name
            // instead of its contents
            return $newFilename;
        }


        return false;
    }




    /**
     * @Route("/translate", name="fr_en")
     */
    public function translationAction(Request $request)
    {
        $to = $request->get('to', 'en');
        // dump($to);die();
        $this->get('session')->set('_locale', $to);

        $referer = $request->headers->get('referer');
        return $this->redirect($referer);
    }


    /**
     * @Route("/sendmailtest", name="sendmailtest")
     */
    public function sendMailttest(){

        //            ->setUsername('pumpattendee@gmail.com')
        //            ->setPassword('incentive123');
        ////////////////////////////////
        $transportr = (new \Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
            ->setUsername("pumpattendee@gmail.com")
            ->setPassword("incentive123");

        $transportr->setLocalDomain('[127.0.0.1]'); // don't really need it

        $mailerss = \Swift_Mailer::newInstance($transportr);
        //$mailerss->getTransport()->setSourceIp('8.8.8.8');

        try {
            $message = (new \Swift_Message("Test send mail"))
                ->setFrom(['totalstopcard@gmail.com' => 'John Doe'])
                ->setTo("wannassirahma@gmail.com")
                ->setBody("Check test mail", 'text/html');
            $resulssst =  $mailerss->send($message);

        }catch (\Exception $ex){
            //   $this->addFlash('danger',"Fail To send Email: " . $ex->getMessage());
            $resulssst =  $ex->getMessage();
        }
        dump($resulssst);die();
       return $resulssst ;
    }




    /**
     * @Route("/edit_country", name="edit_country", methods={"GET","POST"})
     */
    public function editgestio(Request $request)
    {

         $pays = $this->getUser()->getPays();

        $countries = Intl::getRegionBundle()->getCountryNames();
        $codes = array();
        foreach ($countries as $key => $value) {
            $codes[strtolower($key)] = $value;
        }
        $formOptions = array('code' => $codes);
        $form = $this->createForm(PaysType::class, $pays, $formOptions);

        $form

            ->add("mail_password",  PasswordType::class,array(
                'required' => false,'empty_data' => $pays->getMailPassword()            ))

            ->add('cgu_file_upload', FileType::class, [
                'attr' => ['placeholder' => 'choisir un fichier'],
                'mapped' => false,
                'required' => false,
                'translation_domain' => 'messages',
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                        ],
                        //'mimeTypesMessage' => 'Veuillez télécharger un fichier  pdf',

                    ])
                ],
            ])
            ->add('personel_data_file_upload', FileType::class, [
                'attr' => ['placeholder' => 'choisir un fichier'],
                'translation_domain' => 'messages',

                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',

                        'mimeTypes' => [
                            'application/pdf',
                        ],
                        // 'mimeTypesMessage' => 'Veuillez télécharger un fichier  pdf',

                    ])
                ],
            ])
            ->add('cgv_file_upload', FileType::class, [
                'attr' => ['placeholder' => 'choisir un fichier'],
                'translation_domain' => 'messages',

                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',

                        'mimeTypes' => [
                            'application/pdf',
                        ],
                        // 'mimeTypesMessage' => 'Veuillez télécharger un fichier  pdf',

                    ])
                ],
            ])
            ->add('mention_legale_file_upload', FileType::class, [
                'attr' => ['placeholder' => 'choisir un fichier'],
                'mapped' => false,
                'required' => false,
                'translation_domain' => 'messages',

                'constraints' => [
                    new File([
                        'maxSize' => '1024k',

                        'mimeTypes' => [
                            'application/pdf',
                        ],
                        //  'mimeTypesMessage' => 'Veuillez télécharger un fichier  pdf',

                    ])
                ],
            ]);

        $form->remove("code");
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $code = $pays->getCode() ;
            $string = strtoupper($code);

            $countryname = $countries[$string] ;
            $pays->setNom($countryname);

            /*was  if(!$this->checkEmailConfig($pays)){
                  return $this->render('@Backend/admin/pays/edit.html.twig', [
                      'pay' => $pays,
                      'form' => $form->createView(),
                  ]);
              }*/

            if ($request->get('hasphoto')==1){
                $pays->setImage1('');
                $pays->setImage2('');
                $pays->setImage3('');
                $pays->setImage4('');

            }else{
                if($filename = $this->uploadSlider($form['image1']->getData(),"image_directory")){
                    $pays->setImage1($filename);
                }
                if($filename = $this->uploadSlider($form['image2']->getData(),"image_directory")){
                    $pays->setImage2($filename);
                }
                if($filename = $this->uploadSlider($form['image3']->getData(),"image_directory")){
                    $pays->setImage3($filename);
                }
                if($filename = $this->uploadSlider($form['image4']->getData(),"image_directory")){
                    $pays->setImage4($filename);
                }
            }



            $web_site_filiale =$form->get('web_site_name_filiale')->getData() ;
            $web_site_url_filiale ='https://'.$web_site_filiale ;
            $pays->setWebSiteUrlFiliale($web_site_url_filiale);


            if (!$form->get('how_to_buy_help')->getData()){
                $pays->setHowToBuyHelp(" ");

            }
            if (!$form->get('station_popup_title')->getData()){
                $pays->setStationPopupTitle(" ");
            }

            if (!$form->get('station_popup_description')->getData()){
                $pays->setStationPopupDescription(" ");
            }
            /*  if (!$form->get('cgu_file_upload')->getData()){
                  $pays->setCguFile("");
              }

              if (!$form->get('personel_data_file_upload')->getData()){
                  $pays->setPersonelDataFile("");
              }

              if (!$form->get('cgv_file_upload')->getData()){
                  $pays->setCgvFile("");
              }

              if (!$form->get('mention_legale_file_upload')->getData()){
                  $pays->setMentionLegaleFile("");
              }*/

            if (!$form->get('rappel_rgpd_text')->getData()){
                $pays->setRappelRgpdText("");
            }

            if (!$form->get('cookies_banner')->getData()){
                $pays->setCookiesBanner("");
            }
            if($filename = $this->uploadDocument($form['cgu_file_upload']->getData(),"condition_general_directory")){
                $pays->setCguFile($filename);
            }
            if($filename = $this->uploadDocument($form['cgv_file_upload']->getData(),"condition_vente_directory")){
                $pays->setCgvFile($filename);
            }
            if($filename = $this->uploadDocument($form['personel_data_file_upload']->getData(),"personal_data_directory")){
                $pays->setPersonelDataFile($filename);
            }
            if($filename = $this->uploadDocument($form['mention_legale_file_upload']->getData(),"legal_notice_directory")){
                $pays->setMentionLegaleFile($filename);
            }



            //symfony forms treat blank caracter as empty value
            if ($request->request->get("pays")["devise_thousands_separator"] === " ")
                $pays->setDeviseThousandsSeparator(" ");
            if ($request->request->get("pays")["devise_decimal_separator"] === " ")
                $pays->setDeviseDecimalSeparator(" ");


            $entityManager->merge($pays);
            $entityManager->flush();

            return $this->redirectToRoute('edit_country');
        }

        return $this->render('@Backend/admin/pays/edit.html.twig', [
            'pay' => $pays,
            'form' => $form->createView(),
        ]);
    }

}
