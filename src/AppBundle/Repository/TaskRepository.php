<?php

namespace AppBundle\Repository;

/**
 * UserRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TaskRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * Return the list of product with all associated entities.
     *
     * @return array|null
     */
    public function findAllWhithAllEntities(): ?array
    {
        return $this->createQueryBuilder('t')
            ->leftJoin('t.user', 'u')
            ->addSelect('u')
            ->getQuery()
            ->getResult()
        ;
    }
}
