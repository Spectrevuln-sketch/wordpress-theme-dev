<?php

/**
 * Template for post entry content
 *
 * @package Ecommerce_theme
 */

$content1 = get_meta_key_like('global_content1');
$content2 = get_meta_key_like('global_content2');
$content3 = get_meta_key_like('about_content3');
$company = get_meta_key_like('company');
?>
<?php if (empty($content1) && empty($content2) && empty($company)) : ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        <div class="simple-article size-3 grey uppercase col-xs-b5"><?= the_title(); ?></div>
        <div class="h2"><?= get_meta_key_like('global')[0]->meta_value; ?></div>
        <div class="title-underline"><span></span></div>
        <div class="simple-article size-4 grey">Bergerak dalam bidang Distribusi Produk Herbal & Skin Care. </div>
      </div>
      <div class="col-sm-7">
        <div class="simple-article size-3">
          <p><?= get_meta_key_like('global')[0]->meta_value; ?></p>

          <p><?= get_meta_key_like('global')[0]->meta_value; ?></p>
        </div>
      </div>
    </div>
  </div>
<?php else : ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        <div class="simple-article size-3 grey uppercase col-xs-b5"><?= the_title(); ?></div>
        <div class="h2"><?= $company[0]->meta_value; ?></div>
        <div class="title-underline"><span></span></div>
        <div class="simple-article size-4 grey">Bergerak dalam bidang Distribusi Produk Herbal & Skin Care. </div>
      </div>
      <div class="col-sm-7">
        <div class="simple-article size-3">
          <p><?= $content1[0]->meta_value; ?></p>

          <p><?= $content2[0]->meta_value; ?></p>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>