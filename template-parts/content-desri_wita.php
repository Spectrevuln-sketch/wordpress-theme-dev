<?php

/**
 *  Page about-us template
 *
 * @package Ecommerce_theme
 */
get_header();
$meta_alamat = get_meta_key_like('page_nama_alamat');
$meta_tel = get_meta_key_like('page_nama_kontak');
$get_meta = get_meta_by_post_id(get_the_ID(), 'page_nama_');
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
    <tbody>
      <tr>
        <td width="15%">Foto</td>
        <td>
          <a class="img-popup" href="https://sr12herbalskincare.co.id/gambar/member/foto202007171412_sr12.jfif">
            <img src="https://sr12herbalskincare.co.id/gambar/member/foto202007171412_sr12.jfif" width="100">
          </a>
        </td>
      </tr>
      <?php
      $nama = str_replace('_', ' ', get_the_title());
      ?>
      <tr>
        <td>Nama</td>
        <td><b class="text-capitalize"><?= $nama; ?></b></td>
      </tr>
      <?php
      foreach ($get_meta as $meta) :
        $prefix_title = explode('page_nama_', $meta->meta_key);
      ?>
        <tr>
          <td><?= $prefix_title[1]; ?></td>
          <td><b><?= $meta->meta_value; ?></b></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<div class="empty-space col-xs-b35 col-md-b70"></div><!-- FOOTER -->



<?php get_footer(); ?>