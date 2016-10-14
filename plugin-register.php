<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/14/2016
 * Time: 10:39 PM
 */

function my_plugin_settings(){
	register_setting('my_plugin_settings_group','accountant name');
	register_setting('my_plugin_settings_group','accountant phone');
	register_setting('my_plugin_settings_group','accountant email');
}

add_action('admin_init','my_plugin_settings');