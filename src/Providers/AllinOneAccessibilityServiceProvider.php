<?php

namespace AllinOneAccessibility\Providers;

use Plenty\Plugin\ServiceProvider;
use IO\Helper\TemplateContainer;
use IO\Helper\ResourceContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\Templates\Twig;

use IO\Extensions\Functions\Partial;


use Plenty\Modules\Frontend\Session\Storage\Contracts\FrontendSessionStorageFactoryContract;
use Plenty\Modules\Order\Events\OrderCreated;
use Plenty\Modules\Webshop\Consent\Contracts\ConsentRepositoryContract;
use Plenty\Plugin\ConfigRepository;

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
        // $this->getApplication()->register(AllinOneAccessibilityRouteServiceProvider::class);

              /** @var ConsentRepositoryContract $consentRepository */
              
        $consentRepository = pluginApp(ConsentRepositoryContract::class);
        $consentRepository->registerConsent(
            'AllinOneAccessibility',
            'AllinOneAccessibility::AllinOneAccessibility.consentLabel',
            function() {
                /** @var ConfigRepository $config */
                $config = pluginApp(ConfigRepository::class);
                return  [];
            }
        );
    }

 /**
     * Boot a template for the basket that will be displayed in the template plugin instead of the original basket.
     */
    // public function boot(Twig $twig, Dispatcher $eventDispatcher)
    // {
    //     $eventDispatcher->listen('IO.Resources.Import', function (ResourceContainer $container)
    //     {
    //         // The style is imported in the <head> on the PageDesign.twig of plentyShop LTS
    //         $container->addStyleTemplate('AllinOneAccessibility::Index');
    //     }, self::PRIORITY);
    // }

        public function boot(Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.init.templates', function (Partial $partial) {
            $partial->set('header', 'AllinOneAccessibility::Index');
        }, self::PRIORITY);
    }
}