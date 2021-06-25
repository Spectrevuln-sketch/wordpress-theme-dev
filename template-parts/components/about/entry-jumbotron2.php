<?php

/**
 * Template for post entry Misi
 *
 * @package Ecommerce_theme
 */
$jumbotron_about2 = get_name_like('jumbotron2');
$peapole_section = get_name_like('team-');
?>
<?php if (!empty($jumbotron_about2)) : ?>
  <div class="empty-space col-xs-b35 col-md-b70"></div>
  <div class="block-entry" style="background-image: url(<?= get_the_post_thumbnail_url($jumbotron_about2[0]->ID); ?>);">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-6">
          <div class="cell-view simple-banner-height">
            <div class="empty-space col-xs-b35"></div>
            <h2 class="h2 light"><?= get_the_post_thumbnail_caption($jumbotron_about2[0]->ID); ?></h2>
            <div class="title-underline light"><span></span></div>
            <div class="simple-article light size-4 col-xs-b20"><?= ecommerce_custom_thumbnail($jumbotron_about2[0]->ID)->post_content; ?></div>
            <div class="empty-space col-xs-b35"></div>
          </div>
        </div>
      </div>
      <div class="row-background big left hidden-xs">
        <?php
        the_post_custom_thumbnail(
          $peapole_section[0]->ID,
          'featured-thumbnail'
        );
        ?>
        <!-- <img src="" alt="" /> -->
      </div>
    </div>
  </div>
<?php endif; ?>