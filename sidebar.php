<?php
/**
 * The template for displaying aside
 *
 * @package Randd
 * @subpackage Randd_Soft_v2
 * @since Randd Soft 2.0
 */
?>
<div class="sidebar">
  <!-- widget advertisement -->
  <?php get_template_part( 'template-parts/components', 'adsense-display' )?>

  <?php get_template_part( 'template-parts/widgets/list-file' ); ?>
  
  <?php get_template_part( 'template-parts/widgets/similar-post' ); ?>

  <?php get_template_part( 'template-parts/widgets/recent-posts' ); ?>

  <?php get_template_part( 'template-parts/components', 'adsense-display' )?>

  <?php get_template_part( 'template-parts/widgets/popular-posts' ); ?>

  <!-- widget advertisement -->
  <div class="widget rounded text-md-center">
    <!-- <span class="ads-title">- Sponsored Ad -</span> -->
    <?php get_template_part( 'template-parts/components', 'adsense-display' )?>
  </div>

  <?php get_template_part( 'template-parts/widgets/collection-tags' ); ?>
</div>