<?php

namespace ContainerRZUwtbS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VO_SWoRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VO.sWoR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VO.sWoR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'briefMaPromoRepo' => ['privates', 'App\\Repository\\BriefMaPromoRepository', 'getBriefMaPromoRepositoryService', true],
            'promoRepo' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
        ], [
            'briefMaPromoRepo' => 'App\\Repository\\BriefMaPromoRepository',
            'promoRepo' => 'App\\Repository\\PromoRepository',
        ]);
    }
}
