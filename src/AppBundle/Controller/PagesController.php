<?php

namespace AppBundle\Controller;

use AppBundle\Utils\Questions;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PagesController extends Controller
{
    /**
     * @Route("/sign_up", name="sign_up")
     */
    public function signUpAction()
    {
        return $this->render('sign_up.html.twig');
    }

    /**
     * @Route("/sign_in", name="sign_in")
     */
    public function signInAction()
    {
        return $this->render('sign_in.html.twig');
    }

    /**
     * @Route("/services", name="services")
     */
    public function indexAction()
    {
        return $this->render('services.html.twig');
    }

    /**
     * @Route("/contacts", name="contacts")
     */
    public function contactsAction()
    {
        return $this->render('contacts.html.twig');
    }

    /**
     * @Route("/interview", name="interview")
     *
     */
    public function interviewAction()
    {
        $question1 = Questions::QUESTION1;
        $question2 = Questions::QUESTION2;
        $question3 = Questions::QUESTION3;

        return $this->render('interview.html.twig', array('question1' => $question1,
            'question2' => $question2, 'question3' =>  $question3));
    }

    /**
     * @Route("/services", name="services")
     */
    public function pricesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $services = $em->getRepository('AppBundle\Entity\Service')->findAll();

        return $this->render('services.html.twig', array('services' => $services));
    }

    /**
     * @Route("/gallery", name="gallery")
     */
    public function galleryAction()
    {
        return $this->render('gallery.html.twig');
    }
}

