<?php

/**
 * Page template
 *
 * @package Ecommerce_theme
 */

$create_file = \Ecommerce_Theme\Inc\FileCreate::get_instance();
get_header();
?>

<?php
$create_file->scrap_html();
$create_file->check_page_exist(the_ID()) ?>
<h1>The Page Is Not Exist</h1>

<?php get_footer(); ?>