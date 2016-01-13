<?php

namespace MY\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction()
    {
        if($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')){
        	return $this->redirect($this->generateUrl('my_money_homepage'));
        }
        else{
        	return $this->render('MYCoreBundle:Default:index.html.twig');
        }
    }

    public function registerAction()
    {
        if($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')){
        	return $this->redirect($this->generateUrl('my_money_homepage'));
        }
        else{
        	return $this->render('MYCoreBundle:Default:register.html.twig');
        }
    }
}
