<?php

declare(strict_types=1);


namespace StarterThemeWp\STW\Classes;

abstract class BaseClass
{
    /**
     * Constructor
     */
    public function __construct() {
        $this->setHooks();
    }

    /**
     * Init hooks
     *
     * @return void
     */
    private function setHooks() {
        $this->bootActions();
        $this->bootFilters();
    }

    /**
     * @return void
     */
    private function bootActions() {
    }

    /**
     * @return void
     */
    private function bootFilters() {
    }
}
