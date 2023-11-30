<?php

declare(strict_types=1);


namespace StarterThemeWp\STW\Classes\Customizer;

use StarterThemeWp\STW\Classes\Customizer\Panels\ColorSection;
use StarterThemeWp\STW\Classes\Customizer\Panels\CustomizeGlobalStylesColors;
use StarterThemeWp\STW\Traits\SingletonTrait;

class ThemeCustomizer
{
    use SingletonTrait;

    /**
     * Constructor method.
     */
    public function __construct()
    {
        /**
         * Sections
         */
//        ColorSection::getInstance();

        CustomizeGlobalStylesColors::getInstance();

    }
}
