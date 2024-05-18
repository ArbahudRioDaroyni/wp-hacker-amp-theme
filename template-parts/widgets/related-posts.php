<?php $args = [
	'posts_per_page'	=> 5,
	'post_type'				=> ['post'],
  'tag'   		 			=> get_the_tags()[0]->slug
];
$postslist = new WP_Query( $args );
if ( $postslist->have_posts() ) : ?>

<div class="panel panel-primary">
	<div class="panel-heading"><h4 class="panel-title">Baca juga:</h4></div>
	<div class="panel-body">
		<ul>

			<?php while ( $postslist->have_posts() ) : $postslist->the_post(); ?>
				<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>
<?php wp_reset_postdata(); endif; ?>