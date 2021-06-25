<?php

/**
 * Template for post entry header
 *
 * @package Ecommerce_theme
 */


?>
<div class="page-product">
	<div class="header-empty-space"></div>
	<div class="container">
		<div class="empty-space col-xs-b15 col-sm-b30"></div>
		<div class="breadcrumbs">
			<a href="https://sr12herbalskincare.co.id/">home</a>
			<a href="javascript:;">products</a>
		</div>
		<div class="empty-space col-xs-b15 col-sm-b50 col-md-b50"></div>
		<div class="row">
			<div class="col-md-9 col-md-push-3">

				<div class="align-inline spacing-1 hidden-xs">
					<a class="pagination toggle-products-view active"><img src="https://sr12herbalskincare.co.id/style/img/icon-14.png" alt="" /><img src="https://sr12herbalskincare.co.id/style/img/icon-15.png" alt="" /></a>
					<a class="pagination toggle-products-view"><img src="https://sr12herbalskincare.co.id/style/img/icon-16.png" alt="" /><img src="https://sr12herbalskincare.co.id/style/img/icon-17.png" alt="" /></a>
				</div>
				<div class="align-inline spacing-1">
					<div class="pager">
						<div class="holder"></div>
					</div>
				</div>
				<div class="align-inline spacing-1 filtration-cell-width-1">
					<select class="SlectBox small" id="productsort">
						<option disabled="disabled" selected="selected">Product Sort</option>
						<option value="1">Sort A-Z</option>
						<option value="2">Sort Z-A</option>
					</select>
				</div>

				<script type="text/javascript">
					(function($) {

						$("#productsort").change(function() {

							var productsort = $("#productsort").val();

							if (productsort == '1') {
								$.LoadingOverlay("show");
								document.location.href = "https://sr12herbalskincare.co.id/products/sortaz";
							} else if (productsort == '2') {
								$.LoadingOverlay("show");
								document.location.href = "https://sr12herbalskincare.co.id/products/sortza";
							} else {
								$.LoadingOverlay("s how");
								document.location.href = "https://sr12herbalskincare.co.id/products/sortaz";
							}

						});
					})(jQuery);
				</script>

				<div class="empty-space col-xs-b25 col-sm-b30"></div>

				<div class="products-content">
					<div class="products-wrapper">
						<div class="row nopadding" id="itemContainer">