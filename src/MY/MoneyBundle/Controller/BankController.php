<?php

namespace MY\MoneyBundle\Controller;

use MY\MoneyBundle\Entity\Bank;
use MY\MoneyBundle\Form\BankType;
use MY\MoneyBundle\Form\BankEditType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BankController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $banks = $em->getRepository('MYMoneyBundle:Bank')->findAllOrderedByName();

        return $this->render('MYMoneyBundle:Bank:index.html.twig', 
            array(
                'banks'=>$banks
            )
        );
    }

    public function editAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $bank = $em->getRepository('MYMoneyBundle:Bank')->find($id);

        if (null === $bank) {
            throw new NotFoundHttpException("La banque n'existe pas.");
        }

        $form = $this->createForm(new BankType(), $bank);

        if ($form->handleRequest($request)->isValid()) {
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Banque modifiée.');

            return $this->redirect($this->generateUrl('my_money_admin_bank'));
        }

        return $this->render('MYMoneyBundle:Bank:edit.html.twig', array(
            'form'   => $form->createView(),
            'bank' => $bank
        ));
    }
}
