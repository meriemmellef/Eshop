<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BackendBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Proxies\__CG__\WebBundle\Entity\Categories;
use Sylius\Bundle\MoneyBundle\Form\Type\MoneyType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Image;
use Vich\UploaderBundle\Form\Type\VichFileType;
use WebBundle\Entity\Couleur;
use WebBundle\Entity\Pays;
use WebBundle\Entity\Produits;
use WebBundle\Entity\Station;


/**
 * Defines the form used to create and manipulate blog posts.
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class ProduitType extends AbstractType
{

    /**
     * {@inheritdoc}
     */

    private $tokenStorage;
    private $em;

    public function __construct(TokenStorageInterface $tokenStorage, EntityManagerInterface $em)
    {
        $this->tokenStorage = $tokenStorage;
        $this->em = $em;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // see http://symfony.com/doc/current/reference/forms/types.html
        // $builder->add('title', null, array('required' => false, ...));
        $produit = new Produits();
        $pays = $options['pays'];

        if (in_array("ROLE_SUPER_ADMIN", $this->tokenStorage->getToken()->getUser()->getRoles())) {
            $builder
                ->add('nom', null, array(
                    'attr' => array('autofocus' => true),
                    'label' => 'Nom',
                    'required' => true,

                ))
                ->add('nomen', null, array(
                    'attr' => array('autofocus' => true),
                    'label' => 'Nom En',
                    'required' => true,

                ))
                ->add('description', null, array(
                    'attr' => array('autofocus' => true),
                    'label' => 'Description',
                    'required' => false,

                ))
                ->add('descriptionen', null, array(
                    'attr' => array('autofocus' => true),
                    'label' => 'Description En',
                    'required' => false,

                ))
                ->add('is_active', CheckboxType::class, array(
                    'label' => false,
                    'required' => false,
                    //  'data' => true,
                ))
                ->add('imagefile', FileType::class, [
                    'mapped' => false,
                    'required' => true,
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
                            'notFoundMessage' => 'L\'image n\'a pas été trouvé',
                            'maxSizeMessage' => 'L\'image est trop grosse ({{ size }} {{ suffix }}). La taille maximum est de  {{ limit }} {{ suffix }}.',
                            'disallowEmptyMessage' => 'Il n\'est pas possible d\'envoyer un fichier vide',
                            'uploadNoFileErrorMessage' => 'L\'image n\'a pas été envoyée',
                        ])
                    ],
                ])
                ->add('file', FileType::class, [
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
                            'mimeTypesMessage' => 'Veuillez télécharger un fichier  pdf',
                            'maxSizeMessage' => 'Le fichier est trop gros ({{ size }} {{ suffix }}). La taille maximum est de  {{ limit }} {{ suffix }}.',])
                    ],
                ])
                ->addEventListener(FormEvents::PRE_SET_DATA, array($this, 'onPreSetData'))
                ->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'));

        } elseif (in_array("ROLE_GESTIONNAIRE", $this->tokenStorage->getToken()->getUser()->getRoles())) {
            ////English
            if (($pays->getFrontLanguage() == "en") || ($pays->getFrontLanguage() == "EN")) {

                $builder
                    ->add('nomen', null, array(
                        'attr' => array('autofocus' => true),
                        'label' => 'Nom',
                        'required' => true,

                    ))
                    ->add('descriptionen', null, array(
                        'attr' => array('autofocus' => true),
                        'label' => 'Description',
                        'required' => false,

                    ))
                    ->add('prix', IntegerType::class, array(
                        'required' => false,
                        'attr' => [
                            'min' => 0
                        ]

                    ))
                    ->add('prix_promo', IntegerType::class, array(
                        'required' => false,
                        'attr' => [
                            'min' => 0
                        ]

                    ))

                    // ->add('quantite')
                    //  ->add('maxcommande')

                    ->add('is_active', CheckboxType::class, array(
                        'label' => false,
                        'required' => false,
                        //was 'data' => true,
                    ))
                    ->add('poucentage_promo', IntegerType::class, array(
                        'required' => false,
                        'attr' => [
                            'min' => 0,
                            'max' => 100

                        ]
                    ))
                    ->add('num_produit_promo', NumberType::class, array(
                        'required' => false,

                    ))
                    ->add('is_promo', CheckboxType::class, array(
                        'label' => false,
                        'required' => false,
                    ))
                    ->add('imagefile', FileType::class, [
                        'mapped' => false,
                        'required' => true,
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
                                'notFoundMessage' => 'Image was not found',
                                'maxSizeMessage' => 'The image is too big ({{ size }} {{ suffix }}). The maximum size is  {{ limit }} {{ suffix }}.',
                                'disallowEmptyMessage' => 'It is not possible to send an empty file',
                                'uploadNoFileErrorMessage' => 'Image was not sent',
                            ])
                        ],
                    ])
                    ->add('file', FileType::class, [
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
                                'mimeTypesMessage' => 'Please download a pdf file',
                                'maxSizeMessage' => 'The file is too big ({{ size }} {{ suffix }}).The maximum size is{{ limit }} {{ suffix }}.',


                            ])
                        ],
                    ])
                   ->add('isActiveInAllStation', 'checkbox',array(
                            'required' => false,
                            'label'=> 'is_active_in_all_station',
                            'attr' => array('class'=>'checkbox checkbox-primary'
                            )
                        ,'translation_domain' => 'messages'
                        )
                    )
                 /*   ->add('stations', EntityType::class, array(
                            'class' => 'WebBundle:Station',
                            'choice_label' =>  'getNom',
                            'required' => true,
                            'multiple' => true,
                            'query_builder' => function (EntityRepository $er) {
                                return $er->createQueryBuilder('s')
                                    ->leftJoin("s.pays", "p")
                                    ->where('p = :pays ')
                                    ->andWhere('s.isActive = true ')
                                    ->setParameter('pays',$this->tokenStorage->getToken()->getUser()->getPays()) ;
                            },
                            'placeholder' => 'choisir une station',
                            'attr' => ['data-plugin' => 'select2'],
                        )
                    )*/
                    ->addEventListener(FormEvents::PRE_SET_DATA, array($this, 'onPreSetData'))
                    ->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'));

            } else {
                ////Francais
                $builder
                    ->add('nom', null, array(
                        'attr' => array('autofocus' => true),
                        'label' => 'Nom',
                        'required' => true,

                    ))
                    ->add('description', null, array(
                        'attr' => array('autofocus' => true),
                        'label' => 'Description',
                        'required' => false,

                    ))
                    ->add('prix', IntegerType::class, array(
                        'required' => false,
                        'attr' => [
                            'min' => 0
                        ]

                    ))
                    ->add('prix_promo', IntegerType::class, array(
                        'required' => false,
                        'attr' => [
                            'min' => 0
                        ]

                    ))
                    ->add('is_active', CheckboxType::class, array(
                        'label' => false,
                        'required' => false,
                        // 'data' => true,
                    ))
                    ->add('poucentage_promo', IntegerType::class, array(
                        'required' => false,
                        'attr' => [
                            'min' => 0,
                            'max' => 100

                        ]
                    ))
                    ->add('num_produit_promo', NumberType::class, array(
                        'required' => false,

                    ))
                    ->add('is_promo', CheckboxType::class, array(
                        'label' => false,
                        'required' => false,
                    ))
                    ->add('imagefile', FileType::class, [
                        'mapped' => false,
                        'required' => true,
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
                                'notFoundMessage' => 'L\'image n\'a pas été trouvé',
                                'maxSizeMessage' => 'L\'image est trop grosse ({{ size }} {{ suffix }}). La taille maximum est de  {{ limit }} {{ suffix }}.',
                                'disallowEmptyMessage' => 'Il n\'est pas possible d\'envoyer un fichier vide',
                                'uploadNoFileErrorMessage' => 'L\'image n\'a pas été envoyée',
                            ])
                        ],
                    ])
                    ->add('file', FileType::class, [
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
                                'mimeTypesMessage' => 'Veuillez télécharger un fichier  pdf',
                                'maxSizeMessage' => 'L\'image est trop grosse ({{ size }} {{ suffix }}). La taille maximum est de  {{ limit }} {{ suffix }}.',


                            ])
                        ],
                    ])
                    ->add('isActiveInAllStation', 'checkbox',array(
                            'required' => false,
                            'label'=> 'is_active_in_all_station',
                            'attr' => array('class'=>'checkbox checkbox-primary'
                            )
                        ,'translation_domain' => 'messages'
                        )
                    )
                 /*   ->add('stations', EntityType::class, array(
                            'class' => 'WebBundle:Station',
                            'choice_label' =>  'getNom',
                            'required' => true,
                            'multiple' => true,
                            'query_builder' => function (EntityRepository $er) {
                                return $er->createQueryBuilder('s')
                                    ->leftJoin("s.pays", "p")
                                    ->where('p = :pays ')
                                    ->andWhere('s.isActive = true ')
                                    ->setParameter('pays',$this->tokenStorage->getToken()->getUser()->getPays()) ;
                            },
                            'placeholder' => 'choisir une station',
                            'attr' => ['data-plugin' => 'select2'],
                        )
                    )*/

                   ->addEventListener(FormEvents::PRE_SET_DATA, array($this, 'onPreSetData'))
                    ->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'));

            }

        } else {
            $builder
                ->add('prix', IntegerType::class, array(
                    'required' => true,
                    'attr' => [
                        'min' => 0
                    ]

                ))
                ->add('prix_promo', IntegerType::class, array(
                    'required' => false,
                    'attr' => [
                        'min' => 0
                    ]

                ))
                ->add('quantite', NumberType::class)
                ->add('maxcommande', NumberType::class)
                ->add('is_active', CheckboxType::class, array(
                    'label' => false,
                    'required' => false,
                    //'data' => true,
                ))
                ->add('poucentage_promo', IntegerType::class, array(
                    'required' => false,
                    'attr' => [
                        'min' => 0,
                        'max' => 100
                    ]

                ))
                ->add('num_produit_promo', NumberType::class, array(
                    'required' => false,

                ))
                ->add('is_promo', CheckboxType::class, array(
                    'label' => false,
                    'required' => false,
                ));

            // ->addEventListener(FormEvents::PRE_SET_DATA, array($this, 'onPreSetData'))
            //  ->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'));


        }


    }

    private function getSubCategorieNameChoices($categorie)
    {
        $repoSousCategorie = $this->em->getRepository('WebBundle:SousCategories');

        $sous_categories = $repoSousCategorie->createQueryBuilder("sc")
            ->leftJoin("sc.categorie", "c")
            ->where("c = :categorie")
            ->setParameter("categorie", $categorie)
            ->getQuery()
            ->getResult();
        return $sous_categories;
    }

    protected function addElements(FormInterface $form, $categorie = null)
    {
        // 4. Add the province element
        //ROLE_SUPER_ADMIN
        // dump($this->tokenStorage->getToken()->getUser()->getRoles(),["ROLE_SUPER_ADMIN"]);
        // dump(in_array( "ROLE_SUPER_ADMIN" ,$this->tokenStorage->getToken()->getUser()->getRoles() ));
        // die();
        if (in_array("ROLE_SUPER_ADMIN", $this->tokenStorage->getToken()->getUser()->getRoles())) {

            $form->add('categorie', EntityType::class, array(
                'class' => 'WebBundle\Entity\Categories',
                'required' => true,
                'choice_label' => 'getNom',
                'placeholder' => 'choisir une categorie',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->leftJoin("c.pays", "p")
                        ->where('c.pays IS NULL ')
                        ->andWhere('c.isActive = true ');
                    // ->setParameter('pays',null);
                },
                'attr' => array('class' => 'form-control')


            ));


        } else {
            $form->add('categorie', EntityType::class, array(
                'class' => 'WebBundle\Entity\Categories',
                'required' => true,
                'choice_label' => 'getNom',
                'placeholder' => 'choisir une categorie',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->leftJoin("c.pays", "p")
                        ->where('p = :pays ')
                        ->andWhere('c.isActive = true ')
                        ->setParameter('pays', $this->tokenStorage->getToken()->getUser()->getPays());
                },
                'attr' => array('class' => 'form-control')


            ));

        }

        // Neighborhoods empty, unless there is a selected City (Edit View)
        $sous_categories = array();

        // If there is a city stored in the Person entity, load the neighborhoods of it
        if ($categorie) {
            // Fetch Neighborhoods of the City if there's a selected city
            $repoSousCategorie = $this->em->getRepository('WebBundle:SousCategories');

            $sous_categoriess = $repoSousCategorie->createQueryBuilder("sc")
                ->where("sc.categorie = :categorieid")
                ->setParameter("categorieid", $categorie->getId())
                ->getQuery()
                ->getResult();


        }


        // Add the Neighborhoods field with the properly data
        $form->add('sous_categorie', EntityType::class, array(
            'required' => true,
            'placeholder' => 'choisir une sous categorie',
            //'placeholder' => 'sous categorie',
            'class' => 'WebBundle:SousCategories',
            'choice_label' => 'getNom',

            'query_builder' => function (EntityRepository $er) use ($categorie) {
                return $er->createQueryBuilder('sc')
                    ->leftJoin("sc.categorie", "c")
                    ->where('c = :categorie ')
                    ->andWhere('sc.isActive = true ')
                    ->setParameter('categorie', $categorie);
            },
            'attr' => array('class' => 'form-control')
        ));
    }

    function onPreSubmit(FormEvent $event)
    {
        $form = $event->getForm();
        $data = $event->getData();


        // Search for selected City and convert it into an Entity
        $categorie = $this->em->getRepository('WebBundle\Entity\Categories')->find($data['categorie']);
        $this->addElements($form, $categorie);
    }

    function onPreSetData(FormEvent $event)
    {
        $produit = $event->getData();
        $form = $event->getForm();

        // When you create a new person, the City is always empty
        $categorie = $produit->getCategorie() ? $produit->getCategorie() : null;

        $this->addElements($form, $categorie);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WebBundle\Entity\Produits',
            'pays' => Pays::class,

        ));

    }

}
