<?php

/**
 *  Page about-us template
 *
 * @package Ecommerce_theme
 */
get_header();
$meta_tag = get_meta_by_post_id(get_the_ID(), "distributor_name_" . get_the_title() . "");
?>



<div class="header-empty-space"></div>
<div class="container">
  <div class="empty-space col-xs-b15 col-sm-b30"></div>
  <div class="breadcrumbs">
    <a href="<?= get_home_url(); ?>">home</a>
    <a href="<?= get_page_link(); ?>">distributor area</a>
  </div>

  <div class="text-center">
    <div class="h2">List Distributor</div>
    <div class="title-underline center"><span></span></div>
  </div>
</div>

<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 5%;">No</th>
        <th>Nama</th>
        <th>Detail Distributor</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 1;
      foreach ($meta_tag as $provice) :
        $lower = strtolower($provice->meta_value);
        $page_article = str_replace(' ', '_', $lower);
      ?>
        <tr>
          <td><?= $i++; ?></td>
          <td>
            <h6 class="h6"><?= $provice->meta_value; ?>
          </td>
          <td>
            <div>
              <a class="button size-2 style-2" href="<?= esc_url(home_url() . "/$page_article"); ?>">
                <span class="button-wrapper">
                  <span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
                  <span class="text">Detail Distributor </span>
                </span>
              </a>
            </div>
          </td>
        </tr>
      <?php endforeach; ?>


    </tbody>
  </table>
</div>

<div class="empty-space col-xs-b35 col-md-b70"></div><!-- FOOTER -->



<?php get_footer(); ?>