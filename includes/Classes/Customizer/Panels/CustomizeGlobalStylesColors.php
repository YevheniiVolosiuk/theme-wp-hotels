<?php

declare(strict_types=1);

namespace StarterThemeWp\STW\Classes\Customizer\Panels;


use StarterThemeWp\STW\Traits\SingletonTrait;
use WP_Customize_Color_Control;
use WP_Customize_Manager;

/**
 * One of the customize panels "Theme Colors", responsible for the global colors of the theme.
 */

class CustomizeGlobalStylesColors
{
    use SingletonTrait;

    private string $sectionKey = 'customize-global-styles-colors';

    private array $colorControls;

    public function __construct()
    {
        /**
         * Add here more Control Colors if you need
         */
        $this->setColorControls();

        include_once STM_DIR_PATH . '/includes/Helpers/colors-palette.php';

        add_action('customize_register', [$this, 'initialize']);
        add_action('wp_enqueue_scripts', [$this, 'outputCss']);
    }

    public function initialize(WP_Customize_Manager $wpCustomize): void
    {
        $this->setUpSections(manager: $wpCustomize);
        $this->setUpSettings(manager: $wpCustomize, options: $this->colorControls);
        $this->setUpControls(manager: $wpCustomize, options: $this->colorControls);
    }

    private function setUpSections(WP_Customize_Manager $manager): void
    {
        $manager->add_section(id: $this->sectionKey, args: [
            'title'    => __('Theme Colors', THEME_DOMAIN),
            'priority' => 30,
        ]);
    }

    private function setUpSettings(WP_Customize_Manager $manager, array $options): void
    {
        foreach ($options as $key => $value) {
            $manager->add_setting(id: $key, args: [
                'default'           => $value['default_color'],
                'sanitize_callback' => 'sanitize_hex_color',
            ]);
        }
    }

    private function setUpControls(WP_Customize_Manager $manager, array $options): void
    {
        foreach ($options as $key => $value) {
            $manager->add_control(
                id: new WP_Customize_Color_Control(manager: $manager, id: $key, args: [
                    'label'   => $value['label'],
                    'section' => $this->sectionKey,
                ])
            );
        }
    }

    public function outputCss(): void
    {
        wp_add_inline_style(handle: 'main-style', data: getCustomizerThemeColorPaletteCss());
    }

    public function setColorControls(): void
    {
        $this->colorControls = [
            'text_primary_color'       => [
                'label'         => __('Text Primary Color', THEME_DOMAIN),
                'default_color' => '#1b3b36',
            ],
            'text_secondary_color'     => [
                'label'         => __('Text Secondary Color', THEME_DOMAIN),
                'default_color' => '#fffcf6',
            ],
            'background_primary_color' => [
                'label'         => __('Background Primary Color', THEME_DOMAIN),
                'default_color' => '#313F38',
            ],

            'background_secondary_color' =>
                [
                    'label'         => __('Background Secondary Color', THEME_DOMAIN),
                    'default_color' => '#fffcf6',
                ],

            'border_primary_color' =>
                [
                    'label'         => __('Border Primary Color', THEME_DOMAIN),
                    'default_color' => '#313F38',
                ],

            'border_secondary_color' => [
                'label'         => __('Border Secondary Color', THEME_DOMAIN),
                'default_color' => '#fffcf6',
            ],
        ];
    }
}
