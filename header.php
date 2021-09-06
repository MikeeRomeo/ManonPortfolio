<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php generic_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper">
    <header id="header" role="header">
        <div class="container">
            <div class="container__row">

                <?php include 'theme-logo.php'; ?>
                <nav id="menu" class="nav" role="navigation" itemscope
                     itemtype="https://schema.org/SiteNavigationElement">
<!--                    <button type="button" class="menu-toggle">-->
<!--                        <span class="menu-icon">&#9776;</span>-->
<!--                        <span class="menu-text screen-reader-text">-->
<!--                    --><?php //esc_html_e(' Menu', 'generic'); ?><!--</span>-->
<!--                    </button>-->
                    <?php
                    wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">',
                        'link_after' => '</span>'));
                    ?>
                </nav>

                <?php
                wp_nav_menu( array(
                    'theme_location' => 'socials-menu',
                    'container_class' => 'socials-nav nav' ) );
                ?>

            </div>
        </div>
    </header>
    <div id="container">