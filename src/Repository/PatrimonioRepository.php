<?php

namespace App\Repository;

use App\Entity\Cargo;
use App\Entity\Patrimonio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class PatrimonioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Patrimonio::class);
    }


}
