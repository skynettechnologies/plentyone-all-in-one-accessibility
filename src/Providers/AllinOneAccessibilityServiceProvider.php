<?php

namespace AllinOneAccessibility\Providers;

use Plenty\Plugin\ServiceProvider;
use IO\Helper\TemplateContainer;
use IO\Helper\ResourceContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;

/**
 * Class AllinOneAccessibilityServiceProvider
 * @package AllinOneAccessibility\Providers
 */
class AllinOneAccessibilityServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(AllinOneAccessibilityRouteServiceProvider::class);
    }

 /**
     * boot twig extensions and services
     * @param Twig $twig
     * @param Dispatcher $dispatcher
     */
    public function boot(Twig $twig, Dispatcher $dispatcher)
    {
    }
}