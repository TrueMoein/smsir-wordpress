<div class="smsir_navigator">
	<ul>
		<li @click="pageSwitch('activatePage')" :class="{active: activatePage}">
            <i class="far fa-check-circle"></i>
            <span>فعالسازی</span>
		</li>
		<li @click="pageSwitch('sendPage')" :class="{active: sendPage}">
			<i class="far fa-envelope"></i>
			<span>ارسال</span>
		</li>
		<li @click="pageSwitch('newsletterPage')" :class="{active: newsletterPage}">
			<i class="far fa-newspaper"></i>
			<span>خبرنامه</span>
		</li>
		<li @click="pageSwitch('wooPage')" :class="{active: wooPage}">
			<i class="far fa-credit-card"></i>
			<span>ووکامرس</span>
		</li>
		<li @click="pageSwitch('gravityPage')" :class="{active: gravityPage}">
			<i class="far fa-file-alt"></i>
			<span>Gravity Forms</span>
		</li>
		<li @click="pageSwitch('contact7Page')" :class="{active: contact7Page}">
			<i class="far fa-list-alt"></i>
			<span>Contact Form 7</span>
		</li>
		<li @click="pageSwitch('settingsPage')" :class="{active: settingsPage}">
			<i class="far fa-edit"></i>
			<span>تنظیمات</span>
		</li>
	</ul>
</div>