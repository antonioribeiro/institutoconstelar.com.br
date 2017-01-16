@extends('layouts.main')

@section('navbar-menu')
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
@stop

@section('contents')
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
                         data-y="330"
                         data-speed="1200"
                         data-start="1100"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap; margin-top: -300px; padding: 50px;">

                        <img src="/img/logo.png" width="85%" alt="{{ config('app.name') }}">
                    </div>
                {{--<!-- Home Subheading -->--}}
                {{--<div class="tp-caption ken-burns-cap sft fadeout"--}}
                {{--data-x="center"--}}
                {{--data-y="390"--}}
                {{--data-speed="1200"--}}
                {{--data-start="1350"--}}
                {{--data-easing="Power3.easeInOut"--}}
                {{--data-splitin="none"--}}
                {{--data-splitout="none"--}}
                {{--data-elementdelay="0.1"--}}
                {{--data-endelementdelay="0.1"--}}
                {{--data-endspeed="300"--}}
                {{--style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">--}}
                {{--Psicoterapia / Gestalt Terapia / Constelação Familiar--}}
                {{--</div>--}}
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
        @include('home.partials.testimonials')

        <div id="team" class="work-section-2 section-blue">
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
                                        <p>Sou Aline Amorim, psicóloga, gestalt terapeuta e consteladora familiar.</p>

                                        <p>Me graduei pela UERJ - Universidade do Estado do Rio de Janeiro em 2011 e logo iniciei o trabalho no consultório. Antes mesmo de concluir a graduação, havia iniciado o curso de especialização clínica em gestalt terapia, que foi determinante em minha forma de trabalho. Hoje sou gestalt terapeuta, abordagem da psicologia que me permite atender de forma tão flexível, transitando sempre entre os atendimentos mais tradicionais, com diálogos e reflexões, até formas menos convencionais, com experimentos lúdicos e expressivos, e que ganham vida de acordo com a necessidade do cliente.</p>

                                        <p>Em 2014, iniciei o curso de formação em Constelação Familiar, ferramenta desenvolvida por Bert Helinger, e que nos permite um olhar terapêutico a partir da perspectiva transgeracional. Faz parte da prática do psicólogo a escuta sobre a história familiar, mas a Constelação Familiar proporciona um olhar ampliado sobre as questões de família. Através da perspectiva das constelações é possível compreender melhor os conflitos familiares, sendo esta um facilitador para se ter outro nível de compreensão a respeito dos sistemas familiares.</p>
                                        </p>
                                        <p>
                                            <i class="fa fa-phone"></i> <i class="fa fa-whatsapp"></i> (21) 9-8092-6956 <br>
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
                                        <p>Sou Andrélia Guimarães, psicóloga, gestalt terapeuta e consteladora familiar.</p>

                                        <p>Me graduei pela Universidade Santa Úrsula em 1988, iniciei a especialização em Gestalt terapia em 1991, quando então iniciei a prática clínica, com atendimento a crianças e adultos. Em 1996 fiz formação em Terapia Vibracional, que acrescentou ao meu trabalho uma visão do campo de energia humano, e da necessidade de cuidado com o meio em que vivemos, a partir da consciência de que somos parte desse meio. Isso resultou no início de trabalhos com grupos diversos, sempre no intuito de facilitar o desenvolvimento integral do indivíduo.</p>

                                        <p>Em 2011 fiz formação em hipnoterapia, no desejo de complementar o meu trabalho com a técnica da hipnose, que utilizo como mais um recurso facilitador, a partir da necessidade do cliente de aprofundar as suas questões.</p>

                                        <p>Em 2012, no intuito de me atualizar, fiz outra especialização em Gestalt terapia, que foi de grande enriquecimento pessoal e profissional, fortalecendo o meu apreço por essa abordagem tão rica em recursos e tão cuidadosa com o cliente. Nesse momento pude costurar todo o meu aprendizado de anos sobre o tecido da Gestalt terapia, unificando todo o meu trabalho.</p>

                                        <p>Em 2014, iniciei o curso de formação em Constelação Familiar, que ampliou a minha visão sobre as questões familiares e o valor da sua história.</p>
                                        </p>

                                        <p>
                                            <i class="fa fa-phone"></i> <i class="fa fa-whatsapp"></i> (21) 9-8761-0920 <br>
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
