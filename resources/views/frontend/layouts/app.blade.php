<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title?? ($site_settings->site_name?? config('company.name')) }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('pages') }}/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('pages') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('pages') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('pages') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('pages') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('pages') }}/css/themify-icons.css">
    
    <link rel="stylesheet" href="{{ asset('pages') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('pages') }}/css/gijgo.css">
    <link rel="stylesheet" href="{{ asset('pages') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('pages') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('pages') }}/css/slicknav.css">

    @stack('css')
    
    @stack('anim_text_css')
    
    <link rel="stylesheet" href="{{ asset('pages') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('pages') }}/css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    
    @yield("content")
    
    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="{{ asset('pages') }}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{ asset('pages') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('pages') }}/js/popper.min.js"></script>
    <script src="{{ asset('pages') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('pages') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('pages') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('pages') }}/js/ajax-form.js"></script>
    <script src="{{ asset('pages') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('pages') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('pages') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('pages') }}/js/scrollIt.js"></script>
    <script src="{{ asset('pages') }}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('pages') }}/js/wow.min.js"></script>
    <script src="{{ asset('pages') }}/js/jquery.slicknav.min.js"></script>
    <script src="{{ asset('pages') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('pages') }}/js/plugins.js"></script>
    <script src="{{ asset('pages') }}/js/gijgo.min.js"></script>
    <script src="{{ asset('pages') }}/js/slick.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <!--contact js-->
    <script src="{{ asset('pages') }}/js/contact.js"></script>
    <script src="{{ asset('pages') }}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('pages') }}/js/jquery.form.js"></script>
    <script src="{{ asset('pages') }}/js/jquery.validate.min.js"></script>
    <script src="{{ asset('pages') }}/js/mail-script.js"></script>


    <script src="{{ asset('pages') }}/js/main.js"></script>
    
    @stack("js")
    
    @stack("anim_text_js")
</body>

</html>
