<?php

namespace App\Repository;

use App\Entity\TipoDizimo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class TipoDizimoRepository
    extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TipoDizimo::class);
    }


}
