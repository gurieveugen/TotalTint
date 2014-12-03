<?php
/*
 * @package WordPress
 * Template Name: Services Page
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>

<div class="container">
	<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
	<div class="b-visual-page">
		<?php the_post_thumbnail('page-thumbnail'); ?>
	</div>
	<?php endif; ?>
	<?php echo do_shortcode('[post_feed]'); ?>
	<div class="content-style">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'theme' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div>
</div>

<?php endif; ?>

<?php get_footer(); ?>