<section class="footer">
        <div class="container">
            <div class="footer-contato">
                <h3>Fale <strong>Conosco</strong></h3>
                <span class="tel tel-1">43. <strong>3337-1818</strong></span>
                <span class="tel tel-2">43. <strong>9987-1818</strong></span>
            </div>
            
            <div class="footer-atendimento">
                <h3>Atendimento</h3>
                <p>
                    Segunda a Sexta: 08h00 as 18:00
                    FECHADO aos Sábados e Domingos
                </p>
            </div>
            
            <div class="footer-orcamento pull-right">
                <h3>Solicite seu <strong>Orçamento</strong></h3>
                <form class="orcamento-footer" method="post" action="orcamento-envia.php">
                    <input type="text" name="nome" placeholder="NOME" required>
                    <input type="email" name="email" placeholder="E-MAIL" required>
                    <textarea name="mensagem" placeholder="MENSAGEM" required></textarea>
                    <button type="submit" class="btn btn-default btn-envia-orcamento-home pull-right">Enviar</submit>
                </form>
            </div>
            
            <div class="footer-copyright">
                <p>© Copyright 2016 Vidraçaria Millenium - Todos os direitos reservados</p>
                
                <div class="footer-intrepido">
                    <a href="http://intrepido53.com.br" target="_blank">Intrépido 53</a>
                </div>
            </div>
        </div>
    </section>

           
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
        
        <!-- InputMask -->
        <script src="js/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="js/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="js/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>

        <!-- GOOGLE MAPS -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDfVpzxaQRLeD6z-r-RaEzNbRfD-c6aWmo&sensor=TRUE"></script>
        <script type="text/javascript">
            function initializeMaps() {
                var myLatlng = new google.maps.LatLng(-23.3402024,-51.1372256);
                var latlngAlpha = new google.maps.LatLng(-23.3402024,-51.1372256);
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