<?php

namespace MY\MoneyBundle\Controller;

use MY\MoneyBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CategoryController extends Controller
{
    public function indexAction()
    {
        return $this->render('MYMoneyBundle:Category:index.html.twig');
    }
    /*
    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $account = $em->getRepository('MYMoneyBundle:Account')->find($id);

        if($account === null){
        	throw $this->createNotFoundException("Le compte est inconnu");
        }
        else{
        	$transactions = $em
        		->getRepository('MYMoneyBundle:Transaction')
        		->findByAccount($account);
        }

        return $this->render('MYMoneyBundle:Account:view.html.twig',
        	array(
        		'account' => $account,
        		'transactions' => $transactions
    		)
		);
    }
    */
}
