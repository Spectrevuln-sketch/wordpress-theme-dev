<?php

/**
 * Enqueue theme assets
 *
 * @package Ecommerce_theme
 */

namespace ECOMMERCE_THEME\Inc;

use ECOMMERCE_THEME\Inc\Traits\Singleton;

class Assets
{
	use Singleton;

	protected function __construct()
	{

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks()
	{

		/**
		 * Actions.
		 */
		add_action('wp_enqueue_scripts', [$this, 'register_styles']);
		add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
		/**
		 * The 'enqueue_block_assets' hook includes styles and scripts both in editor and frontend,
		 * except when is_admin() is used to include them conditionally
		 */
		add_action('enqueue_block_assets', [$this, 'enqueue_editor_assets']);
	}

	public function register_styles()
	{
		// Register styles.
		wp_register_style('bootstrap-css', ECOMMERCE_BUILD_LIB_URI . '/css/bootstrap.min.css', [], false, 'all');
		wp_register_style('bootstrapmin-css', ECOMMERCE_BUILD_CSS_URI . '/bootstrap.min.css', [], false, 'all');
		wp_register_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', [], false, 'all');
		wp_register_style('slick-css', ECOMMERCE_BUILD_LIB_URI . '/css/slick.css', [], false, 'all');
		wp_register_style('slick-theme-css', ECOMMERCE_BUILD_LIB_URI . '/css/slick-theme.css', ['slick-css'], false, 'all');
		wp_register_style('main-css', ECOMMERCE_BUILD_CSS_URI . '/main.css', ['bootstrap-css'], filemtime(ECOMMERCE_BUILD_CSS_DIR_PATH . '/main.css'), 'all');
		// wp_register_style('home-css', ECOMMERCE_BUILD_CSS_URI . '/home.css', [], filemtime(ECOMMERCE_BUILD_CSS_DIR_PATH . '/home.css'), 'all');
		wp_register_style('style-custom-css', ECOMMERCE_BUILD_CSS_URI . '/style-custom.css', [], filemtime(ECOMMERCE_BUILD_CSS_DIR_PATH . '/style-custom.css'), 'all');
		wp_register_style('custom-css', ECOMMERCE_BUILD_CSS_URI . '/custom.css', [], filemtime(ECOMMERCE_BUILD_CSS_DIR_PATH . '/custom.css'), 'all');
		wp_register_style('front-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', [], filemtime(ECOMMERCE_BUILD_CSS_DIR_PATH . '/font-awesome.min.css'), 'all');
		wp_register_style('typeahead-css', ECOMMERCE_BUILD_CSS_URI . '/jquery.typeahead.css', [], filemtime(ECOMMERCE_BUILD_CSS_DIR_PATH . '/jquery.typeahead.css'), 'all');
		wp_register_style('sumoselect-css', ECOMMERCE_BUILD_CSS_URI . '/sumoselect.css', [], filemtime(ECOMMERCE_BUILD_CSS_DIR_PATH . '/sumoselect.css'), 'all');
		wp_register_style('swiper-css', ECOMMERCE_BUILD_CSS_URI . '/swiper.css', [], filemtime(ECOMMERCE_BUILD_CSS_DIR_PATH . '/swiper.css'), 'all');
		wp_register_style('bootstrap-extension-css', ECOMMERCE_BUILD_CSS_URI . '/bootstrap.extension.css', [], filemtime(ECOMMERCE_BUILD_CSS_DIR_PATH . '/bootstrap.extension.css'), 'all');

		// Enqueue Styles.
		wp_enqueue_style('bootstrap-css');
		wp_enqueue_style('bootstrapmin-css');
		wp_enqueue_style('bootstrap-css');
		wp_enqueue_style('slick-css');
		wp_enqueue_style('slick-theme-css');
		wp_enqueue_style('main-css');
		wp_enqueue_style('home-css');
		wp_enqueue_style('style-custom-css');
		wp_enqueue_style('custom-css');
		wp_enqueue_style('front-awesome-css');
		wp_enqueue_style('typeahead-css');
		wp_enqueue_style('sumoselect-css');
		wp_enqueue_style('swiper-css');
		wp_enqueue_style('bootstrap-extension-css');
	}

	public function register_scripts()
	{
		// Register scripts.
		wp_register_script('slick-js', ECOMMERCE_BUILD_LIB_URI . '/js/slick.min.js', ['jquery'], false, true);
		wp_register_script('main-js', ECOMMERCE_BUILD_JS_URI . '/main.js', ['jquery', 'slick-js'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/main.js'), true);
		wp_register_script('bootstrap-js', ECOMMERCE_BUILD_LIB_URI . '/js/bootstrap.min.js', ['jquery'], false, true);
		wp_register_script('home-js', ECOMMERCE_BUILD_JS_URI . '/home.js', ['jquery'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/home.js'), true);
		wp_register_script('tabifier-js', ECOMMERCE_BUILD_JS_URI . '/tabifier.js', ['jquery'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/tabifier.js'), true);
		wp_register_script('swiper-js', ECOMMERCE_BUILD_JS_URI . '/swiper.jquery.min.js', ['jquery'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/swiper.jquery.min.js'), true);
		wp_register_script('loadingoverlay_progress-js', ECOMMERCE_BUILD_JS_URI . '/loadingoverlay_progress.min.js', ['jquery'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/loadingoverlay_progress.min.js'), true);
		wp_register_script('loadingoverlay-js', ECOMMERCE_BUILD_JS_URI . '/loadingoverlay.min.js', ['jquery'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/loadingoverlay.min.js'), true);
		wp_register_script('js-js', ECOMMERCE_BUILD_JS_URI . '/js.js', ['jquery'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/js.js'), true);
		wp_register_script('typeahead-js', ECOMMERCE_BUILD_JS_URI . '/jquery.typeahead.js', ['jquery'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/jquery.typeahead.js'), true);
		wp_register_script('throttle-js', ECOMMERCE_BUILD_JS_URI . '/jquery.throttle.js', ['jquery'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/jquery.throttle.js'), true);
		wp_register_script('sumoselect-js', ECOMMERCE_BUILD_JS_URI . '/jquery.sumoselect.min.js', ['jquery'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/jquery.sumoselect.min.js'), true);
		wp_register_script('knob-js', ECOMMERCE_BUILD_JS_URI . '/jquery.knob.js', ['jquery'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/jquery.knob.js'), true);
		wp_register_script('classycountdown-js', ECOMMERCE_BUILD_JS_URI . '/jquery.classycountdown.js', ['jquery'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/jquery.classycountdown.js'), true);
		wp_register_script('jPages-js', ECOMMERCE_BUILD_JS_URI . '/jPages.js', ['jquery'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/jPages.js'), true);
		wp_register_script('global-js', ECOMMERCE_BUILD_JS_URI . '/global.js', ['jquery'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/global.js'), true);
		wp_register_script('highlight-js', ECOMMERCE_BUILD_JS_URI . '/highlight.pack.js', ['jquery'], filemtime(ECOMMERCE_BUILD_JS_DIR_PATH . '/highlight.pack.js'), true);

		// Enqueue Scripts.
		wp_enqueue_script('main-js');
		wp_enqueue_script('bootstrap-js');
		wp_enqueue_script('slick-js');
		wp_enqueue_script('home-js');
		wp_enqueue_script('tabifier-js');
		wp_enqueue_script('swiper-js');
		wp_enqueue_script('loadingoverlay_progress-js');
		wp_enqueue_script('loadingoverlay-js');
		wp_enqueue_script('js-js');
		wp_enqueue_script('typeahead-js');
		wp_enqueue_script('throttle-js');
		wp_enqueue_script('sumoselect-js');
		wp_enqueue_script('knob-js');
		wp_enqueue_script('classycountdown-js');
		wp_enqueue_script('jPages-js');
		wp_enqueue_script('global-js');
		wp_enqueue_script('highlight-js');
	}

	/**
	 * Enqueue editor scripts and styles.
	 */
	public function enqueue_editor_assets()
	{

		$asset_config_file = sprintf('%s/assets.php', ECOMMERCE_BUILD_PATH);

		if (!file_exists($asset_config_file)) {
			return;
		}

		$asset_config = require_once $asset_config_file;

		if (empty($asset_config['js/editor.js'])) {
			return;
		}

		$editor_asset    = $asset_config['js/editor.js'];
		$js_dependencies = (!empty($editor_asset['dependencies'])) ? $editor_asset['dependencies'] : [];
		$version         = (!empty($editor_asset['version'])) ? $editor_asset['version'] : filemtime($asset_config_file);

		// Theme Gutenberg blocks JS.
		if (is_admin()) {
			wp_enqueue_script(
				'ecommerce-blocks-js',
				ECOMMERCE_BUILD_JS_URI . '/blocks.js',
				$js_dependencies,
				$version,
				true
			);
		}

		// Theme Gutenberg blocks CSS.
		$css_dependencies = [
			'wp-block-library-theme',
			'wp-block-library',
		];

		wp_enqueue_style(
			'ecommerce-blocks-css',
			ECOMMERCE_BUILD_CSS_URI . '/blocks.css',
			$css_dependencies,
			filemtime(ECOMMERCE_BUILD_CSS_DIR_PATH . '/blocks.css'),
			'all'
		);
	}
}
