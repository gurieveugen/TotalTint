<?php
/**
 * @package WordPress
 * @subpackage Base_Theme
 */
?>

<?php get_header(); ?>

<section class="main-slider-container">
	<div class="main-slider">
		<ul class="slides">
			<li>
				<div class="image-container" style="background-image: url(<?php echo TDU; ?>/images/img-1.jpg);"></div>
				<div class="container">
					<div class="box">
						<h3 class="title">Satisfaction Guaranteed</h3>
						<h2>over 27 years of happy clients</h2>
						<p>At Total Tint Solutions our tinting experience and quality products ensures the best results.</p>
						<div class="text-right">
							<a href="#" class="btn-a">View Gallery</a>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="image-container" style="background-image: url(<?php echo TDU; ?>/images/img-1.jpg);"></div>
				<div class="container">
					<div class="box">
						<h3 class="title">Satisfaction Guaranteed</h3>
						<h2>over 27 years of happy clients</h2>
						<p>At Total Tint Solutions our tinting experience and quality products ensures the best results.</p>
						<div class="text-right">
							<a href="#" class="btn-a">View Gallery</a>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="image-container" style="background-image: url(<?php echo TDU; ?>/images/img-1.jpg);"></div>
				<div class="container">
					<div class="box">
						<h3 class="title">Satisfaction Guaranteed</h3>
						<h2>over 27 years of happy clients</h2>
						<p>At Total Tint Solutions our tinting experience and quality products ensures the best results.</p>
						<div class="text-right">
							<a href="#" class="btn-a">View Gallery</a>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<script>
jQuery(function(){
	jQuery('.main-slider').flexslider({
	animation: "slide",
	slideshow: true,
	slideshowSpeed: 7000,
	animationSpeed: 600,
	controlNav: false
	});
});
</script>
<section class="b-info-row v1">
	<div class="container">
		<div class="text">
			<p>Looking for a quality and affordable tinting solutions for your home, car or office?</p>
		</div>
		<div class="buttons">
			<a href="#" class="btn-b yellow">Get a Quote</a>
			<a href="#" class="btn-b">View SERVICES</a>
		</div>
	</div>
</section>
<div class="container">
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
</div>

<?php get_footer(); ?>