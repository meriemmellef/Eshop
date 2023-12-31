<?php

namespace WebBundle\Repository;

/**
 * CategoriesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PaysRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllPays($code)
    {
        $qb = $this->createQueryBuilder('p');
            if($code !=""){
                $qb  ->where('p.id = :code')
                    ->setParameter('code', $code);

            }

        return $qb->getQuery()->getArrayResult();
    }
}
