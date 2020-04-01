<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#6d9aea">

    <?php wp_head(); ?>
    <!-- <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Lato&display=swap" rel="stylesheet"> -->
</head>

<body <?php body_class(); ?>>
    <header>

        <div class="nav-bar">
            <img class="menu-icon" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/menu.svg" />
            <a href="http://localhost:8000/hem"><img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/logowhite.svg" /></a>
            <img class="search-icon" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/search.svg" />
        </div>

        <nav role="navigation" class="navigation-menu">
            <img class="cross-icon" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/cross.svg" />
            <img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/logowhite.svg" />
            <?php wp_nav_menu(['theme_location' => 'navigation']); ?>
        </nav>

    </header>