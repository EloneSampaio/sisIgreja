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




    // Makes no possible to delete admin users via web app
    // We strongly recommend to use console if you have to delete some ROLE_ADMIN user.
    public function deleteUserAction()
    {
        $this->dispatch(EasyAdminEvents::PRE_DELETE);

        if ('DELETE' !== $this->request->getMethod()) {
            return $this->redirect($this->generateUrl('easyadmin', array('action' => 'list', 'entity' => $this->entity['name'])));
        }

        $id = $this->request->query->get('id');
        $form = $this->createDeleteForm($this->entity['name'], $id);
        $form->handleRequest($this->request);

        if ($form->isSubmitted() && $form->isValid()) {
            $easyadmin = $this->request->attributes->get('easyadmin');
            $entity = $easyadmin['item'];

            /**
             * OVERRIDING: No allow admin users to be deleted.
             */
            // we assumed that is only for users, cause the name of the method
            if ($entity->hasRole('ROLE_SUPER_ADMIN')) {
                $this->addFlash('error', 'Não podes eliminar usuarios que são administradores. Por favor contacta o suporte tecnico');
            }
            // END OVERRIDE
            else{

                parent::dispatch(EasyAdminEvents::PRE_REMOVE, array('entity' => $entity));

                parent::executeDynamicMethod('preRemove<EntityName>Entity', array($entity));

                try {
                    $this->em->remove($entity);
                    $this->em->flush();
                } catch (ForeignKeyConstraintViolationException $e) {
                    throw new EntityRemoveException(array('entity' => $this->entity['name']));
                }

                $this->dispatch(EasyAdminEvents::POST_REMOVE, array('entity' => $entity));
            }

            $refererUrl = $this->request->query->get('referer', '');

            $this->dispatch(EasyAdminEvents::POST_DELETE);

            return !empty($refererUrl)
                ? $this->redirect(urldecode($refererUrl))
                : $this->redirect($this->generateUrl('easyadmin', array('action' => 'list', 'entity' => $this->entity['name'])));
        }
    }



}

?>