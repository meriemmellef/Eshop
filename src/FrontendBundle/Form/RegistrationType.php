<?php
// src/AppBundle/Form/RegistrationType.php

namespace FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //$role = array('ROLE_CLIENT');
        $builder->add('firstName',null,array(
            'required' => true,
        ));
        $builder->add('lastName',null,array(
            'required' => true,
        ));
        $builder->add('tel',NumberType::class,array(
            'required' => true

        ));
      /*  $builder  ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'fos_user.password_mismatch.invalid',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' => true,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ));*/


    /*   $builder->add('date_naissance', null, array(
            'attr' => ['class' => 'js-datepicker form-control '],
        ));*/


        $builder->add('accept_pub');
        $builder->remove('username');
       // $builder->remove('date_naissance');

    }

  public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
