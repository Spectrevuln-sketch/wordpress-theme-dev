<?php

/**
 * Template for entry content.
 *
 * To be used inside WordPress The Loop.
 *
 * @package Ecommerce_theme
 */
?>
<?php if (!empty(get_posts())) : ?>
	<?php foreach (get_posts() as $post) : ?>
		<!-- product -->
		<div class="col-sm-4">
			<div class="product-shortcode style-1">
				<div class="title">
					<div class="simple-article size-1 color col-xs-b5 text-uppercase"><a href="#"><?= $post->post_title; ?></a></div>
					<div class="h6 animate-to-green"><a href="#"><?= get_post(get_post_thumbnail_id())->post_title; ?></a></div>
				</div>
				<div class="preview">
					<?php

					if (has_post_thumbnail()) {

						the_post_custom_thumbnail(
							$post->ID,
							'featured-thumbnail',
							[
								'sizes' => '(max-width: 350px) 50px, 33px;',
								'class' => 'd-block',

							]
						);
					}
					?>
					<div class="preview-buttons valign-middle">
						<div class="valign-middle-content">
							<a class="button size-2 style-2" href="lulur-rempah-bengkoang">
								<span class="button-wrapper">
									<span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
									<span class="text">Learn More</span>
								</span>
							</a>
							<a class="button size-2 style-3 entry open-popup" data-rel="102" href="javascript:;">
								<span class="button-wrapper">
									<span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-3.png" alt=""></span>
									<span class="text">Quick View</span>
								</span>
							</a>
						</div>
					</div>
				</div>
				<div class="price">
					<div class="simple-article size-4">
						<span class="color"><?= get_post(get_post_thumbnail_id())->post_excerpt; ?></span>&nbsp;&nbsp;&nbsp;
					</div>
				</div>
				<div class="description">
					<div class="simple-article text size-2">
						<p><?= get_post(get_post_thumbnail_id())->post_content; ?></p>

					</div>
					<!-- <div class="icons">
                      <a class="entry"><i class="fa fa-check" aria-hidden="true"></i></a>
                      <a class="entry open-popup" data-rel="3"><i class="fa fa-eye" aria-hidden="true"></i></a>
                      <a class="entry"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    </div> -->
				</div>
			</div>
		</div>

		<!-- popup -->

	<?php endforeach; ?>
<?php endif; ?>