<?php

namespace MY\MoneyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $accounts = $em->getRepository('MYMoneyBundle:Account')->findAll();

        $transactions = $em
        	->getRepository('MYMoneyBundle:Transaction')
        	->findBy(
        		array(),
        		array('date' => 'desc'),
        		5,
        		0
    		);

        return $this->render('MYMoneyBundle:Default:index.html.twig', 
    		array(
    			'accounts'=>$accounts,
    			'transactions'=>$transactions
			)
		);
    }
}
