<?php get_header(); ?>

<div class='body_wrap flex-container'> 
	<div class ='twice-width'>

			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
