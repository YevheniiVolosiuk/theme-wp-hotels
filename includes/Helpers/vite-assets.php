<?php

declare(strict_types=1);


// Some dev/prod mechanism would exist in your project
if ( ! function_exists('isDev')) {
    function isDev(string $entry): bool
    {
        // This method is very useful for the local server
        // if we try to access it, and by any means, didn't started Vite yet
        // it will fallback to load the production files from manifest
        // so you still navigate your site as you intended!

        static $exists = null;
        if ($exists !== null) {
            return $exists;
        }

        $handle = curl_init(STM_VITE_LOCAL_URI . $entry);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_NOBODY, true);

        curl_exec($handle);
        $error = curl_errno($handle);
        curl_close($handle);

        return $exists = ! $error;
    }
}


/**
 * JS path in the local or production environment
 *
 * @param $name
 *
 * @return string|void
 */
if ( ! function_exists('vite_src_js')) {
    function vite_src_js($name)
    {
        if (IS_TYPE === 'local') {
            /**
             * Develop mode
             */
            return STM_LOCAL_JS_URI . $name;
        } elseif (IS_TYPE === 'production') {
            /**
             *  Production mode
             */
            return STM_BUILD_JS_URI . $name;
        }
    }
}


/**
 * CSS path in the local or production environment
 *
 * @param $name
 *
 * @return string|void
 */
if ( ! function_exists('vite_src_css')) {
    function vite_src_css($name)
    {
        if (IS_TYPE === 'local') {
            /**
             * Develop mode
             */
            return STM_LOCAL_SCSS_URI . $name;
        } elseif (IS_TYPE === 'production') {
            /**
             * Production mode
             * Replace .scss with .css
             */
            $name = str_replace('.scss', '.css', $name);

            return STM_BUILD_CSS_URI . $name;
        }
    }
}


/**
 * STATIC path in the local or production environment
 *
 * @param $name
 *
 * @return string|void
 */
if ( ! function_exists('vite_src_static')) {
    function vite_src_static($name)
    {
        if (IS_TYPE === 'local') {
            /**
             * Develop mode
             */
            return STM_LOCAL_STATIC_URI . $name;
        } elseif (IS_TYPE === 'production') {
            /**
             *  Production mode
             */
            return STM_BUILD_STATIC_DIR_PATH . $name . '?ver=' . date("His");
        }
    }
}


/**
 * Path of IMAGES in local or production environment
 *
 * @param $name
 *
 * @return string|void
 */
if ( ! function_exists('vite_src_images')) {
    function vite_src_images($name)
    {
        if (IS_TYPE === 'local') {
            /**
             * Develop mode
             */
            return STM_LOCAL_IMAGES_URI . $name;
        } elseif (IS_TYPE === 'production') {
            /**
             *  Production mode
             *  If the extension is .jpg/.jpeg/.png, replace it with .webp
             */
            $name = preg_replace('/\.(jpg|jpeg|png)/', '.jpg', $name);

            return STM_BUILD_IMAGES_URI . $name;
        }
    }
}

