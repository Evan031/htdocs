

<script src="<?php echo URLROOT; ?>/js/main.js"></script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

    <script>
        $('#clock').countdown('2023/02/11', function (event) {
            $(this).html(event.strftime(
                '<div class="countdown_wrap d-flex"><div  class="single_countdown"><h3>%D</h3><span>Days</span></div><div class="single_countdown"><h3>%H</h3><span>Hours</span></div><div class="single_countdown"><h3>%M</h3><span>Minutes</span></div><div class="single_countdown"><h3>%S</h3><span>Seconds</span></div></div>'
            ));
        });
    </script>
    <script>
        function initMap() {
            var uluru = {
                lat: -25.363,
                lng: 131.044
            };
            var grayStyles = [{
                    featureType: "all",
                    stylers: [{
                            saturation: -90
                        },
                        {
                            lightness: 50
                        }
                    ]
                },
                {
                    elementType: 'labels.text.fill',
                    stylers: [{
                        color: '#ccdee9'
                    }]
                }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -31.197,
                    lng: 150.744
                },
                zoom: 9,
                styles: grayStyles,
                scrollwheel: false
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
    </script>
</body>
</html>

