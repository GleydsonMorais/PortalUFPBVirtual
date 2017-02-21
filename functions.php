<?php

	/*WIDGETS*/

	if(function_exists('register_sidebar')){

		register_sidebar(array());
	}

	/*Imagem Destacada*/

	add_theme_support('post-thumbnails');
?>

<?php 

	add_action('init', 'register_nav_menus_on_init');

	function register_nav_menus_on_init() {

		register_nav_menus(array(

			'top-pages-menu' => 'Menu > Topo da página',
		));
	}
?>