<?php namespace SmsirWordpress;

class AdminPageSmsir
{
	private $icon;
	private $slug;
	private $title;
	private $menu_title;

	public function __construct() {
		$this->icon = plugins_url('/smsir-wordpress/assets/img/brand/sms_icon.png');
		$this->slug = 'smsir-admin';
		$this->title = 'مدیریت پلاگین پیامک Sms.ir';
		$this->menu_title = 'پیامک Sms.ir';

		add_action('admin_menu', array(&$this, 'register_main_menu_page'));
	}

	public function register_main_menu_page() {
		add_menu_page(
			$this->title,
			$this->menu_title,
			'manage_options',
			$this->slug,
			array(&$this, 'show_content'),
			$this->icon,
			25
		);
	}

	public function show_content() {
		echo '<h1>This is the Sms.ir Admin Menu Options</h1>';
	}

}