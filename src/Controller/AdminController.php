<?php

namespace App\Controller;

use App\Entity\Lancamento;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use JavierEguiluz\Bundle\EasyAdminBundle\Event\EasyAdminEvents;

class AdminController extends BaseAdminController
{







    public function createNewUserEntity()
    {
        return $this->get('fos_user.user_manager')->createUser();
    }

    public function persistUserEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
        parent::persistEntity($user);
    }

    public function updateUserEntity($user)
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
        parent::updateEntity($user);
    }


    public function listPageAction(){
        $this->dispatch(EasyAdminEvents::PRE_LIST);
    }


    public function persistDespesaEntity($despesa)
    {


        $lancamento=new Lancamento();
        $lancamento->setDescricao($despesa->getFornecedores());
        $lancamento->setTipo($despesa->getDescricao());
        $lancamento->setValor($despesa->getValor());

        parent::persistEntity($despesa);
        $this->em->persist($lancamento);
        $this->em->flush();

    }





}

?>