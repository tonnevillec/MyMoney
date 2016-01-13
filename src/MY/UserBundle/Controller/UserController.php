<?php
 
namespace MY\UserBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\Controller\SecurityController as SecurityController;
 
use MY\UserBundle\Entity\User;
use MY\UserBundle\Form\RegisterType;

/**
 * Description of UserController
 *
 */
class UserController extends SecurityController {
 
    public function loginBisAction()
    {
        $csrfToken = $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate');
      
        return $this->container->get('templating')->renderResponse('FOSUserBundle:Security:login_content.html.twig', array(
            'last_username' => null,
            'error'         => null,
            'csrf_token'    => $csrfToken
        ));
    }

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('MYUserBundle:User')->findAll();

        return $this->render('MYUserBundle:Admin:index.html.twig', 
            array(
                'users'=>$users
            )
        );
    }

    public function registerBisAction()
    {
        $user = new User();
        $form = $this->get('form.factory')->create(new RegisterType, $user);
        
        return $this->render('MYUserBundle:Security:register.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}