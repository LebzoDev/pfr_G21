<?php

namespace ContainerRZUwtbS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IZ8CcC4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IZ8CcC4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IZ8CcC4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'object' => ['privates', '.errored..service_locator.IZ8CcC4.App\\Entity\\Competence', NULL, 'Cannot autowire service ".service_locator.IZ8CcC4": it references class "App\\Entity\\Competence" but no such service exists.'],
        ], [
            'object' => 'App\\Entity\\Competence',
        ]);
    }
}
