<?php

namespace BackendBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Image;
use WebBundle\Entity\Categories;
use WebBundle\Entity\Pays;
use WebBundle\Entity\SousCategories;
use WebBundle\Entity\Station;

class SousCategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $pays = $options['pays'];
        if ($pays==null){
            $builder
                ->add('nom',null,array('required'=>true))
                ->add('nom_en',null,array('required'=>true))
                ->add('categorie',EntityType::class, array(
                    'required'   => true,
                    'translation_domain' => 'messages',
                    'placeholder' => 'choisir une catégorie',
                    'class' => 'WebBundle\Entity\Categories',
                    'choice_label' => 'getNom',
                    'query_builder' => function (EntityRepository $er )use($options){
                        return $er->createQueryBuilder('c')
                            ->leftJoin("c.pays", "p")
                            ->where('c.pays IS NULL')
                            ->andWhere('c.isActive = true ');
                         //   ->setParameter('pays',null);
                    }
                ))

                ->add('imagefile', FileType::class, [
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
                            'notFoundMessage' => 'L\'image n\'a pas été trouvé',
                            'maxSizeMessage' => 'L\'image est trop grosse ({{ size }} {{ suffix }}). La taille maximum est de  {{ limit }} {{ suffix }}.',
                            'disallowEmptyMessage' => 'Il n\'est pas possible d\'envoyer un fichier vide',
                            'uploadNoFileErrorMessage' => 'L\'image n\'a pas été envoyée',
                        ])
                    ],
                ])
            ;
        }else{
            if (($pays->getFrontLanguage()=="fr") || ($pays->getFrontLanguage()=="FR")){
                $builder
                    ->add('nom',null,array('required'=>true))
                    ->add('categorie',EntityType::class, array(
                        'required'   => true,
                        'translation_domain' => 'messages',
                        'placeholder' => 'choisir une catégorie',

                        'class' => 'WebBundle\Entity\Categories',
                        'choice_label' => 'getNom',
                        'query_builder' => function (EntityRepository $er )use($options){
                            return $er->createQueryBuilder('c')
                                ->leftJoin("c.pays", "p")
                                ->where('p = :pays ')
                                ->andWhere('c.isActive = true ')
                                ->setParameter('pays',$options['pays']);
                        }
                    ))
                    ->add('imagefile', FileType::class, [
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
                                'notFoundMessage' => 'L\'image n\'a pas été trouvé',
                                'maxSizeMessage' => 'L\'image est trop grosse ({{ size }} {{ suffix }}). La taille maximum est de  {{ limit }} {{ suffix }}.',
                                'disallowEmptyMessage' => 'Il n\'est pas possible d\'envoyer un fichier vide',
                                'uploadNoFileErrorMessage' => 'L\'image n\'a pas été envoyée',
                            ])
                        ],
                    ])
                ;
            }else{
                $builder
                    ->add('nom_en',null,array('required'=>true))
                    ->add('categorie',EntityType::class, array(
                        'required'   => true,
                        'translation_domain' => 'messages',
                        'placeholder' => 'choisir une catégorie',
                        'class' => 'WebBundle\Entity\Categories',
                        'choice_label' => 'getNom',
                        'query_builder' => function (EntityRepository $er )use($options){
                            return $er->createQueryBuilder('c')
                                ->leftJoin("c.pays", "p")
                                ->where('p = :pays ')
                                ->andWhere('c.isActive = true ')
                                ->setParameter('pays',$options['pays']);
                        }
                    ))
                    ->add('imagefile', FileType::class, [
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
                                'notFoundMessage' => 'L\'image n\'a pas été trouvé',
                                'maxSizeMessage' => 'L\'image est trop grosse ({{ size }} {{ suffix }}). La taille maximum est de  {{ limit }} {{ suffix }}.',
                                'disallowEmptyMessage' => 'Il n\'est pas possible d\'envoyer un fichier vide',
                                'uploadNoFileErrorMessage' => 'L\'image n\'a pas été envoyée',
                            ])
                        ],
                    ])
                ;
            }

        }


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SousCategories::class,
            'pays' => Pays::class,

        ]);
    }
}
