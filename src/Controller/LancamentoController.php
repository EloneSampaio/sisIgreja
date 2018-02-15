<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 12/02/18
 * Time: 02:23
 */

namespace App\Controller;


use App\Entity\Lancamento;
use Symfony\Component\HttpFoundation\Request;

class LancamentoController extends AdminController
{


    public function listaAction(Request $request){

        $filter=$request->query->getAlnum('busca');

        $lancamento = $this->getDoctrine()
            ->getManager()
            ->getRepository(Lancamento::class)
            ->findByLimite();

        if($filter){
            $lancamento->where('a.descricao LIKE :descricao')
                ->setParameter('descricao', '%'.$filter.'%');
        }
        $query=$lancamento->getQuery();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            20/*limit per page*/
        );

        // parameters to template
        return $this->render('lancamento/list.html.twig', array('pagination' => $pagination));

    }


    public function listaMenuAction(){

        $filter=$this->request->query->getAlnum('busca');

        $lancamento = $this->getDoctrine()
            ->getManager()
            ->getRepository(Lancamento::class)
            ->findByLimite();

        if($filter){
            $lancamento->where('a.descricao LIKE :descricao')
                ->setParameter('descricao', '%'.$filter.'%');
        }
        $query=$lancamento->getQuery();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $this->request->query->getInt('page', 1)/*page number*/,
            20/*limit per page*/
        );

        // parameters to template
        return $this->render('lancamento/list.html.twig', array('pagination' => $pagination));

    }
}