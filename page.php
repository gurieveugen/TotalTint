<?php
/**
 *
 * @package WordPress
 * @subpackage Base_Theme
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>

<div class="container">
	<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
	<div class="b-visual-page">
		<?php the_post_thumbnail('page-thumbnail'); ?>
	</div>
	<?php else: echo '<br><br>'; ?>
	<?php endif; ?>
	<article>
		<h1 class="title-page"><?php the_title(); ?></h1>
		<div class="content-style">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'theme' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		</div>
	</article>
</div>

<?php endif; ?>

<?php get_footer(); ?>
