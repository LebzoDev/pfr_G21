<?php

namespace ContainerNgMXSzy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AtvCle0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.atvCle0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.atvCle0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'object' => ['privates', '.errored..service_locator.atvCle0.App\\Entity\\Referentiel', NULL, 'Cannot autowire service ".service_locator.atvCle0": it references class "App\\Entity\\Referentiel" but no such service exists.'],
        ], [
            'object' => 'App\\Entity\\Referentiel',
        ]);
    }
}
