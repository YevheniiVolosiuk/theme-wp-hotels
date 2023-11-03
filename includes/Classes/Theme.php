<?php

declare( strict_types=1 );


namespace StarterThemeWp\STW\Classes;

use StarterThemeWp\STW\Traits\SingletonTrait;

/**
 * A Bootstrap Theme Class
 *
 * @package Starter_Theme_WP
 */
class Theme {
	use SingletonTrait;

	/**
	 * Construct
	 */
	public function __construct() {
		//		WordpressViteManifest::getInstance();

		//		Theme classes
		Assets::getInstance();

		//Load all hooks
		$this->setHooks();
	}

	private function setHooks() {
		$this->bootActions();
		$this->bootFilters();
	}

	private function bootActions() {
		add_action( 'after_setup_theme', [ $this, 'setupTheme' ] );
	}

	private function bootFilters() {
	}

	public function setupTheme() {
		add_theme_support( 'title-tag' );

		add_theme_support( 'custom-logo', [
			'header-text'          => array( 'site-title', 'site-description' ),
			'height'               => 100,
			'width'                => 400,
			'flex-height'          => true,
			'flex-width'           => true,
			'unlink-homepage-logo' => true,
		] );

	}
}
