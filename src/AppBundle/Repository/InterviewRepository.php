<?php

namespace AppBundle\Repository;


class InterviewRepository extends \Doctrine\ORM\EntityRepository
{

    public function getCountInterviewAnswers($questionNumber, $answerNumber, $answer)
    {

        return $this->createQueryBuilder('i')
                    ->select('i'.'.'.$questionNumber)
                    ->addSelect('i'.'.'.$answerNumber)
                    ->where('i'.'.'.$answerNumber.'= :answer')
                    ->setParameter('answer', $answer)
                    ->getQuery()
                    ->getResult();
    }
}
