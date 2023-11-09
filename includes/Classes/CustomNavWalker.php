<?php

namespace StarterThemeWp\STW\Classes;

use Walker;

class CustomNavWalker extends Walker
{
    /**
     * What the class handles.
     *
     * @since 3.0.0
     * @var string
     *
     * @see Walker::$tree_type
     */
    public $tree_type = ['post_type', 'taxonomy', 'custom'];

    /**
     * Database fields to use.
     *
     * @since 3.0.0
     * @todo Decouple this.
     * @var string[]
     *
     * @see Walker::$db_fields
     */
    public $db_fields = [
        'parent' => 'menu_item_parent',
        'id'     => 'db_id',
    ];

    /**
     * Starts the list before the elements are added.
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int $depth Depth of menu item. Used for padding.
     * @param stdClass $args An object of wp_nav_menu() arguments.
     *
     * @see Walker::start_lvl()
     *
     * @since 3.0.0
     *
     */
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);

        // Default class.
        //$classes = ['sub-menu'];

        //Custom code
        $classes = [];
        if ($depth === 0) {
            $classes[] = 'dropdown__menu';
        }

        if ($depth > 0) {
            $classes[] = 'dropdown__submenu';
        }
        //Custom code

        /**
         * Filters the CSS class(es) applied to a menu list element.
         *
         * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
         * @param stdClass $args An object of `wp_nav_menu()` arguments.
         * @param int $depth Depth of menu item. Used for padding.
         *
         * @since 4.8.0
         *
         */
        $class_names = implode(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));

        $atts          = [];
        $atts['class'] = ! empty($class_names) ? $class_names : '';

        /**
         * Filters the HTML attributes applied to a menu list element.
         *
         * @param array $atts {
         *     The HTML attributes applied to the `<ul>` element, empty strings are ignored.
         *
         * @type string $class HTML CSS class attribute.
         * }
         *
         * @param stdClass $args An object of `wp_nav_menu()` arguments.
         * @param int $depth Depth of menu item. Used for padding.
         *
         * @since 6.3.0
         *
         */
        $atts       = apply_filters('nav_menu_submenu_attributes', $atts, $args, $depth);
        $attributes = $this->build_atts($atts);

        $output .= "{$n}{$indent}<ul{$attributes}>{$n}";
    }

    /**
     * Ends the list of after the elements are added.
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param int $depth Depth of menu item. Used for padding.
     * @param stdClass $args An object of wp_nav_menu() arguments.
     *
     * @see Walker::end_lvl()
     *
     * @since 3.0.0
     *
     */
    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);
        $output .= "$indent</ul>{$n}";
    }

    /**
     * Starts the element output.
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param WP_Post $data_object Menu item data object.
     * @param int $depth Depth of menu item. Used for padding.
     * @param stdClass $args An object of wp_nav_menu() arguments.
     * @param int $current_object_id Optional. ID of the current menu item. Default 0.
     *
     * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
     * @since 5.9.0 Renamed `$item` to `$data_object` and `$id` to `$current_object_id`
     *              to match parent class for PHP 8 named parameter support.
     *
     * @see Walker::start_el()
     *
     * @since 3.0.0
     */
    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        // Restores the more descriptive, specific name for use within this method.
        $menu_item = $data_object;

        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ($depth) ? str_repeat($t, $depth) : '';

        $classes   = empty($menu_item->classes) ? [] : (array)$menu_item->classes;
        $classes[] = 'menu-item-' . $menu_item->ID;

        /**
         * Filters the arguments for a single nav menu item.
         *
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param WP_Post $menu_item Menu item data object.
         * @param int $depth Depth of menu item. Used for padding.
         *
         * @since 4.4.0
         *
         */
        $args = apply_filters('nav_menu_item_args', $args, $menu_item, $depth);

        /**
         * Filters the CSS classes applied to a menu item's list item element.
         *
         * @param string[] $classes Array of the CSS classes that are applied to the menu item's `<li>` element.
         * @param WP_Post $menu_item The current menu item object.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param int $depth Depth of menu item. Used for padding.
         *
         * @since 3.0.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         */
        $class_names = implode(
            ' ',
            apply_filters('nav_menu_css_class', array_filter($classes), $menu_item, $args, $depth)
        );

        /**
         * Filters the ID attribute applied to a menu item's list item element.
         *
         * @param string $menu_item_id The ID attribute applied to the menu item's `<li>` element.
         * @param WP_Post $menu_item The current menu item.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param int $depth Depth of menu item. Used for padding.
         *
         * @since 3.0.1
         * @since 4.1.0 The `$depth` parameter was added.
         *
         */
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $menu_item->ID, $menu_item, $args, $depth);

        $li_atts          = [];
        $li_atts['id']    = ! empty($id) ? $id : '';
        $li_atts['class'] = ! empty($class_names) ? $class_names : '';


        //Custom code
        if ($this->has_children) {
            $li_atts['class'] = 'dropdown__item';

            if ($depth > 0) {
                $li_atts['class'] = 'dropdown__subitem';
            }
        }
        //Custom code

        /**
         * Filters the HTML attributes applied to a menu's list item element.
         *
         * @param array $li_atts {
         *     The HTML attributes applied to the menu item's `<li>` element, empty strings are ignored.
         *
         * @type string $class HTML CSS class attribute.
         * @type string $id HTML id attribute.
         * }
         *
         * @param WP_Post $menu_item The current menu item object.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param int $depth Depth of menu item. Used for padding.
         *
         * @since 6.3.0
         *
         */
        $li_atts       = apply_filters('nav_menu_item_attributes', $li_atts, $menu_item, $args, $depth);
        $li_attributes = $this->build_atts($li_atts);

        $output .= $indent . '<li' . $li_attributes . '>';

        $atts           = [];
        $atts['title']  = ! empty($menu_item->attr_title) ? $menu_item->attr_title : '';
        $atts['target'] = ! empty($menu_item->target) ? $menu_item->target : '';
        if ('_blank' === $menu_item->target && empty($menu_item->xfn)) {
            $atts['rel'] = 'noopener';
        } else {
            $atts['rel'] = $menu_item->xfn;
        }

        if ( ! empty($menu_item->url)) {
            if (get_privacy_policy_url() === $menu_item->url) {
                $atts['rel'] = empty($atts['rel']) ? 'privacy-policy' : $atts['rel'] . ' privacy-policy';
            }

            $atts['href'] = $menu_item->url;
        } else {
            $atts['href'] = '';
        }

        $atts['aria-current'] = $menu_item->current ? 'page' : '';


        //Custom code
        $atts['class'] = 'nav-linkkkkk nav__link';

        if ($depth > 0) {
            $atts['class'] = 'dropdown__sublink';
        }

        if ($this->has_children) {
            $atts['class'] = 'nav__link';
            unset($atts['href']);

            if ($depth > 0) {
                $atts['class'] = 'dropdown__sublink';
            }
        }
        //Custom code

        /**
         * Filters the HTML attributes applied to a menu item's anchor element.
         *
         * @param array $atts {
         *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
         *
         * @type string $title Title attribute.
         * @type string $target Target attribute.
         * @type string $rel The rel attribute.
         * @type string $href The href attribute.
         * @type string $aria -current The aria-current attribute.
         * }
         *
         * @param WP_Post $menu_item The current menu item object.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param int $depth Depth of menu item. Used for padding.
         *
         * @since 3.6.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         */
        $atts       = apply_filters('nav_menu_link_attributes', $atts, $menu_item, $args, $depth);
        $attributes = $this->build_atts($atts);

        /** This filter is documented in wp-includes/post-template.php */
        $title = apply_filters('the_title', $menu_item->title, $menu_item->ID);

        /**
         * Filters a menu item's title.
         *
         * @param string $title The menu item's title.
         * @param WP_Post $menu_item The current menu item object.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param int $depth Depth of menu item. Used for padding.
         *
         * @since 4.4.0
         *
         */
        $title = apply_filters('nav_menu_item_title', $title, $menu_item, $args, $depth);

        //Custom code
        if ($this->has_children) {
            $item_output = $args->before;
            $item_output .= '<div' . $attributes . '>';
            $item_output .= $args->link_before . $title . $args->link_after;
            if ($depth > 0) {
                $item_output .= '<i class="ri-add-line dropdown__add"></i>';
            }else{
                $item_output .= '<i class="ri-arrow-down-s-line dropdown__arrow"></i>';
            }
            $item_output .= '</div>';
            $item_output .= $args->after;
        } else {
            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . $title . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
        }
        //Custom code

