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

	<nav>
		<ul class="breadcrumb">
			<li><a href="<?= home_url() ?>">Halaman Depan</a></li>
			<li class="active"><?php the_title(); ?></li>
		</ul>
	</nav>
			
	<header class="entry-header jumbotron">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<ul class="entry-meta list-inline align-items-center">
			<li class="vcard">
				<img src="<?= get_avatar_url($comment, null) ?>" alt="<?php echo esc_attr( get_the_author() ); ?>" class="" width="35" height="35">
				Diposting oleh <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>" class="url fn" rel="author"><?php the_author(); ?></a>
			</li>
			<li class="">
				<time class="entry-date updated" datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time( 'D, d F Y' ); ?></time>
			</li>
		</ul>
	</header><!-- .entry-header -->

	<?php // get_template_part( 'template-parts/ads/ads', 'card-article' )?>

	<div class="entry-content clearfix">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->

	<?php // get_template_part( 'template-parts/ads/ads', 'card-article' )?>
			
</article><!-- #post-<?php the_ID(); ?> -->

<?php set_post_view() ?>