<?php get_header(); ?>

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
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </div>
        </section>
      <?php endwhile;?>

      <div id="testimonials">
        <?php 
 
//Define your custom post type name in the arguments
 
$args = array('post_type' => 'testimonials');
 
//Define the loop based on arguments
 
$loop = new WP_Query( $args );
 
//Display the contents
 
while ( $loop->have_posts() ) : $loop->the_post();
?>
<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="entry-content">
<?php the_content(); ?>
</div>
<?php endwhile;?>
      </div>

<?php get_footer(); ?>