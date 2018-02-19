<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 11/02/18
 * Time: 01:51
 */

namespace App\Controller;


use App\Entity\EntregaValor;
use App\Entity\Lancamento;
use App\Entity\Oferta;
use App\Entity\TipoDizimo;
use App\Entity\TipoOferta;
use App\Entity\TipoPagamento;

class OfertaController extends AdminController
{


    public function persistOfertaEntity($oferta)
    {


        $lancamento=new Lancamento();
        $lancamento->setDescricao($oferta->getCrentes());
        $lancamento->setTipo($oferta->getTipoOfertas());
        $lancamento->setValor($oferta->getValor());

        parent::persistEntity($oferta);
        $this->em->persist($lancamento);
        $this->em->flush();

    }


    protected function createNewOfertaEntity()
    {
        $entity = new Oferta();


        $valores = $this->em->getRepository(EntregaValor::class)->find(2);
        $tipoOferta = $this->em->getRepository(TipoOferta::class)->find(1);
        $tipoPagamento = $this->em->getRepository(TipoPagamento::class)->find(1);

        $entity->setEntregaValores($valores);
        $entity->setTipoOfertas($tipoOferta);
        $entity->setTipoPagamentos($tipoPagamento);


        return $entity;
    }

}