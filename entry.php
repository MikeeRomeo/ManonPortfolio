<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="banner banner--post">
        <div class="container container__column container__column--center">
            <div class="banner__description">
                <?php if (is_singular()) {
                    echo '<h1 class="post__main-title" itemprop="headline">';
                } else {
                    echo '<h2 class="post__main-title">';
                } ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
                   rel="bookmark"><?php the_title(); ?></a>
                <?php if (is_singular()) {
                    echo '</h1>';
                } else {
                    echo '</h2>';
                } ?>
                <span class="post__date"><?php echo date_i18n('j F Y', time()); ?> </span>
            </div>
            <?php if (has_post_thumbnail()) : ?>
                <div class="banner__image banner__image--post">
                    <?php the_post_thumbnail('full', array('itemprop' => 'image')); ?>
                </div>
            <?php endif; ?>
        </div>
    </header>
    <?php get_template_part('entry', (is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content')); ?>
</article>