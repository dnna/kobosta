<?php

namespace Kobosta\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KobostaSiteBundle::layout.html.twig');
    }
}
