<?php foreach( $attributes['repeater-test'] as $inner ): ?>
    <h2><?php echo $inner['repeater-label-test']; ?></h2>

    <?php if ( isset( $inner['repeater-test-image']['url'] ) ) : ?>
        <img src="<?php echo esc_url( $inner['repeater-test-image']['url'] ); ?>" alt="<?php echo esc_attr( $inner['repeater-test-image']['alt'] ); ?>">
    <?php endif; ?>

    <p><?php echo $inner['repeater-test-beschrijving']; ?></p>
<?php endforeach; ?>

<div class="portfolio_gallery">
    <div class="portfolio_gallery__wrapper">
        <?php foreach( $attributes['portfolio-gallery'] as $key => $inner ): ?>
            <div class="portfolio_gallery__item" data-slide="<?php echo $key; ?>">
                <div class="portfolio_gallery__description">
                    <h3 class="title title--underline"><?php echo $inner['p_titel']; ?></h3>
                    <p><?php echo $inner['p_text']; ?></p>
                    <a class="button button--outline"
                       href="<?php echo $inner['p_link']; ?>">
                        Bekijk projecten
                    </a>
                </div>
                <div class="portfolio_gallery__image">
                    <?php
                    if ( isset( $inner['p_image']['url'] ) ) {
                        echo wp_get_attachment_image( $inner['p_image']['id'], 'large');
                    }
                    ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="portfolio_gallery__nav">
        <?php foreach( $attributes['portfolio-gallery'] as $key => $inner ): ?>
            <button class="button button--link portfolio-gallery-button"
                    data-id="<?php echo $key; ?>"
                    id="<?php echo $inner['p_button']; ?>">
                <?php echo $inner['p_titel']; ?></button>
        <?php endforeach; ?>
        <div class="portfolio_gallery__mobile-nav">
            <button class="portfolio_gallery__slide-button button-prev" name="prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow.png"
                     alt="Volgende Portfolio item knop">
            </button>
            <button class="portfolio_gallery__slide-button button-next" name="next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow.png"
                     alt="Vorige Portfolio item knop">
            </button>
        </div>
    </div>
</div>

<section class="section--fullwidth">
    <div class="container">
        <div class="section__centered-content">
            <?php echo $attributes['fullwidth-content-wrapper']; ?>
        </div>
    </div>
</section>

<div class="container__col-10 container__col-offset-1">
<section class="posts__wrapper">
    <?php
    // Define our WP Query Parameters
    $the_query = new WP_Query('posts_per_page='.$attributes['projects_length']); ?>

    <?php
    // Start our WP Query
    while ($the_query->have_posts()) : $the_query->the_post();
        // Display the Post Title with Hyperlink
        ?>
        <article class="post">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post__thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>

            <div class="post__content">
                <h1 class="post__title">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h1>
                <div class="post__excerpt">
                    <?php the_excerpt(__('(more…)')); ?>
                </div>
            </div>

        </article>
    <?php
        // Repeat the process and reset once it hits the limit
    endwhile;
    wp_reset_postdata();
    ?>
</section>
</div>
