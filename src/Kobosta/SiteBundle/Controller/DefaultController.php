<?php

namespace Kobosta\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Kobosta\SiteBundle\Entity\TshirtOrder;
use Kobosta\SiteBundle\Form\TshirtOrderType;

class DefaultController extends Controller
{
    public function indexAction() {
        $entity = new TshirtOrder();
        $form   = $this->createForm(new TshirtOrderType(), $entity);
        
        return $this->render('KobostaSiteBundle::layout.html.twig', array(
            'tshirts' => $this->get('doctrine')->getRepository('Kobosta\SiteBundle\Entity\Tshirt')->findAll(),
            'texts' => $this->get('doctrine')->getRepository('Kobosta\SiteBundle\Entity\Text'),
            'form'   => $form->createView()
        ));
    }

    public function orderAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = new TshirtOrder();
        $form   = $this->createForm(new TshirtOrderType(), $entity);
        $request = $this->getRequest();
        $form->bindRequest($request);

        if ($form->isValid()) {
            $entity->setDate(new \DateTime());
            $em->persist($entity);
            $em->flush();
            $this->get('session')->setFlash('orderdone', 'order_done');
        }
        
        return $this->redirect($this->generateUrl('home').'#!order');
    }
}