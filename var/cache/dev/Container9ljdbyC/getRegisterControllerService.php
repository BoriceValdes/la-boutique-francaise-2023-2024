<?php

namespace Container9ljdbyC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\RegisterController' shared autowired service.
     *
     * @return \App\Controller\RegisterController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\RegisterController'] = $instance = new \App\Controller\RegisterController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\RegisterController', $container));

        return $instance;
    }
}
