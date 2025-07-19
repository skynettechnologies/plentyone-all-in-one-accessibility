<?php

namespace GoogleAnalytics\Providers;

use Plenty\Modules\Frontend\Session\Storage\Contracts\FrontendSessionStorageFactoryContract;
use Plenty\Plugin\Templates\Twig;


class TrackingCodeProvider
{
    public function call( Twig $twig )
    {
        return $twig->render(
            'AllinOneAccessibility::Index'
        );
    }
}