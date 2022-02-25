<nav id="menu" class="nav main-nav" role="navigation" itemscope
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