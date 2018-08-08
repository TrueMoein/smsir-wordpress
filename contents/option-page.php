<div class="wrap smsir_page_content" id="option-page" v-cloak>
    <h3>تنظیمات پلاگین ارسال پیامک Sms.ir</h3>
	<div class="smsir_main_option_panel clearfix">

        <?php include_once 'navigation/navigation.php' ?>

        <div class="smsir_option_panel_contents">
            <ul style="padding: 10px 20px;margin: 0;">
                <li v-show="activatePage">
                    <?php include_once 'forms/activate.php' ?>
                </li>
                <li v-show="sendPage">
	                <?php include_once 'forms/send.php' ?>
                </li>
                <li v-show="newsletterPage">
	                <?php include_once 'forms/newsletter.php' ?>
                </li>
                <li v-show="wooPage">
	                <?php include_once 'forms/woocommerce.php' ?>
                </li>
                <li v-show="gravityPage">
	                <?php include_once 'forms/gravity-forms.php' ?>
                </li>
                <li v-show="contact7Page">
	                <?php include_once 'forms/contact-7.php' ?>
                </li>
                <li v-show="settingsPage">
	                <?php include_once 'forms/main-settings.php' ?>
                </li>
            </ul>
        </div>

    </div>
</div>






