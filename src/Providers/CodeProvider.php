<?php

namespace AllinOneAccessibility\Providers;

use Plenty\Modules\Frontend\Session\Storage\Contracts\FrontendSessionStorageFactoryContract;
use Plenty\Plugin\Templates\Twig;


class PurchaseEventCodeProvider
{
    public function call( Twig $twig )
    {
        /** @var FrontendSessionStorageFactoryContract $sessionStorage */
        $sessionStorage = pluginApp(FrontendSessionStorageFactoryContract::class);
        return $twig->render(
            'AllinOneAccessibility::Index',
        );
    }
}