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

// instantiate our classes
new SmsirWordpress\AdminPageSmsir();
new SmsirWordpress\PostMetaboxSmsir();
new SmsirWordpress\UIAssetsSmsir();
new SmsirWordpress\DashboardWidgetSmsir();