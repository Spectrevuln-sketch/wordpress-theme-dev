<?php

/**
 *  Page bali template
 *
 * @package Ecommerce_theme
 */
$file_create = \Ecommerce_Theme\Inc\FileCreate::get_instance();
get_header();
$path_file = ECOMMERCE_DIR_PATH . "/template-parts/content-distributor_list_bali.php";
if (!file_exists($path_file)) {

  return check_page_by_API("bali", the_ID());
}
?>
<div id="primary">
  <main id="main" class="site-main mt-5" role="main">
    <div class="home-page-wrap">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();

          get_template_part("template-parts/content", "distributor_list_bali");

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