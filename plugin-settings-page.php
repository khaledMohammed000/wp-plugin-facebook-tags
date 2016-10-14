<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/14/2016
 * Time: 9:54 PM
 */

function my_plugin_menu_page(){
	add_menu_page('settings page','Plugin Settings','administrator','my-plugin-settings','plugin_settings_page','dashicons-admin-generic');
}

function plugin_settings_page(){

}