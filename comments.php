<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-hacker-amp-theme
 * @package Hacker_AMP_Theme
 * @subpackage Hacker_AMP_Theme
 * @since 1.0.1
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area comments-articles">
    
	<?php if ( have_comments() ) : ?>
		<h3 class="section-title mb-4"><span><span class="text-main">Komentar</span> Terbaru</span></h3>

		<ul id="comments-list" class="comments-list comments p-0">
			<?php display_comments_list(); ?>
		</ul><!-- .comment-list -->
		
		<?php display_comments_pagination(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments">Komentar Ditutup</p>
	<?php endif; ?>

</div><!-- .comments-area -->