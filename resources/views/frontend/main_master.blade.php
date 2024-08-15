<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Abo Madiyanv - Photography Agency">
        <meta name="author" content="">

        <!-- Favicon and touch Icons -->
        <link href=" {{asset('frontend/assets/img/favicon.png')}} " rel="shortcut icon" type="image/png">
        <link href=" {{asset('frontend/assets/img/apple-touch-icon.png')}} " rel="apple-touch-icon">
        <link href=" {{asset('frontend/assets/img/apple-touch-icon-72x72.png')}} " rel="apple-touch-icon" sizes="72x72">
        <link href=" {{asset('frontend/assets/img/apple-touch-icon-114x114.png')}} " rel="apple-touch-icon" sizes="114x114">
        <link href=" {{asset('frontend/assets/img/apple-touch-icon-144x144.png')}} " rel="apple-touch-icon" sizes="144x144">

        <!-- Page Title -->
        <title>Abo Madiyanv Videos</title>    
        
        <!-- Styles Include -->
        <link rel="stylesheet" href=" {{asset('frontend/assets/css/main.css')}}  ">
        <link rel="stylesheet" href=" {{asset('frontend/assets/css/components.css')}} ">
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/66be362c0cca4f8a7a76768a/1i5bg77em';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    </head>


    <body class="theme-style--gradient">

        <!-- Preloader -->
        <div id="preloader">
			<div class="preloader-inner">
				<div class="spinner">
                    <!-- <img src="../assets/img/preloader-logo.svg" alt="img"> -->
                    <img src=" {{asset('frontend/assets/img/log-removebg-preview.png')}} " alt="img">

                    <img src=" {{asset('frontend/assets/img/preloader-wheel.svg')}} " alt="img" class="wheel">
                </div>
				
			</div>
		</div>
        
        <!-- pointer start -->
		<div class="pointer bnz-pointer" id="bnz-pointer"></div>
        
         
        
        <!-- Main Header -->
                @include('frontend.body.header')
        <!-- End Main Header -->		

        <!-- Mobile Responsive Menu -->
            @include('frontend.body.menu_mobile')
        
            <!-- Modal Search -->
            <div class="search-modal">
                <div class="modal fade" id="modalSearch">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="search_overlay">
                                <form class="credential-form" method="post">
                                    <div class="form-group">
                                        <input type="text" name="search" class="keyword form-control" placeholder="Search Here">
                                    </div>
                                    <button type="submit" class="btn-search">
                                        <span class="text-first"> <i class="bi bi-arrow-right"></i> </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- Main Wrapper-->
        @yield('main')

        <!-- Footer -->
        @include('frontend.body.footer')

        <div class="totop">
            <a href="#"><i class="bi bi-chevron-up"></i></a>
        </div>
        

        <!-- Core JS -->
        <script src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>

        <!-- Framework -->
        <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
        
        <!-- WOW Scroll Effect -->
        <script src="{{asset('frontend/plugins/wow/wow.min.js')}}"></script>

        <!-- Swiper Slider -->
        <script src="{{asset('frontend/plugins/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('frontend/plugins/swiper/swiper-gl.min.js')}}"></script>

         <!-- Odometer Counter -->
         <script src="{{asset('frontend/plugins/odometer/appear.js')}}"></script>
         <script src="{{asset('frontend/plugins/odometer/odometer.js')}}"></script>
 
         <!-- Projects -->
         <script src="{{asset('frontend/plugins/isotope/isotope.pkgd.min.js')}}"></script>
         <script src="{{asset('frontend/plugins/isotope/imagesloaded.pkgd.min.js')}}"></script>
         
         <script src="{{asset('frontend/plugins/isotope/tilt.jquery.js')}}"></script>
         <script src="{{asset('frontend/plugins/isotope/isotope-init.js')}}"></script>
 
         <!-- Fancybox -->
         <script src="{{asset('frontend/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
 
         <!-- Flatpickr -->
         <script src="{{asset('frontend/plugins/flatpickr/flatpickr.min.js')}}"></script>

        <!-- Nice Select -->
        <script src="{{asset('frontend/plugins/nice-select/jquery.nice-select.min.js')}}"></script>

        

        

        <!-- Cursor Effect -->
        <script src=" {{asset('frontend/plugins/cursor-effect/cursor-effect.js')}} "></script>

        <!-- Theme Custom JS -->
        <script src=" {{asset('frontend/assets/js/theme.js')}} "></script>
        
    </body>
</html>