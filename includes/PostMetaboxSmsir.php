<?php namespace SmsirWordpress;

use SmsirWordpress\Interfaces\IHasContent;

class PostMetaboxSmsir implements IHasContent
{

	public function __construct() {
		add_action('add_meta_boxes', array(&$this, 'smsir_first_metabox'));
	}

	public function smsir_first_metabox() {
		add_meta_box('smsir_post_metabox',
			'پلاگین پیامک Sms.ir',
			array(
				&$this, 'smsir_action_content'),
				'post',
				'side',
				'high'
			);
	}

	public function smsir_action_content($post) {
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