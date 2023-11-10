<?php

declare(strict_types=1);

/**
 * Variables
 */


if ( ! defined('IS_TYPE')) {
    // Returns local in local environment, production in production environment
    define('IS_TYPE', wp_get_environment_type());
}
if ( ! defined('IS_TYPE_LOCAL')) {
    define('IS_TYPE_LOCAL', IS_TYPE === 'local');
}

if ( ! defined('IS_TYPE_PRODUCTION')) {
    define('IS_TYPE_PRODUCTION', IS_TYPE === 'production');
}

if ( ! defined('VITE_SERVER')) {
    define('VITE_SERVER', 'http://localhost:3000');
}


/**
 * Root path of Project
 */
if ( ! defined('STM_DIR_PATH')) {
    define('STM_DIR_PATH', untrailingslashit(get_template_directory()));
}

if ( ! defined('STM_DIR_URI')) {
    define('STM_DIR_URI', untrailingslashit(get_template_directory_uri()));
}


/**
 * Path to Dist Folder
 */
if ( ! defined('STM_VITE_LOCAL_URI')) {
    define('STM_VITE_LOCAL_URI', VITE_SERVER . '/assets');
}

if (IS_TYPE_LOCAL){
    if ( ! defined('STM_BUILD_URI')) {
        define('STM_BUILD_URI', STM_DIR_URI . '/dist/assets');
    }

    if ( ! defined('STM_BUILD_PATH')) {
        define('STM_BUILD_PATH', STM_DIR_PATH . '/dist/assets');
    }
}

if(IS_TYPE_PRODUCTION){
    if ( ! defined('STM_BUILD_URI')) {
        define('STM_BUILD_URI', STM_DIR_URI . '/assets');
    }

    if ( ! defined('STM_BUILD_PATH')) {
        define('STM_BUILD_PATH', STM_DIR_PATH . '/assets');
    }
}

/**
 * Build Assets Paths & Uri
 */
if ( ! defined('STM_LOCAL_JS_URI')) {
	define( 'STM_LOCAL_JS_URI', STM_VITE_LOCAL_URI . '/js/' );
}

if ( ! defined('STM_BUILD_JS_URI')) {
    define('STM_BUILD_JS_URI', STM_BUILD_URI . '/js/');
}

if ( ! defined('STM_BUILD_JS_DIR_PATH')) {
    define('STM_BUILD_JS_DIR_PATH', STM_BUILD_PATH . '/js/');
}

if ( ! defined('STM_LOCAL_SCSS_URI')) {
    define('STM_LOCAL_SCSS_URI', STM_VITE_LOCAL_URI . '/scss/');
}

if ( ! defined('STM_BUILD_CSS_URI')) {
    define('STM_BUILD_CSS_URI', STM_BUILD_URI . '/css/');
}

if ( ! defined('STM_BUILD_CSS_DIR_PATH')) {
    define('STM_BUILD_CSS_DIR_PATH', STM_BUILD_PATH . '/css/');
}


/**
 * Root Static Folder
 */
if ( ! defined('STM_LOCAL_IMAGES_URI')) {
    define('STM_LOCAL_IMAGES_URI', VITE_SERVER . '/static/images/');
}

if ( ! defined('STM_BUILD_IMAGES_URI')) {
    define('STM_BUILD_IMAGES_URI', STM_DIR_URI . '/static/images/');
}

if ( ! defined('STM_BUILD_IMAGES_DIR_PATH')) {
    define('STM_BUILD_IMAGES_DIR_PATH', STM_DIR_PATH . '/static/images/');
}

if ( ! defined('STM_LOCAL_STATIC_URI')) {
    define('STM_LOCAL_STATIC_URI', VITE_SERVER . '/static/');
}

if ( ! defined('STM_BUILD_STATIC_DIR_PATH')) {
    define('STM_BUILD_STATIC_DIR_PATH', STM_DIR_URI . '/static/');
}


if ( ! defined('STM_BUILD_LIB_URI')) {
    define('STM_BUILD_LIB_URI', STM_DIR_PATH . '/library/');
}

//define( 'URL_FAVICON', STM_LOCAL_STATIC_URI . 'favicon.ico' );
//define( 'URL_TOUCH_ICON', STM_LOCAL_STATIC_URI . 'apple-touch-icon.png' );

