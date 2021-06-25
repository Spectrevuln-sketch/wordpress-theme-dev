<?php

/**
 * Template for post entry content section
 *
 * @package Ecommerce_theme
 */

$community_swiper = get_meta_key_like('community-content');
foreach ($community_swiper as $com_swiper) {
  $post_id = $com_swiper->post_id;
}
$get_com_swiper = get_post_meta($post_id);

?>


<div class="container mt-5">
  <div class="text-center">
    <div class="simple-article size-3 grey uppercase col-xs-b5">Bagaimana Cara </div>
    <div class="h2">menjadi tim member sr12 herbalskincare </div>
    <div class="title-underline center"><span></span></div>
  </div>
</div>

<div class="empty-space col-sm-b15 col-md-b50"></div>


<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="icon-description-shortcode style-1">
        <img class="icon-image" src="https://sr12herbalskincare.co.id/gambar/registrasicommunity/icon-22.png" alt="">
        <div class="title h6"><?= $get_com_swiper['community-content-title'][0]; ?></div>
        <div class="description simple-article size-2"><?= $get_com_swiper['community-content-desc'][0]; ?></div>
      </div>
      <div class="empty-space col-xs-b40"></div>
    </div>
    <div class="col-sm-4">
      <div class="icon-description-shortcode style-1">
        <img class="icon-image" src="https://sr12herbalskincare.co.id/gambar/registrasicommunity/icon-23.png" alt="">
        <div class="title h6"><?= $get_com_swiper['community-content-title'][1]; ?></div>
        <div class="description simple-article size-2"><?= $get_com_swiper['community-content-desc'][1]; ?></div>
      </div>
      <div class="empty-space col-xs-b40"></div>
    </div>
    <div class="col-sm-4">
      <div class="icon-description-shortcode style-1">
        <img class="icon-image" src="https://sr12herbalskincare.co.id/gambar/registrasicommunity/icon-24.png" alt="">
        <div class="title h6"><?= $get_com_swiper['community-content-title'][2]; ?></div>
        <div class="description simple-article size-2"><?= $get_com_swiper['community-content-desc'][2]; ?></div>
      </div>
      <div class="empty-space col-xs-b40"></div>
    </div>
    <div class="col-sm-4">
      <div class="icon-description-shortcode style-1">
        <img class="icon-image" src="https://sr12herbalskincare.co.id/gambar/registrasicommunity/icon-25.png" alt="">
        <div class="title h6"><?= $get_com_swiper['community-content-title'][3]; ?></div>
        <div class="description simple-article size-2"><?= $get_com_swiper['community-content-desc'][3]; ?></div>
      </div>
      <div class="empty-space col-xs-b40"></div>
    </div>
    <div class="col-sm-4">
      <div class="icon-description-shortcode style-1">
        <img class="icon-image" src="https://sr12herbalskincare.co.id/gambar/registrasicommunity/icon-26.png" alt="">
        <div class="title h6"><?= $get_com_swiper['community-content-title'][4]; ?></div>
        <div class="description simple-article size-2"><?= $get_com_swiper['community-content-desc'][4]; ?></div>
      </div>
      <div class="empty-space col-xs-b40"></div>
    </div>
    <div class="col-sm-4">
      <div class="icon-description-shortcode style-1">
        <img class="icon-image" src="https://sr12herbalskincare.co.id/gambar/registrasicommunity/icon-27.png" alt="">
        <div class="title h6"><?= $get_com_swiper['community-content-title'][5]; ?></div>
        <div class="description simple-article size-2"><?= $get_com_swiper['community-content-desc'][5]; ?></div>
      </div>
      <div class="empty-space col-xs-b40"></div>
    </div>

  </div>

</div>

<div class="empty-space col-sm-b15 col-md-b50"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>