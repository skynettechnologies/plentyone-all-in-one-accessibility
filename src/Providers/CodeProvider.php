<?php

namespace AllinOneAccessibility\Providers;

use Plenty\Plugin\Templates\Twig;

class CodeProvider
{
    public function call( Twig $twig )
    {
        return $twig->render('AllinOneAccessibility::Code');
    }
}