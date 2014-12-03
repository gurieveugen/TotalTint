<?php

class PostFeed{
	//                    __  __              __    
	//    ____ ___  ___  / /_/ /_  ____  ____/ /____
	//   / __ `__ \/ _ \/ __/ __ \/ __ \/ __  / ___/
	//  / / / / / /  __/ /_/ / / / /_/ / /_/ (__  ) 
	// /_/ /_/ /_/\___/\__/_/ /_/\____/\__,_/____/  
	public function __construct()
	{
		add_shortcode( 'post_feed', array(&$this, 'getHTML') );
	}	                                             

	/**
	 * Get Post Feed HTML code
	 * @return string --- HTML code
	 */
	public function getHTML()
	{
		$rows  = array();
		$posts = $this->getPosts();
		if(count($posts))
		{
			for($i = 0; $i < count($posts); $i+=3)
			{
				$items = array();
				for($x = 0; $x < 3; $x++)
				{
					if(isset($posts[$i+$x]))
					{
						array_push($items, $this->wrapPost($posts[$i+$x]));	
					}
				}
				array_push(
					$rows, 
					sprintf('<div class="row">%s</div>', implode('', $items))
				);
			}
		}
		return sprintf('<section class="widgets-section cf">%s</section>', implode('', $rows));
	}

	/**
	 * Wrap single post to HTML code
	 * @param  object $p --- post stdClass
	 * @return string --- HTML code
	 */
	private function wrapPost($p)
	{
		ob_start();
		?>
		<div class="col-md-4">
			<article class="b-widget-feed">
				<header class="cf">
					<i class="fa <?php echo $p->icon;?>"></i>
					<h1><?php echo $p->post_title;?></h1>
				</header>
				<div class="text">
					<p><?php echo $p->post_excerpt;?>...</p>
				</div>
				<div class="text-right">
					<a href="<?php echo get_permalink($p->ID);?>" class="link-more">Learn more <i>+</i></a>
				</div>
			</article>
		</div>
		<?php
		
		$var = ob_get_contents();
		ob_end_clean();
		return $var;
	}

	/**
	 * Get and initizlie posts
	 * @return array --- posts objects
	 */
	public function getPosts()
	{
		$args = array(
			'posts_per_page'   => intval(get_option('posts_per_page')),
			'offset'           => 0,
			'category'         => '',
			'category_name'    => '',
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'post',
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
				$p->icon = (string) get_post_meta( $p->ID, 'additional_options_icon', true );
			}
		}
		return $posts;
	}
}