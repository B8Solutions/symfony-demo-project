<?php

namespace Acme\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeMainBundle:Blog:index.html.twig');
    }

    public function showAction()
    {
        return $this->render('AcmeMainBundle:Blog:show.html.twig');
    }
}
