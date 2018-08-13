<?php namespace SmsirWordpress;

class UIAssetsSmsir
{
	public function __construct() {
		add_action('admin_enqueue_scripts', array(&$this, 'smsir_load_assets'));
	}

	public function smsir_load_assets() {
		//styles css
		wp_enqueue_style('regular-fa', ASSETS_CSS . '/regular.min.css', '',PLUGIN_VERSION);
		wp_enqueue_style('fontawesome5', ASSETS_CSS . '/fontawesome.css', 'regular-fa',PLUGIN_VERSION);
		wp_enqueue_style('smsir_admin_styles', ASSETS . '/css/main.css', '',PLUGIN_VERSION);

		//scrtips js
		wp_enqueue_script('option-page', ASSETS. '/smsir-js.js','',PLUGIN_VERSION);
	}
}