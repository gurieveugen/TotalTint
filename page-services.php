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
	<section class="widgets-section cf">
		<div class="row">
			<div class="col-md-4">
				<article class="b-widget-feed">
					<header class="cf">
						<i class="fa fa-home"></i>
						<h1>HOME or OFFICE</h1>
					</header>
					<div class="text">
						<p>Total Tint Solutions has the right film for all home and office applications including windows, solar control, anti graffiti, decorative and more...</p>
					</div>
					<div class="text-right">
						<a href="#" class="link-more">Learn more <i>+</i></a>
					</div>
				</article>
			</div>
			<div class="col-md-4">
				<article class="b-widget-feed">
					<header class="cf">
						<i class="fa fa-lock"></i>
						<h1>Safety and Security</h1>
					</header>
					<div class="text">
						<p>Security film is a great deterrent for vandalism and break-ins, reducing cleanup operations and the risk of burglary.....</p>
					</div>
					<footer class="text-right">
						<a href="#" class="link-more">Learn more <i>+</i></a>
					</footer>
				</article>
			</div>
			<div class="col-md-4">
				<article class="b-widget-feed">
					<header class="cf">
						<i class="fa fa-car"></i>
						<h1>Automotive</h1>
					</header>
					<footer class="text">
						<p>Whether you’re on the road or the water, tinting will improve the look of your vehicle and provide additional privacy...</p>
					</footer>
					<footer class="text-right">
						<a href="#" class="link-more">Learn more <i>+</i></a>
					</footer>
				</article>
			</div>
		</div>
	</section>
	<div class="content-style">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'theme' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div>
</div>

<?php endif; ?>

<?php get_footer(); ?>