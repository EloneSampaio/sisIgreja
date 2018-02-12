<?php

namespace App\Repository;

use App\Entity\TipoOferta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class TipoOfertaRepository
    extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TipoOferta::class);
    }


}
