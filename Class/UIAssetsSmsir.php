<?php

class UIAssetsSmsir
{
	public function __construct() {
		add_action('admin_enqueue_scripts', array(&$this, 'smsir_load_assets'));
	}

	public function smsir_load_assets() {
		wp_enqueue_style('smsir_admin_styles', plugins_url('/smsir-wordpress/assets/css/smsir_custom_styles.css'), '', '1.0.0');
	}
}

new UIAssetsSmsir();