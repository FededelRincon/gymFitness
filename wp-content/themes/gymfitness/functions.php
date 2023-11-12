<?php

// Includes
require get_template_directory() . '/includes/widgets.php';

function gymfitness_setup(){
    // imagenes destacadas
    add_theme_support('post-thumbnails');

    // Titulos para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gymfitness_setup');


// en la pestaña de apariencia, nos habilita "menus"
function gymfitness_menus(){
    register_nav_menus(array(
        'menu-principal'    =>  __('Menu Principal', 'gymfitness'),
        //             'redes-sociales'    =>  __('Redes', 'algo'),
        //             '3er-opcion'    =>  __('3er', 'algo'),
    ));
}

add_action('init', 'gymfitness_menus');


// le agrego 1ero normalize y despues mis styles personalizados
function gymfitness_scripts_styles(){

    // Archivos CSS
    wp_enqueue_style( 'normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1' );
    wp_enqueue_style( 'lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.4');
    wp_enqueue_style( 'style', get_stylesheet_uri(), array('lightboxcss'), '1.0.0' );

    // Archivos JS
    wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.4', true);
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');


// Definir zona de widgets
function gymfitness_widgets(){
    register_sidebar( array(
        'name' => 'Sidebar 1',              //es para wordpress
        'id' => 'sidebar_1',                //este es para nosotros
        'before' => '<div class="widget">', //elemento html antes de
        'after' => '</div>',                //elemento de cierre
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'            //lo mismo para el titulo
    ) );
    register_sidebar( array(
        'name' => 'Sidebar 2',              //es para wordpress
        'id' => 'sidebar_2',                //este es para nosotros
        'before' => '<div class="widget">', //elemento html antes de
        'after' => '</div>',                //elemento de cierre
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'            //lo mismo para el titulo
    ) );
}
add_action('widgets_init', 'gymfitness_widgets');