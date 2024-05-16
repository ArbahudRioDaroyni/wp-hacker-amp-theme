<?php
$theme = wp_get_theme();
define('THEME_VERSION', $theme->Version); //gets version written in your style.css

/**
 * Remove emoji script and styles from <head>
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function wpassist_remove_block_library_css(){
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('global-styles');
	wp_dequeue_style('dashicons-css');
	wp_dequeue_style('classic-theme-styles');
}
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css', 100 );

add_theme_support( 'post-thumbnails' );

/**
 * Function to display the list of comments.
 * Uses wp_list_comments() to display comments with several options.
 */
function display_comments_list() {
	wp_list_comments([
		'type' => 'comment', // Type of comments to display
		'reverse_top_level' => true, // Display the newest comments at the top
		'avatar_size' => 32, // Avatar size in pixels
		'per_page' => 50, // Number of comments to display per page
		'callback' => 'comment_list' // Callback function to customize the display of comments
	]);
}

/**
 * Function to display comments pagination.
 * Uses paginate_comments_links() to generate navigation links.
 */
function display_comments_pagination() {
	$comment_args = [
		'prev_text' => '« Previous Comments', // Text for navigation to the previous page
		'next_text' => 'Next Comments »', // Text for navigation to the next page
		'type'      => 'array' // Returns links as an array
	];
	$comment_pages = paginate_comments_links($comment_args);
	if (is_array($comment_pages)) {
		echo '<nav class="comment-pagination"><ul class="pagination">';
		foreach ($comment_pages as $page) {
			echo '<li class="page-item">' . $page . '</li>';
		}
		echo '</ul></nav>';
	}
}

// filter tag in the_content()
function content_filter($content){
	$patterns = [
		'/<a class="wp-block-button__link (.*?)" (.*?)>/',
		'/<table([^>]+)?>/',
	];
	$replacements = [
		'<amp-ad width="100vw" height="320" type="adsense" data-ad-client="ca-pub-3780041077137992" data-ad-slot="1782717232" data-auto-format="rspv" data-full-width=""><div overflow="Memuat iklan ..."></div><div fallback>No ad for you</div></amp-ad><a class="btn btn-primary btn-block wp-block-button__link $1" $2>',
		'<table class="table table-striped table-hover table-responsive m-0">'
	];
	
  return preg_replace($patterns, $replacements, $content);
}
add_filter('the_content', 'content_filter');

// get popular post
function get_list_popular_posts($total, $offset = 0){
	$args = [
		'post_type'        => 'post',
		'posts_per_page'   => $total,
		'offset'           => $offset,
		'order'            => 'DESC',
		'orderby'          => 'meta_value_num',
		'meta_key'         => 'post_views_count',
		'post_status'      => 'publish',
		'suppress_filters' => true,
	];
	return get_posts( $args );
}

function get_list_type_posts($total, $category = null, $offset = 0, $posttype= 'post'){
	$args = [
		'post_type'        => $posttype,
		'posts_per_page'   => $total,
		'category_name'    => $category,
		'offset'           => $offset,
		'order'            => 'DESC',
		'orderby'          => 'date',
		'post_status'      => 'publish',
		'suppress_filters' => true,
	];
	return get_posts( $args );
}

function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_filter( 'excerpt_length', function( $length ){
	return 20;
}, 999 );

function amp_comment_submit(){
  $comment = wp_handle_comment_submission( wp_unslash( $_POST ) );
  if ( is_wp_error( $comment ) ) {
    $data = intval( $comment->get_error_data() );
    if ( ! empty( $data ) ) {
      status_header(500);
      wp_send_json([
				'msg' => $comment->get_error_message(),
				'response' => $data,
        'back_link' => true
			]);
    }
  }
  else {
    wp_send_json([
			'success' => true,
			'data' => $comment,
			'msg' => 'Komentar terkirim'
		]);
  }
}
add_action('wp_ajax_amp_comment_submit', 'amp_comment_submit');
add_action('wp_ajax_nopriv_amp_comment_submit', 'amp_comment_submit');

function hideSensitiveDataInText($text) {
	// Regex pattern to find phone numbers and mask them
	$phoneNumberRegex = '/(\d{6})\d{4}/';
	$text = preg_replace($phoneNumberRegex, '$1****', $text);

	// Regex pattern to find URLs and mask them, excluding certain domains
	$urlRegex = '/(https?:\/\/)(www\.)?([a-zA-Z0-9-]+)(\.[a-zA-Z]{2,})(\/[^\s]*)?/';
	$text = preg_replace_callback($urlRegex, function($matches) {
			$excludedDomains = array('jejakcyber.com'); // Domains that are excluded from masking
			$domain = $matches[3] . $matches[4]; // Combining the domain name and extension
			if (in_array($domain, $excludedDomains)) {
					// If the domain is in the list of excluded domains, return the original URL
					return $matches[0];
			} else {
					// Otherwise, mask the domain and path
					$maskedDomain = substr($matches[3], 0, 3) . '****' . $matches[4]; // Masking the domain name
					$maskedUrl = $matches[1] . $maskedDomain; // Constructing the URL with the masked domain
					if (isset($matches[5])) {
							$maskedUrl .= $matches[5]; // Adding the path if it exists
					}
					return $maskedUrl;
			}
	}, $text);

	return $text;
}

// Fungsi untuk menambahkan kelas CSS ke tag <p>
function add_class_to_paragraphs($content) {
	// Tambahkan kelas "text" ke setiap tag <p>
	$content = str_replace('<p>', '<p class="text">', $content);
	return $content;
}
// Tambahkan filter ke the_content
add_filter('the_content', 'add_class_to_paragraphs');

include 'inc/get-view-count.php';
include 'inc/comments.php';
include 'inc/disable-feed.php';
include 'inc/register-file-meta-box-spesifikasi.php';
include 'inc/register-file-post-type.php';