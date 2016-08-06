<?php get_header(); ?>

  <div id="home_slider">
    <?php putRevSlider("homeslider") ?>
  </div>

  <?php
    query_posts('post_type=page');
    while(have_posts() ) : the_post();
    endwhile;
  ?>

  <?php
    $className = 'section1';
    if (($locations = get_nav_menu_locations()) && $locations['home-pages'] ) {
      $menu = wp_get_nav_menu_object( $locations['home-pages'] );
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      $pageID = array();
      foreach($menu_items as $item) {
        if($item->object == 'page')
          $pageID[] = $item->object_id;
        }
        query_posts( array( 'post_type' => 'page','post__in' => $pageID, 'posts_per_page' => count($pageID), 'orderby' => 'post__in' ) );
      }
      while(have_posts() ) : the_post();
      ?>
        <section id="<?php echo $post->post_name;?>" class="<?php echo $className++ ?>">
          <div class="wrapper">
            <div class="section-title">
              <h1><?php the_title(); ?></h1>
              <div class="border-bottom"></div>
            </div>
            <?php the_content(); ?>
          </div>
        </section>
      <?php endwhile;?>

      <div class="clear"></div>
      <div id="testimonials">
        <div class="section-title">
          <h1>what OUR CLIENTS are saying</h1>
          <div class="border-bottom"></div>
        </div>
        <div class="wrapper">
          <?php 
            $args = array('post_type' => 'testimonials'); 
            $loop = new WP_Query( $args );

            while ( $loop->have_posts() ) : $loop->the_post();
          ?>
          <div class="testimonial_item">
            <p><?php the_content(); ?></p>
            <p class="testimonial_author"><?php the_title(); ?></p>
          </div>
        <?php endwhile;?>
        </div>
      </div>

<?php get_footer(); ?>