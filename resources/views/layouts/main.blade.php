<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>{{ config('app.name') }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="/templates/codeon/js/respond.min.js"></script>
        <![endif]-->

        <link href="/css/main.css" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target="#navigation" data-offset="80">

        @yield('contents')

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
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
        <script type="text/javascript">
            var myLatlng;
            var map;
            var marker;

            function initialize() {
                myLatlng = new google.maps.LatLng(-22.930835, -43.177645);

                var mapOptions = {
                    zoom: 18,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    draggable: true
                };
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var contentString = '<p>123 My Street, Codeon City, CA 4567</p>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Marker'
                });

                google.maps.event.addListener(marker, 'click', function () {
                    infowindow.open(map, marker);
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </body>
</html>
