<div class="wrap smsir_page_content" id="option-page" v-cloak>
    <h3>تنظیمات پلاگین ارسال پیامک Sms.ir</h3>
	<div class="smsir_main_option_panel clearfix">
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
        <div class="smsir_option_panel_contents">
            <ul style="padding: 10px 20px;margin: 0;">
                <li v-show="activatePage">
                    <div class="smsir_inside_content_box">
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                        <p>فعالسازی پلاگین و ثبت نام اولیه</p>
                    </div>
                </li>
                <li v-show="sendPage">
                    <div class="smsir_inside_content_box">
                        ارسال پیامک از طریق پلاگین
                    </div>
                </li>
                <li v-show="newsletterPage">
                    <div class="smsir_inside_content_box">
                        تنظیمات خبرنامه
                    </div>
                </li>
                <li v-show="wooPage">
                    <div class="smsir_inside_content_box">
                        تنظیمات پلاگین برای ووکامرس
                    </div>
                </li>
                <li v-show="gravityPage">
                    <div class="smsir_inside_content_box">
                        تنظیمات پلاگین برای گرویتی
                    </div>
                </li>
                <li v-show="contact7Page">
                    <div class="smsir_inside_content_box">
                        تنظیمات پلاگین برای فرم سون
                    </div>
                </li>
                <li v-show="settingsPage">
                    <div class="smsir_inside_content_box">
                        تنظیمات کلی پلاگین
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>






