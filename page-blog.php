<?php get_header(); 
	/* Template Name: Blog Posts */
?>

	<main role="main" class="clear">
		<div class="page_title">
			<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			<h1><?php the_title(); ?></h1>
		</div>
		<section class="main_content clear">
			<div class="wrapper">
				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>
			</div>
		</section>
		<?php get_sidebar(); ?>
	</main>

<?php get_footer(); ?>
