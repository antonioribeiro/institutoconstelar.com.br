@extends('layouts.main')

@section('contents')
    <section id="navigation" class="fixed-navigation">
        <div class="navbar navbar-default navbar-static-top navbar-transparent" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="demo-default.html">{{ config('app.name') }}</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right scrollto">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Sobre Nós</a></li>
                        <li><a href="#services">Serviços</a></li>
                        <li><a href="#work">Espaço</a></li>
                        <li><a href="#team">Equipe</a></li>
                        <li><a href="#contact">Contato</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container -->
        </div>
    </section><!--navigation section end here-->

    <div class="tp-banner-container" id="home">
        <div class="tp-banner-video">
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/img/lavanda.jpg"  data-saveperformance="off"  data-title="Quick Results">
                    <!-- MAIN IMAGE -->
                    <img src="/img/lavanda.jpg"  alt="video_typing_cover"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-fade fadeout fullscreenvideo"
                         data-x="0"
                         data-y="0"
                         data-speed="1000"
                         data-start="1100"
                         data-easing="Power4.easeOut"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1500"
                         data-endeasing="Power4.easeIn"
                         data-autoplay="false"
                         data-autoplayonlyfirsttime="false"
                         data-nextslideatend="true"
                         data-volume="mute"
                         data-forceCover="1"
                         data-aspectratio="16:9"
                         data-forcerewind="on"
                         style="z-index: 2;">
                        <video class="img-responsive" preload="none"
                               poster='/img/lavanda.jpg'>
                        </video>
                    </div>

                    <!-- Home Heading -->
                    <div class="tp-caption sft Ken-burns-heading"
                         data-x="center"
                         data-y="260"
                         data-speed="1200"
                         data-start="1100"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                        {{ config('app.name') }}
                    </div>
                    <!-- Home Subheading -->
                    <div class="tp-caption ken-burns-cap sft fadeout"
                         data-x="center"
                         data-y="390"
                         data-speed="1200"
                         data-start="1350"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                        Psicoterapia / Gestalt Terapia / Constelação Familiar
                    </div>
                    <!-- Home Button -->
                    {{--<div class="tp-caption home-button sft fadeout"--}}
                         {{--data-x="center"--}}
                         {{--data-y="450"--}}
                         {{--data-speed="1200"--}}
                         {{--data-start="1550"--}}
                         {{--data-easing="Power3.easeInOut"--}}
                         {{--data-splitin="none"--}}
                         {{--data-splitout="none"--}}
                         {{--data-elementdelay="0.1"--}}
                         {{--data-endelementdelay="0.1"--}}
                         {{--data-endspeed="300"--}}
                         {{--style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">--}}
                        {{--<div class="rev-buttons scrollto">--}}
                            {{--<a href="#work" class="btn btn-theme-color btn-lg">--}}
                                {{--Nosso Espaço--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </li>
            </ul>
        </div>
    </div>	<!--video slider-->

    @include('home.partials.about')

    @include('home.partials.services')

    <!--our work section start here-->
    <section id="work" class="padding-80">
        @include('home.partials.space')

        <!--testimonials-->
        <div class="testi parallax " data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div id="testi-carousel" class="owl-carousel">
                            <div>
                                <img src="/templates/codeon/img/t-1.jpg" alt="">
                                <h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.
                                </h4>
                                <p>Kris watson</p>
                            </div><!--testimonials item like paragraph-->
                            <div>
                                <img src="/templates/codeon/img/t-2.jpg" alt="">
                                <h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.
                                </h4>
                                <p>Daniel faulkner</p>
                            </div><!--testimonials item like paragraph-->
                            <div>
                                <img src="/templates/codeon/img/t-3.jpg" alt="">
                                <h4>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia.
                                </h4>
                                <p> Steve Smith</p>
                            </div><!--testimonials item like paragraph-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--testimonials-->
        <div id="team" class="work-section-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center margin-btm-40">
                        <div class="section-heading text-center">
                            <h4 class="small section-title"><span>A Equipe</span></h4>
                            <h2 class="large section-title">QUEM SOMOS</h2>
                        </div>
                    </div>
                </div><!--.row-->
                <div class="row">
                    <div class="col-sm-6">
                        <div class="person">
                            <img src="/img/aline-quadrada-500px.jpg" class="img-responsive" alt="">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="person-desc">
                                        <h4>Aline Amorim</h4>
                                        <em>Psicóloga - CRP 05/43203</em>
                                        <p>
                                            Psicóloga (UERJ/2011). Gestalt-terapeuta (IPGF/2014). Formação em Constelação Familiar (IPGF/previsão 2016). Palestrante em congressos. Atua em consultório particular atendendo adolescentes e adultos.
                                        </p>
                                        <p>
                                            <i class="fa fa-phone"></i> (21) 9-8092-6956 <br>
                                            <i class="fa fa-envelope"></i> <a href="mailto:amorimaline@yahoo.com.br">amorimaline@yahoo.com.br</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--team-col-->
                    <div class="col-sm-6">
                        <div class="person">
                            <img src="/img/andrelia-quadrada-500px.jpg" class="img-responsive" alt="">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    <div class="person-desc">
                                        <h4>Andrélia Guimarães</h4>
                                        <em>Psicóloga - CRP 05/12345</em>
                                        <p>
                                            Psicóloga (USU/1988), Gestalt-terapeuta (Vita Clínica/1993 - IPGF/2014), formação em Hipnoterapia (IBH/2011). Em formação em Constelação Familiar (IPGF/previsão 2015). Coordenadora de cursos, workshops e facilitadora de processos grupais em congressos, empresas, escolas e consultório. Palestrante em escolas e empresas. Atendendo em consultório particular, crianças, adolescentes, adultos e grupos.
                                        </p>
                                        <p>
                                            <i class="fa fa-phone"></i> (21) 9-8761-0920 <br>
                                            <i class="fa fa-envelope"></i> <a href="mailto:andreliaguimaraes@gmail.com">andreliaguimaraes@gmail.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--team-col-->
                </div>
            </div><!--.container-->
        </div><!--team section end-->

        <!--fun facts-->
        <div class="purchase-now parallax" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-1">
                        <h1 class="wow animated fadeInLeft pull-right" data-wow-delay="0.3s">"A verdade só pode ser tolerada se descoberta por conta própria."</h1>
                        <h4 class="wow animated fadeInLeft pull-right" data-wow-delay="0.3s">FRITZ PERLS</h4>
                    </div>
                </div>
            </div>
        </div>
        <!--fun facts-->
    </section><!--#work-section-->

    <!--our work section end-->

    @include('home.partials.contact')

    <div id="map-canvas" style="width:100%; height: 350px;"></div>
    <div class="contact-sec-2">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-4">
                    <div class="contact-col wow animated flipInY" data-wow-delay=".3s">
                        <i class="fa fa-phone"></i>
                        <p>(21) 3901-9935</p>
                        <p>(21) 9-8092-6956</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-col wow animated flipInY" data-wow-delay=".3s">
                        <i class="fa fa-envelope"></i>
                        <p>{{ config('mail.from.address') }}</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-col wow animated flipInY" data-wow-delay=".3s">
                        <i class="fa fa-home"></i>
                        <p>Rua do Catete, 311 sala 1301B<br>Largo do Machado - RJ</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--Contact-sec-1 end-->


    <section id="footer" class="padding-80">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 copyright">
                    <span>&copy;2016. {{ config('app.name') }}. Desenvolvido por <a href="https://antoniocarlosribeiro.com">Antonio Carlos Ribeiro</a>.</span>
                </div>
                <div class="col-md-6 col-sm-6 footer-nav">
                    <ul class="list-inline">
                        <li><a href="#home" class="scrollto">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--footer end-->
    <!--back to top-->
    <a href="#" class="scrollToTop"><i class="fa fa-angle-up"></i></a>
    <!--back to top end-->
@stop

@section('javascript')
    <script>
        jQuery(".image-overlay").on("click", function(event)
        {
            event.preventDefault();

            var image = jQuery(event.target).closest('.image-wrapper').find('img')[0].currentSrc;

            jQuery('#imagepreview').attr('src', image); // here asign the image to the modal when the user click the enlarge link

            jQuery('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
        });

        jQuery('.modal').on('show.bs.modal', centerModal);

        jQuery(window).on("resize", function ()
        {
            jQuery('.modal:visible').each(centerModal);
        });

        function centerModal()
        {
            jQuery(this).css('display', 'block');
            var $dialog = jQuery(this).find(".modal-dialog");
            var offset = (jQuery(window).height() - $dialog.height()) / 2;
            // Center modal vertically in window
            $dialog.css("margin-top", offset);
        }
    </script>
@stop

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Popup image</button>

