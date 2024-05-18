<?php
/**
 * The template for displaying all category pages
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-hacker-amp-theme
 * @package Hacker_AMP_Theme
 * @subpackage Hacker_AMP_Theme
 * @since 1.0.1
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area row">
		<main id="main" class="site-content col-lg-8" role="main">
			<?php get_template_part( 'template-parts/content/content', 'category' ); ?>
		</main><!-- .site-main -->

		<aside class="col-xl-4 col-md-4 col-12 order-md-1">
			<!-- START: Sidebar -->
			<?php get_sidebar(); ?>
			<!-- END: Sidebar -->
		</aside>
	</div><!-- .content-area -->
</div>
<?php get_footer(); ?>