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