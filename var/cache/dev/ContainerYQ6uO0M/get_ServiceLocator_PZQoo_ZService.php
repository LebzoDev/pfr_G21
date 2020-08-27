<?php

namespace ContainerYQ6uO0M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PZQoo_ZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pZQoo.Z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pZQoo.Z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'groupeTag' => ['privates', '.errored..service_locator.pZQoo.Z.App\\Entity\\GroupeTag', NULL, 'Cannot autowire service ".service_locator.pZQoo.Z": it references class "App\\Entity\\GroupeTag" but no such service exists.'],
            'repo' => ['privates', '.errored.abklm1d', NULL, 'Cannot determine controller argument for "App\\Controller\\GroupeTagController::addTag()": the $repo argument is type-hinted with the non-existent class or interface: "App\\Repository\\TagRepository".'],
        ], [
            'em' => '?',
            'groupeTag' => 'App\\Entity\\GroupeTag',
            'repo' => '?',
        ]);
    }
}
