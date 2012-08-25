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
            ->add('size')
            ->add('name')
            ->add('surname')
            ->add('email', 'email')
            ->add('address')
        ;
    }

    public function getName()
    {
        return 'kobosta_sitebundle_tshirtordertype';
    }
}
