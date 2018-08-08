import Vue from "vue/dist/vue";

window.onload = () => {
    const optionPage = new Vue({
        el: '#option-page',
        data: {
            activatePage: true,
            sendPage: false,
            newsletterPage: false,
            wooPage: false,
            gravityPage: false,
            contact7Page: false,
            settingsPage: false,
        },

        methods: {
            pageSwitch(page) {
                this.deactiveAllPages();
                switch (page) {
                    case 'activatePage' : this.activatePage = true; break;
                    case 'sendPage' : this.sendPage = true; break;
                    case 'newsletterPage' : this.newsletterPage = true; break;
                    case 'wooPage' : this.wooPage = true; break;
                    case 'gravityPage' : this.gravityPage = true; break;
                    case 'contact7Page' : this.contact7Page = true; break;
                    case 'settingsPage' : this.settingsPage = true; break;
                }
            },
            deactiveAllPages() {
                this.activatePage = this.sendPage = this.newsletterPage = this.wooPage = this.gravityPage = this.contact7Page = this.settingsPage = false;
            }
        }
    });
};