<?php 

function ta4m_custom_styles(){
    wp_enqueue_style('localStyles', get_stylesheet_uri());
    wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Antonio&display=swap');
}

function ta4m_features(){
    add_theme_support('title-tag');
    register_nav_menu('headerMenu', 'Main Header Menu');
}

function get_ta4m_posts_page_URL() {
    if('page' === get_option( 'show_on_front')){
        return get_permalink(get_option('page_for_posts'));
    }
    return get_home_url();
}

// function ta4m_sidebars(){
//     register_sidebar(array(
//         'name' => __('Left Sidebar', 'TA4M'),
//         'id' => 'left',
//         'before_widget' => '<div id="%1$s" class="widget %2$s>',
//         'after_widget' => '</div>',
//         'before_title' => '<h3 class="widget-title">',
//         'after_title' => '</h3>'
//     ));
// }

add_action('wp_enqueue_scripts', 'ta4m_custom_styles');
add_action('after_setup_theme', 'ta4m_features');
// add_action('widgets_init', 'ta4m_sidebars');

?>