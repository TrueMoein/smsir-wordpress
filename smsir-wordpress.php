<?php
/*
Plugin Name:  پیامک Sms.ir
Plugin URI:   https://www.sms.ir/smsir-wordpress
Description:  کاملترین پلاگین ارسال پیامک، امکان اتصال به وردپرس، ووکامرس، فرم ساز Gravity Forms و Contact Form 7 و صدها امکان دیگر نظیر : ارسال کد فعال سازی ثبت نام به کاربران، عضویت خبرنامه و ...
Version:      1.0.0
Author:       Moein Alizadeh
Author URI:   https://TrueMoein.ir/
License:      GPL2
*/

// fireup the autoloader
include_once __DIR__ . '/vendor/autoload.php';


// load all assets (styles and scripts)
new SmsirWordpress\UIAssetsSmsir();
// create the options page of plugin
new SmsirWordpress\AdminPageSmsir();
// create a metabox for posts
new SmsirWordpress\PostMetaboxSmsir();
// create a dashboard widget for details
new SmsirWordpress\DashboardWidgetSmsir();
