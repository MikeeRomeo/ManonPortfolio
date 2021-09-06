<?php /* Template Name: Home Template */ ?>
<?php get_header(); ?>

    <main id="content" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="banner banner--header" role="banner">

                    <div class="container">
                        <div class="banner__description">
                            <?php include 'theme-logo.php'; ?>
                            <?php the_field('page_description'); ?>

                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'socials-menu',
                                'container_class' => 'socials-nav socials-nav--gold nav' ) );
                            ?>
                        </div>
                    </div>
                    <div class="banner__image" itemprop="image">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full', array('itemprop' => 'image'));
                        } ?>
                    </div>
                </div>
                <div class="entry-content" itemprop="mainContentOfPage">

                    <?php the_content(); ?>
                    <div class="entry-links"><?php wp_link_pages(); ?></div>
                </div>
            </article>
            <?php if (comments_open() && !post_password_required()) {
                comments_template('', true);
            } ?>
        <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?><?php
