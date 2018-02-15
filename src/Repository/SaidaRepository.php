<?php

namespace App\Repository;

use App\Entity\Saida;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class SaidaRepository
    extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Saida::class);
    }
    public function countValorPrintedForSaida()
    {
        return $this->createQueryBuilder('c')
            ->select('SUM(c.valor)')
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true, 3600)
            ->getSingleScalarResult();


    }

}
