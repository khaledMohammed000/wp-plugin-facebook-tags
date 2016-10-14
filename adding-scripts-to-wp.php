<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/14/2016
 * Time: 9:44 PM
 */
function my_script() {
	wp_enqueue_script( 'my-script',
		plugin_dir_url( __FILE__ ) . '/js/main.js',
		array(),
		'1.0',
		true );
}