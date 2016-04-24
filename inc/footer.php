
           
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

        <!-- ScrolloTop -->
        <script src="js/jquery.scrollTopAll.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Lightbox JavaScript -->
        <script src="js/lightbox.js"></script>

        <!-- jCarousel -->
        <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="js/jcarousel.responsive.js"></script>

        <!-- GOOGLE MAPS -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDfVpzxaQRLeD6z-r-RaEzNbRfD-c6aWmo&sensor=TRUE"></script>
        <script type="text/javascript">
            function initializeMaps() {
                var myLatlng = new google.maps.LatLng(-23.391801,-51.430427);
                var latlngAlpha = new google.maps.LatLng(-23.391801,-51.430427);
                var mapOptions = {
                  zoom: 17,
                  center: myLatlng,
                  mapTypeId: google.maps.MapTypeId.ROADMAP,
                }
                var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                var marker = new google.maps.Marker({
                    position: latlngAlpha,
                    title:"VM Vidros"
                });
                var styles = [{
                    stylers: [
                        { hue: ""},
                    ]
                }];
                var styledMap = new google.maps.StyledMapType(styles,
                {name: "Styled Map"});
                map.mapTypes.set('map_style', styledMap);
                map.setMapTypeId('map_style');
                marker.setMap(map);
            }
        </script>

        <!-- Scripts -->
        <script src="js/scripts.js"></script>