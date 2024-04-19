<?php
/**
 * The template for displaying all page
 *
 * @link https://jejakhacker.com/
 * @package Jejak Hacker
 * @subpackage jejak_hacker
 * @since 1.01
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class("is-single"); ?>>

	<nav>
		<ul class="breadcrumb">
			<li><a href="<?= home_url() ?>">Halaman Depan</a></li>
			<li><a href="<?= esc_url( get_category_link( get_the_category()[0]->term_id ) ) ?>" rel="category"><?= get_the_category()[0]->name; ?></a></li>
			<li class="active"><?php the_title(); ?></li>
		</ul>
	</nav>

	<?php get_template_part( 'template-parts/components', 'adsense-display' )?>
	
	<header class="entry-header jumbotron">
		<span class=""><a href="<?= esc_url( get_category_link( get_the_category()[0]->term_id ) ) ?>" rel="category"><?= get_the_category()[0]->name; ?></a></span>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
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

	<?php get_template_part( 'template-parts/components', 'adsense-display' )?>

	<div class="entry-content clearfix">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<h6>Tags</h6>
		<ul class="list-unstyled">
			<?php if (has_tag()) {
				foreach (get_the_tags() as $value) { ?>
				<li>
					#<a href="<?= esc_url( get_tag_link( $value ) ) ?>" rel="tag" class=""><?= $value->name ?>&nbsp;</a> 
				</li> 
				<?php } ?>
			<?php } else { ?>
				<li>
					#<a href="javascript:void(0)" rel="tag" class="">tanpa tag</a> 
				</li>
			<?php } ?>
		</ul>
	</footer><!-- .entry-footer -->

	<?php get_template_part( 'template-parts/components', 'adsense-display' )?>
			
</article><!-- #post-<?php the_ID(); ?> -->

<?php set_post_view() ?>