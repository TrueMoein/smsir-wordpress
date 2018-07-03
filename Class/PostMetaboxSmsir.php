<?php namespace SmsirWordpress;

class PostMetaboxSmsir
{

	public function __construct() {
		add_action('add_meta_boxes', array(&$this, 'smsir_first_metabox'));
	}

	public function smsir_first_metabox() {
		add_meta_box('smsir_post_metabox',
			'پلاگین پیامک Sms.ir',
			array(
				&$this, 'content_meta_box'),
				'post',
				'side',
				'high'
			);
	}

	public function content_meta_box($post) {
		?>
		<ul>
			<li><?php echo $post->post_title ?></li>
			<li>به مخاطبین بگو پست جدید داریم</li>
			<li>به این شماره ها این پست رو اطلاع بده</li>
			<li><a href="<?php echo $post->guid ?>">آدرس کوتاه پست</a></li>
		</ul>
		<?php
	}
}