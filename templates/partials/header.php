<?php 
	// Define the primary navigation for the site
	wp_nav_menu(array(
		'menu' => 'primary',
		'theme_location' => 'primary',
		'depth' => 2,
		'container' => 'nav',
		'container_class' => 'collapse navbar-collapse',
		'container_id' => 'br-navbar-collapse',
		'menu_class' => 'nav navbar-nav',
		'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
		'walker' => new wp_bootstrap_navwalker(),
	));
?>

<div id="container">

	<header>
		
		
	</header>