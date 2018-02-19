<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 11/02/18
 * Time: 01:52
 */

namespace App\Controller;


use App\Entity\Crente;
use App\Entity\Dizimo;
use App\Entity\EntregaValor;
use App\Entity\Lancamento;
use App\Entity\TipoDizimo;
use App\Entity\TipoPagamento;

class DizimoController extends AdminController
{

    public function persistDizimoEntity($dizimo)
    {


        $lancamento=new Lancamento();
        $lancamento->setDescricao($dizimo->getCrentes());
        $lancamento->setTipo($dizimo->getTipoDizimos());
        $lancamento->setValor($dizimo->getValor());

        parent::persistEntity($dizimo);
        $this->em->persist($lancamento);
        $this->em->flush();

    }

    protected function createNewDizimoEntity()
    {
        $entity = new Dizimo();


        $valores = $this->em->getRepository(EntregaValor::class)->find(2);
        $tipoDizimo = $this->em->getRepository(TipoDizimo::class)->find(1);
        $tipoPagamento = $this->em->getRepository(TipoPagamento::class)->find(1);

        $entity->setEntregaValores($valores);
        $entity->setTipoDizimos($tipoDizimo);
        $entity->setTipoPagamentos($tipoPagamento);


        return $entity;
    }


}