<?php

namespace Container9ljdbyC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPasswordControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Account\PasswordController' shared autowired service.
     *
     * @return \App\Controller\Account\PasswordController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Account\\PasswordController'] = $instance = new \App\Controller\Account\PasswordController(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\Account\\PasswordController', $container));

        return $instance;
    }
}
