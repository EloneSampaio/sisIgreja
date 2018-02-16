<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 12/02/18
 * Time: 02:23
 */

namespace App\Controller;

use App\Entity\Agenda;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AgendaController extends AdminController
{






    public function listaMenuAction(){

        $data=$this->getDoctrine()->getRepository(Agenda::class)->findAll();

        return $this->render('agenda/list.html.twig',array('evento'=>$data));

    }


    public function listAgendaAction()
    {
         parent::listAction();


        return $this->redirectToRoute('admin', ['entity' => 'Agenda', 'action' => 'listaMenu']);

    }
}