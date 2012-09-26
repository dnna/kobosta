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
            ->add('size', null, array('label' => 'SIZE', 'required' => true))
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
