<?php
// Register Custom Navigation Walker
require_once('vendor/wp_bootstrap_navwalker.php');

// Register custom menu
register_nav_menus(array(
	'primary' => __('Primary Menue', 'Bigread Nobone'),
));

?>