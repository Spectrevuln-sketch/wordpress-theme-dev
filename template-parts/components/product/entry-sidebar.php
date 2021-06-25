<?php

/**
 * Template for post entry header
 *
 * @package Ecommerce_theme
 */

$the_post_id   = get_the_ID();
$hide_title    = get_post_meta($the_post_id, '_hide_page_title', true);
$heading_class = (!empty($hide_title) && 'yes' === $hide_title) ? 'hide d-none' : '';

$has_post_thumbnail = get_the_post_thumbnail($the_post_id);

?>



<!-- popup -->
</div>
</div>
</div>
<div class="empty-space col-xs-b35 col-sm-b0"></div>

<div class="align-inline spacing-1 hidden-xs">
  <a class="pagination toggle-products-view active"><img src="https://sr12herbalskincare.co.id/style/img/icon-14.png" alt="" /><img src="https://sr12herbalskincare.co.id/style/img/icon-15.png" alt="" /></a>
  <a class="pagination toggle-products-view"><img src="https://sr12herbalskincare.co.id/style/img/icon-16.png" alt="" /><img src="https://sr12herbalskincare.co.id/style/img/icon-17.png" alt="" /></a>
</div>
<div class="align-inline spacing-1">
  <div class="pager">
    <div class="holder"></div>
  </div>
</div>
<!-- <div class="row">
      <div class="col-sm-3 hidden-xs">
      <a class="button size-1 style-5" href="#">
      <span class="button-wrapper">
      <span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
      <span class="text">prev page</span>
    </span>
  </a>
</div>
<div class="col-sm-6 text-center">
<div class="pagination-wrapper">
<a class="pagination active">1</a>
<a class="pagination">2</a>
<a class="pagination">3</a>
<a class="pagination">4</a>
<span class="pagination">...</span>
<a class="pagination">23</a>
</div>
</div>
<div class="col-sm-3 hidden-xs text-right">
<a class="button size-1 style-5" href="#">
<span class="button-wrapper">
<span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
<span class="text">prev page</span>
</span>
</a>
</div>
</div> -->

<div class="empty-space col-xs-b35 col-md-b70"></div>
<div class="empty-space col-md-b70"></div>
</div>
<div class="col-md-3 col-md-pull-9">
  <div class="h4 col-xs-b10">popular categories</div>
  <ul class="categories-menu transparent">
    <li><a href="acne-series">ACNE SERIES</a></li>
    <li><a href="body-care">BODY CARE</a></li>
    <li><a href="face-care">FACE CARE</a></li>
    <li><a href="face-wash">FACE WASH</a></li>
    <li><a href="herbal">HERBAL</a></li>
    <li><a href="personal-care">PERSONAL CARE</a></li>
    <li><a href="face-mask">FACE MASK</a></li>
  </ul>

  <div class="empty-space col-xs-b25 col-sm-b50"></div>

  <!-- <div class="h4 col-xs-b25">Price</div>
<div id="prices-range"></div>
<div class="simple-article size-1">PRICE: <b class="grey">Rp<span class="min-price">0</span> - Rp<span class="max-price">1000000</span></b></div> -->

  <div class="empty-space col-xs-b25 col-sm-b50"></div>

  <!--   <div class="h4 col-xs-b25">Brands</div>
<label class="checkbox-entry">
<input type="checkbox"><span>LG</span>
</label>
<div class="empty-space col-xs-b10"></div>
<label class="checkbox-entry">
<input type="checkbox"><span>SAMSUNG</span>
</label>
<div class="empty-space col-xs-b10"></div>
<label class="checkbox-entry">
<input type="checkbox"><span>Apple</span>
</label>
<div class="empty-space col-xs-b10"></div>
<label class="checkbox-entry">
<input type="checkbox"><span>HTC</span>
</label>
<div class="empty-space col-xs-b10"></div>
<label class="checkbox-entry">
<input type="checkbox"><span>Google</span>
</label>

<div class="empty-space col-xs-b25 col-sm-b50"></div>

<div class="h4 col-xs-b25">Choose Color</div>
<div class="color-selection size-1">
<div class="entry active" style="color: #a7f050;"></div>
<div class="entry" style="color: #50e3f0;"></div>
<div class="entry" style="color: #eee;"></div>
<div class="entry" style="color: #4d900c;"></div>
<div class="entry" style="color: #edb82c;"></div>
<div class="entry" style="color: #7d3f99;"></div>
<div class="entry" style="color: #3481c7;"></div>
<div class="entry" style="color: #bf584b;"></div>
</div>

<div class="empty-space col-xs-b25 col-sm-b50"></div>

<div class="h4 col-xs-b25">Operation System</div>
<label class="checkbox-entry">
<input type="checkbox"><span>Android</span>
</label>
<div class="empty-space col-xs-b10"></div>
<label class="checkbox-entry">
<input type="checkbox"><span>IOS</span>
</label>
<div class="empty-space col-xs-b10"></div>
<label class="checkbox-entry">
<input type="checkbox"><span>Windows Phone</span>
</label>
<div class="empty-space col-xs-b10"></div>
<label class="checkbox-entry">
<input type="checkbox"><span>Symbian</span>
</label>
<div class="empty-space col-xs-b10"></div>
<label class="checkbox-entry">
<input type="checkbox"><span>Blackberry OS</span>
</label>

<div class="empty-space col-xs-b25 col-sm-b50"></div> -->

  <!-- <div class="h4 col-xs-b25">Popular Tags</div>
<div class="tags light clearfix">
<a class="tag">headphoness</a>
<a class="tag">accessories</a>
<a class="tag">new</a>
<a class="tag">wireless</a>
<a class="tag">cables</a>
<a class="tag">devices</a>
<a class="tag">gadgets</a>
<a class="tag">brands</a>
<a class="tag">replacements</a>
<a class="tag">cases</a>
<a class="tag">cables</a>
<a class="tag">professional</a>
</div> -->

  <div class="empty-space col-xs-b25 col-sm-b50"></div>


</div>
</div>
</div>

<div class="empty-space col-xs-b15 col-sm-b45"></div>