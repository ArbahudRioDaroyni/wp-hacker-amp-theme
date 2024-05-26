<?php
/**
 * The template for displaying aside
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-hacker-amp-theme
 * @package Hacker_AMP_Theme
 * @subpackage Hacker_AMP_Theme
 * @since 1.0.1
 */
?>
<aside class="col-lg-4">
	<!-- widget advertisement -->
	<?php get_template_part( 'template-parts/components', 'adsense-display' )?>

	<?php get_template_part( 'template-parts/widgets/list-file' ); ?>

	<?php get_template_part( 'template-parts/widgets/related-posts' ); ?>

	<?php get_template_part( 'template-parts/widgets/recent-posts' ); ?>

	<?php get_template_part( 'template-parts/components', 'adsense-display' )?>

	<?php get_template_part( 'template-parts/widgets/popular-posts' ); ?>

	<!-- widget advertisement -->
	<div class="widget rounded text-md-center">
		<!-- <span class="ads-title">- Sponsored Ad -</span> -->
		<?php get_template_part( 'template-parts/components', 'adsense-display' )?>
	</div>

	<?php get_template_part( 'template-parts/widgets/collection-tags' ); ?>
</aside>
