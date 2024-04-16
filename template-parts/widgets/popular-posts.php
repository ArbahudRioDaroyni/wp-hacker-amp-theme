<div class="panel panel-primary">
  <div class="panel-heading"><h4 class="panel-title">Trending:</h4></div>
  <div class="panel-body">
    <ul>
      <?php
        $posts_array = get_list_popular_posts($total = 5, $offset = null);
        foreach ( $posts_array as $post ) : setup_postdata( $post );
      ?>
        <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
      <?php endforeach; wp_reset_postdata() ?>
    </ul>
  </div>
</div>