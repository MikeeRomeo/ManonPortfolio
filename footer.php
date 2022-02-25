</div>
<footer id="footer" class="footer" role="contentinfo">
    <div class="container container--xl">
        <div class="container__row">
            <div class="container__col-md-10">
                <nav id="menu" class="nav main-nav nav--footer" role="navigation"
                     itemtype="https://schema.org/SiteNavigationElement">
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
            <div class="container__col-md-2">
                <?php include 'theme-logo.php'; ?>
            </div>
        </div>

        <div class="container__row copyright__row">
            <span>Website ontwikkeld door Mike Romeo</span>
            <div id="copyright">
                &copy; <?php echo esc_html( date_i18n( __( 'Y', 'generic' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
            </div>
        </div>
    </div>

</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>