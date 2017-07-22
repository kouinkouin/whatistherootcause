<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Cause;
use Doctrine\ORM\EntityRepository;

/**
 * @method null|Cause find($id, $lockMode = null, $lockVersion = null)
 */
class CauseRepository extends EntityRepository
{
    /**
     * @return Cause|null
     */
    public function findOneRandomly()
    {
        return $this->createQueryBuilder('cause')
            ->orderBy('RAND()')
            ->setMaxResults(1)
            ->getQuery()->getOneOrNullResult();
    }
}
