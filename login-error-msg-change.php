<?php
/**
 * Created by PhpStorm.
 * User: user-1
 * Date: 10/14/2016
 * Time: 8:49 PM
 */
// this example looks into filters
//we try to change the error message showed when you fail logging in @xyx.com/wp-admin

function change_error_msg($error){
	$error = 'Dont waste your time by entering wrong credentials !';
	return $error;
}

add_filter('login_errors','change_error_msg');