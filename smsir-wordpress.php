<?php
/*
Plugin Name:  پیامک sms.ir
Plugin URI:   https://www.sms.ir/smsir-wordpress
Description:  کاملترین پلاگین ارسال پیامک با امکانات بسیار زیاد
Version:      1.0.0
Author:       Moein Alizadeh
Author URI:   https://Keyad.ir/
License:      GPL2
*/

include_once __DIR__ . '/Class/ChangePostComments.php';

add_action('admin_menu', 'tmoein_register_menus');

function show_menu() {
	echo 'inam az in';
}

function tmoein_register_menus() {
	add_menu_page(
		'پنل مدیریت پیامک sms.ir',
		'پیامک sms.ir',
		'manage_options',
		'smsir-admin',
		'show_menu',
		plugins_url('/smsir-wordpress/assets/img/brand/sms_icon.png'),
		20
	);
}







