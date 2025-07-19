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
     * Boot a template for the basket that will be displayed in the template plugin instead of the original basket.
     */
    public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.Resources.Import', function (ResourceContainer $container)
        {
            // The style is imported in the <head> on the PageDesign.twig of plentyShop LTS
            $container->addStyleTemplate('AllinOneAccessibility::Index');
        }, self::PRIORITY);
    }
}