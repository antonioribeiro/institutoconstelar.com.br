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
                    <div class=""
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
                         data-y="5"
                         data-speed="1200"
                         data-start="1100"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap; margin-top: -300px; padding: 50px;">

                        <img src="/img/logo-big-shadow.png" width="90%" alt="{{ config('app.name') }}">
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
                            <img src="/img/aline-quadrada-1200px.jpg" class="img-responsive" alt="">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('home.partials.aline-amorim')
                                </div>
                            </div>
                        </div>
                    </div><!--team-col-->
                    <div class="col-sm-6">
                        <div class="person">
                            <img src="/img/andrelia-quadrada-1200px.jpg" class="img-responsive" alt="">
                            <div class="row">
                                <div class="col-sm-10 col-sm-offset-1">
                                    @include('home.partials.andrelia-guimaraes')
                                </div>
                            </div>
                        </div>
                    </div><!--team-col-->
                </div>
            </div><!--.container-->
        </div><!--team section end-->

        <!--fun facts-->
        @include('home.partials.phrase')
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
