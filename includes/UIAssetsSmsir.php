<?php namespace SmsirWordpress;

class UIAssetsSmsir
{
	public function __construct() {
		add_action('admin_enqueue_scripts', array(&$this, 'smsir_load_assets'));
	}

	public function smsir_load_assets() {
		//styles css
		wp_enqueue_style('regular-fa', ASSETS_CSS . '/regular.css', '', '5.0.0');
		wp_enqueue_style('fontawesome5', ASSETS_CSS . '/fontawesome.css', 'regular-fa', '5.0.0');
		wp_enqueue_style('smsir_admin_styles', ASSETS_CSS . '/../main.css', '', '1.0.0');

		//scrtips js
		wp_enqueue_script('option-page', ASSETS_JS. '/../main.js','1.0.0');
	}
}