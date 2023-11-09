<?php

declare(strict_types=1);


namespace StarterThemeWp\STW\Classes;

use StarterThemeWp\STW\Traits\SingletonTrait;

class DisableSnippets
{
    use SingletonTrait;

    /**
     * Constructor
     */
    public function __construct()
    {
        /**
         * Init Snippets
         */

        $this->disableCompletelyComments();
        $this->disableAutomaticUpdatesInWP();
        $this->disableEmojis();

        add_filter('wp_default_scripts', [$this, 'disableJqueryMigrate']);

        /**
         * Clean up the navigation classes and id's
         */
        add_filter('nav_menu_item_id', [$this, 'clearNavMenuItemId'], 10, 3);
        add_filter('nav_menu_css_class', [$this, 'clearNavMenuItemClass'], 10, 3);

        /**
         * Disable WordPress Admin Bar for all users in the frontend
         */
        add_filter( 'show_admin_bar', '__return_false' );

        /**
         * On sites running WordPress 3.5+, disable XML-RPC completely.
         * Disable XMLRPC. More of a security feature than a performance one.
         */
        add_filter('xmlrpc_enabled', '__return_false');
    }

    /**
     * @return void
     */
    private function disableCompletelyComments()
    {
        add_action('admin_init', function () {
            // Redirect any user trying to access comments page
            global $pagenow;

            if ($pagenow === 'edit-comments.php') {
                wp_safe_redirect(admin_url());
                exit;
            }

            // Remove comments metabox from dashboard
            remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

            // Disable support for comments and trackbacks in post types
            foreach (get_post_types() as $post_type) {
                if (post_type_supports($post_type, 'comments')) {
                    remove_post_type_support($post_type, 'comments');
                    remove_post_type_support($post_type, 'trackbacks');
                }
            }
        });

        // Close comments on the front-end
        add_filter('comments_open', '__return_false', 20, 2);
        add_filter('pings_open', '__return_false', 20, 2);

        // Hide existing comments
        add_filter('comments_array', '__return_empty_array', 10, 2);

        // Remove comments page in menu
        add_action('admin_menu', function () {
            remove_menu_page('edit-comments.php');
        });

        // Remove comments links from admin bar
        add_action('admin_bar_menu', function () {
            remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
        }, 0);
    }

    /**
     * Disable the emojis in WordPress.
     *
     * @return void
     */
    private function disableEmojis()
    {
        add_action('init', function () {
            remove_action('wp_head', 'print_emoji_detection_script', 7);
            remove_action('admin_print_scripts', 'print_emoji_detection_script');
            remove_action('wp_print_styles', 'print_emoji_styles');
            remove_action('admin_print_styles', 'print_emoji_styles');
            remove_filter('the_content_feed', 'wp_staticize_emoji');
            remove_filter('comment_text_rss', 'wp_staticize_emoji');
            remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

            // Remove from TinyMCE.
            add_filter('tiny_mce_plugins', function ($plugins) {
                if (is_array($plugins)) {
                    return array_diff($plugins, ['wpemoji']);
                } else {
                    return [];
                }
            });

            // Remove from dns-prefetch.
            add_filter('wp_resource_hints', function ($urls, $relation_type) {
                if ('dns-prefetch' === $relation_type) {
                    $emoji_svg_url = apply_filters('emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/');
                    $urls          = array_diff($urls, [$emoji_svg_url]);
                }

                return $urls;
            }, 10, 2);
        });
    }

    /**
     * Remove the ID from the menu item
     *
     * @param $id
     * @param $item
     * @param $args
     *
     * @return string
     */
    public function clearNavMenuItemId($id, $item, $args)
    {
        return "";
    }

    /**
     * Remove the class from the menu item
     *
     * @param $classes
     * @param $item
     * @param $args
     *
     * @return array
     */
    public function clearNavMenuItemClass($classes, $item, $args)
    {
        return [];
    }

    /**
     * Completely disable automatic updates on your website.
     *
     * @return void
     */
    private function disableAutomaticUpdatesInWP()
    {
        // Disable core auto-updates
        add_filter('auto_update_core', '__return_false');
        // Disable auto-updates for plugins.
        add_filter('auto_update_plugin', '__return_false');
        //Disable auto-updates for themes.
        add_filter('auto_update_theme', '__return_false');
    }

    /**
     * Dequeue jQuery Migrate
     *
     * @param $scripts
     *
     * @return void
     */
    public function disableJqueryMigrate(&$scripts)
    {
        if ( ! is_admin()) {
            $scripts->remove('jquery');
            $scripts->add('jquery', false, ['jquery-core'], '1.10.2');
        }
    }
}
