<?php
/**
 * @package WordPress
 * @subpackage Base_Theme
 */
?>
	<footer id="footer">
		<?php if(!is_front_page() && !is_page(4)): ?>
		<section class="b-info-row">
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
		<?php endif; ?>
		<div class="footer-block">
			<div class="container">
				<?php wp_nav_menu( array(
					'container' => false,
					'theme_location' => 'bottom_nav',
					'menu_class' => 'bottom-nav'
					)); ?>
				<p>Copyright: Total Tint Solutions 2014</p>
			</div>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
