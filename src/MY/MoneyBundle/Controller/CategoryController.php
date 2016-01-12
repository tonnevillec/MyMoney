<?php

namespace MY\MoneyBundle\Controller;

use MY\MoneyBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use MY\MoneyBundle\Form\CategoryType;
use MY\MoneyBundle\Form\CategoryEditType;

class CategoryController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('MYMoneyBundle:Category')->findAllOrderedByName();

        return $this->render('MYMoneyBundle:Category:index.html.twig', 
            array(
                'categories'=>$categories
            )
        );
    }

    public function editAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('MYMoneyBundle:Category')->find($id);

        if (null === $category) {
            throw new NotFoundHttpException("La catégorie n'existe pas.");
        }

        $form = $this->createForm(new CategoryType(), $category);

        if ($form->handleRequest($request)->isValid()) {
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'catégorie modifiée.');

            return $this->redirect($this->generateUrl('my_money_admin_category'));
        }

        return $this->render('MYMoneyBundle:Category:edit.html.twig', array(
            'form'   => $form->createView(),
            'category' => $category
        ));
    }

    public function addAction(Request $request){
        $category = new Category();
        $form = $this->get('form.factory')->create(new CategoryType, $category);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Catégorie créée.');

            return $this->redirect($this->generateUrl('my_money_admin_category'));
        }

        return $this->render('MYMoneyBundle:Category:add.html.twig', array(
          'form' => $form->createView(),
        ));
    }

    public function deleteAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('MYMoneyBundle:Category')->find($id);

        if (null === $category) {
            throw new NotFoundHttpException("La catégorie n'existe pas.");
        }

        // On crée un formulaire vide, qui ne contiendra que le champ CSRF
        // Cela permet de protéger la suppression des comptes contre cette faille
        $form = $this->createFormBuilder()->getForm();

        if ($form->handleRequest($request)->isValid()) {
            $em->remove($category);
            $em->flush();

            $request->getSession()->getFlashBag()->add('info', "La catégorie a bien été supprimée.");

            return $this->redirect($this->generateUrl('my_money_admin_category'));
        }

        return $this->render('MYMoneyBundle:Category:delete.html.twig', array(
            'category' => $category,
            'form'   => $form->createView()
        ));
    }
}
