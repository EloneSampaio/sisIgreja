<?php

namespace App\Repository;

use App\Entity\Despesa;
use App\Entity\Filial;
use App\Entity\Fornecedor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class DespesaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Despesa::class);
    }

    public function countValorPrintedForDespesa()
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
            ->andWhere('e.dateVencimento BETWEEN :from AND :to')
            ->setParameter('from', $from )
            ->setParameter('to', $to)
        ;
        $result = $qb->getQuery()->getResult();

        return $result;
    }
}
