<div class="smsir_inside_content_box">

    <div class="main-logo-plugin">
        <a target="_blank" href="https://www.SmS.iR/">
            <img src="<?php echo ASSETS_IMG . '/brand/smsir-logo.png' ?>" alt="SMS.iR">
        </a>
    </div>
    
    <div class="smsir__form-parent active-plugin">

        <section class="form-tips">
            <div>لطفا اطلاعات <strong>Api Key</strong> و <strong>Secret Key</strong> خود را در این بخش وارد نمایید.</div>
            <div>در صورتی که هنوز در سامانه ارسال پیامک عضو نشده اید به سایت <a target="_blank" href="https://www.SmS.iR/">Sms.ir</a> مراجعه نمایید.</div>
            <div>بعد از وارد کردن اطلاعات خود می توانید از تمامی امکانات پلاگین استفاده کنید.</div>
        </section>


        <input class="eng-text" type="text" id="api-key" placeholder="Api Key:" autofocus v-model="apiKey">


        <input class="eng-text" type="text" id="secret-key" placeholder="Secret Key:" v-model="secretKey">

    </div>

</div>