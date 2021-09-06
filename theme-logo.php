<?php

if (has_custom_logo()) {
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
} elseif (has_site_icon()) {
    $logo = get_site_icon_url();
} else {
    $logo = get_template_directory_uri() . '/assets/images/MB_logo.png';
}
echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home" itemprop="url" class="logo"><span class="screen-reader-text" itemprop="name">' . esc_html(get_bloginfo('name')) . '</span><span class="logo-container" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject"><img src="';
if (has_custom_logo()) {
    echo esc_url($logo[0]);
} else {
    echo esc_url($logo);
}
echo '" alt="' . esc_attr(get_bloginfo('name')) . '" itemprop="url" /></span></a>';

