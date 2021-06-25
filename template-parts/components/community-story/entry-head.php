<?php

/**
 * Template for post entry content
 *
 * @package Ecommerce_theme
 */

$community_section = get_name_like('community-head');
?>
<?php if (!empty($community_section)) : ?>
  <div class="community-story-<?= the_ID(); ?>">
    <div class="header-empty-space"></div>
    <div class="block-entry fixed-background" style="background-image: url(<?= get_the_post_thumbnail_url($community_section[0]->ID); ?>);">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <div class="cell-view simple-banner-height text-center">
              <div class="empty-space col-xs-b35 col-sm-b70"></div>
              <h1 class="h1 light"><?= get_the_post_thumbnail_caption($community_section[0]->ID); ?></h1>
              <div class="title-underline center"><span></span></div>
              <div class="simple-article light transparent size-4"><?= ecommerce_custom_thumbnail($community_section[0]->ID)->post_content; ?></div>
              <div class="empty-space col-xs-b35 col-sm-b70"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>