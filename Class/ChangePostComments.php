<?php

class ChangePostComments
{
	private $text;
	private $comment_text;
	private $color;

	public function __construct($post_content = null, $comment_content = null)
	{
		$this->text = $post_content;
		$this->comment_text = $comment_content;
		add_filter('the_content', array(&$this, 'changeDefault'));
		add_action('comment_form_after', array(&$this, 'changeCommentsText'));
	}

	public function changeDefault($content)
	{
		if($this->text) {
			return $this->text;
		}
		return $content;
	}

	public function changeCommentsText() {
		do_action('moein_alizadeh_change_comment');
		if($this->comment_text) {
			echo $this->comment_text;
		}
		echo 'asdaksdja';
	}

	public function colorized($color) {
		$this->color = $color;
	}

}