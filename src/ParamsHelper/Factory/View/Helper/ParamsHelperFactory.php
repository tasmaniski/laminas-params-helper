<?php

namespace ParamsHelper\Factory\View\Helper;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Mvc\Router\Http\RouteMatch;
use \ParamsHelper\View\Helper\ParamsHelper;

class ParamsHelperFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return ParamsHelper
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $app = $serviceLocator->getServiceLocator()->get('Application');

        return new ParamsHelper($app->getRequest(), $app->getMvcEvent());
    }
}