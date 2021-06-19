<?php

/**
 * Header template.
 *
 * @package Ecommerce_theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<style type="text/css">
		.holder {
			margin: 15px 0;
		}

		.holder a {
			font-size: 12px;
			cursor: pointer;
			margin: 0 5px;
			color: #0088cc;
			background-color: white;
			border: solid 1px #dddddd;
			padding: 10px;
		}

		.holder a:hover {
			background-color: #dddddd;
			color: black;
			text-decoration: none;
		}

		.holder a.jp-current,
		a.jp-current:hover {
			color: #0088cc;
			font-weight: bold;
			cursor: default;
			background: white;
		}

		.holder span {
			margin: 0 5px;
		}

		.customBtns {
			position: relative;
		}

		.arrowPrev,
		.arrowNext {
			width: 29px;
			height: 29px;
			position: absolute;
			top: 55px;
			cursor: pointer;
		}

		.arrowPrev {
			background-image: url('img/back.gif');
			left: -45px;
		}

		.arrowNext {
			background-image: url('img/next.gif');
			right: -40px;
		}

		.arrowPrev.jp-disabled,
		.arrowNext.jp-disabled {
			display: none;
		}
	</style>
	<!-- pagination -->

	<style>
		.typeahead,
		.tt-query,
		.tt-hint {
			border: 2px solid #CCCCCC;
			border-radius: 8px;
			height: 25px;
			line-height: 25px;
			outline: medium none;
			padding: 8px 12px;
			width: 260px;
		}

		.typeahead {
			background-color: #FFFFFF;
		}

		.typeahead:focus {
			border: 2px solid #0097CF;
		}

		.tt-query {
			box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
		}

		.tt-hint {
			color: #999999;
		}

		.tt-dropdown-menu {
			background-color: #FFFFFF;
			border: 1px solid rgba(0, 0, 0, 0.2);
			border-radius: 8px;
			box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
			margin-top: 8px;
			padding: 8px 0;
			width: 200px;
		}

		.tt-suggestion {

			padding: 3px 20px;
		}

		.tt-suggestion.tt-is-under-cursor {
			background-color: #0097CF;
			color: #FFFFFF;
		}

		.tt-suggestion p {
			margin: 0;
		}

		@media screen and(max-width: 400px) {
			.mobile {

				display: none !important;
				visibility: hidden !important;
			}

		}
	</style>
	<!-- typehead -->
	<style>
		.my-custom-scrollbar {
			position: relative;
			height: 200px;
			overflow: auto;
		}

		.table-wrapper-scroll-y {
			display: block;
		}
	</style>

	<style type="text/css" media="screen">
		.spinner {
			-webkit-animation: rotator 1.4s linear infinite;
			animation: rotator 1.4s linear infinite;
		}

		@-webkit-keyframes rotator {
			0% {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg);
			}

			100% {
				-webkit-transform: rotate(270deg);
				transform: rotate(270deg);
			}
		}

		@keyframes rotator {
			0% {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg);
			}

			100% {
				-webkit-transform: rotate(270deg);
				transform: rotate(270deg);
			}
		}

		.path {
			stroke-dasharray: 187;
			stroke-dashoffset: 0;
			-webkit-transform-origin: center;
			-ms-transform-origin: center;
			transform-origin: center;
			-webkit-animation: dash 1.4s ease-in-out infinite, colors 5.6s ease-in-out infinite;
			animation: dash 1.4s ease-in-out infinite, colors 5.6s ease-in-out infinite;
		}

		@-webkit-keyframes colors {
			0% {
				stroke: #4285F4;
			}

			25% {
				stroke: #DE3E35;
			}

			50% {
				stroke: #F7C223;
			}

			75% {
				stroke: #1B9A59;
			}

			100% {
				stroke: #4285F4;
			}
		}

		@keyframes colors {
			0% {
				stroke: #4285F4;
			}

			25% {
				stroke: #DE3E35;
			}

			50% {
				stroke: #F7C223;
			}

			75% {
				stroke: #1B9A59;
			}

			100% {
				stroke: #4285F4;
			}
		}

		@-webkit-keyframes dash {
			0% {
				stroke-dashoffset: 187;
			}

			50% {
				stroke-dashoffset: 46.75;
				-webkit-transform: rotate(135deg);
				transform: rotate(135deg);
			}

			100% {
				stroke-dashoffset: 187;
				-webkit-transform: rotate(450deg);
				transform: rotate(450deg);
			}
		}

		@keyframes dash {
			0% {
				stroke-dashoffset: 187;
			}

			50% {
				stroke-dashoffset: 46.75;
				-webkit-transform: rotate(135deg);
				transform: rotate(135deg);
			}

			100% {
				stroke-dashoffset: 187;
				-webkit-transform: rotate(450deg);
				transform: rotate(450deg);
			}
		}
	</style>


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

			});

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


		})(jQuery);
	</script>

	<body>

		<?php
		if (function_exists('wp_body_open')) {
			wp_body_open();
		}
		?>

		<div id="page" class="site">
			<header id="masthead" class="site-header" role="banner">
				<?php get_template_part('template-parts/header/nav'); ?>
			</header>
			<div id="content" class="site-content">