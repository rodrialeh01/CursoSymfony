<?php

namespace ContainerBTyAjOA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_Resolver_JspmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.resolver.jspm' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\Resolver\JspmResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/ImportMap/Resolver/PackageResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/ImportMap/Resolver/JspmResolver.php';

        return $container->privates['asset_mapper.importmap.resolver.jspm'] = new \Symfony\Component\AssetMapper\ImportMap\Resolver\JspmResolver(($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container)), 'jspm');
    }
}