//        $item_output = $args->before;
//        $item_output .= '<a' . $attributes . '>';
//        $item_output .= $args->link_before . $title . $args->link_after;
//        $item_output .= '</a>';
//        $item_output .= $args->after;

        /**
         * Filters a menu item's starting output.
         *
         * The menu item's starting output only includes `$args->before`, the opening `<a>`,
         * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
         * no filter for modifying the opening and closing `<li>` for a menu item.
         *
         * @param string $item_output The menu item's starting HTML output.
         * @param WP_Post $menu_item Menu item data object.
         * @param int $depth Depth of menu item. Used for padding.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         *
         * @since 3.0.0
         *
         */
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $menu_item, $depth, $args);
    }

    /**
     * Ends the element output, if needed.
     *
     * @param string $output Used to append additional content (passed by reference).
     * @param WP_Post $data_object Menu item data object. Not used.
     * @param int $depth Depth of page. Not Used.
     * @param stdClass $args An object of wp_nav_menu() arguments.
     *
     * @since 5.9.0 Renamed `$item` to `$data_object` to match parent class for PHP 8 named parameter support.
     *
     * @see Walker::end_el()
     *
     * @since 3.0.0
     */
    public function end_el(&$output, $data_object, $depth = 0, $args = null)
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $output .= "</li>{$n}";
    }

    /**
     * Builds a string of HTML attributes from an array of key/value pairs.
     * Empty values are ignored.
     *
     * @param array $atts Optional. An array of HTML attribute key/value pairs. Default empty array.
     *
     * @return string A string of HTML attributes.
     * @since 6.3.0
     *
     */
    protected function build_atts($atts = [])
    {
        $attribute_string = '';
        foreach ($atts as $attr => $value) {
            if (false !== $value && '' !== $value && is_scalar($value)) {
                $value            = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attribute_string .= ' ' . $attr . '="' . $value . '"';
            }
        }

        return $attribute_string;
    }
}
