<?php

namespace BackendBundle\Form;



use Doctrine\DBAL\Types\TextType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use WebBundle\Entity\Pays;
use WebBundle\Entity\Utilisateurs;

class GerantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName',null,array('required'=>true))
            ->add('lastName',null,array('required'=>true))
            //->add('username')
            ->add('email')
            ->add('tel',null,array('required'=>true))
            ->add('telFacultatif')
            ->add('station',EntityType::class, array(
                'required'   => true,
                'placeholder' => 'Choisir une station',
                'class' => 'WebBundle\Entity\Station',
                'choice_label' => 'getNom',
                'query_builder' => function (EntityRepository $er )use($options){
                    return $er->createQueryBuilder('s')
                        ->leftJoin("s.pays", "p")
                        ->where('p = :pays ')
                        ->andWhere('s.isActive = true ')
                        ->setParameter('pays',$options['pays']);
        }
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateurs::class,
            'pays' => Pays::class,

        ]);
    }
}
