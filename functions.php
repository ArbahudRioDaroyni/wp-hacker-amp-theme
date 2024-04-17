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
		'/<img ([^>]+)? class="([^>]+)?>/',
		'/<p([^>]+)?>/',
		'/<div class="wp-block-button">(.*?)<\/div>/',
		'/wp-block-button__link/',
		'/<table([^>]+)?>/',
		// '/<figcaption>/',
		// '/<ul>/',
		// '/<ol>/',
		// '/<div class="schema-faq wp-block-yoast-faq-block">/',
		// '/<div class="schema-faq-section" id="faq-question-(.*?)"><strong class="schema-faq-question">(.*?)<\/strong>/',
		// '/<p class="schema-faq-answer">(.*?)<\/p>/',
		// '/<figure ([^>]+)? class="wp-block-table (.*?)"><table>/',
		// '/<blockquote class="(.*?)"><p>(.*?)<\/p><cite>(.*?)<\/cite><\/blockquote>/'
	];
	$replacements = [
		'<amp-img on="tap:lightbox1" role="button" tabindex="0" layout="responsive" $1 class="img-responsive w-100 $2><div fallback>offline</div></amp-img>',
		'<p class="text">',
		'<p class="wp-block-button">$1</p>',
		'btn btn-primary" style="font-family:var(--font-primary);font-size:2rem;width:100%;padding:1rem;font-size:2.25rem;font-weight:600;',
		'<table class="table table-striped table-hover m-0">'
		// '<figcaption class="fw-normal" $1>',
		// '<ul class="sq-style">',
		// '<ol class="block-style">',
		// '<div class="schema-faq wp-block-yoast-faq-block my-3 accordion" id="accordionPanelsStayOpenExample">',
		// '<div class="schema-faq-section accordion-item" id="$1">
		//   <h5 class="schema-faq-question accordion-header">
		//  	<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-$1" aria-expanded="true" aria-controls="panelsStayOpen-collapse-$1">
		// 	 $2
		// 	</button>
		//   </h5>
		//   <div id="panelsStayOpen-collapse-$1" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading-$1">',
		// '<div class="schema-faq-answer accordion-body"><p>$1</p></div></div>',
		// '<figure $1 class="table-responsive my-3"><table class="$2 fw-bold">'
		// '<div class="schema-faq-section accordion" $1>',
		// '<blockquote class="$1 nk-blockquote">
		// 	<div class="nk-blockquote-icon"><span>"</span></div>
		// 	<p class="nk-blockquote-content">$2</p>
		// 	<div class="nk-blockquote-author"><span><cite>$3</cite></span></div>
		// </blockquote>',
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
		$first_img = get_default_image();
	}
	return $first_img;
}

function get_default_image()
{
	return 'https://randdsoftindonesia.com/wp-content/uploads/2022/06/Icon-Randd-Soft.png';
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

include 'inc/get-view-count.php';
include 'inc/comments.php';
include 'inc/disable-feed.php';
include 'inc/register-file-meta-box-spesifikasi.php';
include 'inc/register-file-post-type.php';

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