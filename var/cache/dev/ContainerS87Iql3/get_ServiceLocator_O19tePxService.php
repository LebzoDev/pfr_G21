<?php

namespace ContainerS87Iql3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O19tePxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o19tePx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o19tePx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'groupCompetence' => ['privates', '.errored..service_locator.o19tePx.App\\Entity\\GroupCompetence', NULL, 'Cannot autowire service ".service_locator.o19tePx": it references class "App\\Entity\\GroupCompetence" but no such service exists.'],
            'repo' => ['privates', 'App\\Repository\\CompetenceRepository', 'getCompetenceRepositoryService', true],
        ], [
            'groupCompetence' => 'App\\Entity\\GroupCompetence',
            'repo' => 'App\\Repository\\CompetenceRepository',
        ]);
    }
}
