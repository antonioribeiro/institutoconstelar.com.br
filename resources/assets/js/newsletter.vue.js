if (jQuery("#vue-newsletter").length)
{
    console.log('what:');
    var app = new Vue({
        el: '#vue-newsletter',

        data: {
            email: window.Laravel.email,
            registered: window.Laravel.registered,
            registering: false,
            response: null,
            error: null,
        },

        methods: {
            __registered(data) {
                this.registering = false;

                this.registered = data.registered;

                this.response = data;
            },

            __register() {
                this.registering = true;

                var url = '/api/v1/newsletter/register';

                var vue = this;

                axios.post(url, {email: this.email}).then(
                    function(response) {
                        vue.__registered(response.data)
                    }
                ).catch(function (error) {
                    vue.__requestError(error.response)
                });
            },

            __requestError(error) {
                this.error = error.data['email'][0];
            },
        },
    });
}
