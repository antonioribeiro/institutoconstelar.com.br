<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>{{ config('app.name') }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="psicologia,psicoterapia,gestalt,gestalt terapia,constelação familiar,sublocação,compartilhamento">
        <meta name="author" content="Antonio Carlos Ribeiro">

        @include('layouts.partials.favicon')

        <!--bootstrap css-->
        <link href="/templates/codeon/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--custom css-->
        <link href="/templates/codeon/css/style.css" rel="stylesheet" type="text/css">
        <!--flex slider css-->
        <link href="/templates/codeon/css/flexslider.css" rel="stylesheet">
        <!--google web fonts css-->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,800' rel='stylesheet' type='text/css'>

        <!-- icons css-->
        <link href="/templates/codeon/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--animated css-->
        <link href="/templates/codeon/css/animate.css" rel="stylesheet">
        <!--owl carousel css-->
        <link href="/templates/codeon/css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
        <link href="/templates/codeon/css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
        <!--Revolution slider css-->
        <link href="/templates/codeon/rs-plugin/css/settings.css" rel="stylesheet" type="text/css" media="screen">

        <script src="//cdnjs.cloudflare.com/ajax/libs/vue/2.2.6/vue.js"></script>
        <script src="//cdn.jsdelivr.net/vue.resource/1.3.1/vue-resource.min.js"></script>

        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="/templates/codeon/js/respond.min.js"></script>
        <![endif]-->

        <link href="/css/main.css" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target="#navigation" data-offset="80">
        @yield('javascript-top')

        <section id="navigation" class="fixed-navigation">
            <div class="navbar navbar-default navbar-static-top navbar-transparent hidden" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img src="/img/logo-big-shadow.png" height="55px" alt="{{ config('app.name') }}">
                        </a>
                    </div>

                    @yield('navbar-menu')
                </div><!--/.container -->
            </div>
        </section><!--navigation section end here-->

        @yield('contents')

        @include('home.partials.contact')

        <div id="map-canvas" style="width:100%; height: 350px;"></div>
        <div class="contact-sec-2">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="contact-col wow animated flipInY" data-wow-delay=".3s">
                            <i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-whatsapp"></i>
                            <p>(21) 3901-9935</p>
                            <p>(21) 9-8092-6956 (Aline)</p>
                            <p>(21) 9-8761-0920 (Andrélia)</p>
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
                            <p>Rua do Catete, 311<br>Largo do Machado - RJ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--Contact-sec-1 end-->


        <section id="footer" class="padding-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 copyright">
                        <div class="row">
                            <div class="col-md-12">
                                <span>&copy; Copyright 2016-2017 {{ config('app.name') }} - Todos os direitos reservados</span>
                            </div>
                            <div class="col-md-12">
                                Desenvolvimento e fotografia: <a href="https://antoniocarlosribeiro.com">Antonio Carlos Ribeiro</a></span>
                            </div>
                        </div>

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

        <!--script files-->
        <script src="/templates/codeon/js/jquery.min.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/moderniz.min.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/jquery.easing.1.3.min.js" type="text/javascript"></script>
        <script src="/templates/codeon/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/wow.min.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/jquery.sticky.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/jquery.stellar.min.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/waypoints.min.js"></script>
        <script src="/templates/codeon/js/easypiechart.js"></script>
        <script src="/templates/codeon/js/jquery.isotope.min.js" type="text/javascript"></script>
        <!--image loads plugin -->
        <script src="/templates/codeon/js/jquery.imagesloaded.min.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/jquery.countdown.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/contact_me.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/jqBootstrapValidation.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/custom.js" type="text/javascript"></script>
        <!--revolution slider plugins-->
        <script src="/templates/codeon/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="/templates/codeon/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/revolution-custom.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/isotope-custom.js" type="text/javascript"></script>
        <script src="/templates/codeon/js/pace.min.js" type="text/javascript"></script>

        @include('layouts.partials.googlemaps')
        @include('layouts.partials.googleanalytics')

        @yield('javascript')

        @yield('javascript-page')

        @yield('javascript-bottom')

        @include('scripts.vueNewsletter')
    </body>
</html>
