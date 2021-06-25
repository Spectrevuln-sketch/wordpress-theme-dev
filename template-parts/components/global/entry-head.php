<?php

/**
 * Template for post entry Content
 *
 * @package Ecommerce_theme
 */
$jumbotron_about2 = get_name_like('about-head');
?>
<?php if (!empty($jumbotron_about2)) : ?>
  <div class="page-about-us">

    <div class="header-empty-space"></div>
    <div class="block-entry fixed-background" style="background-image: url(<?= get_the_post_thumbnail_url($jumbotron_about2[0]->ID) ?>);">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <div class="cell-view simple-banner-height text-center">
              <div class="empty-space col-xs-b35 col-sm-b70"></div>
              <h1 class="h1 light"><?= the_title(); ?></h1>
              <div class="title-underline center"><span></span></div>
              <!-- <div class="simple-article light transparent size-4">In feugiat molestie tortor a malesuada. Etiam a venenatis ipsum. Proin pharetra elit at feugiat commodo vel placerat tincidunt sapien nec</div> -->
              <div class="empty-space col-xs-b35 col-sm-b70"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>
    <div class="empty-space col-xs-b35 col-md-b70"></div>

  <?php endif; ?>