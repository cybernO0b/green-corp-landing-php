<?php
// работает приоритет загрузки стилей (если указан первый, то первый и начнет подгружаться)
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'style', get_template_directory_uri() . './assets/css/style.css');
	wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;400;500;600;700;800&display=swap');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . './assets/css/fa/css/all.min.css');


	wp_enqueue_script( 'canvas', get_template_directory_uri() . './js/canvas.js',
     array(), '1.0.0', true );
	 wp_enqueue_script( 'animation-js', get_template_directory_uri() . './js/animation.js',
     array(), '1.0.0', true );
	 wp_enqueue_script( 'fa-min-js', get_template_directory_uri() . './assets/css/fa/js/all.min.js',
     array(), '1.0.0', true );
});

// add_theme_support('post_thumbnails');
// add_theme_support('title-tag');
// add_theme_support('custom-logo');

?>
