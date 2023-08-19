<?php

namespace BackendBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimezoneType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Intl\Countries;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;
use WebBundle\Entity\Pays;

class PaysType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          //  ->add('nom')
            ->add('front_language', ChoiceType::class, array(
                "choices" => array(
                    "en" => "en", "fr" => "fr"
                )
            ))
            ->add('timezone', TimezoneType::class)
            ->add('code', ChoiceType::class, [
                    'choices' => $options['code'],
                    'required' => true,
                    'translation_domain' => 'messages',
                    'placeholder' => 'pays'
                ]
            )

            ->add('devise',null,array(
                'required' => true,

            ))


            ->add('image1', FileType::class, [
                'mapped' => false,
                'required' => false,
                'translation_domain' => 'messages',

                'constraints' => [
                    new Image([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/*',
                            'application/jpg',
                            'application/jpeg',
                            'application/png',
                            'application/x-png',
                        ],
                        //'notFoundMessage' => 'L\'image n\'a pas été trouvé',
                        //'maxSizeMessage' => 'L\'image est trop grosse ({{ size }} {{ suffix }}). La taille maximum est de  {{ limit }} {{ suffix }}.',
                       // 'disallowEmptyMessage' => 'Il n\'est pas possible d\'envoyer un fichier vide',
                       // 'uploadNoFileErrorMessage' => 'L\'image n\'a pas été envoyée',
                    ])
                ],
            ])
            ->add('image2', FileType::class, [
                'mapped' => false,
                'required' => false,
                'translation_domain' => 'messages',

                'constraints' => [
                    new Image([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/*',
                            'application/jpg',
                            'application/jpeg',
                            'application/png',
                            'application/x-png',
                        ],
                      //  'notFoundMessage' => 'L\'image n\'a pas été trouvé',
                      //  'maxSizeMessage' => 'L\'image est trop grosse ({{ size }} {{ suffix }}). La taille maximum est de  {{ limit }} {{ suffix }}.',
                      //  'disallowEmptyMessage' => 'Il n\'est pas possible d\'envoyer un fichier vide',
                      //  'uploadNoFileErrorMessage' => 'L\'image n\'a pas été envoyée',
                    ])
                ],
            ])
            ->add('image3', FileType::class, [
                'mapped' => false,
                'required' => false,
                'translation_domain' => 'messages',

                'constraints' => [
                    new Image([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/*',
                            'application/jpg',
                            'application/jpeg',
                            'application/png',
                            'application/x-png',
                        ],
                     ///   'notFoundMessage' => 'L\'image n\'a pas été trouvé',
                     //   'maxSizeMessage' => 'L\'image est trop grosse ({{ size }} {{ suffix }}). La taille maximum est de  {{ limit }} {{ suffix }}.',
                      //  'disallowEmptyMessage' => 'Il n\'est pas possible d\'envoyer un fichier vide',
                      //  'uploadNoFileErrorMessage' => 'L\'image n\'a pas été envoyée',
                    ])
                ],
            ])
            ->add('image4', FileType::class, [
                'mapped' => false,
                'required' => false,
                'translation_domain' => 'messages',

                'constraints' => [
                    new Image([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/*',
                            'application/jpg',
                            'application/jpeg',
                            'application/png',
                            'application/x-png',
                        ],
                      //  'notFoundMessage' => 'L\'image n\'a pas été trouvé',
                     //   'maxSizeMessage' => 'L\'image est trop grosse ({{ size }} {{ suffix }}). La taille maximum est de  {{ limit }} {{ suffix }}.',
                      //  'disallowEmptyMessage' => 'Il n\'est pas possible d\'envoyer un fichier vide',
                       // 'uploadNoFileErrorMessage' => 'L\'image n\'a pas été envoyée',
                    ])
                ],
            ])
            ->add('devise_nb_digits_decimal', ChoiceType::class,
                array(
                    'choices' => array(
                        '0' => '0',
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                    ),
                    )
            )
          /*  ->add('devise_nb_digits_decimal',null,array(
                'required' => true,

            ))*/


            ->add("devise_thousands_separator", ChoiceType::class,
              array(
                'choices' => array(
                    '.' => '15.002',
                    ',' => '15,002',
                    '' => '15 002',
                ),
            )
          )
            ->add("devise_decimal_separator", ChoiceType::class, array(
                'choices' => array(
                    '.' => '15002.00',
                    ',' => '15002,00',
                    '' => '15002',
                ),
            ))
            ->add('web_site_title',null,array(
                'required' => true,

            ))
        //    ->add('web_site_url_filiale', UrlType::class,array('required'=>false,))
            ->add('web_site_name_filiale',null,array(
                'required' => true,

            ))
            ->add('how_to_buy_help')
            ->add('station_popup_title')
            ->add('station_popup_description')

            ->add('cgu_file_upload', FileType::class, [
                'attr' => ['placeholder' => 'choisir_fichier'],
                'mapped' => false,
                'required' => false,
                'translation_domain' => 'messages',

                'constraints' => [
                    new File([
                        'maxSize' => '1024k',

                        'mimeTypes' => [
                            'application/pdf',
                        ],
                      // 'mimeTypesMessage' =>  'Veuillez télécharger un fichier  pdf',
                      //  'maxSizeMessage' => 'Le fichier est trop gros ({{ size }} {{ suffix }}). La taille maximum est de  {{ limit }} {{ suffix }}.'

                ])
                ],
            ])

            ->add('personel_data_file_upload', FileType::class, [
                'attr' => ['placeholder' => 'choisir_fichier'],
                'translation_domain' => 'messages',
              //  'invalid_message' => 'fos_user.password_mismatch.invalid',

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
                'attr' => ['placeholder' => 'choisir_fichier'],
                'translation_domain' => 'messages',

                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',

                        'mimeTypes' => [
                            'application/pdf',
                        ],
                  //      'mimeTypesMessage' => 'Veuillez télécharger un fichier  pdf',

                    ])
                ],
            ])
            ->add('mention_legale_file_upload', FileType::class, [
                'attr' => ['placeholder' => 'choisir_fichier'],
                'translation_domain' => 'messages',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',

                        'mimeTypes' => [
                            'application/pdf',
                        ],
                     //   'mimeTypesMessage' => 'Veuillez télécharger un fichier  pdf',

                    ])
                ],
            ])
            ->add('rappel_rgpd_text')
            ->add('cookies_banner')


            ->add("mail_transport", ChoiceType::class, array(
                'choices' => array(
                    'gmail' => 'gmail',
                    'smtp' => 'smtp',
                    'mail' => 'mail',
                    'sendmail' => 'sendmail',
                ),
            ))
            ->add("mail_username")
            ->add("mail_password",  PasswordType::class)
            ->add("codePhone",null,array(
                'required' => true,

            ))
            ->add("mail_host")
            ->add("mail_port", IntegerType::class, array("required" => true))
            ->add("mail_encryption", ChoiceType::class, array(
                "choices" => array(
                    "tls" => "tls",
                    "ssl" => "ssl"
                ),
                "placeholder" => "Encryption",
                "required" => false
            ))
            ->add("mail_auth_mode", ChoiceType::class, array(
                "choices" => array(
                    "plain" => "plain",
                    "login" => "cram-md5"
                ),
                "placeholder" => "Auth mode",
                "required" => false
            ))

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pays::class,
            'code' => array(),
        ]);
    }


}
