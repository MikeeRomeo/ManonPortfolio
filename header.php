<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php generic_schema_type(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper">
    <header id="header" role="header">
        <div id="logo" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
            <h1>
                <a href="<?php echo get_home_url() ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/images/Manon_Beekman_Logo_V2_transparant.png"
                         alt="Manon Beekman Fotografie Logo"/>
                </a>
            </h1>
        </div>


        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <button type="button" class="menu-toggle"><span class="menu-icon">&#9776;</span><span
                        class="menu-text screen-reader-text"><?php esc_html_e(' Menu', 'generic'); ?></span></button>
            <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
        </nav>
    </header>
    <div id="container">