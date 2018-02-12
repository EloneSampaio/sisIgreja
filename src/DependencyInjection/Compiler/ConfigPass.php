<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 21/01/18
 * Time: 21:31
 */

namespace App\DependencyInjection\Compiler;


use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ConfigPass implements CompilerPassInterface
{

    /**
     * You can modify the container here before it is dumped to PHP code.
     */
    public function process(ContainerBuilder $container)
    {
        $config = $container->getParameter('easyadmin.config');

        // use menu to use IS_AUTHENTICATED_FULLY role by default if not set
        foreach ($config['design']['menu'] as $k => $v) {
            if (!isset($v['role'])) {
                $config['design']['menu'][$k]['role'] = 'IS_AUTHENTICATED_FULLY';
            }
        }



        foreach ($config['entities'] as $k => $v) {
            if (!isset($v['role'])) {
                $config['entities'][$k]['role'] = 'IS_AUTHENTICATED_FULLY';
            }
        }

        // update views to use entities role by default if not set
        foreach ($config['entities'] as $k => $v) {
            $views = ['new', 'edit', 'show', 'list', 'form', 'delete'];
            foreach ($views as $view) {
                if (!isset($v[$view]['role'])) {
                    $config['entities'][$k][$view]['role'] = $v['role'];
                }
            }
        }
        $container->setParameter('easyadmin.config', $config);
    }
}