<?php

namespace BackendBundle\Form;


use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use WebBundle\Entity\Utilisateurs;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          //  ->add('username')
            ->add('email')
            ->add('tel')
           // ->add('plainPassword',RepeatedType::class)
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'fos_user.password_mismatch.invalid',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' => true,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))


            ->add('pays',EntityType::class, array(
                'required'   => true,
                'placeholder' => 'Choisir un pays',
                'class' => 'WebBundle\Entity\Pays',
                'choice_label' => 'getNom',
                'query_builder' => function (EntityRepository $er ){
                    return $er->createQueryBuilder('p')
                    ->leftJoin("p.user", "u")
                    ->where('p.isActive = true ');
        }
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateurs::class,
        ]);
    }
}
