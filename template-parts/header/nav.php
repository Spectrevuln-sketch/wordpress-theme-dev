<?php

/**
 * Header Navigation template.
 *
 * @package Ecommerce_theme
 */

$menu_class = \Ecommerce_Theme\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('ecommerce-header-menu');
$header_menus = wp_get_nav_menu_items($header_menu_id);

?>
<div id="content-block">
	<header class="scrolled">
		<div class="header-top">
			<div class="content-margins">
				<div class="row">
					<div class="col-md-5 hidden-xs hidden-sm">
						<div class="entry"><b>contact us:</b> <a href="tel:+35235551238745">081282136121</a></div>
						<div class="entry"><b>email:</b> <a href="mailto:info@sr12herbalskincare.co.id">info@sr12herbalskincare.co.id</a></div>
					</div>
					<div class="col-md-7 col-md-text-right">

						<div class="entry"><a href="https://sr12herbalskincare.co.id/member/daftar" data-rel="1"><b>daftar</b></a></div>
						<div class="entry"><a href="https://sr12herbalskincare.co.id/member/login" data-rel="1"><b>login</b></a></div>

						<div class="entry hidden-xs hidden-sm cart" id="getcart">
							<a href="javascript:;">
								<b class="hidden-xs">Your bag</b>
								<span class="cart-icon">
									<i class="fa fa-shopping-bag" aria-hidden="true"></i>
									<div>
									</div>
								</span>
								<span class="cart-title hidden-xs">
								</span>
							</a>
						</div>
						<div class="hamburger-icon">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="content-margins">
				<div class="row">
					<div class="col-xs-3 col-sm-1">
						<a id="logo" href="#">
							<?php
							if (function_exists('the_custom_logo')) {
								the_custom_logo();
							}
							?></a>
						</a>
					</div>
					<div class="col-xs-9 col-sm-11 text-right">
						<div class="nav-wrapper">
							<div class="nav-close-layer"></div>
							<nav>
								<?php
								if (!empty($header_menus) && is_array($header_menus)) {
								?>
									<ul>
										<?php
										foreach ($header_menus as $menu_item) {
											if (!$menu_item->menu_item_parent) {

												$child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
												$has_children = !empty($child_menu_items) && is_array($child_menu_items);
												$has_sub_menu_class = !empty($has_children) ? 'has-submenu' : '';

												if (!$has_children) {
										?>
													<li class="">
														<a href="<?php echo esc_url($menu_item->url); ?>">
															<?php echo esc_html($menu_item->title); ?>
														</a>
													</li>
												<?php
												} else {
												?>
													<li class="">
														<a href="<?php echo esc_url($menu_item->url); ?>">
															<?php echo esc_html($menu_item->title); ?>
														</a>
														<div class="menu-toggle"></div>
														<ul>
															<li>
																<?php
																foreach ($child_menu_items as $child_menu_item) {
																?>
																	<a href="<?php echo esc_url($child_menu_item->url); ?>">
																		<?php echo esc_html($child_menu_item->title); ?>
																	</a>
																<?php
																}
																?>
															</li>
														</ul>
													</li>
												<?php
												}
												?>
										<?php
											}
										}
										?>
									</ul>
								<?php
								}
								?>
								<div class="navigation-title">
									Navigation
									<div class="hamburger-icon active">
										<span></span>
										<span></span>
										<span></span>
									</div>
								</div>
							</nav>
						</div>
						<div class="header-bottom-icon toggle-search"><i class="fa fa-search" aria-hidden="true"></i></div>

					</div>
				</div>
				<div class="header-search-wrapper">
					<div class="header-search-content">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
									<?php get_search_form(); ?>

								</div>
							</div>
						</div>
						<div class="button-close"></div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			(function($) {

				$("#cari_produk").click(function(data) {
					//alert('test');
					var cari_produk = $("#typelg").val();
					if (cari_produk == 0) {
						alert("Tidak Ada Produk Yang Dicari");
						return false();
					} else {
						//alert(cari_produk);
						cari_produk = cari_produk.replace(/ /g, "-").replace(/!/g, "").replace(/@/g, "").replace(/#/g, "").replace(/$/g, "").replace(/%/g, "").replace(/^/g, "").replace(/&/g, "").replace(/\*/g, "").replace(/\(/g, "").replace(/\)/g, "").replace(/\,/g, "").replace(/\./g, "").replace(/\//g, "").replace(/\+/g, "").replace(/\=/g, "").replace(/\{/g, "").replace(/\}/g, "").replace(/\[/g, "").replace(/\]/g, "").replace(/\:/g, "").replace(/\;/g, "").replace(/\\/g, "").replace(/\|/g, "");
						//alert(cari_produk);

						document.location.href = "https://sr12herbalskincare.co.id/search/cariproduk/" + cari_produk.toLowerCase();
					}

				})(jQuery);

				$("#typelg").keypress(function(data) {
					//alert('test');

					if (data.which == 13) {
						//alert('test');
						var cari_produk = $("#typelg").val();
						if (cari_produk == 0) {
							alert("Tidak Ada Produk Yang Dicari");
							return false();
						} else {
							//alert(cari_produk);
							cari_produk = cari_produk.replace(/ /g, "-").replace(/!/g, "").replace(/@/g, "").replace(/#/g, "").replace(/$/g, "").replace(/%/g, "").replace(/^/g, "").replace(/&/g, "").replace(/\*/g, "").replace(/\(/g, "").replace(/\)/g, "").replace(/\,/g, "").replace(/\./g, "").replace(/\//g, "").replace(/\+/g, "").replace(/\=/g, "").replace(/\{/g, "").replace(/\}/g, "").replace(/\[/g, "").replace(/\]/g, "").replace(/\:/g, "").replace(/\;/g, "").replace(/\\/g, "").replace(/\|/g, "");
							//alert(cari_produk);

							document.location.href = "https://sr12herbalskincare.co.id/search/cariproduk/" + cari_produk.toLowerCase();
						}
					}
				});

				["LULUR REMPAH BENGKOANG", "SUNCARE LOTION", "SCRUB CREAM COFFEE", "MASSAGE OIL BULUS", "LIGHTENING BODY LOTION", "MILK KEFIR MASK", "ETAWA KEFIR MASK", "COFFEE KEFIR MASK", "COFFEE MASK", "BODY WASH", "BODY LOTION", "SUNBLOCK", "DEODORANT SPRAY", "DEODORANT SPRAY PREMIUM", "BRIGHTENING DAY CREAM", "BRIGHTENING NIGHT CREAM", "MILK CLEANSER", "GOLD SERUM", "KRASNY DAY CREAM", "KRASNY NIGHT CREAM", "KRASNY SERUM", "LIGHTENING SERUM", "REVITALIZING SERUM", "SKIN TIGHTENING CREAM", "SPOT ESSENCE DAY CREAM", "SPOT ESSENCE NIGHT CREAM", "COFFEE HERBAL SOAP", "FACIAL WASH BULUS", "FACIAL WASH MADU 100.ml", "FACIAL WASH MADU 250.ml", "FACIAL WASH COFFEE", "FACIAL WASH GREEN TEA 100.ml", "FACIAL WASH GREEN TEA 250.ml", "HONEY SOAP", "MILKY RICE SOAP", "RICE SOAP", "MICELLAR WATER", "NATURE ROSE WATER 60.ml", "NATURE ROSE WATER 100.ml", "NATURE SECRET WATER 60.ml", "NATURE SECRET WATER 100.ml", "MANJAKANI KAPSUL", "MANJAKANI PIL", "MADU HUTAN BADUY 300.gr", "MADU HUTAN BADUY 140.gr", "SALIMAH SLIM", "VICO OIL SR12 60.ml", "VICO OIL SR12 100.ml", "VICO OIL SR12 250.ml", "Vico Capsule SR12", "COMPACT POWDER NATURAL", "COMPACT POWDER SHEER PINK", "HAND GEL APPLE 60.ml", "HAND GEL APPLE 100.ml", "LIP CARE CHERRY", "LIP CARE NATURAL", "LIP CREAM SR01", "LIP CREAM SR04", "LIP CREAM SR13", "LIP MATTE CREAM CHERISH ME", "LIP MATTE CREAM NUDE BERRY", "LIP MATTE CREAM SWEET PINK", "TONER CHAMOMILLE", "SABUN BULUS"]
				var data = {
					produk: ["LULUR REMPAH BENGKOANG", "SUNCARE LOTION", "SCRUB CREAM COFFEE", "MASSAGE OIL BULUS", "LIGHTENING BODY LOTION", "MILK KEFIR MASK", "ETAWA KEFIR MASK", "COFFEE KEFIR MASK", "COFFEE MASK", "BODY WASH", "BODY LOTION", "SUNBLOCK", "DEODORANT SPRAY", "DEODORANT SPRAY PREMIUM", "BRIGHTENING DAY CREAM", "BRIGHTENING NIGHT CREAM", "MILK CLEANSER", "GOLD SERUM", "KRASNY DAY CREAM", "KRASNY NIGHT CREAM", "KRASNY SERUM", "LIGHTENING SERUM", "REVITALIZING SERUM", "SKIN TIGHTENING CREAM", "SPOT ESSENCE DAY CREAM", "SPOT ESSENCE NIGHT CREAM", "COFFEE HERBAL SOAP", "FACIAL WASH BULUS", "FACIAL WASH MADU 100.ml", "FACIAL WASH MADU 250.ml", "FACIAL WASH COFFEE", "FACIAL WASH GREEN TEA 100.ml", "FACIAL WASH GREEN TEA 250.ml", "HONEY SOAP", "MILKY RICE SOAP", "RICE SOAP", "MICELLAR WATER", "NATURE ROSE WATER 60.ml", "NATURE ROSE WATER 100.ml", "NATURE SECRET WATER 60.ml", "NATURE SECRET WATER 100.ml", "MANJAKANI KAPSUL", "MANJAKANI PIL", "MADU HUTAN BADUY 300.gr", "MADU HUTAN BADUY 140.gr", "SALIMAH SLIM", "VICO OIL SR12 60.ml", "VICO OIL SR12 100.ml", "VICO OIL SR12 250.ml", "Vico Capsule SR12", "COMPACT POWDER NATURAL", "COMPACT POWDER SHEER PINK", "HAND GEL APPLE 60.ml", "HAND GEL APPLE 100.ml", "LIP CARE CHERRY", "LIP CARE NATURAL", "LIP CREAM SR01", "LIP CREAM SR04", "LIP CREAM SR13", "LIP MATTE CREAM CHERISH ME", "LIP MATTE CREAM NUDE BERRY", "LIP MATTE CREAM SWEET PINK", "TONER CHAMOMILLE", "SABUN BULUS"]
				};

				$("#cari_produk3").click(function() {
					$('#typelg').val("");
					//$('.typeahead').typeahead('val', '');
					$('#typelg').closest('li').removeClass('active');
				});


				$('#typelg').typeahead({
					minLength: 1,
					order: "asc",
					group: true,
					groupMaxItem: 6,
					hint: true,
					//dropdownFilter: "All",
					href: "https://sr12herbalskincare.co.id/{{display}}",
					template: "{{display}}, <small><em>{{group}}</em></small>",
					source: {
						Produk: {
							data: data.produk
						}
					},
					callback: {
						onClickAfter: function(node, a, item, event) {

							$('#result-container').text('');
							//document.location.href="#";
							location.href = a;
						},
						onResult: function(node, query, obj, objCount) {

							var text = "";
							if (query !== "") {
								text = objCount + ' elements matching "' + query + '"';
							}
							$('#result-container').text(text);
						}
					},
					debug: true
				});


			});
		</script>

	</header>