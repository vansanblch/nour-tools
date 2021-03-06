<?php

namespace BitrixBundle\Repository;

/**
 * BUserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BUserRepository extends \Doctrine\ORM\EntityRepository
{
    public function emailExists($email)
    {
        $queryBuilder = $this->createQueryBuilder('t');
        $queryBuilder->select(
            $queryBuilder->expr()->count('t')
        );
        $queryBuilder->where('t.email = :email');
        $queryBuilder->setParameter('email', $email);

        return 0 < $queryBuilder->getQuery()->getSingleScalarResult();
    }
}
