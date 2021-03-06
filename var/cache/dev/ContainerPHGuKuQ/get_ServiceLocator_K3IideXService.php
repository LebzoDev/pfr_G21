<?php

namespace ContainerPHGuKuQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K3IideXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.k3IideX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.k3IideX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repoUti' => ['privates', 'App\\Repository\\ApprenantRepository', 'getApprenantRepositoryService', true],
        ], [
            'repoUti' => 'App\\Repository\\ApprenantRepository',
        ]);
    }
}
