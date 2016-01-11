<?php

namespace MY\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MYCoreBundle:Default:index.html.twig');
    }
}
