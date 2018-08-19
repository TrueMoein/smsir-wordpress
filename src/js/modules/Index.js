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

            mounted() {
                this.pageSwitch(window.location.hash.slice(1));
            },

            methods: {
                pageSwitch(page) {
                    this.deactiveAllPages();
                    switch (page) {
                        case 'activatePage' : this.activatePage = true; window.location.hash = '#activatePage'; this.activeTitle = 'Active Plugin'; break;
                        case 'sendPage' : this.sendPage = true; window.location.hash = '#sendPage'; this.activeTitle = 'Send Message'; break;
                        case 'newsletterPage' : this.newsletterPage = true; window.location.hash = '#newsletterPage'; this.activeTitle = 'News Letter'; break;
                        case 'wooPage' : this.wooPage = true; window.location.hash = '#wooPage'; this.activeTitle = 'Woocommerce'; break;
                        case 'gravityPage' : this.gravityPage = true; window.location.hash = '#gravityPage'; this.activeTitle = 'Gravity Forms'; break;
                        case 'contact7Page' : this.contact7Page = true; window.location.hash = '#contact7Page'; this.activeTitle = 'Contacts Form 7'; break;
                        case 'settingsPage' : this.settingsPage = true; window.location.hash = '#settingsPage'; this.activeTitle = 'Main Settings'; break;
                        default: this.activatePage = true; window.location.hash = '#activatePage'; this.activeTitle = 'Active Plugin'; break;
                    }
                },
                deactiveAllPages() {
                    this.activatePage = this.sendPage = this.newsletterPage = this.wooPage = this.gravityPage = this.contact7Page = this.settingsPage = false;
                },

                /*=========== Activate Plugin Methods ===========*/
                saveActivatePluginForm() {
                    console.log('Plugin Activated');
                    console.log(this.apiKey);
                    console.log(this.secretKey);
                }
            }
        });
    }
};