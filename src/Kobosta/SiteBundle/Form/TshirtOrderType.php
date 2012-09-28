<?php

namespace Kobosta\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TshirtOrderType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('tshirt')
            ->add('scount', 'choice', array('label' => 'S', 'required' => true, 'attr' => array( 'class' => 'order-sizes'), 'choices' => array()))
            ->add('mcount', 'choice', array('label' => 'M', 'required' => true, 'attr' => array( 'class' => 'order-sizes'), 'choices' => array()))
            ->add('lcount', 'choice', array('label' => 'L', 'required' => true, 'attr' => array( 'class' => 'order-sizes'), 'choices' => array()))
            ->add('xlcount', 'choice', array('label' => 'XL', 'required' => true, 'attr' => array( 'class' => 'order-sizes'), 'choices' => array()))
            //->add('xxlcount', 'choice', array('label' => 'XXL', 'required' => true, 'attr' => array( 'class' => 'order-sizes'), 'choices' => array()))
            ->add('name', null, array('label' => 'NAME', 'required' => true))
            ->add('surname', null, array('label' => 'SURNAME', 'required' => true))
            ->add('phone', null, array('label' => 'TELEPHONE', 'required' => true))
            ->add('email', 'email', array('label' => 'EMAIL', 'required' => true))
            ->add('address', null, array('label' => 'ADDRESS', 'required' => true))
        ;
    }

    public function getName()
    {
        return 'kobosta_sitebundle_tshirtordertype';
    }
}
