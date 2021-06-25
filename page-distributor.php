<?php

/**
 *  Page mitra template
 *
 * @package Ecommerce_theme
 */
get_header();
?>
<div id="primary">
  <main id="main" class="site-main mt-5" role="main">
    <div class="home-page-wrap">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();

          get_template_part("template-parts/content", "distributor");

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