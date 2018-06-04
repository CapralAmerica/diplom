<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Interview;
use AppBundle\Utils\Questions;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class InterviewController extends Controller
{
    /**
     * @Route(path="/interview", name="interview_answers")
     * @Method("POST")
     */
    public function  interviewAnswersAction(Request $request, Session $session)
    {

        $em = $this->getDoctrine()->getManager();

        $interview = new Interview();

        $user = $em->getRepository('AppBundle\Entity\User')
            ->findBy(array('username' => $session->get('username')));


        $interview->setUser($user[0]);
        $interview->setQuestion1(Questions::QUESTION1);
        $interview->setQuestion2(Questions::QUESTION2);
        $interview->setQuestion3(Questions::QUESTION3);
        $interview->setAnswer1($request->request->get('answer1'));
        $interview->setAnswer2($request->request->get('answer2'));
        $interview->setAnswer3($request->request->get('answer3'));


        $em->persist($interview);
        $em->flush();

        return $this->redirect('/');
    }

}
