<?php

namespace MY\MoneyBundle\Controller;

use MY\MoneyBundle\Entity\Account;
use MY\MoneyBundle\Form\AccountType;
use MY\MoneyBundle\Form\AccountEditType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AccountController extends Controller
{
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

    public function addAction(Request $request){
    	$account = new Account();
    	$form = $this->get('form.factory')->create(new AccountType, $account);


	    if ($form->handleRequest($request)->isValid()) {
	      $em = $this->getDoctrine()->getManager();
	      $em->persist($account);
	      $em->flush();

	      $request->getSession()->getFlashBag()->add('notice', 'Compte créé.');

	      return $this->redirect($this->generateUrl('my_money_account', array('id' => $account->getId())));
	    }

	    return $this->render('MYMoneyBundle:Account:add.html.twig', array(
	      'form' => $form->createView(),
	    ));
    }

    public function editAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $account = $em->getRepository('MYMoneyBundle:Account')->find($id);

        if (null === $account) {
            throw new NotFoundHttpException("Le compte n'existe pas.");
        }

        $form = $this->createForm(new AccountEditType(), $account);

        if ($form->handleRequest($request)->isValid()) {
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Compte modifié.');

            return $this->redirect($this->generateUrl('my_money_account', array('id' => $account->getId())));
        }

        return $this->render('MYMoneyBundle:Account:edit.html.twig', array(
            'form'   => $form->createView(),
            'account' => $account
        ));
    }

    public function deleteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $account = $em->getRepository('MYMoneyBundle:Account')->find($id);

        if (null === $account) {
            throw new NotFoundHttpException("Le compte n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression des comptes contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($account);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "Le compte a bien été supprimé.");

            return $this->redirect($this->generateUrl('my_money_homepage'));
        }

        return $this->render('MYMoneyBundle:Account:delete.html.twig', array(
            'account' => $account,
            'form'   => $form->createView()
        ));
    }

}
