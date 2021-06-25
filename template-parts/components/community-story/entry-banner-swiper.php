<?php

/**
 * Template for post entry content section
 *
 * @package Ecommerce_theme
 */

$community_banner_swiper = get_name_like('community-swiper-banner');

?>


<?php if (!empty($community_banner_swiper)) : ?>
  <div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class=" swiper-slide" style="width: 1022px;">
        <div class="block-entry" style="background-image: url(<?= get_the_post_thumbnail_url($community_banner_swiper[0]->ID); ?>);">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="cell-view simple-banner-height big">
                  <div class="empty-space col-xs-b35 col-sm-b70"></div>
                  <div data-swiper-parallax-x="-600" style="transform: translate3d(0px, 0px, 0px);">
                    <h2 class="h1 light"><?= get_the_post_thumbnail_caption($community_banner_swiper[0]->ID); ?></h2>
                    <div class="title-underline light"><span></span></div>
                  </div>
                  <div data-swiper-parallax-x="-400" style="transform: translate3d(0px, 0px, 0px);">
                    <div class="simple-article light size-4"><?= ecommerce_custom_thumbnail($community_banner_swiper[0]->ID)->post_content; ?></div>
                  </div>
                  <div class="empty-space col-xs-b70"></div>
                </div>
              </div>
            </div>
            <div class="row-background right hidden-xs">
              <img src="https://sr12herbalskincare.co.id/gambar/testimoni/background-19.png" alt="" data-swiper-parallax-x="-600" style="transform: translate3d(0px, 0px, 0px);">
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" style="width: 1022px;">
        <div class="block-entry" style="background-image: url(<?= get_the_post_thumbnail_url($community_banner_swiper[1]->ID); ?>);">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="cell-view simple-banner-height big">
                  <div class="empty-space col-xs-b35 col-sm-b70"></div>
                  <div data-swiper-parallax-x="-600" style="transform: translate3d(0px, 0px, 0px);">
                    <h2 class="h1 light"><?= get_the_post_thumbnail_caption($community_banner_swiper[1]->ID); ?></h2>
                    <div class="title-underline light"><span></span></div>
                  </div>
                  <div data-swiper-parallax-x="-400" style="transform: translate3d(0px, 0px, 0px);">
                    <div class="simple-article light size-4"><?= ecommerce_custom_thumbnail($community_banner_swiper[1]->ID)->post_content; ?></div>
                  </div>
                  <div class="empty-space col-xs-b70"></div>
                </div>
              </div>
            </div>
            <div class="row-background right hidden-xs">
              <img src="https://sr12herbalskincare.co.id/gambar/testimoni/background-13.png" alt="" data-swiper-parallax-x="-600" style="transform: translate3d(600px, 0px, 0px);">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>


<?php endif; ?>