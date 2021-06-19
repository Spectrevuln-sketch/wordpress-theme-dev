<?php

/**
 * Create New File Page
 *
 * @package Ecommerce_theme
 */



namespace ECOMMERCE_THEME\Inc;

use ECOMMERCE_THEME\Inc\Traits\Singleton;

class FileCreate
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
  }

  public function create_file_template($id, $url = '')
  {
    $get_last_page = get_post($id);
    $slug = $get_last_page->post_name;
    $path_file = ECOMMERCE_DIR_PATH . '/template-parts/content-' . $slug . '.php';
    if (!file_exists($path_file) && !is_home() && !is_single()) {
      $html_data = file_get_contents($url);
      $fp = fopen($path_file, 'w');
      fwrite(
        $fp,
        '<?php
      /**
      *  Page about-us template
      *
      * @package Ecommerce_theme
      */
      get_header();                                                         
      ?>
      <div class="page-' . $slug . '">
      ' . $html_data . '
      </div>
      
      
   <?php get_footer(); ?>      
      '
      );
      fclose($fp);
    } else {
      echo "Page Already Exists";
    }
  }

  /* Auto Create New File When Create New Page */
  public function create_file_page($slug_url)
  {

    $fp = fopen(ECOMMERCE_DIR_PATH . '/page-' . $slug_url . '.php', 'w');
    fwrite(
      $fp,
      '<?php 

    /**
     *  Page ' . $slug_url . ' template
     *
     * @package Ecommerce_theme
     */
    $file_create = \Ecommerce_Theme\Inc\FileCreate::get_instance();
    get_header();
    // $path_file = ECOMMERCE_DIR_PATH . "/template-parts/content-' . $slug_url . '.php";
      // $file_create->create_file_template(the_ID(), "https://sr12herbalskincare.co.id/distributor/area");
    ?>
    <div id="primary">
      <main id="main" class="site-main mt-5" role="main">
        <div class="home-page-wrap">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
    
              get_template_part("template-parts/content", "' . $slug_url . '");
    
            endwhile;
          ?>
          <?php
    
          else :
    
            get_template_part("template-parts/content-none");
          ?>
          <?php endif; ?>
        </div>
      </main>
    </div>
    <?php
    get_footer();
    ?>'
    );

    fclose($fp);
  }
  /* End Auto Create New File When Create New Page */
  public function check_page_exist($id)
  {
    // $arg_lastes_post = ['post_type' => 'page',  'order' => 'DESC', 'posts_per_page' => 1];
    $get_last_page = get_post($id);
    $slug = $get_last_page->post_name;

    $filename = ECOMMERCE_DIR_PATH . '/page-' . $slug . '.php';
    if (file_exists($filename) && is_home() && is_single()) {
      return false;
    } else {
      return $this->create_file_page($slug);
    }
  }

  /* Delete After Finish The Project Scrape all Links To Json File */
  public function scrap_html()
  {
    $html = file_get_contents("https://api.hackertarget.com/pagelinks/?q=sr12herbalskincare.co.id");
    $text_file = ECOMMERCE_DIR_PATH . '/skincare_enmuration.txt';

    // this is probably what you're trying to do
    file_put_contents($text_file, $html);

    if (file_exists($text_file)) {
      $json_file = ECOMMERCE_DIR_PATH . '/skincare_enmuration.json';
      $conents_arr   = file($text_file, FILE_IGNORE_NEW_LINES);
      foreach ($conents_arr as $key => $value) {
        $conents_arr[$key]  = rtrim($value, "\r");
      }
      $json_contents = json_encode($conents_arr);
      file_put_contents($json_file, $json_contents);
      echo "Success :  has been made";
    } else {
      echo "Failure:  does not exist";
    }
  }
  /* End Scrape all Links To Json File */
}
