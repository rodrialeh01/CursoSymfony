<?php

namespace Container6zPl3ni;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Command_CompileService extends App_KernelProdContainer
{
    /*
     * Gets the private 'asset_mapper.command.compile' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Command\AssetMapperCompileCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['asset_mapper.command.compile'] = $instance = new \Symfony\Component\AssetMapper\Command\AssetMapperCompileCommand(($container->privates['asset_mapper.public_assets_path_resolver'] ??= new \Symfony\Component\AssetMapper\Path\PublicAssetsPathResolver(\dirname(__DIR__, 4), '/assets/', 'public')), ($container->privates['asset_mapper'] ?? $container->load('getAssetMapperService')), ($container->privates['asset_mapper.importmap.manager'] ?? $container->load('getAssetMapper_Importmap_ManagerService')), ($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()), \dirname(__DIR__, 4), 'public', false);

        $instance->setName('asset-map:compile');
        $instance->setDescription('Compiles all mapped assets and writes them to the final public output directory.');

        return $instance;
    }
}
