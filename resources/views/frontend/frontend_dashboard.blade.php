
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Birol Emlak</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{Vite::asset('public/assets/images/favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <!-- Stylesheets -->
    @vite(['public/frontend/assets/css/font-awesome-all.css',
                'public/frontend/assets/css/flaticon.css',
                'public/frontend/assets/css/owl.css',
                'public/frontend/assets/css/bootstrap.css',
                'public/frontend/assets/css/jquery.fancybox.min.css',
                'public/frontend/assets/css/animate.css',
                'public/frontend/assets/css/jquery-ui.css',
                'public/frontend/assets/css/nice-select.css',
                'public/frontend/assets/css/color/theme-color.css',
                'public/frontend/assets/css/switcher-style.css',
                'public/frontend/assets/css/style.css',
                'public/frontend/assets/css/responsive.css'])

</head>


<!-- page wrapper -->
<body>

<div class="boxed_wrapper">


    <!-- preloader -->
    @include('frontend.home.preload')
    <!-- preloader end -->


    <!-- switcher menu -->

    <!-- end switcher menu -->


    <!-- main header -->
    @include('frontend.home.header')
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    @include('frontend.home.mobile_menu')
    <!-- End Mobile Menu -->


    @yield('main')

    <!-- main-footer -->
    @include('frontend.home.footer')
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fal fa-angle-up"></span>
    </button>
</div>


<!-- jequery plugins -->
@vite([
    'public/frontend/assets/js/jquery.js',
                'public/frontend/assets/js/popper.min.js',
                'public/frontend/assets/js/bootstrap.min.js',
                'public/frontend/assets/js/owl.js',
                'public/frontend/assets/js/wow.js',
                'public/frontend/assets/js/validation.js',
                'public/frontend/assets/js/jquery.fancybox.js',
                'public/frontend/assets/js/appear.js',
                'public/frontend/assets/js/scrollbar.js',
                'public/frontend/assets/js/isotope.js',
                'public/frontend/assets/js/jquery.nice-select.min.js',
                'public/frontend/assets/js/jQuery.style.switcher.min.js',
                'public/frontend/assets/js/jquery-ui.js',
                'public/frontend/assets/js/nav-tool.js',
                'public/frontend/assets/js/script.js'
]);

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
    let type = "{{ Session::get('alert-type','info') }}";
    switch(type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>

</body><!-- End of .page_wrapper -->
</html>
