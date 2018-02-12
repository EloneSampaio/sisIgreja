<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 11/02/18
 * Time: 01:52
 */

namespace App\Controller;


use App\Entity\Lancamento;

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


}