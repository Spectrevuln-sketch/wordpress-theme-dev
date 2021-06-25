<?php

/**
 * Theme Functions.
 *
 * @package Ecommerce_theme
 */


if (!defined('ECOMMERCE_DIR_PATH')) {
	define('ECOMMERCE_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('ECOMMERCE_DIR_URI')) {
	define('ECOMMERCE_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('ECOMMERCE_BUILD_URI')) {
	define('ECOMMERCE_BUILD_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build');
}

if (!defined('ECOMMERCE_BUILD_PATH')) {
	define('ECOMMERCE_BUILD_PATH', untrailingslashit(get_template_directory()) . '/assets/build');
}

if (!defined('ECOMMERCE_BUILD_JS_URI')) {
	define('ECOMMERCE_BUILD_JS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/js');
}

if (!defined('ECOMMERCE_BUILD_JS_DIR_PATH')) {
	define('ECOMMERCE_BUILD_JS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/build/js');
}

if (!defined('ECOMMERCE_BUILD_IMG_URI')) {
	define('ECOMMERCE_BUILD_IMG_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/src/img');
}

if (!defined('ECOMMERCE_BUILD_CSS_URI')) {
	define('ECOMMERCE_BUILD_CSS_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/css');
}

if (!defined('ECOMMERCE_BUILD_CSS_DIR_PATH')) {
	define('ECOMMERCE_BUILD_CSS_DIR_PATH', untrailingslashit(get_template_directory()) . '/assets/build/css');
}

if (!defined('ECOMMERCE_BUILD_LIB_URI')) {
	define('ECOMMERCE_BUILD_LIB_URI', untrailingslashit(get_template_directory_uri()) . '/assets/build/library');
}
error_reporting(E_ALL & E_STRICT);
require_once ECOMMERCE_DIR_PATH . '/inc/helpers/autoloader.php';
require_once ECOMMERCE_DIR_PATH . '/inc/helpers/template-tags.php';

function ECOMMERCE_get_theme_instance()
{
	\ECOMMERCE_THEME\Inc\ECOMMERCE_THEME::get_instance();
}

ECOMMERCE_get_theme_instance();
