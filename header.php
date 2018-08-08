<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php wp_title(''); ?>
        <?php if(wp_title('', false)) { echo ' :'; } ?>
        <?php bloginfo('name'); ?>
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-md">
        <div class="container">
           <a class="navbar-brand" href="#"><img class="hvr-bounce-to-top" src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>" alt="You go girls"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu(array(
                    "menu_class" => "navbar-nav",
                    "container" => "ul",
                    "container_class" => "navbar-nav ml-auto",
                    "theme_location" => "meu-menu",
                ));?>
                <?php 
                    if(is_active_sidebar("redes-sociais")){
                        dynamic_sidebar("redes-sociais");
                    }
                ?>
                <button class="navbar-toggler toggler-up" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-angle-up"></i>
                </button>
            </div>
        </div>

    </nav>
