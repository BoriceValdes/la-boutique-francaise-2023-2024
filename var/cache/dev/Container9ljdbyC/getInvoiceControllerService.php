<?php

namespace Container9ljdbyC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInvoiceControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\InvoiceController' shared autowired service.
     *
     * @return \App\Controller\InvoiceController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\InvoiceController'] = $instance = new \App\Controller\InvoiceController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\InvoiceController', $container));

        return $instance;
    }
}
