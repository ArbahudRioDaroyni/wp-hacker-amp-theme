<?php
// Retrieve the current theme object
$theme = wp_get_theme();
// Define a constant for the theme version using the Version property of the theme object
define('THEME_VERSION', $theme->Version);

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

// Enable support for Post Thumbnails on posts and pages.
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
		'type'			=> 'array' // Returns links as an array
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

/**
 * Removes the default '[...]' at the end of automatically generated excerpts.
 * 
 * This function replaces the default excerpt "more" text, which is '[...]',
 * with an empty string, effectively removing it.
 *
 * @param string $more The default 'more' text.
 * @return string The modified 'more' text.
 */
function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Sets the length of the excerpt to 20 words.
 * 
 * This function modifies the default excerpt length using a WordPress filter.
 * The priority is set to 999 to ensure it overrides most other similar modifications.
 *
 * @param int $length The original length of the excerpt.
 * @return int The modified length of the excerpt.
 */
add_filter( 'excerpt_length', function( $length ){
	return 20;
}, 999 );

/**
 * Handles AJAX comment submissions for AMP pages.
 * 
 * This function processes comments submitted via AJAX on AMP pages. It first attempts to handle the comment submission
 * using WordPress's built-in function. If an error occurs during the submission, it sends a JSON response with the error
 * message and a 500 status header. If the submission is successful, it sends a JSON response indicating success.
 */
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
// Register the 'amp_comment_submit' function for handling AJAX requests from logged-in users
add_action('wp_ajax_amp_comment_submit', 'amp_comment_submit');
// Register the 'amp_comment_submit' function for handling AJAX requests from non-logged-in users
add_action('wp_ajax_nopriv_amp_comment_submit', 'amp_comment_submit');

function hide_sensitive_data_in_text($text) {
	// Regex pattern to find phone numbers and mask them
	$phone_regex = '/(\d{6})\d{4}/';
	$text = preg_replace($phone_regex, '$1****', $text);

	// Regex pattern to find URLs and mask them, excluding certain domains
	$url_regex = '/(https?:\/\/)(www\.)?([a-zA-Z0-9-]+)(\.[a-zA-Z]{2,})(\/[^\s]*)?/';
	$text = preg_replace_callback($url_regex, function($matches) {
			$excluded_domains = array('jejakcyber.com'); // Domains that are excluded from masking
			$domain = $matches[3] . $matches[4]; // Combining the domain name and extension
			if (in_array($domain, $excluded_domains)) {
					// If the domain is in the list of excluded domains, return the original URL
					return $matches[0];
			} else {
					// Otherwise, mask the domain and path
					$masked_domain = substr($matches[3], 0, 3) . '****' . $matches[4]; // Masking the domain name
					$masked_url = $matches[1] . $masked_domain; // Constructing the URL with the masked domain
					if (isset($matches[5])) {
							$masked_url .= $matches[5]; // Adding the path if it exists
					}
					return $masked_url;
			}
	}, $text);

	return $text;
}

// Function to add a CSS class to <p> tags
function add_class_to_paragraphs($content) {
	// Add "text" class to each <p> tag
	$content = str_replace('<p>', '<p class="text">', $content);
	return $content;
}
// Add a filter to the_content
add_filter('the_content', 'add_class_to_paragraphs');

// Function to add unique IDs to header tags (h1-h6) within the content
function add_id_to_headers($content) {
    // Use regex to match all h1 to h6 tags
    $content = preg_replace_callback('/<h([1-6]) class="wp-block-heading">(.*?)<\/h\1>/', function($matches) {
        // Remove spaces and special characters to create an ID
        $id = strtolower(trim(preg_replace('/[^a-zA-Z0-9-]+/', '-', $matches[2]), '-'));
        // Return the h tag with the added ID
        return "<h{$matches[1]} id='{$id}' class='wp-block-heading'>{$matches[2]}</h{$matches[1]}>";
    }, $content);
    return $content;
}
// Add a filter to 'the_content' to apply this function
add_filter('the_content', 'add_id_to_headers');

// Function to generate a table of contents from $content
function generate_table_of_contents($content = '') {
    // Search for all h1, h2, h3, h4, h5, and h6 tags in the content
    preg_match_all('/<h([1-6])[^>]*>(.*?)<\/h\1>/', $content, $matches, PREG_SET_ORDER);

    // Create a table of contents if headings are found
    if (!empty($matches)) {
        $toc = "<div class='table-of-contents my-3'><h2>Daftar Isi:</h2><ul>";
        $current_level = 0;
        foreach ($matches as $match) {
            $tag = $match[1];
            $title = strip_tags($match[2]);
            $id = strtolower(trim(preg_replace('/[^a-zA-Z0-9-]+/', '-', $title), '-'));
            if ($tag > $current_level) {
                if ($current_level == 0) {
                    // Only add the <ul> tag once at the first level
                } else {
                    $toc .= str_repeat("<ul>", $tag - $current_level);
                }
            } elseif ($tag < $current_level) {
                $toc .= str_repeat("</ul></li>", $current_level - $tag);
            }
            $toc .= "<li><a href='#{$id}'>{$title}</a>";
            $current_level = $tag;
        }
        $toc .= str_repeat("</ul></li>", $current_level);
        $toc .= "</ul></div>";

        // Add the table of contents before first heading <h> in the original content
        $content = preg_replace('/(<h[1-6][^>]*>)/', $toc . '$1', $content, 1);
    }

    return $content;
}
// Add a filter to apply the generate_table_of_contents function to the content
add_filter('the_content', 'generate_table_of_contents');

include 'inc/get-view-count.php';
include 'inc/comments.php';
include 'inc/disable-feed.php';
include 'inc/register-file-meta-box-spesifikasi.php';
include 'inc/register-file-post-type.php';