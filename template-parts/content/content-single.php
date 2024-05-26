<?php
/**
 * The template for displaying all page
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-hacker-amp-theme
 * @package Hacker_AMP_Theme
 * @subpackage Hacker_AMP_Theme
 * @since 1.0.1
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('h-entry'); ?>>
	
	<header class="jumbotron">
		<a
			href="<?php echo esc_url( get_category_link( get_the_category()[0]->term_id ) ) ?>"
			class="p-category"
			rel="category"
		><?php echo get_the_category()[0]->name; ?></a>
		<h1 class="p-name"><?php the_title(); ?></h1>
		<p>
			<img
				src="<?php echo get_avatar_url($comment, null) ?>"
				alt="<?php echo esc_attr(get_the_author()); ?>"
				class="u-photo"
				width="35"
				height="35"
			>
			Diposting oleh
			<cite class="p-author h-card">
				<a
					href="<?php echo esc_url( get_author_posts_url( get_the_author_meta('ID') ) ); ?>"
					title="<?php echo esc_attr(get_the_author()); ?>"
					class="u-url p-name"
					rel="author"
				><?php the_author(); ?></a>
			</cite>
			<time
				class="dt-published"
				datetime="<?php the_time('c'); ?>"
			><?php the_time('D, d F Y'); ?></time>
		</p>
	</header><!-- .entry-header -->

	<section class="e-ad">
		<amp-ad width="100vw" height="320"
			type="adsense"
			data-ad-client="ca-pub-3780041077137992"
			data-ad-slot="1782717232"
			data-auto-format="rspv"
			data-full-width="">
			<div overflow="Memuat iklan ..."></div>
			<div fallback>No ad for you</div>
		</amp-ad>
	</section>

	<section class="e-content">
		<?php the_content(); ?>
	</section><!-- .entry-content -->

	<footer class="e-footer">
		<h6>Tags</h6>
		<ul class="list-unstyled">
			<?php if (has_tag()) {
				foreach (get_the_tags() as $value) { ?>
				<li>
					#<a href="<?php echo esc_url( get_tag_link($value) ) ?>" rel="tag" class="p-category"><?php echo $value->name ?>&nbsp;</a> 
				</li> 
				<?php } ?>
			<?php } else { ?>
				<li>
					#<a href="javascript:void(0)" rel="tag nofollow" class="">tanpa tag</a> 
				</li>
			<?php } ?>
		</ul>
	</footer><!-- .entry-footer -->

	<section class="e-ad">
		<amp-ad width="100vw" height="320"
			type="adsense"
			data-ad-client="ca-pub-3780041077137992"
			data-ad-slot="1782717232"
			data-auto-format="rspv"
			data-full-width="">
			<div overflow="Memuat iklan ..."></div>
			<div fallback>No ad for you</div>
		</amp-ad>
	</section>
			
</article><!-- #post-<?php the_ID(); ?> -->

<?php set_post_view() ?>