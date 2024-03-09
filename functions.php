<?php
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'    => 'Company',
        'menu_title'    => 'Company',
        'menu_slug'     => 'Company',
        'capability'    => 'edit_posts',
        'icon_url' => 'dashicons-buddicons-buddypress-logo',
        "position" => 50,
    ));
}

// Регистрируем возможности темы
add_action( 'after_setup_theme', function(){
	// возможность изменять фон из админки
	add_theme_support( 'custom-background' );
	// возможность изменять изображения в шапке из админки
	add_theme_support( 'custom-header' );
	// включаем меню в админке
	add_theme_support( 'menus' );
	// создание метатега <title> через хук
	add_theme_support( 'title-tag' );
	// возможность загрузить картинку логотипа в админке
	add_theme_support( 'custom-logo', [
		'height'      => 190,
		'width'       => 190,
		'flex-width'  => false,
		'flex-height' => false,
		'header-text' => '',
	] );
});
