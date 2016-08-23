<?php get_header(); ?>
	<main role="main" class="clear">
    <div class="page_title">
      <img src="<?php echo get_template_directory_uri(); ?>/img/h_blog.jpg" alt="Blog">
      <h1>Tag: <?php echo single_tag_title('', false); ?></h1>
    </div>
		<section class="main_content clear">
      <div class="wrapper">
        <ul class="blog_list">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
          <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php if ( has_post_thumbnail()) : ?>
              <figure>
              <?php the_post_thumbnail('featured'); ?>
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>
              </figure>
            <?php endif; ?>

            <div class="post_info">
              <h3 class="entry_title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
              <p class="post_details"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></p>
              <p class="excerpt"><?php html5wp_excerpt('html5wp_index'); ?></p>
            </div>
          </li>
          <?php endwhile; ?>
          <?php else: ?>
            <li>
              <div class="post_info">
                <h3><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h3>
              </div>
            </li>
          <?php endif; ?>
        </ul>

        <?php get_template_part('pagination'); ?>
      </div>
		</section>
    <aside class="sidebar clear" role="complementary">
      <div class="wrapper"> 
        <div class="sidebar-widget">
          <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('blog')) ?>
        </div>
      </div>
    </aside>
	</main>
<?php get_footer(); ?>
