<?php

/**
 *  Page parts contact
 *
 * @package Ecommerce_theme
 */
get_header();
$address1 = get_meta_key_like('contact-section1');
$address2 = get_meta_key_like('contact-section2');
$address3 = get_meta_key_like('contact-section3');
$icon = get_meta_key_like('contact-icon');
?>

<?php if (!empty($address1) && !empty($address2)) : ?>
  <div class="container">
    <div class="text-center">
      <div class="simple-article size-3 grey uppercase col-xs-b5">our contacts</div>
      <div class="h2">we ready for your questions</div>
      <div class="title-underline center"><span></span></div>
    </div>
  </div>

  <div class="empty-space col-sm-b15 col-md-b50"></div>

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="icon-description-shortcode style-1">
          <img class="icon" src="https://sr12herbalskincare.co.id/style/img/icon-25.png" alt="">
          <div class="title h6">address</div>
          <div class="description simple-article size-2"><?= $address1[0]->meta_value; ?></div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="icon-description-shortcode style-1">
          <img class="icon" src="https://sr12herbalskincare.co.id/style/img/icon-23.png" alt="">
          <div class="title h6">phone</div>
          <div class="description simple-article size-2" style="line-height: 26px;">
            <a href="tel:<?= $address2[0]->meta_value; ?>"><?= $address2[0]->meta_value; ?></a>
            <br />
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="icon-description-shortcode style-1">
          <img class="icon" src="https://sr12herbalskincare.co.id/style/img/icon-28.png" alt="">
          <div class="title h6">email</div>
          <div class="description simple-article size-2"><a href="mailto:info@sr12herbalskincare.co.id"><?= $address3[0]->meta_value; ?></a></div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="icon-description-shortcode style-1">
          <img class="icon" src="https://sr12herbalskincare.co.id/style/img/icon-26.png" alt="">
          <div class="title h6">Follow us</div>
          <div class="follow light">
            <?php foreach ($icon as $ic) : ?>
              <a class="entry" href="#"><i class="<?= $ic->meta_value; ?>"></i></a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="empty-space col-xs-b25 col-sm-b50"></div>
<?php endif; ?>