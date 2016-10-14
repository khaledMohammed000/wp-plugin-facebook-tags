<?php

/*
Plugin Name: My Facebook Tags
Plugin URI: https://github.com/khaledMohammed000/wp-plugin-facebook-tags
Description: Plugin adds some facebook open graph tags to our single posts.
Version: 1.0
Author: Mohammed
Author URI: http://khaledmohammed.me
License: GPL2
*/

add_action('wp_head','my_facebook_tags');

function my_facebook_tags(){
	echo 'I dont do anything';
}