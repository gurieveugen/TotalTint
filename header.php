<?php
$options = \__::getOptions(
	array( 
		'sc_phone', 
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
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php echo (wp_title( ' ', false, 'right' ) == '') ? get_bloginfo('name') : wp_title( ' ', false, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" media="(min-width: 768px)" href="<?php echo TDU; ?>/css/sm.css" />
	<link rel="stylesheet" media="(min-width: 1200px)" href="<?php echo TDU; ?>/css/md.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); 
		wp_head(); ?>
	<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php echo TDU; ?>/js/html5shiv.min.js"></script>
		<script type="text/javascript" src="<?php echo TDU; ?>/js/respond.min.js"></script>
	<![endif]-->
	<!--[if lte IE 9]>
		<script type="text/javascript" src="<?php echo TDU; ?>/js/jquery.placeholder.min.js"></script>
		<script type="text/javascript">
			jQuery(function(){
				jQuery('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
	<script type="text/javascript" src="<?php echo TDU; ?>/js/jquery.flexslider.js" ></script>
	<script type="text/javascript" src="<?php echo TDU; ?>/js/jquery.main.js" ></script>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<header id="header">
			<div class="container">
				<div class="cf header-area">
					<strong class="logo"><a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"><img src="<?php echo TDU; ?>/images/logo.png" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"></a></strong>
					<a href="#" class="btn-menu visible-xs">Toggle Menu</a>
					<?php wp_nav_menu( array(
					'container' => 'nav',
					'container_class' => 'main-navigation main-navigation-mobile',
					'theme_location' => 'primary_nav',
					'menu_class' => 'main-nav'
					)); ?>
					<div class="b-contact-container">
						<aside class="b-contact">
							<i class="fa fa-phone"></i>
							<div class="holder">
								<h5><?php echo $sc_phone; ?></h5>
								<a href="mailto:<?php echo $sc_email; ?>"><?php echo $sc_email; ?></a>
							</div>
						</aside>
						<aside class="b-contact">
							<i class="fa fa-home"></i>
							<address class="holder">
								<h5><?php echo $sc_street; ?></h5>
								<p><?php echo $sc_city; ?></p>
							</address>
						</aside>
						<aside class="b-contact">
							<i class="fa fa-clock-o"></i>
							<div class="holder">
								<h5>Mon - Sat: 8am - 5pm</h5>
								<p>Sunday CLOSED</p>
							</div>
						</aside>
					</div>
					<ul class="b-socials">
						<li><a href="<?php echo $ssn_facebook;?>"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php echo $ssn_twiiter;?>"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?php echo $ssn_youtube;?>"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
				<?php wp_nav_menu( array(
					'container' => 'nav',
					'container_class' => 'main-navigation hidden-xs',
					'theme_location' => 'primary_nav',
					'menu_id' => 'nav',
					'menu_class' => 'main-nav'
					)); ?>
			</div>
		</header>