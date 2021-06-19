<?php

/**
 * Footer template
 *
 * @package Ecommerce_theme
 */
?>
<footer class="footer-area bg-black-2 section-padding-1">
	<div class="container-fluid">
		<div class="footer-top pt-80 pb-25">
			<div class="row align-items-center">
				<div class="col-lg-3 col-md-4" style="text-align: center;">
					<div class="footer-logo footer-logo-ngtv-mrg">
						<a href="<?php the_permalink() ?>">
							<?php
							if (function_exists('the_custom_logo')) {
								the_custom_logo();
							}
							?>
						</a>
					</div>
				</div>
				<div class="col-sm-6 col-md-2 col-xs-b30 col-md-b0" style="list-style-type: none;">
					<h3 class="h4" style="color: white;  padding:0 0 0 0;">Company</h3>
					<div class="empty-space col-xs-b20"></div>
					<div class="footer-column-links">
						<div class="row">
							<div class="col-xs-10">
								<li><a href="aboutus">About Us</a></li>
								<li><a href="help-center">Help Center</a></li>
								<li><a href="licenses">Licenses</a></li>
								<li><a href="market-api">Market API</a></li>
								<li><a href="site-map">Site Map</a></li>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-2 col-xs-b30 col-md-b0" style="list-style-type: none;">
					<div class="h4" style="color: white">Helpdesk Sales &amp; Marcomm</div>
					<div class="empty-space col-xs-b20"></div>
					<div class="footer-column-links">
						<div class="row">
							<div class="col-xs-10">
								<li><a href="#">customer service (Sarah)</a></li>
								<li><a href="#"><i class="fa fa-whatsapp"></i>081282136121</a></li>
								<li><a href="#">marketing executive (ME)</a></li>
								<li><a href="#"><i class="fa fa-whatsapp"></i>081281155307</a></li>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-2 col-xs-b30 col-md-b0" style="list-style-type: none;">
					<div class="h4" style="color: white">About SR12 herbalskincare</div>
					<div class="empty-space col-xs-b20"></div>
					<div class="footer-column-links">
						<div class="row">
							<div class="col-xs-10">
								<li>
									<p class="simple-article size-2 light fulltransparent">Lebih dari 4 tahun kami berkembang membantu banyak orang di Indonesia untuk mendapatkan perawatan kecantikan yang memenuhi impian mereka. </p>
								</li>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-3 col-xs-b30 col-md-b0" style="text-align: left;">
					<div class="h4" style="color: white">Contact Info</div>
					<div class="empty-space col-xs-b20"></div>
					<div class="footer-contact"><i class="fa fa-mobile" aria-hidden="true"></i> Contact us: Monday - Friday: 9:00 - 18:00</div>
					<div class="footer-contact"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email: info@sr12herbalskincare.co.id</div>
					<div class="footer-contact"><i class="fa fa-mobile" aria-hidden="true"></i> Phone: 02127809930</div>
					<div class="footer-contact"><i class="fa fa-map-marker" aria-hidden="true"></i> Address: Beltway Office Park Tower C, Jl. Ampera Raya, RW.2, Ragunan, Kec. Ps. Minggu, DKI Jakarta 12540</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="row">
				<div class="col-lg-8 col-xs-text-center col-lg-text-left col-xs-b20 col-lg-b0">
					<div class="copyright">
						<p>© 2020 SR12. <a target="_blank" href="https://sr12herbalskincare.co.id/"> All rights reserved.</a></p>
					</div>

				</div>
				<div class="col-lg-4 col-xs-text-center col-lg-text-right">
					<div class="follow">
						<a class="entry" href="http://bit.ly/PageSR12" target="_blank"><i class="fa fa-facebook"></i></a>
						<a class="entry" href="#" target="_blank"><i class="fa fa-twitter"></i></a>
						<a class="entry" href="https://www.instagram.com/sr12herbalskincareofficial_/" target="_blank"><i class="fa fa-instagram"></i></a>
						<a class="entry" href="https://www.youtube.com/channel/UCXj2rup42B-dXUJyCtomPUw" target="_blank"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if (is_active_sidebar('sidebar-2')) { ?>
		<aside>
			<?php dynamic_sidebar('sidebar-2'); ?>
		</aside>
	<?php } ?>
</footer>
</div>
</div>
<?php wp_footer(); ?>

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
	(function($) {
		/* initiate plugin */
		$("div.holder").jPages({
			containerID: "itemContainer"
		});
	})(jQuery);
</script>
<!-- pagination -->
</body>

</html>