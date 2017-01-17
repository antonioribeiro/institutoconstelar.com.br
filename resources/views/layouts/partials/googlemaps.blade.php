<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeC6rfqHtt78zoQlXvwNRbCsg-6nhg1JI"></script>
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
