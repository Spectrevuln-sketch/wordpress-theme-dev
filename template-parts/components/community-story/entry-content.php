<?php

/**
 * Template for post entry content
 *
 * @package Ecommerce_theme
 */

$community = get_name_like('community-banner');
?>
<?php if (!empty($community)) : ?>
  <div class="row nopadding">
    <div class="col-md-6">
      <div class="block-entry" style="background-image: url(<?= get_the_post_thumbnail_url($community[0]->ID); ?>);">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="cell-view simple-banner-height middle text-center">
                <div class="empty-space col-xs-b35 col-sm-b70"></div>
                <div class="simple-article size-3 light transparent uppercase col-xs-b5">Fokus</div>
                <h2 class="h2 light">Kami</h2>
                <div class="title-underline light center"><span></span></div>
                <div class="simple-article light transparent size-4"><?= ecommerce_custom_thumbnail($community[0]->ID)->post_content; ?></div>
                <div class="empty-space col-xs-b35 col-sm-b70"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>