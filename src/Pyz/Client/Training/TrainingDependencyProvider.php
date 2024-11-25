<?php

namespace Pyz\Client\Training;

use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;

class TrainingDependencyProvider extends AbstractDependencyProvider
{
    public const CLIENT_ZED_REQUEST = 'CLIENT_ZED_REQUEST';

    public function provideServiceLayerDependencies(Container $container
    ): Container {
        $container = parent::provideServiceLayerDependencies($container);
        $container = $this->addZedRequestClient($container);
        return $container;
    }

    public function addZedRequestClient(Container $container): Container
    {
        $container->set(static::CLIENT_ZED_REQUEST,
            function (Container $container) {
                return $container->getLocator()->zedRequest()->client();
            });
        return $container;
    }
}