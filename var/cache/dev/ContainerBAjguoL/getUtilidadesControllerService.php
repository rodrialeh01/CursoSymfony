<?php

namespace ContainerBAjguoL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtilidadesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UtilidadesController' shared autowired service.
     *
     * @return \App\Controller\UtilidadesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/UtilidadesController.php';

        $container->services['App\\Controller\\UtilidadesController'] = $instance = new \App\Controller\UtilidadesController(($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\UtilidadesController', $container));

        return $instance;
    }
}
