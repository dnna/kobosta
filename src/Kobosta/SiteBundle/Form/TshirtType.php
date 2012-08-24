<?php

namespace Kobosta\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TshirtType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('month')
            ->add('year')
            ->add('title')
            ->add('description')
            ->add('logo')
            ->add('fabric')
            ->add('sizes')
        ;
    }

    public function getName()
    {
        return 'kobosta_sitebundle_tshirttype';
    }
}
