<?php

namespace MY\MoneyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AdminController extends Controller
{
	/**
	* @Security("has_role('ROLE_ADMIN')")
	*/
    public function indexAction()
    {
        return $this->render('MYMoneyBundle:Admin:index.html.twig');
    }
}
