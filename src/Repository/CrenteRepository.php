<?php

namespace App\Repository;

use App\Entity\Crente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class CrenteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Crente::class);
    }

    public function findByDesimista($value)
    {
        return $this->createQueryBuilder('c')
            ->where('c.dizimista = :value')->setParameter('dizimista', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult();


    }

    public function findByNome($nome)
    {
        return $this->createQueryBuilder('a')
            ->where('a.nome LIKE :nome')
            ->setParameter('nome', '%'.$nome.'%');
    }


    public function findByLimite()
    {
        return $this->createQueryBuilder('a');



    }


    public function count()
    {
        $qb = $this->createQueryBuilder('t');
        return $qb
            ->select('count(t.id)')
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true, 3600)
            ->getSingleScalarResult();
    }

    public function countBatizado($value)
    {
        $qb = $this->createQueryBuilder('t');
        return $qb
            ->select('count(t.id)')
            ->where('t.batizado = :value')
            ->setParameter('value',$value)
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true, 3600)
            ->getSingleScalarResult();
    }




    public function countGeneroBatizado($genero,$boolean)
    {

        $qb = $this->createQueryBuilder('t');
        return $qb
            ->select('count(t.id)')
            ->where('t.genero=:genero')
            ->andWhere('t.batizado = :boolean')
            ->setParameter('boolean',$boolean)
            ->setParameter('genero',$genero)
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true, 3600)
            ->getSingleScalarResult();
    }


}
