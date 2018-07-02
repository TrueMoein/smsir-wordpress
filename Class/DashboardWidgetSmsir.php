<?php

class DashboardWidgetSmsir
{
	private $title;

	public function __construct() {
		$this->title = 'مدیریت پلاگین پیامک Sms.ir';
		add_action('wp_dashboard_setup', array(&$this, 'smsir_register_dashboard_widget'));
	}

	public function smsir_register_dashboard_widget() {
		wp_add_dashboard_widget('smsir_widget', $this->title, array(&$this, 'smsir_show_widget'));
	}

	public function smsir_show_widget() {
		?>
			<div class="smsir_dashboard_widget">
				<div class="credit"><i class="far fa-money-bill-alt"></i> 1285 پیامک </div>
				<div class="info-details">
					<ul>
						<li>مخاطبین: ۱۰ نفر</li>
						<li>ارسال ها: ۵۰ پیامک</li>
						<li>عضو خبرنامه: ۳۶ نفر</li>
						<li>تشکر از معین: ۸۵ تشکر</li>
					</ul>
				</div>
			</div>
		<?php
	}
}

new DashboardWidgetSmsir();