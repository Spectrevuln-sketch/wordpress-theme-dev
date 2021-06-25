<?php

/**
 * Custom template tags for the theme.
 *
 * @package Ecommerce_theme
 */

/**
 * Gets the thumbnail with Lazy Load.
 * Should be called in the WordPress Loop.
 *
 * @param int|null $post_id               Post ID.
 * @param string   $size                  The registered image size.
 * @param array    $additional_attributes Additional attributes.
 *
 * @return string
 */
function get_the_post_custom_thumbnail($post_id, $size = 'featured-thumbnail', $additional_attributes = [])
{
	$custom_thumbnail = '';

	if (null === $post_id) {
		$post_id = get_the_ID();
	}

	if (has_post_thumbnail($post_id)) {
		$default_attributes = [
			'loading' => 'lazy'
		];

		$attributes = array_merge($additional_attributes, $default_attributes);

		$custom_thumbnail = wp_get_attachment_image(
			get_post_thumbnail_id($post_id),
			$size,
			false,
			$attributes
		);
	}

	return $custom_thumbnail;
}

/**
 * Renders Custom Thumbnail with Lazy Load.
 *
 * @param int    $post_id               Post ID.
 * @param string $size                  The registered image size.
 * @param array  $additional_attributes Additional attributes.
 */
function the_post_custom_thumbnail($post_id, $size = 'featured-thumbnail', $additional_attributes = [])
{
	echo get_the_post_custom_thumbnail($post_id, $size, $additional_attributes);
}

/**
 * Prints HTML with meta information for the current post-date/time.
 *
 * @return void
 */
function ecommerce_posted_on()
{
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

	// Post is modified ( when post published time is not equal to post modified time )
	if (get_the_time('U') !== get_the_modified_time('U')) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf(
		$time_string,
		esc_attr(get_the_date(DATE_W3C)),
		esc_attr(get_the_date()),
		esc_attr(get_the_modified_date(DATE_W3C)),
		esc_attr(get_the_modified_date())
	);

	$posted_on = sprintf(
		esc_html_x('Posted on %s', 'post date', 'ecommerce'),
		'<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
	);

	echo '<span class="posted-on text-secondary">' . $posted_on . '</span>';
}

/**
 * Prints HTML with meta information for the current author.
 *
 * @return void
 */
function ecommerce_posted_by()
{
	$byline = sprintf(
		esc_html_x(' by %s', 'post author', 'ecommerce'),
		'<span class="author vcard"><a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
	);

	echo '<span class="byline text-secondary">' . $byline . '</span>';
}

/**
 * Get the trimmed version of post excerpt.
 *
 * This is for modifing manually entered excerpts,
 * NOT automatic ones WordPress will grab from the content.
 *
 * It will display the first given characters ( e.g. 100 ) characters of a manually entered excerpt,
 * but instead of ending on the nth( e.g. 100th ) character,
 * it will truncate after the closest word.
 *
 * @param int $trim_character_count Charter count to be trimmed
 *
 * @return bool|string
 */
function ecommerce_the_excerpt($trim_character_count = 0)
{
	if (!has_excerpt() || 0 === $trim_character_count) {
		the_excerpt();
		return;
	}

	$excerpt = wp_strip_all_tags(get_the_excerpt());
	$excerpt = substr($excerpt, 0, $trim_character_count);
	$excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));

	echo $excerpt . '[...]';
}

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 *
 * @return string (Maybe) modified "read more" excerpt string.
 */
function ecommerce_excerpt_more($more = '')
{

	if (!is_single()) {
		$more = sprintf(
			'<a class="ecommerce-read-more text-white" href="%1$s"><button class="mt-3 btn btn-info">%2$s</button></a>',
			get_permalink(get_the_ID()),
			__('Read more', 'ecommerce')
		);
	}

	return $more;
}

/**
 * ecommerce Pagination.
 *
 * @return void
 */
