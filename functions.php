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

/**
 * Removes various CSS styles enqueued by WordPress core and themes.
 * This function dequeues the block library, global styles, dashicons, and classic theme styles.
 */
function remove_block_library_css(){
	wp_dequeue_style('wp-block-library'); // Dequeue block library styles
	wp_dequeue_style('global-styles'); // Dequeue global styles
	wp_dequeue_style('dashicons-css'); // Dequeue dashicons
	wp_dequeue_style('classic-theme-styles'); // Dequeue classic theme styles
}
add_action('wp_enqueue_scripts', 'remove_block_library_css', 100); // Hook into the 'wp_enqueue_scripts' action with priority 100

// Enable support for Post Thumbnails on posts and pages.
add_theme_support( 'post-thumbnails' );

/**
 * Filters the content to insert ads and modify button links.
 * 
 * This function adds an AMP ad before every button link in the content and modifies the button's class attributes.
 * 
 * @param string $content The original content.
 * @return string The modified content with ads and updated button links.
 */
function filter_button_in_content($content){
	// Define the AMP ad code
	$ads = '<amp-ad width="100vw" height="320" type="adsense" data-ad-client="ca-pub-3780041077137992" data-ad-slot="1782717232" data-auto-format="rspv" data-full-width=""><div overflow="Memuat iklan ..."></div><div fallback>No ad for you</div></amp-ad>';
	// Define the pattern to find button links
	$patterns = [
		'/<a class="wp-block-button__link (.*?)" (.*?)>(.*?)<\/a>/'
		// other pattern
	];
	// Define the replacement that includes the ad and modified button
	$replacements = [
		$ads . '<a role="button" class="button button-primary button-download wp-block-button__link $1" $2>$3</a>'
		// other replacement
	];
	// Replace the found patterns in the content with their replacements
	return preg_replace($patterns, $replacements, $content);
}
// Hook the function to the 'the_content' filter
add_filter('the_content', 'filter_button_in_content');

/**
 * Removes the default '[...]' at the end of automatically generated excerpts.
 * 
 * This function replaces the default excerpt "more" text, which is '[...]',
 * with an empty string, effectively removing it.
 *
 * @param string $more The default 'more' text.
 * @return string The modified 'more' text.
 */
function excerpt_filter($more) {
	return '';
}
add_filter('excerpt_more', 'excerpt_filter');

/**
 * Sets the length of the excerpt to 20 words.
 * 
 * This function modifies the default excerpt length using a WordPress filter.
 * The priority is set to 999 to ensure it overrides most other similar modifications.
 *
 * @param int $length The original length of the excerpt.
 * @return int The modified length of the excerpt.
 */
add_filter( 'excerpt_length', function($length){
	return 20;
}, 999 );

/**
 * Adds responsive and hoverable classes to <table> tags within the content.
 * 
 * @param string $content The content being filtered.
 * @return string The modified content with additional classes added to <table> tags.
 */
function filter_table_in_content($content) {
	$content = str_replace('<table>', '<table class="table table-hover table-responsive">', $content);
	return $content;
}
add_filter('the_content', 'filter_table_in_content');

/**
 * Adds a 'text' class to all paragraph tags in the content.
 * 
 * @param string $content The content being filtered.
 * @return string The modified content with 'text' class added to paragraph tags.
 */
function filter_paragraphs_in_content($content) {
	$content = str_replace('<p>', '<p class="text">', $content);
	return $content;
}
add_filter('the_content', 'filter_paragraphs_in_content');

/**
 * Filters the content to add unique IDs to header tags (h1-h6) within the content.
 * 
 * This function applies a regex pattern to find all h1 to h6 tags with the class "wp-block-heading".
 * It then generates a unique ID by sanitizing the header text, removing spaces and special characters,
 * and converting them to a URL-friendly format. This ID is added to the header tag.
 *
 * @param string $content The content being filtered.
 * @return string The modified content with IDs added to header tags.
 */
function filter_headers_in_content($content) {
	// Use regex to match all h1 to h6 tags
	$content = preg_replace_callback('/<h([1-6]) class="wp-block-heading">(.*?)<\/h\1>/', function($matches) {
		$id = strtolower(trim(preg_replace('/[^a-zA-Z0-9-]+/', '-', $matches[2]), '-'));
		return "<h{$matches[1]} id='{$id}' class='wp-block-heading'>{$matches[2]}</h{$matches[1]}>";
	}, $content);
	return $content;
}
add_filter('the_content', 'filter_headers_in_content');

/**
 * Modifies the class attribute of the comment reply link to include Bootstrap button classes.
 * 
 * @param string $reply The original reply link HTML.
 * @return string Modified reply link HTML with additional classes.
 */
function filter_comment_reply_link($reply){
	$commentID = get_comment_ID();
	$reply = str_replace("class='comment-reply-link'", "class='comment-reply-link btn btn-primary' on=\"tap:AMP.setState({ textValue: '{$commentID}' })\"", $reply);
	return $reply;
}
add_filter('comment_reply_link', 'filter_comment_reply_link');

