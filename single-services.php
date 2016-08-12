<?php get_header(); ?>

	<main role="main" class="clear">
		<div class="page_title">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			<h1><?php the_title(); ?></h1>
		</div>
		<section class="main_content clear">
			<div class="wrapper">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>

			<?php else: ?>

				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>

			<?php endif; ?>
			</div>
		</section>
		<?php get_sidebar(); ?>
	</main>

<?php get_footer(); ?>