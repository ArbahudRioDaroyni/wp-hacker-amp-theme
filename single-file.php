<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-hacker-amp-theme
 * @package Hacker_AMP_Theme
 * @subpackage Hacker_AMP_Theme
 * @since 1.0.1
 */
?>
<?php get_header(); ?>

<?php display_breadcrumb() ?>

<div class="container">
	<div id="primary" class="content row">
		<main id="main" class="site-content col-lg-8" role="main">
			<?php 
				// Start the loop.
				while ( have_posts() ) :
					the_post();

					// Include the single post content template.
					get_template_part( 'template-parts/content/content', 'single-file' );

					// End of the loop.
				endwhile;
			?>
		</main><!-- .site-main -->

		<!-- START: Sidebar -->
		<?php get_sidebar(); ?>
		<!-- END: Sidebar -->
		
		<!-- START: Comments -->
		<?php comments_template( '/comments.php' ); ?>
		<!-- END: Comments -->
	</div><!-- .content-area -->
</div>
<?php get_footer(); ?>