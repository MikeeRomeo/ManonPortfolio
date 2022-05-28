<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>

<main id="content" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="banner banner--header" role="banner">

                    <div class="container container__column container__column--center">
                        <div class="banner__description fade-up-text">
                            <?php include 'theme-logo.php'; ?>
                            <?php the_field('page_description'); ?>

                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'socials-menu',
                                'container_class' => 'socials-nav socials-nav--gold nav'
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="banner__image fade-in-image" itemprop="image">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full', array('itemprop' => 'image'));
                        } ?>
                    </div>
                </div>
                <div class="entry-content container" itemprop="mainContentOfPage">

                    <?php the_content(); ?>
                    <div class="entry-links"><?php wp_link_pages(); ?></div>
                </div>
            </article>
    <?php endwhile;
    endif; ?>

</main>
<?php get_footer(); ?><?php
