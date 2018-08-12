<div class="wrap smsir_page_content" id="option-page" v-cloak>
	<div class="smsir_main_option_panel clearfix">

        <?php include_once 'navigation/navigation.php' ?>

        <div class="smsir_option_panel_contents">
            <ul style="padding: 10px 20px 10px 45px;margin: 0;">
                <li v-show="activatePage" id="activate-page">
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

            <div class="left-bar-option-panel">
                <div class="far fa-save"></div>
                <div class="far fa-undo"></div>

                <div class="left-bar-title">{{activeTitle}}</div>
            </div>
        </div>

    </div>
</div>






