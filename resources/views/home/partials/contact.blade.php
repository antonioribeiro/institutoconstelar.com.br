<section id="contact" class="padding-80">
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
                    <form action="{{ route('contact') }}" name="sentMessage" id="contactForm" method="post" novalidate>
                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                        <div class="row">
                            <div class="col-md-7">
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <label>Nome<span>*</span></label>
                                        <input name="name" type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Por favor digite seu nome.">
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-5">
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <label>Email<span>*</span></label>
                                        <input name="email" type="email" class="form-control" placeholder="Endereço Email" id="email" required data-validation-required-message="Por favor digite seu email.">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7">
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <label>Mensagem<span>*</span></label>
                                        <textarea name="message" rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message="Por favor digite uma mensagem."></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <label>Telefone</label>
                                        <input name="phone" type="text" class="form-control" placeholder="Telefone" id="phone" required data-validation-required-message="Por favor digite seu nome.">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button name="submit" type="submit" class="btn btn-theme-color btn-lg">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                    <!--contact form-->
                </div>
                <div class="col-md-4">
                    <h4>Informações para contato</h4>
                    <div class="contact-info wow animated fadeInRight" data-wow-delay=".6s">
                        <p><i class="fa fa-home"></i> Rua do Catete, 311 sala 1301B</p>
                        <p><i class="fa fa-phone"></i> (21) 3901-9935</p>
                        <p><i class="fa fa-mobile"></i> (21) 9-8092-6956</p>
                        <p><i class="fa fa-envelope"></i> <a href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a></p>
                        <p><i class="fa fa-clock-o"></i> Segunda-Sexta 8:00-21:00pm</p>
                        <hr>
                        <h4>Redes Sociais</h4>
                        <ul class="list-inline social-colored">
                            <li><a href="{{ config('app.facebook_page') }}"><i class="fa fa-facebook icon-fb" data-toggle="tooltip" title="" data-original-title="Facebook" data-placement="top"></i></a></li>
                            <li><a href="{{ config('app.twitter_page') }}"><i class="fa fa-twitter icon-twit" data-toggle="tooltip" title="" data-original-title="Twitter" data-placement="top"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus icon-plus" data-toggle="tooltip" title="" data-original-title="Google pluse" data-placement="top"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin icon-in" data-toggle="tooltip" title="" data-original-title="Linkedin" data-placement="top"></i></a></li>

                        </ul> <!--colored social-->
                    </div>
                </div>
            </div>
        </div>
    </div><!--Contact-sec-1 end-->
</section><!--contact section end-->
