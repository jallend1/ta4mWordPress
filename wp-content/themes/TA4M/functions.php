<?php 

function get_ta4m_posts_page_URL() {
    if('page' === get_option( 'show_on_front')){
        return get_permalink(get_option('page_for_posts'));
    }
    return get_home_url();
}

function ta4m_custom_styles(){
    wp_enqueue_style('localStyles', get_stylesheet_uri());
    wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Antonio&display=swap');
}

function ta4m_features(){
    add_theme_support('admin-bar', array( 'callback' => '__return_false'));
    add_theme_support('title-tag');
    register_nav_menu('headerMenu', 'Main Header Menu');
}


add_action('wp_enqueue_scripts', 'ta4m_custom_styles');
add_action('after_setup_theme', 'ta4m_features');

?>