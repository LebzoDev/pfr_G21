<?php

namespace ContainerZGPxu85;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3ShxE2OService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3ShxE2O' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3ShxE2O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repoApp' => ['privates', 'App\\Repository\\ApprenantRepository', 'getApprenantRepositoryService', true],
            'repoPromo' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
        ], [
            'manager' => '?',
            'repoApp' => 'App\\Repository\\ApprenantRepository',
            'repoPromo' => 'App\\Repository\\PromoRepository',
        ]);
    }
}