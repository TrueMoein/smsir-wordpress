<?php

class UIAssetsSmsir
{
	public function __construct() {
		add_action('admin_enqueue_scripts', array(&$this, 'smsir_load_assets'));
	}

	public function smsir_load_assets() {
		//styles css
		wp_enqueue_style('regular-fa', plugins_url('/smsir-wordpress/assets/css/regular.css'), '', '5.0.0');
		wp_enqueue_style('fontawesome5', plugins_url('/smsir-wordpress/assets/css/fontawesome.css'), 'regular-fa', '5.0.0');
		wp_enqueue_style('smsir_admin_styles', plugins_url('/smsir-wordpress/assets/css/smsir_custom_styles.css'), '', '1.0.0');

		//scrtips js
		wp_enqueue_script('vuejs', plugins_url('/smsir-wordpress/assets/scripts/vue.min.js'), '', '2.5.17');
		wp_enqueue_script('widget', plugins_url('/smsir-wordpress/assets/scripts/widget.js'), 'vuejs', '1.0.0');
	}
}

new UIAssetsSmsir();