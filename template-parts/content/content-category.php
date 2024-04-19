<?php
/**
 * The template for displaying all category pages
 *
 * @link https://randdsoftindonesia.com/
 * @package Randd Soft
 * @subpackage Randd_Soft_v2
 * @since Randd Soft 2.0
 */

?>

<?php
$args = [
	'posts_per_page'  => 8,
	'paged'           => ( get_query_var('paged') ) ? get_query_var('paged' ) : 1,
	'post_type'       => ['post', 'file'],
	'category_name'   => get_the_category_by_ID(get_query_var('cat'))
];
$postslist = new WP_Query( $args );
		
if ( $postslist->have_posts() ) : ?>
<h2 class="jumbotron m-0">Menampilkan hasil kategori <?= get_the_category()[0]->name ?></h2>
<div class="row mt-1">

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
				<li>
					<?php
						$newPage = str_replace('page-numbers', 'pagination-link', $page);
						$newPageNoFollow = str_replace('pagination-link current', 'is-current pagination-link', $newPage);
						echo str_replace('pagination-link', 'pagination-link" rel="nofollow', $newPageNoFollow);
					?>
				</li>
			<?php } ?>
		</ul>
	</nav>
<?php } ?>
<!-- END: Pagination -->

<?php wp_reset_postdata(); endif; ?>