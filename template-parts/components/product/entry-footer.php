<?php

/**
 * Template for entry footer.
 *
 * To be used inside of WordPress The Loop.
 *
 * @package Ecommerce_theme
 */

$the_post_id   = get_the_ID();
$article_terms = wp_get_post_terms($the_post_id, ['category', 'post_tag']);
?>


<script type="text/javascript" charset="utf-8">
	function createValidator(element) {
		return function() {
			var maximal = '1000';
			var min = parseInt(element.getAttribute("min")) || 1;
			var max = parseInt(element.getAttribute("max")) || maximal;

			var value = parseInt(element.value) || min;
			element.value = value; // make sure we got an int

			if (value < min) element.value = min;
			if (value > max) element.value = max;
		}
	}

	var elm = $("#product-vqty3PRO100070");
	//elm.onkeyup = createValidator(elm);

	$(document).ready(function() {
		$("#product-vqty3PRO100070").keypress(function(data) {
			if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
				return false;
			}
		});

		$("#product-vqty3PRO100070").keyup(function(data) {
			var qty = $("#product-vqty3PRO100070").val();
			var maximal = '1000';
			var min = $("#product-vqty3PRO100070").attr("min");
			var max = $("#product-vqty3PRO100070").attr("max");

			var value = parseInt(qty);
			if (value < min) {
				$("#product-vqty3PRO100070").val(min);
			} else if (value > max) {
				$("#product-vqty3PRO100070").val(max);
			} else {
				$("#product-vqty3PRO100070").val(qty);
			}
			//alert(empty(value));
		});
	});
</script>
</div>
</div>
<div class="row m5 col-xs-b40">
	<div class="col-sm-6 col-xs-b10 col-sm-b0">
		<a class="button size-2 style-2 block" href="https://sr12herbalskincare.co.id/member/login/sabun-bulus">
			<span class="button-wrapper">
				<span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-2.png" alt=""></span>
				<span class="text">add to cart</span>
			</span>
		</a>
	</div>

	<!-- javascript -->
	<script type="text/javascript">
		$(document).ready(function() {

			var x = document.getElementById("snackbar");

			$("#qtyPRO100070").keypress(function(data) {
				if (data.which != 8 && data.which != 0 && (data.which < 48 || data.which > 57)) {
					return false;
				}
			});

			$('#tbl_keranjangPRO100070').click(function() {
				var kode_produk = 'PRO100070';
				var tipe = '1';
				var qty = $("#product-vqty3PRO100070").val();
				var catatan = $("#catatanPRO100070").val();
				var jenis_variant = $("#jenis_variantPRO100070").val();

				if (jenis_variant) {
					var variant = jenis_variant;
				} else {
					var variant = '0';
				}

				//alert(kategori);

				// $.LoadingOverlay("show");
				// document.getElementById("cartadd").submit();
				// }else if(!value){
				var value_qty = $("#product-vqty3PRO100070").val();

				if (!value_qty) {
					alert("Maaf, quantity tidak boleh kosong");
					$("#product-vqty3PRO100070").focus();
					return (false);
				}

				$.ajax({
					type: "POST",
					url: "https://sr12herbalskincare.co.id/cart/add",
					data: "kode_produk=" + kode_produk +
						"&qty=" + qty +
						"&catatan=" + catatan,
					beforeSend: function() {
						// setting a timeout
						// $.LoadingOverlay("show");
						x.className = "show";
						setTimeout(function() {
							x.className = x.className.replace("show", "");
						}, 2000);
					},
					success: function(msg) {

						//getcart
						$.ajax({
							type: "POST",
							url: "https://sr12herbalskincare.co.id/cart/getcart",
							data: "no_pemesanan=",
							beforeSend: function() {
								// setting a timeout
							},
							success: function(msg) {
								$('#getcart').html(msg);
							}

						});
						//getcart

						if ($('.video-popup').hasClass('active')) $('.video-popup .popup-iframe').html('');
						$('.popup-wrapper, .popup-content').removeClass('active');
						$('html').removeClass('overflow-hidden');
						return false;

					}
				});

			});

		});
	</script>
	<!-- javascript -->

	<div class="col-sm-6">
	</div>
</div>

</div>
</form>
</div>
</div>
<div class="button-close"></div>
</div>
</div>

</div>
<!-- popup -->
<!-- FOOTER -->
<style>
	#snackbar {
		visibility: hidden;
		min-width: 250px;
		margin-left: -125px;
		background-color: #333;
		color: #fff;
		text-align: center;
		border-radius: 2px;
		padding: 16px;
		position: fixed;
		z-index: 9999;
		left: 50%;
		bottom: 30px;
		font-size: 17px;
	}

	#snackbar.show {
		visibility: visible;
		-webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
		animation: fadein 0.5s, fadeout 0.5s 2.5s;
	}

	@-webkit-keyframes fadein {
		from {
			bottom: 0;
			opacity: 0;
		}

		to {
			bottom: 30px;
			opacity: 1;
		}
	}

	@keyframes fadein {
		from {
			bottom: 0;
			opacity: 0;
		}

		to {
			bottom: 30px;
			opacity: 1;
		}
	}

	@-webkit-keyframes fadeout {
		from {
			bottom: 30px;
			opacity: 1;
		}

		to {
			bottom: 0;
			opacity: 0;
		}
	}

	@keyframes fadeout {
		from {
			bottom: 30px;
			opacity: 1;
		}

		to {
			bottom: 0;
			opacity: 0;
		}
	}
</style>

<script>
	/* when document is ready */
	$(function() {
		/* initiate plugin */
		$("div.holder").jPages({
			containerID: "itemContainer"
		});
	});
</script>
<!-- pagination -->


<!-- <div class="entry-footer mt-4">
	<?php
	foreach ($article_terms as $key => $article_term) {
	?>
		<a class="entry-footer-link text-black-50" href="<?php echo esc_url(get_term_link($article_term)); ?>">
			<button class="btn border border-secondary mb-2 mr-2">
				<?php echo esc_html($article_term->name); ?>
			</button>
		</a>
	<?php
	}
	?>
</div> -->