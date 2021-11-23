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
        add_action('enqueue_block_editor_assets', array($this, 'adminAssets'));
    }

    function adminAssets(){
        wp_enqueue_script('ta4mcustomblock', plugin_dir_url(__FILE__) . 'test.js', array('wp-blocks'));
    }

}

$ta4mCustomBlock = new TA4MCustomBlock();