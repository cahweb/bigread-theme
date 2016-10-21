<!doctype html>

<html <?php language_attributes(); ?>>

<head>
	<title><?php wp_title(); ?></title>

	<?php // Set the viewport to scale to the device width for small devices ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<?php // Call the wp_head function, accessible by all themes and plugins ?>
	<?php wp_head(); ?>
</head>

<body>

	<div id="container">

		<header>
			<?php
				// Define the primary navigation for the site
				wp_nav_menu(array(
					'menu' => 'primary',
					'theme_location' => 'primary',
					'container' => 'nav',
				));
			?>
		</header>