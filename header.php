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
    <header id="header" class="nav-header" role="header">
        <div class="container container--xl">
            <div class="container__row">
                <?php include 'theme-logo.php'; ?>

                <div class="nav--wrapper">
                    <?php include 'nav-main.php'; ?>
                </div>

                <label class="nav-mobile-button" for="mobile-nav-check">
                    <input type="checkbox" id="mobile-nav-check"/>
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                
            </div>

        </div>
    </header>


    <div id="container">