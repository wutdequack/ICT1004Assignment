<!DOCTYPE html>
<!--
    Name: Skylith - Viral & Creative Multipurpose HTML Template
    Version: 1.0.3
    Author: nK, unvab
    Website: https://nkdev.info/, http://unvab.com/
    Purchase: https://themeforest.net/item/skylith-viral-creative-multipurpose-html-template/21214857?ref=_nK
    Support: https://nk.ticksy.com/
    License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
    Copyright 2018.
-->
    
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Mei Heong Yuan Desserts - Velocity Novena</title>

    <meta name="description" content="Location-Velocity-Novena">
    <meta name="keywords" content="dessert, food, asian">
    <meta name="author" content="Tan Chin How">

    <link rel="icon" type="image/png" href="assets/images/mhylogo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i%7cWork+Sans:400,500,700%7cPT+Serif:400i,500i,700i" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- Stroke 7 -->
    <link rel="stylesheet" href="assets/vendor/pixeden-stroke-7-icon/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

    <!-- Flickity -->
    <link rel="stylesheet" href="assets/vendor/flickity/dist/flickity.min.css">

    <!-- Photoswipe -->
    <link rel="stylesheet" href="assets/vendor/photoswipe/dist/photoswipe.css">
    <link rel="stylesheet" href="assets/vendor/photoswipe/dist/default-skin/default-skin.css">

    <!-- JustifiedGallery -->
    <link rel="stylesheet" href="assets/vendor/justifiedGallery/dist/css/justifiedGallery.min.css">

    <!-- Skylith -->
    <link rel="stylesheet" href="assets/css/skylith.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    
    
</head>







<!--
    Additional Classes:
        .nk-bg-gradient
-->
<body>
    



<!--Code to insert external nav page-->
<?php include('nav.inc.php'); ?>

    
    
    

    

    <!--
        START: Main Content

        Additional Classes:
            .nk-main-dark
    -->
    <div class="nk-main">
        


        
<div class="nk-header-title nk-header-title-md nk-header-title-parallax-content nk-header-content-center-center">
    <div class="bg-image bg-image-parallax">
        <img src="assets/images/velocity.jpg" alt="" class="jarallax-img">
        
    </div>
    
    
    <div class="nk-header-content">
        <div class="nk-header-content-inner">
            <div class="container">
                
                
                
                
            </div>
        </div>
    </div>  
</div>

<div class="container">
    <div class="nk-portfolio-single">

        <div class="nk-gap-4 mb-2"></div>
        <h1 class="nk-portfolio-title display-4">Velocity@Novena Square Outlet</h1>
        <div class="row vertical-gap">
            <div class="col-lg-8">
                <div class="nk-portfolio-info">
                    <div class="nk-portfolio-text">
                        <p>We know how hard it is to be a parent, having to send your kids for enrichment, drop them off for hospital checks, etc. We can't change that, but you can change where you wanna hang out. Whilst waiting for your kids at the nearby tution centres or at TTSH, why not relax and come down to our Novena outlet. Parents deserve a treat too you know?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <table class="nk-portfolio-details">
                    <tr>
                        <td><strong>Location:</strong></td>
                        <td>
                            	238 Thomson Road<br>
								Velocity@Novena Square #02-03<br>
								Singapore 307683
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Telephone:</strong></td>
                        <td>+65 6255 4336</td>
                    </tr>
                    <tr>
                        <td><strong>Operating Hours:</strong></td>
                        <td>
                            11:15am to 9:30pm daily
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="nk-gap-4 mnb-10"></div>

    </div>
</div>

<!-- START: Google Map -->
<div id="google-map-contact" class="nk-gmaps nk-gmaps-lg"></div>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyBlQNaWM2_jxXJbRwL2ozXWw3cg-uuld8w&sensor=false"></script>
<script>
    function initializeGmaps() {
        var LatLng = {lat: 1.320234, lng: 103.843545};
        var mapCanvas = document.getElementById('google-map-contact');
        var mapOptions = {
            center      : LatLng,
            scrollwheel : false,
            zoom        : 16,
            backgroundColor: 'none',
            mapTypeId   : 'nKStyle'
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({
            position: LatLng,
            map: map,
            icon: 'assets/images/marker.png',
            title: 'Chinatown Outlet'
        });

        // style from https://snazzymaps.com/style/151/ultra-light-with-labels
        var styledMapType = new google.maps.StyledMapType([{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}], { name: 'nKStyle' });
        map.mapTypes.set('nKStyle', styledMapType);
    }
    if(typeof google !== 'undefined') {
        google.maps.event.addDomListener(window, 'load', initializeGmaps);
    }
</script>
<!-- END: Google Map -->

<!-- START: Pagination -->
<div class="nk-pagination nk-pagination-center">
    <div class="container">
        <a class="nk-pagination-prev" href="location-clementi-mall.html"><span class="pe-7s-angle-left"></span> Clementi Mall Outlet</a>
        <a class="nk-pagination-next" href="location-marina-square.html"><span class="pe-7s-angle-right"></span> Marina Square Outlet</a>
    </div>
</div>
<!-- END: Pagination -->

    </div>
    <!-- END: Main Content -->

    
<!--Code to insert external footer page-->
<?php include('footer.inc.php'); ?>


    

    

    

    

    
<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- ImagesLoaded -->
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- GSAP -->
<script src="assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
<script src="assets/vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>

<!-- Popper -->
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Sticky Kit -->
<script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- Flickity -->
<script src="assets/vendor/flickity/dist/flickity.pkgd.min.js"></script>

<!-- Isotope -->
<script src="assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>

<!-- Photoswipe -->
<script src="assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
<script src="assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>

<!-- JustifiedGallery -->
<script src="assets/vendor/justifiedGallery/dist/js/jquery.justifiedGallery.min.js"></script>

<!-- Jquery Validation -->
<script src="assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>

<!-- Hammer.js -->
<script src="assets/vendor/hammerjs/hammer.min.js"></script>

<!-- NanoSroller -->
<script src="assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>

<!-- Keymaster -->
<script src="assets/vendor/keymaster/keymaster.js"></script>


<!-- Skylith -->
<script src="assets/js/skylith.min.js"></script>
<script src="assets/js/skylith-init.js"></script>
<!-- END: Scripts -->

    
</body>
</html>
