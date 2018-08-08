<?php
//SCRIPTS
   function getScritpts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true );
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
            "name" => "Destaque do mês",
            "id" => "destaque-do-mes",
            "description" => "Destaque do mês",
            "before-widget" => "<div class='widget-container'>",
            "after-widget" => "</div>",
            "before-title" => "<h2 class='widget__title'>",
            "after-title" => "</h2>",
        )
    );
    register_sidebar(
        array(
            "name" => "Descrição sobre",
            "id" => "sobre-descricao",
            "description" => "Descrição da pagina sobre que aparece do lado do título",
            "before-widget" => "<div class='widget-descricao-sobre'>",
            "after-widget" => "</div>",
            "before-title" => "<h2 class='widget__title'>",
            "after-title" => "</h2>",
        )
    );
    register_sidebar(
        array(
            "name" => "Footer",
            "id" => "footer",
            "description" => "Informações do footer",
            "before-widget" => "<div class='widget-footer'>",
            "after-widget" => "</div>",
            "before-title" => "<h2 class='widget-footer__title'>",
            "after-title" => "</h2>",
        )
    );
    register_sidebar(
        array(
            "name" => "Redes Sociais",
            "id" => "redes-sociais",
            "description" => "Suas redes sociais",
            "before-widget" => "<div class='widget-social-media'>",
            "after-widget" => "</div>",
            "before-title" => "<h2 class='widget-social-media__title'>",
            "after-title" => "</h2>",
        )
    );
    register_sidebar(
        array(
            "name" => "Barra Lateral do Blog",
            "id" => "barra-lateral",
            "description" => "Barra Lateral do Blog",
            "before-widget" => "<div class='widget-blog'>",
            "after-widget" => "</div>",
            "before-title" => "<h2 class='widget-blog__title'>",
            "after-title" => "</h2>",
        )
    );
}


?>