<?php
/*
 * @package WordPress
 * Template Name: Contact Page
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>
<div class="container">
	<div class="b-map-container">
		<img src="<?php echo TDU; ?>/images/img-map.jpg" alt="">
	</div>
	<article>
		<h1 class="title-page"><?php the_title(); ?></h1>
		<div class="b-contact-info-container row">
			<div class="col-md-4">
				<div class="b-contact-info">
					<p><strong>Phone:</strong> (08) 321 4567</p>
					<p><strong>Fax:</strong> (08 9865 3214</p>
					<p><strong>Email:</strong> <a href="mailto:info@totaltinesolutions.com.au">info@totaltinesolutions.com.au</a></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="b-contact-info">
					<h4>Address</h4>
					<address>Address: 123 Street rd, Osborne Park. <br> Perth, Western Australia. <br> 6000</address>
				</div>
			</div>
			<div class="col-md-4">
				<div class="b-contact-info">
					<h4>Opening Hours:</h4>
					<p>Monday to Saturday: 8am - 5pm</p>
					<p>Sunday, CLOSED.</p>
				</div>
			</div>
		</div>
		<div class="content-style">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'theme' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
		</div>
	</article>
</div>
<?php endif; ?>

<section class="b-form-contact">
	<div class="container">
		<?php echo do_shortcode('[contact-form-7 id="32" title="Contact Form"]'); ?>
	</div>
</section>
<?php get_footer(); ?>