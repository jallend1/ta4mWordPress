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
        wp_register_style('ta4m-editor-styles', plugin_dir_url( __FILE__ ) . '/build/index.css', array('wp-edit-blocks'));
        register_block_type('ourplugin/ta4m-custom-block', array(
            'editor_script' => 'ta4mcustomblock',
            'editor_style' => 'ta4m-editor-styles',
            'render_callback' => array($this, 'theHTML')
        ));
    }

    function theHTML($attributes){
        if(!is_admin()){
            wp_enqueue_script('ta4mFrontend', plugin_dir_url(__FILE__) . 'build/frontend.js', array('wp-element'));
            wp_enqueue_style('ta4mFrontendStyles', plugin_dir_url(__FILE__) . 'build/frontend.css');
        }
        ob_start(); ?>
        <div class="ta4m-frontend-to-update">
            <pre style="display: none;"><?php echo wp_json_encode($attributes); ?></pre>
        </div>
        <?php return ob_get_clean();
    }

}

$ta4mCustomBlock = new TA4MCustomBlock();