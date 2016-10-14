<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/14/2016
 * Time: 9:37 PM
 */
function my_fonts(){
	wp_enqueue_style('my-font','//fonts.googleapis.com/css?family=Roboto');
}

// wp_enqueue_scripts action adds styles and scripts along
// with dependencies to WP
add_action('wp_enqueue_scripts','my_fonts');