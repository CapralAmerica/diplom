<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{

    public function getUsersWhichBirthdayIsToday()
    {
        $date = new \DateTime();

        $today = $date->format('Y-m-d');

        $em = $this->getEntityManager();

        $sql = 'SELECT u.id, u.username, u.email, u.birthday
                FROM users u 
                WHERE u.birthday = :today
        ';

        $statement = $em->getConnection()->prepare($sql);
        $statement->bindValue('today', $today);

        $statement->execute();

        return $statement->fetchAll();
    }

}
