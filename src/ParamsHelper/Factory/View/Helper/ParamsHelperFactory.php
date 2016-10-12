<?php

namespace ParamsHelper\Factory\View\Helper;

use Interop\Container\ContainerInterface;
use ParamsHelper\View\Helper\ParamsHelper;

class ParamsHelperFactory
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $app = $container->get('Application');

        return new ParamsHelper($app->getRequest(), $app->getMvcEvent());
    }
}