<?php

namespace AllinOneAccessibility\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class AllinOneAccessibilityController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getHelloWorldPage(Twig $twig):string
    {
        return $twig->render('AllinOneAccessibility::Index');
    }
}