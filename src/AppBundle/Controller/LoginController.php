<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     * @Method("POST")
     */

    public function loginAction(Request $request)
    {
        try {
            $username = $request->request->get('username');


            $em = $this->getDoctrine()->getManager();

            $sql = 'SELECT u.username, u.password
                FROM users u
                WHERE u.username = :username';

            $statement = $em->getConnection()->prepare($sql);
            $statement->bindValue('username', $username);

            $statement->execute();

            $result = $statement->fetchAll();

            if ($result && password_verify($request->request->get('password'),
                    $result[0]['password']) === true) {
                $session = new Session();
                $session->start();

                $session->set('username', $request->request->get('username'));
                $session->set('password', $request->request->get('password'));
                return $this->redirect('/');
            }
        } catch (\Exception $e) {
            $error = 'Неверно введены имя пользователя или пароль!';

            $this->get('session')->set('error', $error);

            return $this->redirect('/');
        }

        return new JsonResponse('');
    }


    /**
     * @Route("/logout", name="logout")
     * @Method("GET")
     */

    public function logoutAction()
    {

        $session = new Session();

        if ($session->get('username') && $session->get('password')) {
            $session->clear();
        }

        return $this->redirect('/');
    }
}
