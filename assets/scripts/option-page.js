window.onload = function () {
    var app = new Vue({
        el: '#option-page',
        data: {
            message: 'مدیریت پیامک ها'
        },

        methods: {
            changeName: function() {
                this.message = "کلیک کردی!؟ اشتباه کردی!"
            }
        }
    });
};