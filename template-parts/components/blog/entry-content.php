<?php

/**
 * Template for entry content.
 *
 * To be used inside WordPress The Loop.
 *
 * @package Ecommerce_theme
 */

?>

<div class="entry-content">


	<?php
	if (is_single()) {
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. */
					__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'ecommerce'),
					[
						'span' => [
							'class' => []
						]
					]
				),
				the_title('<span class="screen-reader-text">"', '"</span>', false)
			)
		);

		wp_link_pages(
			[
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'ecommerce'),
				'after'  => '</div>',
			]
		);
	} else {
		ecommerce_the_excerpt(200);
		printf('<br>');
		echo ecommerce_excerpt_more();
	}

	?>
</div>