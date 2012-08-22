<?php

namespace Kobosta\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction() {
        return $this->render('KobostaSiteBundle::layout.html.twig');
    }

    public function welcomeAction() {
        return $this->render('KobostaSiteBundle::welcome.html.twig');
    }
    
    public function thshirtsAction() {
        return $this->render('KobostaSiteBundle::tshirts.html.twig');
    }
    
    public function orderAction() {
        return $this->render('KobostaSiteBundle::order.html.twig');
    }
}