import Vue from "vue/dist/vue";

window.onload = () => {
    if(document.getElementById('option-page')) {
        const optionPage = new Vue({
            el: '#option-page',
            data: {
                /*=========== Navigation ===========*/
                activatePage: true,
                sendPage: false,
                newsletterPage: false,
                wooPage: false,
                gravityPage: false,
                contact7Page: false,
                settingsPage: false,
                activeTitle: 'Active Plugin',
                /*=========== Activate Plugin Page ===========*/
                apiKey: '',
                secretKey: ''
            },

            creatd() {



            },

            methods: {
                pageSwitch(page) {
                    this.deactiveAllPages();
                    switch (page) {
                        case 'activatePage' : this.activatePage = true; this.activeTitle = 'Active Plugin'; break;
                        case 'sendPage' : this.sendPage = true; this.activeTitle = 'Send Message'; break;
                        case 'newsletterPage' : this.newsletterPage = true; break;
                        case 'wooPage' : this.wooPage = true; this.activeTitle = 'Woocommerce'; break;
                        case 'gravityPage' : this.gravityPage = true; this.activeTitle = 'Gravity Forms'; break;
                        case 'contact7Page' : this.contact7Page = true; this.activeTitle = 'Contacts Form 7'; break;
                        case 'settingsPage' : this.settingsPage = true; this.activeTitle = 'Main Settings'; break;
                    }
                },
                deactiveAllPages() {
                    this.activatePage = this.sendPage = this.newsletterPage = this.wooPage = this.gravityPage = this.contact7Page = this.settingsPage = false;
                }
            }
        });
    }
};