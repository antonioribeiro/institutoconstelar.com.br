if (jQuery("#vue-contact").length)
{
    var app = new Vue({
        el: '#vue-contact',

        data: {
            form: {
                name: null,
                email: null,
                phone: null,
                message: null,
            },
            errors: null,
            sent: false,
            sending: false,
            error: null,
        },

        methods: {
            __submit() {
                this.sending = true;

                var url = '/api/v1/contact';

                var vue = this;

                axios.post(url, this.form).then(
                    function() {
                        vue.sending = false;

                        vue.sent = true;
                    }
                ).catch(function (error) {
                    vue.sending = false;

                    vue.errors = error.response.data;
                });
            },
        },
    });
}
