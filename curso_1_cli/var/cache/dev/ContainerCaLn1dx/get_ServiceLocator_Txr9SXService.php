<?php

namespace ContainerCaLn1dx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Txr9SXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Txr9_SX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Txr9_SX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\AccesoController::index' => ['privates', '.service_locator._qrvEjc', 'get_ServiceLocator_QrvEjcService', true],
            'App\\Controller\\AccesoController::registro' => ['privates', '.service_locator.WbKlmww', 'get_ServiceLocator_WbKlmwwService', true],
            'App\\Controller\\FormulariosController::upload' => ['privates', '.service_locator.SoIa2O7', 'get_ServiceLocator_SoIa2O7Service', true],
            'App\\Controller\\FormulariosController::validacion' => ['privates', '.service_locator.SoIa2O7', 'get_ServiceLocator_SoIa2O7Service', true],
            'App\\Controller\\UtilidadesController::enviar_email' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\AccesoController:index' => ['privates', '.service_locator._qrvEjc', 'get_ServiceLocator_QrvEjcService', true],
            'App\\Controller\\AccesoController:registro' => ['privates', '.service_locator.WbKlmww', 'get_ServiceLocator_WbKlmwwService', true],
            'App\\Controller\\FormulariosController:upload' => ['privates', '.service_locator.SoIa2O7', 'get_ServiceLocator_SoIa2O7Service', true],
            'App\\Controller\\FormulariosController:validacion' => ['privates', '.service_locator.SoIa2O7', 'get_ServiceLocator_SoIa2O7Service', true],
            'App\\Controller\\UtilidadesController:enviar_email' => ['privates', '.service_locator.uVvF4gL', 'get_ServiceLocator_UVvF4gLService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\AccesoController::index' => '?',
            'App\\Controller\\AccesoController::registro' => '?',
            'App\\Controller\\FormulariosController::upload' => '?',
            'App\\Controller\\FormulariosController::validacion' => '?',
            'App\\Controller\\UtilidadesController::enviar_email' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AccesoController:index' => '?',
            'App\\Controller\\AccesoController:registro' => '?',
            'App\\Controller\\FormulariosController:upload' => '?',
            'App\\Controller\\FormulariosController:validacion' => '?',
            'App\\Controller\\UtilidadesController:enviar_email' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
