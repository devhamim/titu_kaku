<!DOCTYPE html>
<html lang="zxx">
<head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Kimono - Photography Agency">
        <meta name="author" content="">

        <!-- Favicon and touch Icons -->
        <link href="{{ asset('frontend') }}/assets/img/favicon.png" rel="shortcut icon" type="image/png">
        <link href="{{ asset('frontend') }}/assets/img/apple-touch-icon.html" rel="apple-touch-icon">
        <link href="{{ asset('frontend') }}/assets/img/apple-touch-icon-72x72.html" rel="apple-touch-icon" sizes="72x72">
        <link href="{{ asset('frontend') }}/assets/img/apple-touch-icon-114x114.html" rel="apple-touch-icon" sizes="114x114">
        <link href="{{ asset('frontend') }}/assets/img/apple-touch-icon-144x144.html" rel="apple-touch-icon" sizes="144x144">

        <!-- Page Title -->
        <title>HAMIM</title>    
        
        <!-- Styles Include -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main.css">
        
    </head>


    <body class="theme-style--light">
        
        <!-- Preloader -->
        <div id="preloader">
			<div class="preloader-inner">
				<div class="spinner">
                    {{-- <img  alt="logo"> --}}
                    <p style="color: #151515">logo</p>
                    <img src="https://wpthemebooster.com/demo/themeforest/html/kimono/assets/img/preloader-wheel.svg" alt="img" class="wheel">
                </div>
				
			</div>
		</div>
        
        <!-- pointer start -->
		<div class="pointer bnz-pointer" id="bnz-pointer"></div>
        
         
        <!-- Main Header -->
        @include('frontend.layouts.header')
        
        <!-- Main Wrapper-->
        @yield('content')

        <!-- Footer -->
        @include('frontend.layouts.footer')

        <div class="totop">
            <a href="#"><i class="bi bi-chevron-up"></i></a>
        </div>
        

        <!-- Core JS -->
        <script src="{{ asset('frontend') }}/assets/js/jquery-3.6.0.min.js"></script>

        <!-- Framework -->
        <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
        
        <!-- WOW Scroll Effect -->
        <script src="{{ asset('frontend') }}/plugins/wow/wow.min.js"></script>

        <!-- Swiper Slider -->
        <script src="{{ asset('frontend') }}/plugins/swiper/swiper-bundle.min.js"></script>
        <script src="{{ asset('frontend') }}/plugins/swiper/swiper-gl.min.js"></script>

         <!-- Odometer Counter -->
         <script src="{{ asset('frontend') }}/plugins/odometer/appear.js"></script>
         <script src="{{ asset('frontend') }}/plugins/odometer/odometer.js"></script>
 
         <!-- Projects -->
         <script src="{{ asset('frontend') }}/plugins/isotope/isotope.pkgd.min.js"></script>
         <script src="{{ asset('frontend') }}/plugins/isotope/imagesloaded.pkgd.min.js"></script>
         <!-- <script src="{{ asset('frontend') }}/plugins/isotope/jquery.hoverdir.js"></script>-->
         <script src="{{ asset('frontend') }}/plugins/isotope/tilt.jquery.js"></script>
         <script src="{{ asset('frontend') }}/plugins/isotope/isotope-init.js"></script>
 
         <!-- Fancybox -->
         <script src="{{ asset('frontend') }}/plugins/fancybox/jquery.fancybox.min.js"></script>
 
         <!-- Flatpickr -->
         <script src="{{ asset('frontend') }}/plugins/flatpickr/flatpickr.min.js"></script>

        <!-- Nice Select -->
        <script src="{{ asset('frontend') }}/plugins/nice-select/jquery.nice-select.min.js"></script>

        

        <!-- Cursor Effect -->
        <script src="{{ asset('frontend') }}/plugins/cursor-effect/cursor-effect.js"></script>

        <!-- Theme Custom JS -->
        <script src="{{ asset('frontend') }}/assets/js/theme.js"></script>
        
    </body>
</html>