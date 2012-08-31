<?php
namespace Kobosta\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Knp\Menu\ItemInterface as MenuItemInterface;

class TshirtAdmin extends Admin
{
    /**
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     *
     * @return void
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('month')
            ->add('monthtext')
            ->add('year')
            ->add('title')
            ->add('description')
            ->add('price')
            ->add('stock')
            ->add('sizes')
            ->add('logoWebPath', 'image')
            ->add('fabricWebPath', 'image')
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     *
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('month')
            ->add('monthtext')
            ->add('year')
            ->add('title')
            ->add('description')
            ->add('price')
            ->add('stock')
            ->add('sizes')
            ->add('logo', 'file', array('required' => false))
            ->add('fabric', 'file', array('required' => false))
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     *
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
            )))
            ->addIdentifier('id')
            ->add('month')
            ->add('monthtext')
            ->add('year')
            ->add('title')
            ->add('description')
            ->add('price')
            ->add('stock')
            ->add('sizes')
            ->add('logoWebPath', 'image', array('required' => false))
            ->add('fabricWebPath', 'image', array('required' => false))
        ;
    }

    /**
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     *
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('month')
            ->add('year')
            ->add('title')
            ->add('description')
            ->add('price')
            ->add('sizes')
        ;
    }
}