<?php
/**
 * The template for displaying all category pages
 *
 * @package Randd
 * @subpackage Randd_Soft_v2
 * @since Randd Soft 2.0
 */

get_header(); ?>

<div class="container">
  <div id="primary" class="content-area row">
    <main id="main" class="site-content col-lg-8" role="main">
      <?php get_template_part( 'template-parts/content/content', 'category' ); ?>
    </main><!-- .site-main -->

    <aside class="col-xl-4 col-md-4 col-12 order-md-1">
      <!-- START: Sidebar -->
      <?php get_sidebar(); ?>
      <!-- END: Sidebar -->
    </aside>
  </div><!-- .content-area -->
</div>
<?php get_footer(); ?>