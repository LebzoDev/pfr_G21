<?php

namespace ContainerKDxUXIL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_WVk_7QService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.W_Vk.7Q' shared service.
     *
     * @return \App\Repository\GroupeTagRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\TagController::index()": the $repo argument is type-hinted with the non-existent class or interface: "App\\Repository\\GroupeTagRepository".');
    }
}
