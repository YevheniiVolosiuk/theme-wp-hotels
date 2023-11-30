<?php

declare( strict_types=1 );

/**
 * Theme Entry Point.
 *
 * @package Starter_Theme_WP
 */

require_once __DIR__ . '/includes/Helpers/variables.php';

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

function initThemeInstance() {
	\StarterThemeWp\STW\Classes\Theme\Theme::getInstance();
}

initThemeInstance();
