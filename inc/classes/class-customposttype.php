<?php

/**
 * Register Custom Post Type
 *
 * @package Ecommerce_theme
 */



namespace ECOMMERCE_THEME\Inc;

use ECOMMERCE_THEME\Inc\Traits\Singleton;

class CustomPostType
{
  use Singleton;
  /**
   * Construct method.
   */
  protected function __construct()
  {
    $this->setup_hooks();
  }

  /**
   * To register action/filter.
   *
   * @return void
   */
  protected function setup_hooks()
  {

    /**
     * Filter
     * Actions
     */
    add_action('init', [$this, 'register_post_type']);
    add_action('admin_menu', [$this, 'add_submenu_CPT']);
    add_action('admin_menu', [$this, 'add_submenu_text_CPT']);
  }

  public function register_post_type()
  {
    $args =  [
      'labels' => [
        'name' => __('Product Category CPT'),
        'singular_name' => __('Product Category CPT'),
      ],
      'menu_icon' => 'dashicons-cart',
      'public' => true
    ];

    register_post_type('product-category', $args);

    add_post_type_support('product-category', [
      'thumbnail',
      'custom-fields',
      'page-attributes',
      'title'
    ]);
  }

  public function add_submenu_CPT()
  {
    $args =  [
      'labels' => [
        'name' => __('Banner Image'),
        'singular_name' => __('Banner Image'),
      ],
      'menu_icon' => 'dashicons-cart',
      'public' => true
    ];
    add_post_type_support('banner-image', [
      'thumbnail',
      'custom-fields',
      'page-attributes',
      'title'
    ]);
    add_submenu_page('edit.php?post_type=product-category', 'Banner', 'Banner', 'administrator', 'edit.php?post_type=banner-image');
    register_post_type('banner-image', $args);
  }

  public function add_submenu_text_CPT()
  {
    $args =  [
      'labels' => [
        'name' => __('Content Paragraph'),
        'singular_name' => __('Content Paragraph'),
      ],
      'menu_icon' => 'dashicons-cart',
      'public' => true
    ];
    add_post_type_support('content-paragraph', [
      'editor',
      'post-formats',
      'page-attributes',
      'custom-fields',
      'title'
    ]);
    add_submenu_page('edit.php?post_type=product-category', 'Paragraph Content', 'Paragraph Content', 'administrator', 'edit.php?post_type=content-paragraph');
    register_post_type('content-paragraph', $args);
  }
}
