<?php

namespace BackendBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use WebBundle\Entity\Station;

class HoraireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $roles = new Station();
        $builder
            ->add('horaires',ChoiceType::class, array(
                'required'   => true,
                'multiple' => true,
                'placeholder' => 'Choisir un horaire',
                'label' =>false,
               /* 'choice_attr' => function(Station $station) {
                    return ['class' => $station::horaire_values];
                },*/
                'choices'  =>$roles::$horaire_values
                    /*array(
                    '1' => "de 8h à 12h",
                    '2' => "de 12h à 16h",
                    '3' => "de 16h à 19h",
                    )*/
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Station::class,
        ]);
    }
}
