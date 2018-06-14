<?php
//SCRIPTS
   function getScritpts() {
    wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap-grid.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true );
    wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'getScritpts' );
add_theme_support("post-thumbnails");

//NAVBAR

register_nav_menus(
    array(
        "meu-menu" => "Menu principal"
    )
);

//SIDEBAR
if(function_exists("register_sidebar")){
    register_sidebar(
        array(
            "name" => "Barra lateral",
            "id" => "sidebar-blog",
            "description" => "Barra lateral do blog",
            "before-widget" => "<div class='widget-container'>",
            "after-widget" => "</div>",
            "before-title" => "<h2 class='widget__title'>",
            "after-title" => "</h2>",
        )
    );
}
?>