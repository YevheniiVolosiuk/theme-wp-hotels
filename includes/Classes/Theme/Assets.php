<?php

declare(strict_types=1);


namespace StarterThemeWp\STW\Classes\Theme;

use StarterThemeWp\STW\Traits\SingletonTrait;

class Assets
{
    use SingletonTrait;

    public function __construct()
    {
        //TODO create trait Vite class and make static helper functions
        require_once STM_DIR_PATH . '/includes/Helpers/vite-assets.php';
        //TODO create Vite class and make static helper functions

        $this->setHooks();
    }

    /**
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
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
    }

    /**
     * @return void
     */
    private function bootFilters()
    {
        add_filter('script_loader_tag', [$this, 'modifyScriptTag'], 10, 3);
    }

    /**
     * @return void
     * //TODO lifetime make version for file with out  warning in WP.
     */
    public function register_styles()
    {
        wp_enqueue_style('main-style', vite_src_css('main.scss'), [], '1.0.0', 'all');
    }

    /**
     * @return void
     *
     * //TODO lifetime make version for file with out  warning in WP.
     */
    public function register_scripts()
    {
        wp_enqueue_script('main-js', vite_src_js('main.js'), [], '1.0.0', true);

        if (is_front_page()) {
            wp_enqueue_script('front-page', vite_src_js('pages/front-page.js'), [], '1.0.0', true);
        }

        if (is_page('contact')) {
            //wp_enqueue_script('contact-page-map-api', esc_url('https://maps.googleapis.com/maps/api/js'), [], '1.0.0', false);
            //wp_enqueue_script('contact-page-map', vite_src_js('pages/page-contact.js'), [], '1.0.0', false);
        }
    }

    /**
     * Change the script tag by adding type="module" & crossorigin and return it.
     *
     * @param $tag
     * @param $handle
     * @param $src
     *
     * @return mixed|string
     */
    public function modifyScriptTag($tag, $handle, $src)
    {
        switch ($handle) {
            case 'front-page':
            case 'main-js':
                $tag = '<script type="module" crossorigin  src="' . esc_url($src) . '" id="' . esc_attr(
                        $handle
                    ) . '"></script>' . PHP_EOL;
                break;
            default:
                $tag = '<script type="text/javascript"  src="' . esc_url($src) . '" id="' . esc_attr(
                        $handle
                    ) . '"></script>' . PHP_EOL;;
                break;
        }

        return $tag;
    }
}
