<?php

namespace InitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InitBundle:Default:index.html.twig');
    }
}
