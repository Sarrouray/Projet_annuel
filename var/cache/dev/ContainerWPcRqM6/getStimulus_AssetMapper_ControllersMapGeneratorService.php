<?php

namespace ContainerWPcRqM6;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStimulus_AssetMapper_ControllersMapGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'stimulus.asset_mapper.controllers_map_generator' shared service.
     *
     * @return \Symfony\UX\StimulusBundle\AssetMapper\ControllersMapGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'stimulus-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'AssetMapper'.\DIRECTORY_SEPARATOR.'ControllersMapGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'stimulus-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'AssetMapper'.\DIRECTORY_SEPARATOR.'AutoImportLocator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'stimulus-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Ux'.\DIRECTORY_SEPARATOR.'UxPackageReader.php';

        $a = ($container->privates['asset_mapper'] ?? self::getAssetMapperService($container));

        if (isset($container->privates['stimulus.asset_mapper.controllers_map_generator'])) {
            return $container->privates['stimulus.asset_mapper.controllers_map_generator'];
        }

        return $container->privates['stimulus.asset_mapper.controllers_map_generator'] = new \Symfony\UX\StimulusBundle\AssetMapper\ControllersMapGenerator($a, ($container->privates['stimulus.asset_mapper.ux_package_reader'] ??= new \Symfony\UX\StimulusBundle\Ux\UxPackageReader(\dirname(__DIR__, 4))), [(\dirname(__DIR__, 4).'/assets/controllers')], (\dirname(__DIR__, 4).'/assets/controllers.json'), new \Symfony\UX\StimulusBundle\AssetMapper\AutoImportLocator(($container->privates['asset_mapper.importmap.config_reader'] ?? $container->load('getAssetMapper_Importmap_ConfigReaderService')), $a));
    }
}