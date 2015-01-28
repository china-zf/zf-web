<?php

namespace Blog;

class Module
{
    public function getAutoloaderConfig()
    {
        return array('Zend\Loader\StandardAutoloader' => array(
            'namespaces' => array(__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__),
        ));
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

//    public function getControllerConfig()
//    {
//        return array('factories' => array(
//            'Issues\IssuesController' => function ($controllers) {
//                    $services = $controllers->getServiceLocator();
//                    $config   = $services->get('Config');
//                    $issues   = $config['issues'];
//
//                    $controller = new IssuesController();
//                    $controller->setIssues($issues);
//                    return $controller;
//                },
//        ));
//    }
}
