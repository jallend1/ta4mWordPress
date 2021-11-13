<?php
/**
 * Plugin Name: TA4M Logo Widget
 * Plugin URI: https://www.jasondallen.dev
 * Description: A simple logo display widget
 * Version: 1.0
 * Author: Jason D. Allen
 * Author URI: https://www.jasondallen.dev
 */

class TA4M_Logo_Widget extends WP_Widget{

    function __construct(){
        $widget_options = array(
            'classname' => 'ta4m_logo_widget',
            'description' => 'Adds a logo box with a custom image and text'
        );
        parent::__construct('ta4m_logo_widget', 'Logo Display', $widgetOptions );
    }

    function form( $instance ) {
        $title = !empty($instance['title']) ? $instance['title'] : '';
        $link = !empty($instance['link']) ? $instance['link'] : 'Your link here.';
        $text = !empty($instance['text']) ? $instance['text'] : 'Your text here.';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
            <input  type="text" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" value="<?php echo esc_attr($title); ?>" />
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'Text' ) ); ?>"><?php echo esc_html__( 'Text:', 'text_domain' ); ?></label>
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>" type="text" cols="30" rows="10"><?php echo esc_attr( $text ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'link'); ?>">Your link:</label>
            <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo esc_attr( $link ); ?>" />
        </p>
        <?php
    }

    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['text'] = strip_tags($new_instance['text']);
        $instance['link'] = strip_tags($new_instance['link']);
        return $instance;
    }

    function widget($args, $instance){
        $title = apply_filters('widget_title', $instance['title']);
        $text = $instance['text'];
        $link = $instance['link'];
        echo $args['before_widget'];
        ?>

        <div class="ta4m-logo">
            <?php 
                if(!empty($title)){
                    echo $args['before_title'] . $title . $args['after_title'];
                };
                echo '<a href="' . $link . '">' . $text . '</a>';
            ?>
        </div>
        <?php
            echo $args['after_widget'];
    }
}

function register_ta4m_logo_widget(){
    register_widget('TA4M_Logo_Widget');
}

add_action('widgets_init', 'register_ta4m_logo_widget');