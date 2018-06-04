<?php

namespace AppBundle\Controller;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{

    /**
     * @Route("/admin", name="admin_users")
     */
    public function adminUsersAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle\Entity\User')->findAll();

        $session = new Session();

        if ($session->has('username') && $session->get('username') === 'admin') {
            return $this->render('admin_users.html.twig', array('users' => $users));
        } else {
            return $this->redirect('/');
        }

    }

    /**
     * @Route("/admin/statistics", name="admin_statistics")
     */
    public function adminStatisticsAction()
    {

        $questionNumber = 'question1';
        $answerNumber = 'answer1';
        $answers = ['9-12', '12-17', '17-21'];

        $repository = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle\Entity\Interview');
        $answer1 = $repository->getCountInterviewAnswers($questionNumber, $answerNumber, $answers[0]);
        $answer2 = $repository->getCountInterviewAnswers($questionNumber, $answerNumber, $answers[1]);
        $answer3 = $repository->getCountInterviewAnswers($questionNumber, $answerNumber, $answers[2]);

        dump($answers);

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['Вопрос', 'Ответ'],
                ['9-12',  count($answer1)],
                ['12-17',  count($answer2)],
                ['17-21',  count($answer3)],
            ]
        );
        $pieChart->getOptions()->setTitle('Статистика ответов пользователей');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('admin_statistics.html.twig', array('pieChart' => $pieChart));
    }

    /**
     * @Route("/admin/parsing/results", name="admin_parsing_results")
     */
    public function adminParsingResultsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $items_lambre = $em->getRepository('AppBundle\Entity\CompetitorsItems')->getItemsOfCompetitor(1);
        $items_bigl = $em->getRepository('AppBundle\Entity\CompetitorsItems')->getItemsOfCompetitor(2);

        return $this->render('admin_parsing_results.html.twig', array(
            'lambre' => $items_lambre,
            'bigl' => $items_bigl
        ));
    }

    /**
     * @Route("/admin/birthday", name="admin_birthday")
     */
    public function adminBirthdayAction()
    {
        $repository = $this->getDoctrine()->getManager()
            ->getRepository('AppBundle\Entity\User');
        $users = $repository->getUsersWhichBirthdayIsToday();

        return $this->render('admin_birthday.html.twig', array('users' => $users));
    }

    /**
     * @Route("/admin/birthday/mail/{id}", name="admin_birthday_mail")
     */
    public function adminSendBirthdayEmailAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $currentUser = $em->getRepository('AppBundle\Entity\User')->find($id);

        $message = (new \Swift_Message('Birthday Email'))
                ->setFrom('admin@mail.com')
                ->setTo($currentUser->getEmail())
                ->setBody(
                    $this->renderView(
                        'emails/birthday.html.twig',
                        array('name' => $currentUser->getUsername())
                    ),
                    'text/html'
                );

        return $this->redirect('/admin/birthday');
    }
}
