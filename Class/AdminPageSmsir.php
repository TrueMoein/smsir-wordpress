<?php namespace SmsirWordpress;

use SmsirWordpress\Interfaces\IHasContent;

class AdminPageSmsir implements IHasContent
{
	private $icon;
	private $slug;
	private $title;
	private $menu_title;

	public function __construct($menu, $page_title) {
		$this->icon = ASSETS_IMG . '/brand/sms_icon.png';
		$this->slug = 'smsir-admin';
		$this->title = $page_title;
		$this->menu_title = $menu;

		add_action('admin_menu', array(&$this, 'register_main_menu_page'));
	}

	public function register_main_menu_page() {
		add_menu_page(
			$this->title,
			$this->menu_title,
			'manage_options',
			$this->slug,
			array(&$this, 'smsir_action_content'),
			$this->icon,
			25
		);
	}

	public function smsir_action_content($callback) {
		include_once CONTENTS . '/option-page.php';
	}
}