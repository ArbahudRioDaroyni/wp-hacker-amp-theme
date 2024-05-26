<?php $args = [
	'posts_per_page'	=> 5,
	'post_type'				=> ['post'],
	'orderby'					=> 'meta_value_num',
	'meta_key'				=> 'post_views_count'
];
$postslist = new WP_Query($args);

if ($postslist->have_posts()) : ?>
	<div class="card card-terminal-linux">
		<div class="header">
			<div class="title">
				<p>Artikel Populer:</p>
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