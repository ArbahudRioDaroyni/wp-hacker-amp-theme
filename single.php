<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Jejak Hacker
 * @subpackage jejak_hacker
 * @since 1.01
 */

get_header(); ?>

<div class="container">
  <div id="primary" class="content-area row">
    <main id="main" class="site-content col-lg-8" role="main">
      <?php 
        // Start the loop.
        while ( have_posts() ) :
          the_post();

          // Include the single post content template.
          get_template_part( 'template-parts/content/content', 'single' );

          // End of the loop.
        endwhile;
      ?>
    </main><!-- .site-main -->

    <aside class="col-lg-4">
      <!-- START: Sidebar -->
      <?php get_sidebar(); ?>
      <!-- END: Sidebar -->
    </aside>

    <div class="col-lg-12">
      <!-- START: Comments -->
      <?php comments_template( '/comments.php' ); ?>
      <!-- END: Comments -->

      <!-- START: Reply -->
      <?= the_comment_form() ?>
      <!-- END: Reply -->
    </div>

  </div><!-- .content-area -->
</div>
<?php get_footer(); ?>