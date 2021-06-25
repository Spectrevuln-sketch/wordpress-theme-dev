<?php

/**
 *  Page about-us template
 *
 * @package Ecommerce_theme
 */
get_header();
$iframe = get_meta_key_like('gmaps_url');
?>

<?php if (!empty($iframe)) : ?>
  <div class="container">
    <div class="map-wrapper">
      <iframe src="<?= $iframe[0]->meta_value; ?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="addresses-block hidden">
      <a class="marker" data-lat="34.0151244" data-lng="-118.4729871" data-string="1. Here is some address or email or phone or something else..."></a>
    </div>
  </div>
  <div class="empty-space col-xs-b25 col-sm-b50"></div>

<?php endif; ?>