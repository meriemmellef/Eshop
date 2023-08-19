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
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\DBAL\Types\IntegerType;
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
use Vich\UploaderBundle\Form\Type\VichFileType;
use WebBundle\Entity\Pays;


/**
 * Defines the form used to create and manipulate blog posts.
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class CouponType extends AbstractType {


    public function buildForm(FormBuilderInterface $builder, array $options) {
        // see http://symfony.com/doc/current/reference/forms/types.html
        // $builder->add('title', null, array('required' => false, ...));
        $builder
            ->add('code', null, array(
                    'attr' => array('autofocus' => true),
                    'label' => false,
                    'required' => true,

                ))
            ->add('montant',NumberType::class,array(
                    'required' => true,

                ))
            ->add('pourcentage',NumberType::class,array(
                'required' => true,

            ))
          /*  ->add('is_active', CheckboxType::class, array(
                'label' => false,
                'required' => false,
            ))*/
            ->add('type',ChoiceType::class,
            array('choices' => array(
                'réduction par prix' => '1',
                'réduction par pourcentage' => '2'),
                'choices_as_values' => true,'multiple'=>false,'expanded'=>true

            ));
    }





    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'WebBundle\Entity\Coupon',

        ));

    }

}
