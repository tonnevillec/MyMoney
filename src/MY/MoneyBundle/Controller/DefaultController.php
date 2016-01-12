<?php

namespace MY\MoneyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        // Appel direct
        /*
        $accounts = $em
            ->getRepository('MYMoneyBundle:Account')
            ->findBy(
                array('users' => $this->get('security.context')->getToken()->getUser()),
                array(),
                10,
                0
            );
        */
        // En passant par le service => Utilisation de la config par defaut order by date, limit 10
        $accounts = $this->get('my_money_sidebar')->getNav($this->get('security.context')->getToken()->getUser());

        $transactions = $em
        	->getRepository('MYMoneyBundle:Transaction')
        	->findBy(
        		array(),
        		array('date' => 'desc'),
        		5,
        		0
    		);

        return $this->render('MYMoneyBundle:Private:index.html.twig', 
    		array(
    			'accounts'=>$accounts,
    			'transactions'=>$transactions
			)
		);
    }
}
