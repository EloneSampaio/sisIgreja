<?php

namespace App\Repository;

use App\Entity\Oferta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class OfertaRepository
    extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Oferta::class);
    }

    public function countValorPrintedForOferta()
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
