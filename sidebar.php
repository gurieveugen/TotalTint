<?php if ( is_active_sidebar('promo-boxes') ) : ?>
<div class="container">
	<section class="widgets-section cf">
		<div class="row">
			<?php dynamic_sidebar( 'promo-boxes' ); ?>
		</div>
	</section>
</div>
<?php endif; ?>
