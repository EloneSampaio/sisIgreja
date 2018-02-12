<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 21/01/18
 * Time: 02:03
 */

namespace App\Twig;

use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use App\Entity\Crente;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class EasyAdminExtension extends AbstractExtension
{
    private $authorizationChecker;

    public function __construct(TokenStorageInterface $tokenStorage, AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->authorizationChecker = $authorizationChecker;
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('filter_admin_actions', array($this,'filterActions')),
        ];
    }
    public function filterActions(array $itemActions, $item)
    {
        unset($itemActions['export']);
       /* if ($item instanceof Crente && $item->getBatizado()) {
            unset($itemActions['delete']);
        }*/

        if ($item instanceof User && !$this->authorizationChecker->isGranted('ROLE_SUPER_ADMIN')) {
            unset($itemActions['edit']);
        }
        return $itemActions;
    }

  /*  public function getActionsForItem($view, $entityName){

        $entityConfig = $this->getEntityConfiguration($entityName);
        $disabledActions = $entityConfig['disabled_actions'];
        $viewActions = $entityConfig[$view]['actions'];
        $actionsExcludedForItems = array(
            'list' => array('new', 'search'),
            'edit' => array(),
            'new' => array(),
            'show' => array(),
        );

        $excludedActions = $actionsExcludedForItems[$view];
        $actions = ['edit', 'form', 'delete', 'list', 'show'];
        foreach ($actions as $action) {
            if (isset($entityConfig[$action]['role']) && !$this->checker->isGranted($entityConfig[$action]['role'])) {
                array_push($excludedActions, $action);
            }
        }

        return array_filter($viewActions,function($action) use ($excludedActions,$disabledActions){
            return !in_array($action['name'], $excludedActions) && !in_array($action['name'], $disabledActions);
        });
    }*/
}