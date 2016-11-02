<div class="intro">
  <div class="contact-info line-left wow fadeInUp">
    <?php the_content(); ?>
  </div>
  <div class="image line-center wow fadeInUp">
    <img src="<?php the_post_thumbnail_url(); ?>">
    <small>Photo by Ben Jack of <a href="http://fuzzco.com">Fuzzco</a></small>
  </div>
</div>
<div class="featured-work-title wow fadeIn">
  <h3 class="line-right">Recent Work</h3>
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
  <div class="flex-item wow fadeInUp">
    <a href="<?php echo the_field('url'); ?>" target="_blank">
      <h4><?php the_title(); ?></h4>
    <?php the_content(); ?>
    </a>
  </div>
  <?php endwhile; ?>
</div>
<div class="catalogue-title wow fadeInUp">
  <h3 class="line-left">Catalogue</h3>
</div>
<div class="catalogue">
  <div class="wordpress-themes flex-item line-right">
    <h5 class="wow fadeInUp">Wordpress Themes</h5>
    <?php
      $args = array(
          'post_type'    => array(
              'wordpress_theme'
          ),
          'posts_per_page' => -1,
          'orderby' => 'menu_order'
       );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
    ?>
      <div class="wow fadeInUp">
        <a href="<?php echo the_field('url'); ?>" target="_blank">
          <p><?php the_title(); ?></p>
        </a>
      </div>
    <?php endwhile; ?>
    <div class="ecommerce">
      <h5 class="ecommerce-title wow fadeInUp">Ecommerce</h5>
      <?php
        $args = array(
            'post_type'    => array(
                'ecommerce'
            ),
            'posts_per_page' => -1,
            'orderby' => 'menu_order'
         );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
      ?>
        <div class="wow fadeInUp">
          <a href="<?php echo the_field('url'); ?>" target="_blank">
            <p><?php the_title(); ?></p>
          </a>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
  <div class="wordpress-themes flex-item line-center">
    <h5 class="wow fadeInUp">Feature Development &amp; Maintenance</h5>
    <?php
      $args = array(
          'post_type'    => array(
              'maintenance'
          ),
          'posts_per_page' => -1,
          'orderby' => 'menu_order'
       );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
    ?>
      <div class="wow fadeInUp">
        <a href="<?php echo the_field('url'); ?>" target="_blank">
          <p><?php the_title(); ?></p>
        </a>
      </div>
    <?php endwhile; ?>
  </div>
</div>
