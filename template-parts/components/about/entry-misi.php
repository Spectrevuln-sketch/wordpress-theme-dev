<?php

/**
 * Template for post entry Misi
 *
 * @package Ecommerce_theme
 */
$sections = get_name_like('sec');
?>
<?php if (!empty($sections)) : ?>
  <div class="empty-space col-xs-b35 col-md-b70"></div>
  <div class="container">
    <div class="text-center">
      <div class="simple-article size-3 grey uppercase col-xs-b5">MISI</div>
      <div class="h2">KAMI</div>
      <div class="title-underline center"><span></span></div>
    </div>
  </div>
  <div class="empty-space col-xs-b35 col-md-b70"></div>
  <div class="container">
    <div class="slider-wrapper">
      <div class="swiper-button-prev hidden"></div>
      <div class="swiper-button-next hidden"></div>
      <div class="swiper-container" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lt-slides="3" data-slides-per-view="3" data-space="30">
        <div class="swiper-wrapper">
          <?php foreach ($sections as $section) : ?>
            <div class="swiper-slide">
              <div class="icon-description-shortcode style-2">
                <?php
                the_post_custom_thumbnail(
                  $section->ID,
                  'featured-thumbnail',
                  [
                    'class' => 'image-icon image-thumbnail rounded-image',
                    'style' => 'height:20em;'

                  ]
                );
                ?>
                <div class="content">
                  <h6 class="title h6"><?= get_post(get_post_thumbnail_id($section->ID))->post_content; ?></h6>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
        <div class="swiper-pagination relative-pagination"></div>
      </div>
    </div>
  </div>
<?php endif; ?>