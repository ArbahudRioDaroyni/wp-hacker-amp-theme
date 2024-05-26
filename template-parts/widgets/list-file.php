<?php

$postslist = new WP_Query([
	'posts_per_page'	=> 5,
	'post_type'				=> ['file']
]);

if ($postslist->have_posts()) : ?>
	<section class="card card-terminal-linux mt-0">
		<header class="header">
			<div class="title">
				<p>Aplikasi Terbaru:</p>
			</div>
			<div class="header-side">
				<span class="icon icon-search"></span>
			</div>
		</header>
		<ul class="footer">
			<?php while ($postslist->have_posts()) : $postslist->the_post(); ?>
				<li class="code">
					<span class="icon icon-arrow-right"></span>
					<a class="text" href="<?php the_permalink(); ?>"><?= esc_attr( get_post_meta( get_the_ID(), 'name', true ) ); ?></a>
				</li>
			<?php endwhile; ?>
		</ul>
	</section>
<?php wp_reset_postdata(); endif; ?>
