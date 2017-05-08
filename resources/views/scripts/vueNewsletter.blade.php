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

            __registered: function (data) {
                this.registering = false;

                this.registered = data.registered;

                this.response = data;
            },

            methods: {
                __register: function () {
                    this.registering = true;

                    var url = '/api/v1/newsletter/register';

                    axios.post(url, {email: this.email}).then(
                        function(response) {
                            this.__registered(response.data)
                        }
                    ).catch(function (error) {
                        this.__requestError(error)
                    });
                },

                __requestError: function(error) {
                    console.log('Request error: ', error);

                    this.searching = false;
                },
            },
        });
    }
</script>


