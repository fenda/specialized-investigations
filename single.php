<?php get_header(); ?>

	<main role="main" class="clear">
		<div class="page_title">
			<img src="<?php echo get_template_directory_uri(); ?>/img/h_blog.jpg" alt="Blog">
			<h1>Blog</h1>
		</div>
		<section class="main_content clear">
			<div class="wrapper">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail()) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				<?php endif; ?>

					<h1><?php the_title(); ?></h1>

					<span class="date"><?php the_time('F j, Y'); ?></span>
					<?php the_content(); // Dynamic Content ?>
					<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>');?>

					<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', ');?></p>
				</article>

			<?php endwhile; ?>
			<?php else: ?>
				<article>
					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
				</article>
			<?php endif; ?>
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
