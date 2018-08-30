<?php /* Template Name: page with sidebar */ get_header(); ?>

<div class='body_wrap flex-container'> 
	<div class ='twice-width'>
	

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>
				
				<br class="clear">

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
