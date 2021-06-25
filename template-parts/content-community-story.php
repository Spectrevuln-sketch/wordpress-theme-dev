<?php

/**
 *  Page about-us template
 *
 * @package Ecommerce_theme
 */
get_header();
?>
<!-- Head -->
<?php get_template_part('template-parts/components/community-story/entry-head'); ?>
<!-- End Head -->
<!-- Content -->
<?php get_template_part('template-parts/components/community-story/entry-content'); ?>
<!-- End Content -->
<!-- Content Section -->
<?php get_template_part('template-parts/components/community-story/entry-content-section'); ?>
<!-- End Content Section -->
<!-- Content  swaper -->
<?php get_template_part('template-parts/components/community-story/entry-swiper'); ?>
<!-- End Content  swaper -->

<!-- Content  swaper -->
<?php get_template_part('template-parts/components/community-story/entry-banner-swiper'); ?>
<!-- End Content  swaper -->
<!-- footer global -->
<?php get_template_part('template-parts/components/global/entry-footer'); ?>
<!-- end footer global -->

<?php get_footer(); ?>