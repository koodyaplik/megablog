<?php

namespace MegablogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MegablogBundle:Default:index.html.twig');
    }
}
