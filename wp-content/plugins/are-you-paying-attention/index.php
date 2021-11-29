<?php
/*
    Plugin Name: Are You Paying Attention Quiz
    Description: Give your readers a multiple choice question.
    Version: 1.0
    Author: Jason Allen
    Author URI: https://jasondallen.dev/
*/

if(!defined('ABSPATH')) exit;

class AreYouPayingAttention{
    function __construct(){
        add_action('init', array($this, 'adminAssets'));
    }
    
    function adminAssets(){
        wp_register_style('quizeditcss', plugin_dir_url(__FILE__) . 'build/index.css');
        wp_register_script('ournewblocktype', plugin_dir_url(__FILE__) . '/build/index.js', array('wp-blocks', 'wp-element', 'wp-editor'));
        register_block_type('ourplugin/are-you-paying-attention', array(
            'editor_script' => 'ournewblocktype',
            'render_callback' => array($this, 'theHTML'),
            'editor_style' => 'quizeditcss'
        ));
    }

    function theHTML($attributes){
        ob_start(); ?>
        <p>Host: <?php echo esc_html($attributes['hostName']) ?></p>
        <p>Uniform Color: <?php echo esc_html($attributes['badgeColor']) ?></p>
        <?php return ob_get_clean();
    }
}

$areYouPayingAttention = new AreYouPayingAttention();