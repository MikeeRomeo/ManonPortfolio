<?php /* Template Name: Portfolio Template */ ?>
<?php get_header(); ?>

    <main id="content" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="banner banner--post" role="banner">
                    <div class="container container__column container__column--center">
                        <div class="banner__description fade-up-text">
                            <h1 class="post__main-title" itemprop="headline">
                                <?php the_title(); ?>
                            </h1>
                        </div>
                        <div class="banner__image banner__image--post fade-in-image" itemprop="image">
                            <?php if (has_post_thumbnail()) {
                                the_post_thumbnail('full', array('itemprop' => 'image'));
                            } ?>
                        </div>
                    </div>
                </header>

                <div class="entry-content container" itemprop="mainContentOfPage">

                    <?php the_content(); ?>
                    <div class="entry-links"><?php wp_link_pages(); ?></div>
                </div>
            </article>
        <?php endwhile; endif; ?>

    </main>
<?php get_footer(); ?><?php
