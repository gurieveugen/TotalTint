<?php
$options = \__::getOptions(
	array( 
		'sc_phone',
		'sc_fax', 
		'sc_email',
		'sc_street',
		'sc_city',
		'sc_operation_time',
		'sc_sunday_operation_time',
		'ssn_facebook',
		'ssn_twiiter',
		'ssn_youtube'
	)
);
extract($options);
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>
<div class="container">
	<div class="b-map-container">
		<?php echo do_shortcode('[gmap]'); ?>
	</div>
	<article>
		<h1 class="title-page"><?php the_title(); ?></h1>
		<div class="b-contact-info-container row">
			<div class="col-md-4">
				<div class="b-contact-info">
					<p><strong>Phone:</strong> <?php echo $sc_phone; ?></p>
					<p><strong>Fax:</strong> <?php echo $sc_fax; ?></p>
					<p><strong>Email:</strong> <a href="mailto:<?php echo $sc_email; ?>"><?php echo $sc_email; ?></a></p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="b-contact-info">
					<h4>Address</h4>
					<address>Address: <?php echo $sc_street; ?> <br> <?php echo $sc_city; ?></address>
				</div>
			</div>
			<div class="col-md-4">
				<div class="b-contact-info">
					<h4>Opening Hours:</h4>
					<p><?php echo $sc_operation_time; ?></p>
					<p><?php echo $sc_sunday_operation_time; ?></p>
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
<script>
	google.maps.event.addDomListener(window, 'load', initializeGMap);
	function initializeGMap() 
	{
		var myLatlng = new google.maps.LatLng(jQuery('#map-canvas').data('lat'), jQuery('#map-canvas').data('lng'));
		var mapOptions = {
			zoom: 14,
			center: myLatlng,
			disableDefaultUI: true
		}
		var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

		var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			title: 'My location!'
		});
	}
</script>
<?php get_footer(); ?>