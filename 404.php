<?php
/**
 * The template for displaying 404 page
 *
 * @link https://github.com/ArbahudRioDaroyni/wp-hacker-amp-theme
 * @package Hacker_AMP_Theme
 * @subpackage Hacker_AMP_Theme
 * @since 1.0.1
 */

get_header(); ?>

<section class="not-found text-center d-flex align-items-center">
	<div class="container-fluid">
		<header>
			<h1>404</h1>
			<h2>Halaman Tidak Ditemukan</h2>
		</header>
		<p>Maaf, halaman yang Anda cari mungkin telah dihapus atau sementara tidak tersedia.</p>
		<a href="<?= get_site_url(); ?>" class="btn btn-primary">Kembali ke Beranda</a>
	</div>
</section>

<?php get_footer(); ?>