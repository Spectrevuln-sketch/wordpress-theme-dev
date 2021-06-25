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
      </div>
    </div>
  </div>


<?php endif; ?>