/**
 * Generates a table of contents for the provided content based on header tags (h1-h6).
 * 
 * This function scans the content for header tags, extracts their text, and creates a navigational table of contents
 * that links to each header's position in the content. It also assigns a unique ID to each header based on its text
 * for linking purposes.
 *
 * @param string $content The original content that may contain header tags.
 * @return string The content with a prepended table of contents if headers are found.
 */
function generate_table_of_contents($content = '') {
	// Search for all h1, h2, h3, h4, h5, and h6 tags in the content
	preg_match_all('/<h([1-6])[^>]*>(.*?)<\/h\1>/', $content, $matches, PREG_SET_ORDER);

	// Create a table of contents if headings are found
	if (!empty($matches)) {
			$toc = "<div class='table-of-contents my-3'><h2 class='m-0'>In this article:</h2><ul>";
			$current_level = 0;
			foreach ($matches as $match) {
					$tag = $match[1];
					$title = strip_tags($match[2]);
					$id = strtolower(trim(preg_replace('/[^a-zA-Z0-9-]+/', '-', $title), '-'));
					if ($tag > $current_level) {
							if ($current_level == 0) {
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
add_filter('the_content', 'generate_table_of_contents');

function filter_sensitive_text_in_comment( $text ) {
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

/**
 * Renders the breadcrumb navigation for the current page.
 * This function dynamically generates breadcrumb links based on the home URL, the category of the current post,
 * and the current post's URL. It helps users to navigate the site hierarchy and understand their current location within the site.
 */
function display_breadcrumb() {
	?>
	<!-- START: Breadcrumb -->
	<nav class="breadcrumb content container p-0">
		<ul>
			<li>
				<a href="<?= home_url() ?>">Home</a>
			</li><!--
			--><li>
				<a href="<?= esc_url( get_category_link( get_the_category()[0]->term_id ) ) ?>" rel="category"><?php echo str_replace( ' ', '-', get_the_category()[0]->name ) ?></a><!--
			--></li>
			<br>
			<li class="active"><span><?= basename(parse_url(get_permalink(), PHP_URL_PATH)); ?></span></li>
		</ul>
	</nav>
	<!-- END: Breadcrumb -->
	<?php
}

/**
 * Function to display the list of comments.
 * Uses wp_list_comments() to display comments with several options.
 * 
 * @param string $comment_type The type of comments to display.
 * @param int $per_page The number of comments to display per page.
 */
function display_comments_list() {
	$args['list-comments-args'] = [
		// 'style'             => 'ol', // Menggunakan ordered list untuk menampilkan komentar
    'type'              => 'comment', // Hanya menampilkan komentar (tidak termasuk pingbacks atau trackbacks)
    'avatar_size'       => 16, // Ukuran avatar adalah 64x64 piksel
    'reverse_top_level' => true, // Menampilkan komentar terbaru di atas
    'format'            => 'html5', // Menggunakan format HTML5
    // 'short_ping'        => true, // Tampilkan pingbacks/trackbacks dalam format ringkas
    // 'echo'              => true, // Langsung tampilkan output
    'callback'          => 'comment_list', // Fungsi callback untuk menyesuaikan tampilan komentar
    // 'end-callback'      => 'custom_end_comment_callback', // Fungsi callback setelah elemen komentar ditutup
    'per_page'          => 50, // Tampilkan 10 komentar per halaman
    // 'reverse_children'  => false // Tampilkan anak-anak komentar dalam urutan normal
	];

	wp_list_comments($args['list-comments-args']);
}

/**
 * Function callback from wp_list_comments() to display the list of comments.
 * 
 * @param object $comment The comment object.
 * @param array $args The arguments for the comment.
 * @param int $depth The depth of the comment.
 */
function comment_list($comment, $args, $depth) {
	// Determine the tag based on the style argument
	$tag = ('div' === $args['style']) ? 'div' : 'li';
	// Set the ID for the comment block depending on the style
	$add_below = ('div' === $args['style']) ? 'comment' : 'div-comment';

	// Configure avatar arguments including URL and CSS class
	$args['avatar-args'] = [
		'class'         => 'custom-avatar-class', // Kelas CSS tambahan
    'force_default' => false,                 // Jangan paksa gambar default
    'rating'        => 'g',                   // Rating G untuk semua umur
    'scheme'        => 'https',               // Gunakan HTTPS
    // 'extra_attr'    => 'style="border-radius: 50%;"' // Atribut tambahan
	];
	$avatar_html = get_avatar($comment, 32, null, 'foto ' . get_comment_author(), $args['avatar-args']);

	// Output the comment block with dynamic tag and classes
	?>
	<<?php echo $tag; ?> <?php comment_class(empty( $args['has_children']) ? 'prompt' : 'prompt parent'); ?> id="comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="prompt-group">
			<header class="header">
				<figure class="figure">
					<?= $avatar_html ?>
				</figure>
				<h4 class="author vcard">
					<cite class="fn name"><?= strtolower( str_replace(' ', '-', get_comment_author()) ); ?></cite><!-- 
				--></h4>
				<time class="date" datetime="<?= get_comment_date( 'c' ); ?>">
					<?= get_comment_date( 'Y-m-d' ); ?>
				</time>
			</header>
			
			<p class="comment">
				<?= filter_sensitive_text_in_comment(get_comment_text()); ?>
				<?php if ($comment->comment_approved == '0') : ?>
					<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.'); ?></em><br/>
				<?php endif; ?>
			</p>

			<footer>
				<a
					rel="nofollow"
					class="comment-reply-link btn btn-primary"
					on="tap:AMP.setState({ textValue: '<?php echo comment_ID(); ?>' })"
					href="#respond"
					data-commentid="<?php echo comment_ID(); ?>"
					data-postid="<?php echo get_the_ID(); ?>"
					data-belowelement="div-comment-<?php echo comment_ID(); ?>"
					data-respondelement="respond"
					data-replyto="Balasan untuk <?= get_comment_author(); ?>"
					aria-label="Balasan untuk <?= get_comment_author(); ?>"
					>Balas</a>
			</footer>
		</article>
	</<?php // echo $tag; ?>>
<?php
}

/**
 * Handles AJAX comment submissions for AMP pages.
 * 
 * This function processes comments submitted via AJAX on AMP pages. It first attempts to handle the comment submission
 * using WordPress's built-in function. If an error occurs during the submission, it sends a JSON response with the error
 * message and a 500 status header. If the submission is successful, it sends a JSON response indicating success.
 */
function ajax_comment_submit(){
	
	if ( ! isset( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'], 'comment_post' ) ) {
		wp_die( 'Are you cheating?' );
	}
	else {
		$comment = wp_handle_comment_submission( wp_unslash( $_POST ) );
		if ( is_wp_error( $comment ) ) {
			$data = intval( $comment->get_error_data() );
			if ( ! empty( $data ) ) {
				status_header(500);
				wp_send_json_error([
					'msg' => $comment->get_error_message(),
					'json' => $data,
					'back_link' => true
				]);
			}
		}
		else {
			wp_send_json_success($comment);
		}
	}
}
// Register the 'ajax_comment_submit' function for handling AJAX requests from logged-in users
add_action('wp_ajax_ajax_comment_submit', 'ajax_comment_submit');
// Register the 'ajax_comment_submit' function for handling AJAX requests from non-logged-in users
add_action('wp_ajax_nopriv_ajax_comment_submit', 'ajax_comment_submit');


/**
 * Handles user consent status.
 * 
 * This function checks or sets the consent status and sends an appropriate JSON response.
 */
function handle_consent() {
    // Pastikan data 'consent' ada dan valid sebelum memprosesnya
    if (isset($_POST['consent'])) {
        $consent = $_POST['consent'];
        $consentState = ($consent === 'accept');
        wp_send_json(['consentRequired' => true, 'consentState' => $consentState]);
    } else {
        wp_send_json_error(['message' => 'Data consent tidak ditemukan']);
    }
}

add_action('wp_ajax_consent', 'handle_consent');
add_action('wp_ajax_nopriv_consent', 'handle_consent');

// add_action('wp_ajax_nopriv_process_consent', 'handle_consent_data');
// add_action('wp_ajax_process_consent', 'handle_consent_data');

// function handle_consent_data() {
// 		// Pastikan data POST ada
// 		if (isset($_POST['consentState'])) {
// 				$consent_state = $_POST['consentState']; // Menangkap data consentState dari payload
// 				$amp_user_id = $_POST['ampUserId']; // Menangkap AMP User ID dari payload
// 				$consent_instance_id = $_POST['consentInstanceId']; // Menangkap instance ID dari payload

// 				// Proses data di sini, seperti menyimpan ke database atau log
// 				// Misalnya, update status consent di database
// 				update_user_meta(get_current_user_id(), 'amp_consent_state', $consent_state);

// 				// Kirim respons ke klien
// 				wp_send_json_success(['message' => 'Data processed successfully']);
// 		} else {
// 				wp_send_json_error(['message' => 'No data provided']);
// 		}
// 		wp_die(); // Mengakhiri eksekusi untuk menghindari output tambahan
// }

function update_user_consent() {
    // Periksa apakah data consent dikirim dan valid
    if (isset($_POST['consentStateValue'])) {
        // Cek nilai dari consentStateValue
        if ($_POST['consentStateValue'] == 'accepted') {
            // Set cookie jika consent diterima
            setcookie('user_consent', $_POST['consentStateValue'], time() + (86400 * 30), "/"); // 30 hari
            wp_send_json_success(['message' => 'Data processed successfully']);
        } else {
            wp_send_json_error(['message' => 'Invalid consent data']);
        }
    } else {
        wp_send_json_error(['message' => 'No data provided']);
    }
    wp_die(); // Mengakhiri eksekusi untuk menghindari output tambahan
}
// Tambahkan hooks untuk AJAX actions
add_action('wp_ajax_update_consent', 'update_user_consent');
add_action('wp_ajax_nopriv_update_consent', 'update_user_consent');

include 'inc/get-view-count.php';
include 'inc/comment-form.php';
include 'inc/disable-feed.php';
include 'inc/register-file-meta-box-spesifikasi.php';
include 'inc/register-file-post-type.php';

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
