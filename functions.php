<?php 

// Função para carregamento de scripts
function carregar_scripts(){
	
	// Adicionando arquivos CSS
	wp_enqueue_style('template', get_stylesheet_directory_uri() . '/css/template.css', array(), '1.0',
		'all');

	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7',
		'all');
	
	// Adicionando arquivos JS
	wp_enqueue_script('template', get_stylesheet_directory_uri() . '/js/template.js', array('jquery'), null, true);

	wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);	
}
add_action('wp_enqueue_scripts', 'carregar_scripts');

// Função para Menus

register_nav_menus(
	array(
		'meu_menu_principal' => 'Menu Principal',
		'menu-rodape' => 'Menu Ródapé',		
	)
);
