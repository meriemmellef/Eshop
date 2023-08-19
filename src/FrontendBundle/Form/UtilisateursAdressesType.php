<?php

namespace FrontendBundle\Form;

use http\Client\Curl\User;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use WebBundle\Entity\Pays;
use WebBundle\Entity\Utilisateurs;

class UtilisateursAdressesType extends AbstractType
{
    private $em;
    private $user;

    public function __construct($em,$user)
    {
        $this->em = $em;
        $this->user = $user;
    }
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $builder
            ->add('nom',null,array('required'=>true ,'data' => $this->user->getFirstName()))
            ->add('prenom',null,array('required'=>true,'data'=> $this->user->getLastName()))
            ->add('telephone',NumberType::class,array('max_length'=>13,'data'=> $this->user->getTel()))
            ->add('adresse')
            ->add('cp',null, array('attr' => array('class' => 'code',
                                                   'maxlength' => 5)))
           // ->add('ville','choice', array('attr' => array('class' => 'delegation')))
            ->add('pays',"hidden",array('required'=>false))
            //->add('complement',null,array('required' => false))
            //->add('utilisateur')
        ;

        /*$city = function(FormInterface $form, $cp) {
            $delegations = $this->em->getRepository('WebBundle:Delegation')->findBy(array('code' => $cp));

            $pays="";
            if ($delegations) {
                $pays = $delegations[0]->getRegion();
                $villes = array();
                foreach($delegations as $delegation) {
                    $villes[str_replace("  ","",$delegation->getName())] = $delegation->getName();
                }
                //var_dump($villes);die();
            } else {
                $villes = null;
            }

            $form->add('ville','choice', array('attr' => array('class'   => 'delegation'),
                                               'choices' => $villes));

        };

        $builder->get('cp')->addEventListener(FormEvents::POST_SUBMIT, function(FormEvent $event) use ($city) {
            $city($event->getForm()->getParent(),$event->getForm()->getData());
        });*/
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WebBundle\Entity\UtilisateursAdresses'

        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'webbundle_utilisateursadresses';
    }
}
