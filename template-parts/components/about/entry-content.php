<?php

/**
 * Template for post entry Content
 *
 * @package Ecommerce_theme
 */
$content1 = get_meta_key_like('about_content1');
$content2 = get_meta_key_like('about_content2');
$content3 = get_meta_key_like('about_content3');
$company = get_meta_key_like('company');
?>
<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-xs-b35 col-md-b70"></div>

<div class="container">
  <div class="row">
    <div class="col-sm-5">
      <div class="simple-article size-3 grey uppercase col-xs-b5"><?= the_title(); ?></div>
      <div class="h2"><?= $company[0]->meta_value; ?></div>
      <div class="title-underline left"><span></span></div>
    </div>
    <div class="col-sm-7">
      <div class="simple-article size-3">
        <p><?= $content1[0]->meta_value; ?></p>

        <p><?= $content2[0]->meta_value; ?></p>

        <p><?= $content3[0]->meta_value; ?></p>
      </div>
    </div>
  </div>
</div>