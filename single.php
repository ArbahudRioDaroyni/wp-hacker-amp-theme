<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-hacker-amp-theme
 * @package Hacker_AMP_Theme
 * @subpackage Hacker_AMP_Theme
 * @since 1.0.1
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content row">
		<!-- START: Breadcrumb -->
		<nav>
			<ul class="breadcrumb">
				<li><a href="<?= home_url() ?>">Halaman Depan</a></li>
				<li><a href="<?= esc_url( get_category_link( get_the_category()[0]->term_id ) ) ?>" rel="category"><?= get_the_category()[0]->name; ?></a></li>
				<li class="active"><?php the_title(); ?></li>
			</ul>
		</nav>
		<!-- END: Breadcrumb -->

		<main id="main" class="site-content col-lg-8" role="main">
			<?php 
				// Start the loop.
				while ( have_posts() ) :
					the_post();

					// Include the single post content template.
					get_template_part( 'template-parts/content/content', 'single' );

					// End of the loop.
				endwhile;
			?>
		</main><!-- .site-main -->

		<aside class="col-lg-4">
			<!-- START: Sidebar -->
			<?php get_sidebar(); ?>
			<!-- END: Sidebar -->
		</aside>

		<div class="col-lg-12">
			<!-- START: Comments -->
			<?php comments_template( '/comments.php' ); ?>
			<!-- END: Comments -->

			<!-- START: Reply -->
			<?= the_comment_form() ?>
			<!-- END: Reply -->
		</div>

	</div><!-- .content-area -->
</div>
<?php get_footer(); ?>