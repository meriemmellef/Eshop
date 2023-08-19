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
use WebBundle\Entity\Categories;
use WebBundle\Entity\Pays;
use WebBundle\Entity\Station;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $language= $options['pays'];
        if ($language==null){


            $builder
                ->add('nom',null,array('required'=>false))
                 ->add('nom_en',null,array('required'=>false))
             /*   ->add('isFood', CheckboxType::class, array(
                    'label' => false,
                    'required' => false
                    //'data' => true,
                ))
                ->add('isAuto', CheckboxType::class, array(
                    'label' => false,
                    'required' => false
                    //'data' => true,
                ))
                ->add('isClothing', CheckboxType::class, array(
                    'label' => false,
                    'required' => false
                    //'data' => true,
                ))*/

            ;
        }else{




            if (($language->getFrontLanguage()=='fr')||($language->getFrontLanguage()=='FR')){

                $builder
                    ->add('nom')
                    // ->add('nom_en')
                    /*
                         ->add('isFood', CheckboxType::class, array(
                        'label' => false,
                        'required' => false
                        //'data' => true,
                    ))
                    ->add('isAuto', CheckboxType::class, array(
                        'label' => false,
                        'required' => false
                        //'data' => true,
                    ))
                    ->add('isClothing', CheckboxType::class, array(
                        'label' => false,
                        'required' => false
                        //'data' => true,
                    ))
                     */


                ;
            }else{


                $builder
                    // ->add('nom')
                    ->add('nom_en')
                   /* ->add('isFood', CheckboxType::class, array(
                        'label' => false,
                        'required' => false
                        //'data' => true,
                    ))
                    ->add('isAuto', CheckboxType::class, array(
                        'label' => false,
                        'required' => false
                        //'data' => true,
                    ))
                    ->add('isClothing', CheckboxType::class, array(
                        'label' => false,
                        'required' => false
                        //'data' => true,
                    ))*/

                ;
            }

        }



    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Categories::class,
            'pays' => Pays::class,

        ]);
    }
}
