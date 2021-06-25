<?php

/**
 * Content Page template
 *
 * @package Ecommerce_theme
 */

/* Query Limit Slider */
$image_banner = get_name_like('promo-');
$jumbotron = get_name_like('banner_home');
$jumbotron2 = get_name_like('banner_image');
/* End Query Limit Slider */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if (!is_front_page()) {
	?>
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header>
		<!-- .entry-header-->
	<?php
	}
	?>

	<?php
	if ($image_banner) :
	?>
		<div class="empty-space col-xs-b35 col-md-b70"></div>
		<div class="slider-home">

			<?php foreach ($image_banner as $banner) : ?>
				<div class="bg-cover">

					<?php

					if (has_post_thumbnail($banner->ID)) {

						the_post_custom_thumbnail(
							$banner->ID,
							'featured-thumbnail',
							[
								'sizes' => '(max-width: 350px) 50px, 33px;',
								'class' => 'd-block',
								'style' => 'height: 40em; width:100%;',

							]
						);
					}
					?>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
	<div class="empty-space col-xs-b35 col-md-b70"></div>
	<div class="empty-space col-xs-b35 col-md-b70"></div>
	<div class="container">
		<?php
		$product_category = ecommerce_get_post_type('product-category');
		$product_link = ecommerce_get_post_by_slug('page', 'product')->get_posts()[0];
		if ($product_category->have_posts()) :
		?>
			<div class="text-center">
				<div class="simple-article size-3 grey uppercase col-xs-b5">Kategori Produk</div>
				<div class="h2">Terbaik dari yang terbaik</div>
				<div class="title-underline center"><span></span></div>
			</div>
	</div>
	<di v class="container">
		<?php foreach ($product_category->get_posts() as $categories_data) : ?>
			<a class="client-logo-entry" href="<?= esc_url(get_the_permalink() . $product_link->post_type . '/' . $product_link->post_name); ?>">
				<?php

				if (has_post_thumbnail($categories_data->ID)) {


					the_post_custom_thumbnail(
						$categories_data->ID,
						'featured-thumbnail',
						[
							'sizes' => '(max-width: 350px) 50px, 33px',
							'class' => 'w-50 mx-auto rounded-circle categories-product',
							'style' => 'border: 5px solid #941e29;  height: 9rem;',

						]
					);
					echo '<h5 class="text-dark font-weight-bolder text-uppercase" style="padding:5% 0 5% 34.5%;">' . esc_html($categories_data->post_title) . '</h5>';
				} else {
				?>
					<img src="https://via.placeholder.com/510x340" class="w-100" alt="Card image cap">
				<?php

				}
				?>
			</a>
		<?php endforeach; ?>
	<?php endif; ?>

	</di>
	<?php if ($jumbotron) : ?>
		<div class="empty-space col-xs-b35 col-md-b70"></div>
		<div class="empty-space col-xs-b35 col-md-b70"></div>
		<div class="fixed-background" style="background-image: url(<?php echo get_the_post_thumbnail_url($jumbotron[0]->ID); ?>);">
			<div class="block-entry">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<?php foreach ($jumbotron as $url_thumbnails) : ?>
								<div class="cell-view simple-banner-height big">
									<div class="empty-space col-xs-b35"></div>
									<h2 class="h1 light"><?= get_the_post_thumbnail_caption($url_thumbnails->ID) ?></h2>
									<div class="title-underline light"><span></span></div>
									<div class="simple-article light size-4 col-xs-b20">
										<?= ecommerce_custom_thumbnail($url_thumbnails->ID)->post_content; ?></div>
									<?php $link_about = ecommerce_get_post_by_slug('page', 'about-us')->get_posts()[0]; ?>
									<a class="button size-2 style-1" href="<?= esc_url(get_the_permalink() . $link_about->post_type . '/' . $link_about->post_name); ?>">
										<span class="button-wrapper">
											<span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
											<span class="text">learn more</span>
										</span>
									</a>
									<div class="empty-space col-xs-b35"></div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="row-background right hidden-xs">
						<img src="https://sr12herbalskincare.co.id/gambar/profil/NUY.png" alt="">
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div class="empty-space col-xs-b35 col-md-b70"></div>
	<div class="empty-space col-xs-b35 col-md-b70"></div>
	<div class="container">
		<div class="row">
			<?php if (get_meta_key_like('filosofi_section1') != '') : ?>
				<div class="col-sm-5">
					<div class="simple-article size-3 grey uppercase col-xs-b5">Filosofi Kami</div>
					<div class="h2">Yang kami yakini</div>
					<div class="title-underline"><span></span></div>
					<div class="simple-article size-4 grey"><?= get_meta_key_like('filosofi_section1')[0]->meta_value; ?>.</div>
				</div>
				<div class="col-sm-7">
					<div class="simple-article size-3">
						<p><?= get_meta_key_like('filosofi_section2')[0]->meta_value; ?></p>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<?php if ($jumbotron2) : ?>
		<div class="empty-space col-xs-b35 col-md-b70"></div>
		<div class="empty-space col-xs-b35 col-md-b70"></div>
		<div class="block-entry" style="background-image: url(<?= get_the_post_thumbnail_url($jumbotron2[0]->ID); ?>);">
			<div class="container">
				<div class="row">
					<?php foreach ($jumbotron2 as $url_thumbnails) : ?>
						<?php if (ecommerce_custom_thumbnail_title($url_thumbnails->ID) != '') : ?>
							<div class="col-sm-6 col-sm-offset-6">
								<div class="cell-view simple-banner-height">
									<div class="empty-space col-xs-b35"></div>
									<div class="simple-article light transparent size-5 uppercase col-xs-b5">
										<h3><?= get_the_post_thumbnail_caption($url_thumbnails->ID); ?></h3>
									</div>
									<div class="title-underline  light"><span></span></div>
									<div class="simple-article light size-4 col-xs-b20"><?= ecommerce_custom_thumbnail($url_thumbnails->ID)->post_content; ?></div>
									<div>
										<a class="button size-2 style-2" href="https://sr12herbalskincare.co.id/member/login">
											<span class="button-wrapper">
												<span class="icon"><img src="<?= ECOMMERCE_BUILD_IMG_URI; ?>/icon-1.png" alt=""></span>
												<span class="text">Gabung Sekarang</span>
											</span>
										</a>
									</div>
									<div class="empty-space col-xs-b35"></div>
								</div>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<div class="row-background big left hidden-xs">
					<img src="<?= ECOMMERCE_BUILD_IMG_URI; ?>/4444-min.png" alt="">
				</div>
			</div>
		</div>
	<?php endif; ?>



	<div class="empty-space col-xs-b35 col-md-b70"></div>
	<div class="empty-space col-xs-b35 col-md-b70"></div>
	<div class="container">
		<div class="text-center">
			<div class="simple-article size-3 grey uppercase col-xs-b5">Artikel</div>
			<div class="h2">Terbaru</div>
			<div class="title-underline center"><span></span></div>
		</div>
	</div>
	<div class="empty-space col-xs-b35 col-md-b70"></div>
	<!-- .entry-content -->
	<?php if (is_front_page()) : ?>
		<div class="container">
			<?php get_template_part('template-parts/components/posts-carousel'); ?>
		</div>
	<?php endif; ?>
	<?php

	if (!is_home()) {
		wp_link_pages(
			[
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'ecommerce'),
				'after'  => '</div>',
			]
		);
	}
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-6">
				<div class="cell-view simple-banner-height text-center">
					<div class="empty-space col-sm-b35"></div>
					<div class="simple-article grey uppercase size-5 col-xs-b5"><span class="color">SPECIAL OFFERS</span> for subscribers</div>
					<h3 class="h3 col-xs-b15">NEW OFFERS EVERY WEEK DISCOUNT SYSTEM BEST PRICES</h3>

					<div class="empty-space col-xs-b35"></div>
				</div>
			</div>
		</div>
		<div class="row-background left hidden-xs">
			<img src="	" alt="">
		</div>
	</div>

	<?php edit_post_link(esc_html__('Edit', 'ecommerce'), '<button class="edit-link btn btn-danger btn-lg"><i class="fa-fw fas fa-cog mr-2"></i>', '</button>'); ?>
	<!-- <footer class="entry-footer">
</footer>.entry-footer -->
</article><!-- #post-## -->