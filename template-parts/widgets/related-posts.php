<?php $args = [
	'posts_per_page'	=> 5,
	'post_type'				=> ['post'],
  'tag'   		 			=> get_the_tags()[0]->slug
];
$postslist = new WP_Query($args);

if ($postslist->have_posts()) : ?>
	<div class="card card-terminal-linux">
		<div class="header">
			<div class="title">
				<p>Baca juga:</p>
			</div>
			<div class="header-side">
				<span class="icon icon-search"></span>
			</div>
		</div>
		<ul class="footer">
			<?php while ($postslist->have_posts()) : $postslist->the_post(); ?>
				<li class="code">
					<a class="text special-text" href="<?php the_permalink(); ?>"><?= the_title() ?></a>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
<?php wp_reset_postdata(); endif; ?>