function ecommerce_pagination()
{

	$allowed_tags = [
		'span' => [
			'class' => []
		],
		'a' => [
			'class' => [],
			'href' => [],
		]
	];

	$args = [
		'before_page_number' => '<span class="btn border border-secondary mr-2 mb-2">',
		'after_page_number' => '</span>',
	];

	printf('<nav class="ecommerce-pagination clearfix">%s</nav>', wp_kses(paginate_links($args), $allowed_tags));
}

// function ecommerce_banner($type, $per_page = 1)
// {


// 	/* Query Banner Slider */
// 	$banner_image = [
// 		'posts_per_page'         => $per_page,
// 		'post_type'              => $type,
// 		'update_post_meta_cache' => false,
// 		'update_post_term_cache' => false,
// 	];
// 	$image_banner = new \WP_Query($banner_image);
// 	/* End Query Banner Slider */
// 	return $image_banner;
// }
function ecommerce_get_post_by_slug($post_type, $post_name)
{
	$args = [
		'post_type' => $post_type,
		'name' => $post_name

	];
	return new \WP_Query($args);
}
function ecommerce_get_post_type($post_type)
{
	/* Query  Categories */
	$args = [
		'post_type'  => $post_type
	];

	return new \WP_Query($args);
	/* End Query Categories */
}


function ecommerce_get_meta_custom_field(string $meta_key, string $post_type = '')
{
	if (!empty($meta_key) && !empty($post_type)) {
		$args = [
			'post_type' => $post_type,
			'meta_key' => $meta_key
		];

		$dbResult = new WP_Query($args);
		global $post;
		if ($dbResult->have_posts()) {
			$dbResult->the_post();
			$value = get_post_meta($post->ID, $meta_key, true);
			return $value;
		}
	}
}

function ecommerce_get_thumbnail_url($type, $per_page = 1)
{
	/* Query Banner Slider */
	$query_data = [
		'posts_per_page'         => $per_page,
		'post_type'              => $type,
		'update_post_meta_cache' => false,
		'update_post_term_cache' => false,
	];
	$image_banner = new \WP_Query($query_data);
	if ($image_banner->have_posts()) {
		foreach ($image_banner->get_posts() as $banner_url) :
			$url_image = $banner_url->ID;

			echo '<pre>';
			print_r(esc_url(get_the_post_thumbnail_url($type)));
			wp_die();


		endforeach;
		return $url_image;
		// return $value;
	}
	/* End Query Banner Slider */
}


function ecommerce_custom_thumbnail($id = null)
{
	$get_all_data_thumbnail = get_post(get_post_thumbnail_id($id));
	return $get_all_data_thumbnail;
}

/* Get Title With out Tag */
function ecommerce_custom_thumbnail_title(int $id)
{
	$title_featured_image = get_post(get_post_thumbnail_id($id))->post_title;
	return $title_featured_image;
}
/* End Get Title With out Tag */

/* Title Featured Image convert to html */
function ecommerce_get_thumbnail_title_html(int $id, string $tag = '', $attr_class = [])
{
	$title_featured_image = get_post(get_post_thumbnail_id($id))->post_title;
	$attr_convert = [
		'class' => $attr_class
	];

	echo '<' . $tag . ' ' . implode("class=",  $attr_convert['class']) . '>' . $title_featured_image . '</' . $tag . '>';
}
/* End Title Featured Image convert to html */

/* Find Like Prefix As Post name */
function get_name_like($prefix_name)
{
	global $wpdb;
	$get_name = $wpdb->get_results($wpdb->prepare(
		"SELECT
        *
    FROM
        `{$wpdb->prefix}posts`
    WHERE
        post_name LIKE %s",
		$wpdb->esc_like($prefix_name) . '%'
	));
	return $get_name;
}
/* End Find Like Prefix As Post name */

/* Get Postmeta Like */
function get_meta_key_like($prefix_key)
{
	global $wpdb;
	$get_key_result = $wpdb->get_results($wpdb->prepare(
		"SELECT
	*
	FROM
	`{$wpdb->prefix}postmeta`
	WHERE
	meta_key LIKE %s",
		$wpdb->esc_like($prefix_key) . '%'
	));
	return $get_key_result;
}
/* end Get Postmeta Like */

