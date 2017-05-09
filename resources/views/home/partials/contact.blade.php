<section id="vue-contact" class="padding-80">
    <div class="contact-sec-1">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="small section-title"><span>a gente quer ouvir o que você tem a dizer</span></h4>
                <h2 class="large section-title">Contato</h2>
            </div><!--section heading-->
        </div><!--.container-->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>Envie uma mensagem</h4>

                    <div v-if="! sent">
                        @include('home.partials.contact-form')
                    </div>

                    <div v-if="sent">
                        <h3>
                            Sua mensagem for recebida, obrigado!
                        </h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Informações para contato</h4>
                    <div class="contact-info wow animated fadeInRight" data-wow-delay=".6s">
                        <p><i class="fa fa-home"></i> Rua do Catete, 311</p>
                        <p><i class="fa fa-phone"></i> (21) 3901-9935</p>
                        <p><i class="fa fa-mobile"></i> (21) 9-8092-6956 (Aline)</p>
                        <p><i class="fa fa-mobile"></i> (21) 9-8761-0920 (Andrélia)</p>
                        <p><i class="fa fa-envelope"></i> <a href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a></p>
                        <p><i class="fa fa-clock-o"></i> Segunda-Sexta 8:00-21:00pm</p>
                        <hr>
                        <h4>Redes Sociais</h4>
                        <ul class="list-inline social-colored">
                            <li><a href="{{ config('app.facebook_page') }}"><i class="fa fa-facebook icon-fb" data-toggle="tooltip" title="" data-original-title="Facebook" data-placement="top"></i></a></li>
                            <li><a href="{{ config('app.twitter_page') }}"><i class="fa fa-twitter icon-twit" data-toggle="tooltip" title="" data-original-title="Twitter" data-placement="top"></i></a></li>
                        </ul> <!--colored social-->
                    </div>
                </div>
            </div>
        </div>
    </div><!--Contact-sec-1 end-->
</section><!--contact section end-->
