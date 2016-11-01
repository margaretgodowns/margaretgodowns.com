<div class="intro">
  <div class="contact-info line-left">
    <?php the_content(); ?>
  </div>
  <div class="image line-center">
    <img src="<?php the_post_thumbnail_url(); ?>">
    <small>Photo by Ben Jack of <a href="http://fuzzco.com">Fuzzco</a></small>
  </div>
</div>
<div class="featured-work-title">
  <h3 class="line-right">Featured Work</h3>
</div>
<div class="featured-posts">
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
  <div class="flex-item">
    <a href="<?php echo the_field('url'); ?>" target="_blank">
      <h4><?php the_title(); ?></h4>
    <?php the_content(); ?>
    </a>
  </div>
  <?php endwhile; ?>
</div>

