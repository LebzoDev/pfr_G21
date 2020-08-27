<?php

namespace ContainerKDxUXIL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApprenantControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ApprenantController' shared autowired service.
     *
     * @return \App\Controller\ApprenantController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\ApprenantController.php';

        $a = ($container->services['serializer'] ?? $container->getSerializerService());

        $container->services['App\\Controller\\ApprenantController'] = $instance = new \App\Controller\ApprenantController(($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')), $a, ($container->services['validator'] ?? $container->getValidatorService()), $a);

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ApprenantController', $container));

        return $instance;
    }
}
