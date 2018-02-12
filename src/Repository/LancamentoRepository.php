<?php

namespace App\Repository;

use App\Entity\Lancamento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class LancamentoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Lancamento::class);
    }
    public function findByDescricao($descricao)
    {
        return $this->createQueryBuilder('a')
            ->where('a.descricao LIKE :descricao')
            ->setParameter('descricao', '%'.$descricao.'%');
    }


    public function findByLimite()
    {
        return $this->createQueryBuilder('a');



    }

}
