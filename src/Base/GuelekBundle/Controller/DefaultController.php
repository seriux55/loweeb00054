<?php

namespace Base\GuelekBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BaseGuelekBundle:Default:index.html.twig');
    }
}
