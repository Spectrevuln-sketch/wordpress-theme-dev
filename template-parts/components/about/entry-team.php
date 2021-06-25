<?php

/**
 * Template for post entry Team
 *
 * @package Ecommerce_theme
 */
$team_section = get_name_like('team-');
?>
<?php if ($team_section) : ?>
  <div class="empty-space col-xs-b35 col-md-b70"></div>
  <div class="empty-space col-xs-b35 col-md-b70"></div>
  <div class="container">
    <div class="text-center">
      <div class="simple-article size-3 grey uppercase col-xs-b5">our team</div>
      <div class="h2">SUSUNAN DIREKSI DAN DEWAN KOMISARIS</div>
      <div class="title-underline center"><span></span></div>
    </div>
  </div>
  <div class="empty-space col-xs-b35 col-md-b70"></div>
  <div cslass="container">
    <div class="slider-wrapper our-team-slider">
      <div class="swiper-button-prev hidden-xs hidden-sm"></div>
      <div class="swiper-button-next hidden-xs hidden-sm"></div>
      <div class="swiper-container" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lt-slides="4" data-slides-per-view="4">
        <div class="swiper-wrapper">
          <?php foreach ($team_section as $team) : ?>
            <div class="swiper-slide">
              <div class="product-shortcode style-9">
                <div class="preview">
                  <?php
                  the_post_custom_thumbnail(
                    $team->ID,
                    'featured-thumbnail',
                    [
                      'sizes' => '(max-width: 350px) 100px, 33px',
                      'class' => 'w-50  mx-auto',
                      'style' => 'height:20em;'

                    ]
                  );
                  ?>
                </div>
                <div class="content">
                  <div class="title">
                    <div class="simple-article size-1 uppercase color col-xs-b5"><?php the_post_thumbnail_caption($team->ID); ?></div>
                    <div class="h6"><?php get_alt_text_thumbnail($team->ID); ?></div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <div class="swiper-pagination relative-pagination visible-xs visible-sm"></div>
        </div>
      </div>
    </div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>
  <?php endif; ?>