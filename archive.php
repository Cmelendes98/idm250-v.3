<?php get_header(); ?>

	<div class='body_wrap flex-container'> 
	<div class ='twice-width'>
			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
