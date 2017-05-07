<script>
    if (jQuery("#vue-newsletter").length)
    {
        console.log('what:');
        var vueNewsletter = new Vue({
            el: '#vue-newsletter',

            data: {
                email: '{{ session()->get('newsletter.email') }}',
                registered: {{ session()->get('newsletter.registered') ? 'true' : 'false' }},
                registering: false,
                response: null,
            },

            methods: {
                __register: function () {
                    this.registering = true;

                    var url = '/api/v1/newsletter/register';

                    this.$http.post(url, {email: this.email}).then(
                        function(response) {
                            this.registering = false;

                            this.registered = response.body.registered;

                            this.response = response.body;
                        },

                        this.__requestError
                    );
                },

                __requestError: function(error) {
                    console.log('Request error: ', error);

                    this.searching = false;
                },
            },
        });
    }
</script>


