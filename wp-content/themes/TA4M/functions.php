<?php 

function ta4m_custom_styles(){
    wp_enqueue_style('localStyles', get_stylesheet_uri());
    wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Antonio&display=swap');
}

function ta4m_features(){
    add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts', 'ta4m_custom_styles');
add_action('after_setup_theme', 'ta4m_features');

?>