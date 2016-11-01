<div class="intro">
  <div class="left">
    <?php the_content(); ?>
  </div>
  <div class="right">
    <img src="<?php the_post_thumbnail_url(); ?>">
    <small>Photo by Ben Jack of <a href="http://fuzzco.com">Fuzzco</a></small>
  </div>
</div>
<div class="featured-posts">
  <h3>Featured Work</h3>
  <?php
    $args = array(
        'post_type'    => array(
            'post'
        ),
        'posts_per_page' => -1,
        'orderby' => 'menu_order'
     );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
  ?>
  <h4><a href="<?php echo the_field('url'); ?>" target="_blank"><?php the_title(); ?></a></h4>
  <?php the_content(); ?>
  <?php endwhile; ?>
</div>