/* Get alt Text feature image */
function get_alt_text_thumbnail($id)
{
	$thumbnail_id = get_post_thumbnail_id($id);
	$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
	echo $alt;
}
/* End Get alt Text feature image */

/* Get Post Meta By Post Id */
function get_link_by_slug($val)
{
	global $wpdb;
	$get_name = $wpdb->get_results($wpdb->prepare(
		"SELECT
        *
    FROM
        `{$wpdb->prefix}posts`
    WHERE
        post_name = `$val`"
	));
	return $get_name;
}
/* End Get Post Meta By Post Id */
/* get post meta by post id */
function get_meta_by_post_id($id, $meta_key)
{
	global $wpdb;
	$get_meta_posts =  $wpdb->get_results($wpdb->prepare(
		"SELECT
        *
    FROM
        `{$wpdb->prefix}postmeta`
    WHERE
        post_id = $id AND meta_key LIKE %s",
		'%' . $meta_key . '%'
	));
	return $get_meta_posts;
}
/* End get post meta by post id */


// 
function create_file_distributor($id)
{
	$get_last_page = get_post($id);
	$slug = $get_last_page->post_name;
	$path_file = ECOMMERCE_DIR_PATH . '/template-parts/content-distributor_list_' . $slug . '.php';
	if (!file_exists($path_file) && !is_home() && !is_single()) {
		$fp = fopen($path_file, 'w');
		fwrite(
			$fp,
			'<?php

			/**
			 *  Page about-us template
			 *
			 * @package Ecommerce_theme
			 */
			get_header();
			$meta_tag = get_meta_by_post_id(get_the_ID(), "distributor_name_" . get_the_title() . "");
			?>
			
			
			
			<div class="header-empty-space"></div>
			<div class="container">
				<div class="empty-space col-xs-b15 col-sm-b30"></div>
				<div class="breadcrumbs">
					<a href="<?php echo get_home_url(); ?>">home</a>
					<a href="<?php echo get_page_link(); ?>">distributor area</a>
				</div>
			
				<div class="text-center">
					<div class="h2">List Distributor</div>
					<div class="title-underline center"><span></span></div>
				</div>
			</div>
			
			<div class="container">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th style="width: 5%;">No</th>
							<th>Nama</th>
							<th>Detail Distributor</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($meta_tag as $provice) :
							$lower = strtolower($provice->meta_value);
							$page_article = str_replace(" ", "_", $lower);
						?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td>
									<h6 class="h6"><?php echo $provice->meta_value; ?>
								</td>
								<td>
									<div>
										<a class="button size-2 style-2" href="<?php echo esc_url(home_url() . "/$page_article"); ?>">
											<span class="button-wrapper">
												<span class="icon"><img src="https://sr12herbalskincare.co.id/style/img/icon-1.png" alt=""></span>
												<span class="text">Detail Distributor </span>
											</span>
										</a>
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
			
			
					</tbody>
				</table>
			</div>
			
			<div class="empty-space col-xs-b35 col-md-b70"></div><!-- FOOTER -->
			
			
			
			<?php get_footer(); ?>'
		);
		fclose($fp);
	}
}




/* Check Page By API */
function check_page_by_API($slug_url = '', $page_id)
{
	create_file_distributor($page_id);
	// if (!empty($slug_url)) {
	// // 	$change_str = str_replace("-", " ", $slug_url);
	// }
	// $response = wp_remote_get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');
	// $body     = wp_remote_retrieve_body($response);

	// $rest_data = json_decode($body);
	// foreach ($rest_data->provinsi as $prov) {
	// $change_text = strtolower($prov->nama);
	// }
	// if ($change_text == $change_str) {
	// }
}
/* End Check Page By API*/

function get_meta_by_title($meta)
{
	global $wpdb;
	$get_meta_posts =  $wpdb->get_results($wpdb->prepare(
		"SELECT
        *
    FROM
        `{$wpdb->prefix}postmeta`
    WHERE
        meta_key = $meta"
	));
	return $get_meta_posts;
}
function get_posts_product(){
	global $wpdb;
}