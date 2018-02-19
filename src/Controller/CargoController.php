<?php

namespace App\Controller;

use App\Entity\Cargo;
use App\Entity\Crente;
use EasyCorp\Bundle\EasyAdminBundle\Event\EasyAdminEvents;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;





class CargoController extends AdminController
{


    // Makes no possible to delete admin users via web app
    // We strongly recommend to use console if you have to delete some ROLE_ADMIN user.
    public function deleteCargoAction()
    {

        $crente = $this->getDoctrine()
            ->getRepository(Crente::class);

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

            /*impedir que se remova categorias com mebros ja cadastrados nela*/
            $teste=$crente->findOneBy(['cargos'=>$entity]);
            //var_dump($teste->getCargos()->getNome()); die;
            if ($teste) {
                $this->addFlash('error', 'Não podes eliminar essa categoria porque já tem  membros cadastrado nela. Por favor contacta o suporte tecnico para mais informações');
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
