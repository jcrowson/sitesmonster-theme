<?php
  $args = array(
    'posts_per_page' => -1,
    'post_type' => 'post',
  );
  $post_query = new WP_Query($args);
  if($post_query->have_posts() ) {
    while($post_query->have_posts() ) {
      $post_query->the_post();
      include('tutorial-card.php');
    }
  }
  wp_reset_postdata();
?>