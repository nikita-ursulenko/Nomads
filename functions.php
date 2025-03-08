<?php
// Подключение стилей и скриптов
function nomads_enqueue_assets() {
    // Подключение Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,900;1,400;1,900&display=swap', [], null);

    // Подключение основного файла стилей
    wp_enqueue_style('nomads-main-style', get_template_directory_uri() . '/assets/css/style.min.css', [], '1.0.0', 'all');
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive.min.css', [], '1.0.0', 'all');

    
    wp_enqueue_script('nomads-script', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'nomads_enqueue_assets');

// Поддержка перевода
function nomads_setup_theme() {
    load_theme_textdomain('nomads', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'nomads_setup_theme');
