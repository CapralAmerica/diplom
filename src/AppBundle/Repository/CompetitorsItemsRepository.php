<?php

namespace AppBundle\Repository;


class CompetitorsItemsRepository extends \Doctrine\ORM\EntityRepository
{
    public function getItemsOfCompetitor($id)
    {
        $em = $this->getEntityManager();

        $sql = 'SELECT i.item, i.price, c.name
                FROM competitors_items i
                LEFT JOIN competitors c ON i.competitor_id = c.id 
                WHERE i.competitor_id = :id
                 ';

        $statement = $em->getConnection()->prepare($sql);
        $statement->bindValue('id', $id);

        $statement->execute();

        return $statement->fetchAll();
    }

}
