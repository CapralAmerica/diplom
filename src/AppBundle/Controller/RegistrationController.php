<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Session\Session;


class RegistrationController extends FOSRestController
{
    /**
     * @Route(path="/register", name="registration")
     * @Method("POST")
     */
    public function registerAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $user = new User();

        $user->setUsername($request->request->get('username'));
        $user->setPassword(password_hash($request->request->get('password'), PASSWORD_BCRYPT));
        $user->setEmail($request->request->get('email'));
        $user->setBirthday(new \DateTime($request->request->get('birthday')));



        $em->persist($user);
        $em->flush();

        $session = new Session();
        $session->start();

        $session->set('username', $request->request->get('username'));
        $session->set('password', $request->request->get('password'));

        return $this->redirect('/interview');
    }

}
