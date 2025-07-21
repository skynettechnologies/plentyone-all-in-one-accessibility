<?php

namespace AllinOneAccessibility\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class AllinOneAccessibilityRouteServiceProvider
 * @package AllinOneAccessibility\Providers
 */
class AllinOneAccessibilityRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('allinoneaccessibility','AllinOneAccessibility\Controllers\AllinOneAccessibilityController@getHelloWorldPage');
    }
}