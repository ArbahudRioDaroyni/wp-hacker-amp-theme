<?php
/**
 * The template for displaying 404 page
 *
 * @package Hacker_AMP_Theme
 * @subpackage Hacker_AMP_Theme
 * @since Hacker AMP Theme 1.0
 */

get_header(); ?>

<section class="not-found text-center d-flex align-items-center">
  <div class="container-fluid">
    <header>
      <h1>404</h1>
      <h2> Page Not Found </h2>
    </header>
    <div>
      <p>
      Halaman yang Anda cari mungkin telah dihapus atau diubah atau untuk sementara tidak tersedia.</p>
      <div>
        <a href="<?= get_site_url() ?>" class="btn btn-primary">Go To Home</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>