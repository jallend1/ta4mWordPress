<?php 

/*
  Plugin Name: There Are Four Mics Custom Block
  Description: A custom block type for There Are Four Mics
  Version 1.0
  Author: Jason D. Allen
  Author URI: https://jasondallen.dev
*/

if( !defined('ABSPATH') ) exit;

class TA4MCustomBlock{
    
    function __construct() {
        add_action('init', array($this, 'adminAssets'));
    }

    function adminAssets(){
        wp_register_script('ta4mcustomblock', plugin_dir_url(__FILE__) . '/build/index.js', array('wp-blocks'));
        register_block_type('ourplugin/ta4m-custom-block', array(
            'editor_script' => 'ta4mcustomblock',
            'render_callback' => array($this, 'theHTML')
        ));
    }

    function theHTML($attributes){
        ob_start(); ?>
        <p>Host: <?php echo esc_html($attributes['hostName']) ?></p>
        <p>Uniform Color: <?php echo esc_html($attributes['badgeColor']) ?></p>
        <?php return ob_get_clean();
    }

}

$ta4mCustomBlock = new TA4MCustomBlock();