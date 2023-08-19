<?php

namespace BackendBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use WebBundle\Entity\Pays;
use WebBundle\Entity\Station;

class StationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('nom')
            ->add('adresse', TextType::class, ['required' => false])
            ->add('zone',EntityType::class, array(
                'required'   => true,
                'class' => 'WebBundle\Entity\Zone',
                'choice_label' => 'getNom',
                'translation_domain' => 'messages',

                'query_builder' => function (EntityRepository $er )use($options){

                    return $er->createQueryBuilder('c')
                        ->leftJoin("c.pays", "p")
                        ->where('p = :pays ')
                        ->andWhere('c.isActive = true ')
                        ->setParameter('pays',$options['pays']);
                },
                'placeholder' => 'Zone'
            ))
           /* ->add('longitude', 'number', array('translation_domain' => 'forms','required' => false))
            ->add('latitude', 'number', array('translation_domain' => 'forms','required' => false))*/

            ->add('tel',null,array('required'=>true))
            ->add('isActive', CheckboxType::class, array(
                'label' => false,
                'required' => false,
                'data' => true,
            ))
            ->add('file_vente', FileType::class, [
                'label' => false,
                'attr' => ['placeholder' => 'choisir un fichier'],
                // unmapped means that this field is not associated to any entity property
                'mapped' => false,
                // make it optional so you don't have to re-upload the PDF file
                // everytime you edit the Product details
                'required' => false,
                'translation_domain' => 'messages',

                // unmapped fields can't define their validation using annotations
                // in the associated entity, so you can use the PHP constraint classes
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger un fichier  pdf',

                    ])
                ],
            ])




        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Station::class,
            'pays' => Pays::class,
        ]);
    }
}
