<?php

class WidgetPromo extends WP_Widget{
	//                    __  __              __    
	//    ____ ___  ___  / /_/ /_  ____  ____/ /____
	//   / __ `__ \/ _ \/ __/ __ \/ __ \/ __  / ___/
	//  / / / / / /  __/ /_/ / / / /_/ / /_/ (__  ) 
	// /_/ /_/ /_/\___/\__/_/ /_/\____/\__,_/____/  	                                             
	function __construct() 
	{		
		parent::__construct(
			'widget-promo', 
			__('Promo widget'), 
			array( 
				'description' => __('Add a promo widget to sidebar.'), 
				'classname' => 'widget-promo-widget'
			)
		);
	}

	function widget($args, $instance) 
	{
		$arr['title'] = isset($instance['title']) ? $args['before_title'].$instance['title'].$args['after_title'] : '';
		$arr['icon']  = isset($instance['icon']) ? $instance['icon'] : '';
		$arr['url']   = isset($instance['url']) ? $instance['url'] : '';
		$arr['text']  = isset($instance['text']) ? $instance['text'] : '';
		
		echo $args['before_widget'];
		?>
		<header class="cf">
			<i class="fa <?php echo $arr['icon']; ?>"></i>
			<?php echo $arr['title']; ?>
		</header>
		<div class="text">
			<p><?php echo $arr['text']; ?></p>
		</div>
		<div class="text-right">
			<a href="<?php echo $arr['url']; ?>" class="link-more">Learn more <i>+</i></a>
		</div>
		<?php
		echo $args['after_widget'];
	}

	function update( $new_instance, $old_instance ) 
	{
		$instance['title'] = strip_tags(stripslashes($new_instance['title']));
		$instance['icon']  = strip_tags(stripslashes($new_instance['icon']));
		$instance['url']   = strip_tags(stripslashes($new_instance['url']));
		$instance['text']  = strip_tags($new_instance['text']);
		return $instance;
	}

	function form( $instance ) 
	{
		$arr['title'] = isset($instance['title']) ? $instance['title'] : '';
		$arr['icon']  = isset($instance['icon']) ? $instance['icon'] : '';
		$arr['url']   = isset($instance['url']) ? $instance['url'] : '';
		$arr['text']  = isset($instance['text']) ? $instance['text'] : '';

		extract($arr);
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('icon'); ?>"><?php _e('Icon ( fontawesome ):') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('icon'); ?>" name="<?php echo $this->get_field_name('icon'); ?>" value="<?php echo $icon; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('url'); ?>"><?php _e('URL ( lear more ):') ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('url'); ?>" name="<?php echo $this->get_field_name('url'); ?>" value="<?php echo $url; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('text'); ?>"><?php _e('Content:') ?></label>
			<textarea class="widefat" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>" cols="30" rows="10"><?php echo $text; ?></textarea>
		</p>
		<?php
	}
}