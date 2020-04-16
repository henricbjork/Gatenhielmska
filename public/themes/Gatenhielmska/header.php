<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#6d9aea">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="nav-bar">
            <img class="menu-icon" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/menu.svg" />
            <a href="/"><img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/logowhite.svg" /></a>
            <img class="search-icon" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/search.svg" />
        </div>
        <?php if ($pagename === 'kalender') : ?>
            <div style="background:#ebc8bf;" class="search-form hidden">
                <?php get_search_form(); ?>
            </div>
        <?php endif; ?>

        <div class="search-form hidden">
            <?php get_search_form(); ?>
        </div>




        <nav role="navigation" class="navigation-menu">
            <img class="cross-icon" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/cross.svg" />
            <img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/logowhite.svg" />
            <?php wp_nav_menu(['theme_location' => 'navigation']); ?>
            <p>Sv/Eng</p>
        </nav>



        <?php if ($pagename === 'om-huset' || $pagename === 'galleri') : ?>
            <p class="page-title"><?php the_title() ?></p>
        <?php endif; ?>

        <?php if ($pagename === 'om-huset' || $pagename === 'galleri' || $pagename === '') : ?>
            <section class="banner">
                <img class="banner-image" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/bannerimage2.png" />
                <img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/logoblack.svg" />
                <h1>GATHENHIELMSKA</h1>
            </section>
        <?php endif; ?>
    </header>