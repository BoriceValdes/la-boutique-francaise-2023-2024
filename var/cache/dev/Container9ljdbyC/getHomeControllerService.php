<?php

namespace Container9ljdbyC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHomeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Account\HomeController' shared autowired service.
     *
     * @return \App\Controller\Account\HomeController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Account\\HomeController'] = $instance = new \App\Controller\Account\HomeController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\Account\\HomeController', $container));

        return $instance;
    }
}
