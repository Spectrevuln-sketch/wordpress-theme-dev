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

function ecommerce_banner($type, $per_page = 1)
{
	/* Query Banner Slider */
	$banner_image = [
		'posts_per_page'         => $per_page,
		'post_type'              => $type,
		'update_post_meta_cache' => false,
		'update_post_term_cache' => false,
	];
	$image_banner = new \WP_Query($banner_image);
	/* End Query Banner Slider */
	return $image_banner;
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


/* Auto Create New File When Create New Page */
function create_file_page($slug_url)
{
	$fp = fopen(ECOMMERCE_DIR_PATH . '/page-' . $slug_url . '.php', 'w');
	fwrite($fp, "<?php \n\r

/**\n
 * Page template\n
 *\n
 * @package Ecommerce_theme\n
 */\n
 \n
get_header();\n
\n
?>\n
<h1 style='background-color: aqua; margin:20vh 0 0 0;'>Product Page</h1>\n
</body>\n
\n
</html>\n
\n
<?php get_footer(); \r ?>");
	fclose($fp);
	echo 'File Has Been Create';
}
/* End Auto Create New File When Create New Page */
function check_page_exist()
{
	$arg_lastes_post = ['post_type' => 'page',  'order' => 'DESC', 'posts_per_page' => 1];
	$get_last_page = get_posts($arg_lastes_post);
	$slug = $get_last_page[0]->post_name;

	$filename = ECOMMERCE_DIR_PATH . '/page-' . $slug . '.php';
	if (file_exists($filename)) {
		return false;
	} else {
		create_file_page($slug);
	}
}
