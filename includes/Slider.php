<?php 

class Slider{
	//                    __  __              __    
	//    ____ ___  ___  / /_/ /_  ____  ____/ /____
	//   / __ `__ \/ _ \/ __/ __ \/ __ \/ __  / ___/
	//  / / / / / /  __/ /_/ / / / /_/ / /_/ (__  ) 
	// /_/ /_/ /_/\___/\__/_/ /_/\____/\__,_/____/  
	public function __construct()
	{
		add_shortcode( 'slider', array($this, 'getHTML') );
	}

	public function getHTML()
	{
		$slides = $this->getSlides();
		ob_start();
		?>
		<section class="main-slider-container">
			<div class="main-slider">
				<ul class="slides">
					<?php
					foreach ($slides as $slide) 
					{
						echo $this->wrapSlide($slide);
					}
					?>
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
		<?php
		
		$var = ob_get_contents();
		ob_end_clean();
		return $var;
	}

	/**
	 * Wrap single slide
	 * @param  stdClass $slide --- post object with other options
	 * @return string --- HTML code
	 */
	private function wrapSlide($slide)
	{
		ob_start();
		?>
		<li>
			<div class="image-container" style="background-image: url(<?php echo $slide->thumbnail; ?>);"></div>
			<div class="container">
				<div class="box">
					<h3 class="title"><?php echo $slide->subtitle; ?></h3>
					<h2><?php echo $slide->post_title; ?></h2>
					<p><?php echo $slide->post_content; ?></p>
					<div class="text-right">
						<a href="<?php echo $slide->view_gallery_url; ?>" class="btn-a">View Gallery</a>
					</div>
				</div>
			</div>
		</li>
		<?php
		$var = ob_get_contents();
		ob_end_clean();
		return $var;
	}

	/**
	 * Get and initialize slides
	 * @return array --- slides
	 */
	public function getSlides()
	{
		$args = array(
			'posts_per_page'   => -1,
			'offset'           => 0,
			'category'         => '',
			'category_name'    => '',
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'slider',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'post_status'      => 'publish',
			'suppress_filters' => true 
		);

		$posts = get_posts( $args );
		if(count($posts))
		{
			foreach ($posts as &$p) 
			{
				$p->thumbnail        = 'http://placehold.it/1706x633';
				$p->subtitle         = (string) get_post_meta( $p->ID, 'additional_options_subtitle', true );
				$p->view_gallery_url = (string) get_post_meta( $p->ID, 'additional_options_view_gallery_url', true );

				if(has_post_thumbnail( $p->ID ))
				{
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($p->ID), 'slide' );
					$p->thumbnail = $thumb['0']; 
				}
			}
		}
		return $posts;
	}
}