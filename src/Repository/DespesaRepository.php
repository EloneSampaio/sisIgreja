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


}
