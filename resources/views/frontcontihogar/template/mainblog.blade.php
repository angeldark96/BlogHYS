<!doctype html>
<html class="no-js" lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">

    <!-- Place favicon.ico in the root directory -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('css/jQuery.lightninBox.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ asset('css/style_portafolio.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_menu.css') }}">
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('img/isotipo0.png') }}">
    <!--Start of Zendesk Chat Script-->
    <!--Start of Zendesk Chat Script-->
    <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
            d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
            $.src="https://v2.zopim.com/?5HbTr2hz22CR4zIgsMpTq2zXxaz39DXD";z.t=+new Date;$.
                type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zendesk Chat Script-->
    <!--End of Zendesk Chat Script-->
</head>
<body >

@include('frontcontihogar.template.partials.header')
<section>
    @yield('blog_principal')
    @yield('blog_principal_index')
</section>




<script type="text/javascript" src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
{{--<script src="{{ asset('js/showHide.js') }}"></script>--}}
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
{{--<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>--}}
<script src="{{ asset('js/plugins.js') }}"></script>

<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHxGbmEzFBdmwD7OkkfqXqNUlWX7j-Plc&callback=initMap"
        type="text/javascript"></script>
<script>
    function initialize() {
        var mapOptions = {
            zoom: 14,
            scrollwheel: false,
            center: new google.maps.LatLng(-12.1831967, -77.0077588,16)
        };
        var map = new google.maps.Map(document.getElementById('googleMap'),
            mapOptions);
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            animation:google.maps.Animation.BOUNCE,
            icon: 'img/map-marker.png',
            map: map
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script src="{{ asset('js/main.js') }}"></script>


<script  type="text/javascript" src="{{ asset('js/showHide.js') }}"></script>

<script type="text/javascript">

    $(document).ready(function(){


        $('.show_hide').showHide({
            speed: 1000,  // speed you want the toggle to happen
            easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
            changeText: 1, // if you dont want the button text to change, set this to 0
            showText: 'View',// the button text to show when a div is closed
            hideText: 'Close' // the button text to show when a div is open

        });


    });

</script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>


{{--<script>--}}

    {{--//Hide Overflow of Body on DOM Ready //--}}
    {{--$(document).ready(function(){--}}
        {{--$("body").css("overflow", "hidden");--}}
    {{--});--}}

    {{--// Show Overflow of Body when Everything has Loaded--}}
    {{--$(window).load(function(){--}}
        {{--$("body").css("overflow", "visible");--}}
        {{--var nice=$('html').niceScroll({--}}
            {{--cursorborder:"5",--}}
            {{--cursorcolor:"#f9b906",--}}
            {{--cursorwidth:"200px",--}}
            {{--boxzoom:true,--}}
            {{--autohidemode:true--}}
        {{--});--}}

    {{--});--}}
{{--</script>--}}

{{--<script>--}}

    {{--//Hide Overflow of Body on DOM Ready //--}}
    {{--$(document).ready(function(){--}}
        {{--$("body").css("overflow", "hidden");--}}
    {{--});--}}

    {{--// Show Overflow of Body when Everything has Loaded--}}
    {{--$(window).load(function(){--}}
        {{--$("body").css("overflow", "visible");--}}
        {{--var nice=$('html').niceScroll({--}}
            {{--cursorborder:"5",--}}
            {{--cursorcolor:"#f9b906",--}}
            {{--cursorwidth:"200px",--}}
            {{--boxzoom:true,--}}
            {{--autohidemode:true--}}
        {{--});--}}

    {{--});--}}
{{--</script>--}}
</body>
</html>
