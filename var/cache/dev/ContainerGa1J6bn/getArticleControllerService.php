<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\ArticleController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/ArticleController.php';

$this->services['App\Controller\ArticleController'] = $instance = new \App\Controller\ArticleController();

$instance->setContainer((new \Symfony\Component\DependencyInjection\ServiceLocator(array('http_kernel' => function () {
    return ($this->services['http_kernel'] ?? $this->getHttpKernelService());
}, 'parameter_bag' => function () {
    return ($this->privates['parameter_bag'] ?? $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this));
}, 'request_stack' => function () {
    return ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack());
}, 'router' => function () {
    return ($this->services['router'] ?? $this->getRouterService());
}, 'session' => function () {
    return ($this->services['session'] ?? $this->load('getSessionService.php'));
}, 'twig' => function () {
    return ($this->services['twig'] ?? $this->getTwigService());
})))->withContext('App\\Controller\\ArticleController', $this));

return $instance;
