<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 11/02/18
 * Time: 01:51
 */

namespace App\Controller;


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

}