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
            ->add('size', null, array('label' => 'SIZE'))
            ->add('name', null, array('label' => 'NAME'))
            ->add('surname', null, array('label' => 'SURNAME'))
            ->add('email', 'email', array('label' => 'EMAIL'))
            ->add('address', null, array('label' => 'SIZE'))
        ;
    }

    public function getName()
    {
        return 'kobosta_sitebundle_tshirtordertype';
    }
}
