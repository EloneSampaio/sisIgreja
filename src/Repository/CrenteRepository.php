<?php

namespace App\Repository;

use App\Entity\Crente;
use App\Entity\Funcao;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
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


    public function membroBatizado($value)
    {
        $qb = $this->createQueryBuilder('t');
        return $qb
            ->where('t.batizado = :value')
            ->setParameter('value',$value)
            ->getQuery()
            ->getResult();
    }

    public function membroDizimista($value)
    {
        $qb = $this->createQueryBuilder('t');
        return $qb
            ->where('t.dizimista = :value')
            ->setParameter('value',$value)
            ->getQuery()
            ->getResult();
    }

    public function membroEstadoCivil($value)
    {
        $qb = $this->createQueryBuilder('t');
        return $qb
            ->where('t.estadoCivil = :value')
            ->setParameter('value',$value)
            ->getQuery()
            ->getResult();
    }


    public function getByDate($from,$to)
    {
        $qb = $this->createQueryBuilder("e");
        $qb
            ->andWhere('e.dateCadastro BETWEEN :from AND :to')
            ->setParameter('from', $from )
            ->setParameter('to', $to)
        ;
        $result = $qb->getQuery()->getResult();

        return $result;
    }


    public function membroFuncao(Funcao $funcao)
    {
        $qb = $this->createQueryBuilder('t');
        return $qb
            ->where('t.estadoCivil = :value')
            ->setParameter('value',$funcao)
            ->getQuery()
            ->getResult();
    }


    public function membroAniversario(){

        $rsm = new ResultSetMapping();

        $qb=$this->getEntityManager()->getConnection()->executeQuery("SELECT * FROM aniversario_view")->fetchAll();
       // $qb = $this->("SELECT `id`, `nome`,`date_cadastro`, DATE_ADD( date_cadastro, INTERVAL IF(DAYOFYEAR(date_cadastro) >= DAYOFYEAR(CURDATE()), YEAR(CURDATE())-YEAR(date_cadastro), YEAR(CURDATE())-YEAR(date_cadastro)+1 ) YEAR ) AS `next_birthday` FROM `crente` WHERE `date_cadastro` IS NOT NULL HAVING `next_birthday` BETWEEN CURDATE() AND DATE_ADD(CURDATE(), INTERVAL 7 DAY) ORDER BY `next_birthday` LIMIT 1000");
        return $qb;
    }


}
