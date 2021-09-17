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