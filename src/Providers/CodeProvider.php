<?php

namespace AllinOneAccessibility\Providers;

use Plenty\Modules\Frontend\Session\Storage\Contracts\FrontendSessionStorageFactoryContract;
use Plenty\Plugin\Templates\Twig;


class CodeProvider
{
    public function call( Twig $twig )
    {
        return $twig->render('AllinOneAccessibility::Index',);
    }
}