<?php
/**
 * Created by PhpStorm.
 * User: marina
 * Date: 03/10/16
 * Time: 22.13
 */

namespace Categories\Factory;

use Categories\Controller\IndexController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IndexControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        $form = $realServiceLocator->get('FormElementManager')->get('Categories\Form\CategoryForm');
        $filter = $realServiceLocator->get('CategoryFilter');
        return new IndexController($form, $filter);
    }
}