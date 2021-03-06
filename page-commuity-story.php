<?php 

    /**
     *  Page commuity-story template
     *
     * @package Ecommerce_theme
     */
    $file_create = \Ecommerce_Theme\Inc\FileCreate::get_instance();
    get_header();
    // $path_file = ECOMMERCE_DIR_PATH . "/template-parts/content-commuity-story.php";
      // $file_create->create_file_template(the_ID(), "https://sr12herbalskincare.co.id/contact");
    ?>
    <div id="primary">
      <main id="main" class="site-main mt-5" role="main">
        <div class="home-page-wrap">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
    
              get_template_part("template-parts/content", "commuity-story");
    
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
    ?>