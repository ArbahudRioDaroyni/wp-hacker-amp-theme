<?php
/**
 * The template for displaying all tag pages
 *
 * @link https://jejakhacker.com/
 * @package Jejak Hacker
 * @subpackage wp_jejak_hacker
 * @since 1.0.1
 */

?>
<?php $args = [
	'posts_per_page'  => 8,
	'paged'           => ( get_query_var('paged')) ? get_query_var('paged' ) : 1,
	'post_type'       => ['post', 'file'],
	'tag'   		 			=> get_queried_object()->slug
];
$postslist = new WP_Query( $args );

// var_dump(get_query_var('paged'));
		
if ( $postslist->have_posts() ) : ?>
	<h2 class="jumbotron">Menampilkan hasil tag <?= get_queried_object()->slug ?></h2>
	<div class="row">

		<?php while ( $postslist->have_posts() ) : $postslist->the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class("col-md-6 is-category"); ?>>
				<h2 class="entry-title h4"><a href="<?= get_the_permalink() ?>"><?php the_title() ?></a></h2>
				<div class="meta">
					<img src="<?= get_avatar_url($comment, null) ?>" alt="<?php echo esc_attr( get_the_author() ); ?>" class="" width="35" height="35">
					<span class="">Ditulis oleh 
						<a rel="nofollow" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>" class="url fn" rel="author"><?php the_author(); ?></a>
					</span> |
					<time class="entry-date updated" datetime="<?php the_time('Y-m-d H:i'); ?>"><?php the_time( 'l, d F Y' ); ?></time>
				</div>
			</article><!-- #post-<?php the_ID(); ?> -->

		<?php endwhile; ?>
	</div>

	<!-- START: Pagination -->
	<?php $pages = paginate_links( [
		'base'        => get_pagenum_link(1) . '%_%',
		'format'      => 'page/%#%',
		'current'     => max(1, get_query_var('paged')),
		'end_size'    => 2,
		'total'       => ceil( $postslist->found_posts / $args['posts_per_page'] ),
		'prev_text'   => __(' << '),
		'next_text'   => __(' >> '),
		'type'        => 'array',
	]); ?>

	<?php if( is_array( $pages ) ) { ?>
		<nav role="navigation" aria-label="pagination" class="navigation-pageination">
			<ul class="pagination">
				<?php
				foreach ( $pages as $page ) { ?>
					<li><?php echo str_replace('current', 'active', $page); ?></li>
				<?php } ?>
			</ul>
		</nav>
	<?php } ?>
	<!-- END: Pagination -->

<?php wp_reset_postdata(); endif; ?>