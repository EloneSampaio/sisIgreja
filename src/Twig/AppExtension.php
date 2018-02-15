<?php

namespace App\Twig;

use EasyCorp\Bundle\EasyAdminBundle\Configuration\ConfigManager;
use JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension;
use Symfony\Component\PropertyAccess\PropertyAccessor;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension /*extends EasyAdminTwigExtension*/
{
    private $checker;

    /**
     * AppExtension constructor.
     */
  /*public function __construct(ConfigManager $configManager, PropertyAccessor $propertyAccessor, $debug = false, AuthorizationChecker $checker)
    {
        parent::__construct($configManager,$propertyAccessor,$debug);
        $this->checker = $checker;
    }

    public function getActionsForItem($view, $entityName){

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
