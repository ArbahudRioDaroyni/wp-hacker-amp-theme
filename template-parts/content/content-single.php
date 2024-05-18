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
<article id="post-<?php the_ID(); ?>" <?php post_class("is-single"); ?>>

	<amp-ad width="100vw" height="320"
		type="adsense"
		data-ad-client="ca-pub-3780041077137992"
		data-ad-slot="1782717232"
		data-auto-format="rspv"
		data-full-width="true">
		<div overflow="Memuat iklan ..."></div>
		<div fallback>No ad for you</div>
	</amp-ad>

	<?php echo generate_table_of_contents(); ?>
	
	<header class="entry-header jumbotron">
		<span class=""><a href="<?= esc_url( get_category_link( get_the_category()[0]->term_id ) ) ?>" rel="category"><?= get_the_category()[0]->name; ?></a></span>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<ul class="entry-meta list-inline align-items-center">
			<li class="vcard">
				<img src="<?= get_avatar_url($comment, null) ?>" alt="<?php echo esc_attr( get_the_author() ); ?>" class="" width="35" height="35">
				Diposting oleh <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>" class="url fn" rel="author nofollow"><?php the_author(); ?></a>
			</li>
			<li class="">
				<time class="entry-date updated" datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time( 'D, d F Y' ); ?></time>
			</li>
		</ul>
	</header><!-- .entry-header -->

	

	<amp-ad width="100vw" height="320"
		type="adsense"
		data-ad-client="ca-pub-3780041077137992"
		data-ad-slot="1782717232"
		data-auto-format="rspv"
		data-full-width="">
		<div overflow="Memuat iklan ..."></div>
		<div fallback>No ad for you</div>
	</amp-ad>

	<div class="entry-content clearfix">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<h6>Tags</h6>
		<ul class="list-unstyled">
			<?php if (has_tag()) {
				foreach (get_the_tags() as $value) { ?>
				<li>
					#<a href="<?= esc_url( get_tag_link( $value ) ) ?>" rel="tag nofollow" class=""><?= $value->name ?>&nbsp;</a> 
				</li> 
				<?php } ?>
			<?php } else { ?>
				<li>
					#<a href="javascript:void(0)" rel="tag nofollow" class="">tanpa tag</a> 
				</li>
			<?php } ?>
		</ul>
	</footer><!-- .entry-footer -->

	<amp-ad width="100vw" height="320"
		type="adsense"
		data-ad-client="ca-pub-3780041077137992"
		data-ad-slot="1782717232"
		data-auto-format="rspv"
		data-full-width="">
		<div overflow="Memuat iklan ..."></div>
		<div fallback>No ad for you</div>
	</amp-ad>
			
</article><!-- #post-<?php the_ID(); ?> -->

<?php set_post_view() ?>