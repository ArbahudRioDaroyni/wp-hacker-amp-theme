<?php
$theme = wp_get_theme();
define('THEME_VERSION', $theme->Version); //gets version written in your style.css

/**
 * Remove emoji script and styles from <head>
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function wpassist_remove_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style( 'dashicons-css' );
		wp_dequeue_style( 'classic-theme-styles' );
}
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css', 100 );

add_theme_support( 'post-thumbnails' );

// filter tag in the_content()
function content_filter($content){
	$patterns = []; $replacements = [];
	$patterns_non_amp = []; $replacements_non_amp = [];

	$patterns = [
		'/<a class="wp-block-button__link (.*?)" (.*?)>/',
		'/<table([^>]+)?>/',
	];
	$replacements = [
		'<amp-ad width="100vw" height="320"
			type="adsense"
			data-ad-client="ca-pub-3780041077137992"
			data-ad-slot="1782717232"
			data-auto-format="rspv"
			data-full-width="">
		<div overflow="Memuat iklan ..."></div>
		<div fallback>No ad for you</div>
		</amp-ad>
		<a class="btn btn-primary btn-block wp-block-button__link $1" $2>',
		'<table class="table table-striped table-hover m-0">'
	];
	
  return preg_replace($patterns, $replacements, $content);
}
add_filter('the_content', 'content_filter');

// get first image in post
function get_first_image_in_post() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	
	if(empty($first_img)){
		$first_img = 'https://randdsoftindonesia.com/wp-content/uploads/2022/06/Icon-Randd-Soft.png';
	}
	return $first_img;
}

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

function hidePhoneNumberInText($text) {
	// Pola regex untuk menemukan nomor telepon dalam teks
	$phoneNumberRegex = '/(\d{6})\d{4}/';
	// Menyamarkan nomor telepon dengan tanda bintang
	$maskedText = preg_replace($phoneNumberRegex, '$1****', $text);
	// Mengembalikan teks yang telah dimodifikasi
	return $maskedText;
}

function hideUrlInText($text) {
	// Pola regex untuk menemukan URL dalam teks
	$urlRegex = '/(https?:\/\/)(www\.)?([a-zA-Z0-9-]+)(\.[a-zA-Z]{2,})(\/[^\s]*)?/';
	// Menyamarkan URL dengan tanda bintang, kecuali untuk domain yang dikecualikan
	$maskedText = preg_replace_callback($urlRegex, function($matches) {
			$excludedDomains = array('jejakcyber.com'); // Domain yang dikecualikan dari penyembunyian
			$domain = $matches[3] . $matches[4]; // Menggabungkan nama domain dan ekstensi
			if (in_array($domain, $excludedDomains)) {
					// Jika domain ada dalam daftar domain yang dikecualikan, kembalikan URL asli
					return $matches[0];
			} else {
					// Jika tidak, samarkan domain dan path
					$maskedDomain = substr($matches[3], 0, 3) . '****' . $matches[4]; // Masking nama domain
					$maskedUrl = $matches[1] . $maskedDomain; // Menyusun URL dengan domain yang disamarkan
					if (isset($matches[5])) {
							$maskedUrl .= $matches[5]; // Menambahkan path jika ada
					}
					return $maskedUrl;
			}
	}, $text);
	// Mengembalikan teks yang telah dimodifikasi
	return $maskedText;
}

function hideTextInComment($text){
	$phone = hidePhoneNumberInText($text);
	$url = hideUrlInText($phone);

	return $url;
}

include 'inc/get-view-count.php';
include 'inc/comments.php';
include 'inc/disable-feed.php';
include 'inc/register-file-meta-box-spesifikasi.php';
include 'inc/register-file-post-type.php';