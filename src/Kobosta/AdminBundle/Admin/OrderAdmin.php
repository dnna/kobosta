<?php
namespace Kobosta\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Kobosta\SiteBundle\Entity\Tshirt;

use Knp\Menu\ItemInterface as MenuItemInterface;

class OrderAdmin extends Admin
{
    /**
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     *
     * @return void
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('date')
            ->add('tshirt')
            ->add('scount')
            ->add('mcount')
            ->add('lcount')
            ->add('xlcount')
            ->add('xxlcount')
            ->add('name')
            ->add('surname')
            ->add('email')
            ->add('address')
            ->add('phone')
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
            ->add('date')
            ->add('tshirt')
            ->add('scount')
            ->add('mcount')
            ->add('lcount')
            ->add('xlcount')
            ->add('xxlcount')
            ->add('name')
            ->add('surname')
            ->add('email')
            ->add('address')
            ->add('phone')
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
            ->add('date')
            ->add('tshirt')
            ->add('scount')
            ->add('mcount')
            ->add('lcount')
            ->add('xlcount')
            ->add('xxlcount')
            ->add('name')
            ->add('surname')
            ->add('email')
            ->add('address')
            ->add('phone')
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
            ->add('id')
            ->add('date')
            ->add('tshirt')
            ->add('scount')
            ->add('mcount')
            ->add('lcount')
            ->add('xlcount')
            ->add('xxlcount')
            ->add('name')
            ->add('surname')
            ->add('email')
            ->add('address')
            ->add('phone')
        ;
    }
}