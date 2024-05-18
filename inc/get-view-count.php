<?php
// get post view count
function get_post_view() {
	return get_post_meta(get_the_ID(), 'post_views_count', true);
}

function set_post_view() {
	$key = 'post_views_count';
	$post_id = get_the_ID();
	$count = (int) get_post_meta($post_id, $key, true);
	update_post_meta($post_id, $key, ++$count);
}

// Menambahkan kolom tampilan pada tabel post di admin
function posts_column_views($columns) {
	$columns['post_views'] = 'Views';
	return $columns;
}

// Menampilkan jumlah tampilan di kolom yang ditambahkan
function posts_custom_column_views($column) {
	if ($column === 'post_views') {
		echo get_post_view();
	}
}

add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views');
// /. Mendapatkan jumlah tampilan post
