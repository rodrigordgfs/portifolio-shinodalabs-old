<?php

    // Registrar Scripts
    function shinodalabs_scripts() {
        wp_register_script( 'simple-anime', get_template_directory_uri() . '/js/simple-anime.js', array(), false, true);
        wp_register_script( 'script', get_template_directory_uri() . '/js/script.js', array('simple-anime'), false, true);
        wp_enqueue_script('script');
    }

    add_action( 'wp_enqueue_scripts', 'shinodalabs_scripts' );

    // Registrar CSS
    function shinodalabs_style() {
        wp_register_style( 'shinodalabs-style', get_template_directory_uri() . '/style.css', array(), false, false );
        wp_enqueue_style( 'shinodalabs-style' );
    }

    add_action( 'wp_enqueue_scripts', 'shinodalabs_style' );

    // Funções para Limpar o Header
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');

?>