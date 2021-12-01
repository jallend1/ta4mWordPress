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
        if(!is_admin()){
            wp_enqueue_script('ta4mFrontend', plugin_dir_url(__FILE__) . 'build/frontend.js', array('wp-element'));
            wp_enqueue_style('ta4mFrontendStyles', plugin_dir_url(__FILE__) . 'build/frontend.css');
        }
        ob_start(); ?>
        <div class="profile">
            <div class="uniform">
                <img src="<?php echo plugin_dir_url(__FILE__) ?>public/images/<?php echo $attributes['badgeColor'] ?>.png">
            </div>
            <div class="bio">
                <h3><?php echo $attributes['hostName'] ?></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum provident doloremque quaerat explicabo id unde omnis modi eveniet ducimus consequatur, commodi odit quas dolorum sequi voluptatibus reiciendis ipsam sed aspernatur sit tempore quae saepe harum. Impedit quaerat minus obcaecati! Laboriosam natus, error ab illo magni eum beatae officia aut? Maiores.</p>
            </div>
        </div>
        <?php return ob_get_clean();
    }

}

$ta4mCustomBlock = new TA4MCustomBlock();