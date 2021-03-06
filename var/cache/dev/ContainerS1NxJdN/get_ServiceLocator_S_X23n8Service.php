<?php

namespace ContainerS1NxJdN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S_X23n8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.s.X23n8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.s.X23n8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ProductController::delete' => ['privates', '.service_locator.YQV8pxl', 'get_ServiceLocator_YQV8pxlService', true],
            'App\\Controller\\ProductController::edit' => ['privates', '.service_locator.YQV8pxl', 'get_ServiceLocator_YQV8pxlService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.JeTwYn4', 'get_ServiceLocator_JeTwYn4Service', true],
            'App\\Controller\\ProductController::new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\ProductController::show' => ['privates', '.service_locator.iyEwlLH', 'get_ServiceLocator_IyEwlLHService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ProductController:delete' => ['privates', '.service_locator.YQV8pxl', 'get_ServiceLocator_YQV8pxlService', true],
            'App\\Controller\\ProductController:edit' => ['privates', '.service_locator.YQV8pxl', 'get_ServiceLocator_YQV8pxlService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.JeTwYn4', 'get_ServiceLocator_JeTwYn4Service', true],
            'App\\Controller\\ProductController:new' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\ProductController:show' => ['privates', '.service_locator.iyEwlLH', 'get_ServiceLocator_IyEwlLHService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ProductController::delete' => '?',
            'App\\Controller\\ProductController::edit' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\ProductController::new' => '?',
            'App\\Controller\\ProductController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ProductController:delete' => '?',
            'App\\Controller\\ProductController:edit' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\ProductController:new' => '?',
            'App\\Controller\\ProductController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
