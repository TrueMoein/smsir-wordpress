<?php namespace SmsirWordpress;

class UIAssetsSmsir
{
	public function __construct() {
		add_action('admin_enqueue_scripts', array(&$this, 'smsir_load_assets'));
	}

	public function smsir_load_assets($page) {
		//styles css
		wp_enqueue_style('regular-fa', ASSETS_CSS . '/css/regular.css', '', '5.0.0');
		wp_enqueue_style('fontawesome5', ASSETS_CSS . '/css/fontawesome.css', 'regular-fa', '5.0.0');
		wp_enqueue_style('smsir_admin_styles', ASSETS_CSS . '/smsir_custom_styles.css', '', '1.0.0');

		//scrtips js
		wp_enqueue_script('vuejs', ASSETS_JS. '/vue.min.js', '', '2.5.17');
		if($page === 'index.php') wp_enqueue_script('widget', ASSETS_JS. '/dashboard-widget.js', 'vuejs', '1.0.0');
		if($page === 'toplevel_page_smsir-admin') wp_enqueue_script('option-page', ASSETS_JS. '/option-page.js', 'vuejs', '1.0.0');
		if($page === 'post.php') wp_enqueue_script('post-metabox', ASSETS_JS. '/post-metabox.js', 'vuejs', '1.0.0');
	}
}