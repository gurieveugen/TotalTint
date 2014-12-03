<?php
/**
 * @package WordPress
 * @subpackage Base_Theme
 */
?>

<?php get_header(); ?>

<?php echo do_shortcode( '[slider]' ); ?>
<section class="b-info-row v1">
	<div class="container">
		<div class="text">
			<p>Looking for a quality and affordable tinting solutions for your home, car or office?</p>
		</div>
		<div class="buttons">
			<a href="<?php echo get_permalink( 4 ); ?>" class="btn-b yellow">Get a Quote</a>
			<a href="<?php echo get_permalink( 8 ); ?>" class="btn-b">View SERVICES</a>
		</div>
	</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>