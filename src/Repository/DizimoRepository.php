<?php

namespace App\Repository;

use App\Entity\Dizimo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class DizimoRepository
    extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Dizimo::class);
    }

    public function countValorPrintedForDizimo()
    {
        return $this->createQueryBuilder('c')
            ->select('SUM(c.valor)')
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true, 3600)
            ->getSingleScalarResult();


    }



    public function getByDate($from,$to)
    {


        $qb = $this->createQueryBuilder("e");
        $qb
            ->andWhere('e.datePagamento BETWEEN :from AND :to')
            ->setParameter('from', $from )
            ->setParameter('to', $to)
        ;
        $result = $qb->getQuery()->getResult();

        return $result;
    }

}
