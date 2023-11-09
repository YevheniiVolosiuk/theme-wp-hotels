<?php

declare(strict_types=1);

namespace StarterThemeWp\STW\Classes;

use StarterThemeWp\STW\Traits\SingletonTrait;

class Menus
{
    use SingletonTrait;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setHooks();
    }

    /**
     * Init hooks
     *
     * @return void
     */
    private function setHooks()
    {
        $this->bootActions();
        $this->bootFilters();
    }

    /**
     * @return void
     */
    private function bootActions()
    {
        add_action('init', [$this, 'registerMenus']);
    }

    /**
     * @return void
     */
    private function bootFilters()
    {
    }

    /**
     * Register nav menu
     *
     * @return void
     */
    public function registerMenus()
    {
        register_nav_menus([
            THEME_DOMAIN . '-header-menu' => esc_html__('Header Menu', THEME_DOMAIN),
            THEME_DOMAIN . '-footer-menu' => esc_html__('Footer Menu', THEME_DOMAIN),
        ]);
    }

    /**
     * Get the menu id by menu location.
     *
     * @param string $location
     *
     * @return integer
     */
    public function get_menu_id( $location)
    {
        // Get all locations
        $locations = get_nav_menu_locations();

        // Get object id by location.
        $menu_id = ! empty($locations[$location]) ? $locations[$location] : '';

        return ! empty($menu_id) ? $menu_id : '';
    }

    /**
     * Get all child menus that has given parent menu id.
     *
     * @param array $menu_array Menu array.
     * @param integer $parent_id Parent menu id.
     *
     * @return array Child menu array.
     */
    public function get_child_menu_items( $menu_array,  $parent_id)
    {
        $child_menus = [];

        if ( ! empty($menu_array) && is_array($menu_array)) {
            foreach ($menu_array as $menu) {
                if (intval($menu->menu_item_parent) === $parent_id) {
                    array_push($child_menus, $menu);
                }
            }
        }

        return $child_menus;
    }
}
