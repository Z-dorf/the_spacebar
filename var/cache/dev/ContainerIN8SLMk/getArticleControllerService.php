<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\ArticleController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/ArticleController.php';

$this->services['App\Controller\ArticleController'] = $instance = new \App\Controller\ArticleController();

$instance->setContainer((new \Symfony\Component\DependencyInjection\ServiceLocator(array('doctrine' => function () {
    return ($this->services['doctrine'] ?? $this->getDoctrineService());
}, 'http_kernel' => function () {
    return ($this->services['http_kernel'] ?? $this->getHttpKernelService());
}, 'parameter_bag' => function () {
    return ($this->privates['parameter_bag'] ?? $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this));
}, 'request_stack' => function () {
    return ($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack());
}, 'router' => function () {
    return ($this->services['router'] ?? $this->getRouterService());
}, 'security.authorization_checker' => function () {
    return ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService());
}, 'security.csrf.token_manager' => function () {
    return ($this->services['security.csrf.token_manager'] ?? $this->getSecurity_Csrf_TokenManagerService());
}, 'security.token_storage' => function () {
    return ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage());
}, 'session' => function () {
    return ($this->services['session'] ?? $this->getSessionService());
}, 'twig' => function () {
    return ($this->services['twig'] ?? $this->getTwigService());
})))->withContext('App\\Controller\\ArticleController', $this));

return $instance;
