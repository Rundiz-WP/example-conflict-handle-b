<?php
/**
 * Plugin Name: Plugin B
 * Description: This example demonstrates the errors that occur when using the same asset handle but in different versions. See front page footer.
 */


if (!function_exists('plugin_b_enqueue_style')) {
    function plugin_b_enqueue_style() {
        wp_enqueue_style('sample', plugins_url('sample.css', __FILE__));
    }// plugin_b_enqueue_style
}
add_action('wp_enqueue_scripts', 'plugin_b_enqueue_style');


if (!function_exists('plugin_b_wpfooter')) {
    function plugin_b_wpfooter() {
        echo '<p class="style_v1">This paragraph from plugin B. It\'s showing <strong class="text_underline">orange</strong> background and black text. ' .
            '<span class="blinking_bg">This text should blinking red background.</span>' .
        '</p>';
    }// plugin_b_wpfooter
}
add_action('wp_footer', 'plugin_b_wpfooter');