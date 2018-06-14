<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<?php wp_head(); ?>
</head>

<?php wp_nav_menu(array(
    "menu_class" => "navbar-nav ml-auto",
    "container" => "ul",
    "container_class" => "navbar-nav ml-auto",
    "theme_location" => "meu-menu",
));?> 

<nav>
    <ul>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
    </ul>
</nav>