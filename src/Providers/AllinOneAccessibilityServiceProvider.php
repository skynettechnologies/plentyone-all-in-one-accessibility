<?php

namespace AllinOneAccessibility\Providers;

use Plenty\Plugin\ServiceProvider;

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
}