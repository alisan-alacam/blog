<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class PostRepository
 * @package AppBundle\Repository
 */
class PostRepository extends EntityRepository
{

    public function queryLatest()
    {
        return $this->getEntityManager()
            ->createQuery('
                SELECT p
                FROM AppBundle:Post p
                WHERE p.publishedAt <= :now
                ORDER BY p.publishedAt DESC
            ')
            ->setParameter('now', new \DateTime())
        ;
    }


    public function findLatest()
    {
        $this->queryLatest()->getResult();
    }
}