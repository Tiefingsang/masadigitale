<!DOCTYPE html>
<html lang="fr">


<head>
<meta charset="utf-8">
<title>masadigitale</title>
<!-- Stylesheets -->
<link href="{{ asset("assets/css/bootstrap.css") }}" rel="stylesheet">
<link href="{{ asset("assets/plugins/revolution/css/settings.css") }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/plugins/revolution/css/layers.css') }} " rel="stylesheet" type="text/css">
<link href="{{ asset('assets/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }} " rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="{{ asset('assets/css/color-switcher-design.css') }} " rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{ asset('assets/css/color-themes/default-theme.css') }} " rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }} images/logo.png" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/images/logo.png') }} " type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    @if(session('notify'))
    <script>
        $(document).ready(function() {
            $.notify({
                icon: 'fa fa-bell',
                title: 'Notification',
                message: "{{ session('notify')['message'] }}"
            }, {
                type: "{{ session('notify')['type'] }}", // success, danger, warning...
                placement: {
                    from: "bottom",
                    align: "right"
                },
                delay: 2000,
                timer: 500,
            });
        });
    </script>
    @endif

</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
        @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Succès',
                text: '{{ session('success') }}',
                confirmButtonColor: '#3085d6'
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: '{{ session('error') }}',
                confirmButtonColor: '#d33'
            });
        </script>
    @endif


   @include('layouts.partials.header')

   @yield('content')



    @include('layouts.partials.footer')



</div>
<!--End pagewrapper-->

<!-- Color Palate / Color Switcher -->
{{-- <div class="color-palate">
    <div class="color-trigger">
        <i class="la la-cog"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
            <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
            <span class="palate blue-color" data-theme-file="css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
            <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
            <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
            <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
            <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
        </div>
    </div>

    <a target="_blank" href="https://themeforest.net/item/mushawartbusiness-consulting-and-professional-services-html-template/22589400" class="purchase-btn">Purchase now</a>

    <div class="palate-foo">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>
</div> --}}

<!--Scroll to top-->
<script src="{{ asset('assets/js/jquery.js') }} "></script>
<script src="{{ asset('assets/js/popper.min.js') }} "></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }} "></script>
<!--Revolution Slider-->
<script src="{{ asset('assets/plugins/revolution/js/jquery.themepunch.revolution.min.js') }} "></script>
<script src="{{ asset('assets/plugins/revolution/js/jquery.themepunch.tools.min.js') }} "></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }} "></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }} "></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }} "></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }} "></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }} "></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }} "></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }} "></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }} "></script>
<script src="{{ asset('assets/plugins/revolution/js/extensions/revolution.extension.video.min.js') }} "></script>
<script src="{{ asset('assets/js/main-slider-script.js') }} "></script>
<!--End Revolution Slider-->
<script src="{{ asset('assets/js/jquery.fancybox.js') }} "></script>
<script src="{{ asset('assets/js/owl.js') }} "></script>
<script src="{{ asset('assets/js/wow.js') }} "></script>
<script src="{{ asset('assets/js/appear.js') }} "></script>
<script src="{{ asset('assets/js/script.js') }} "></script>
<script src="{{ asset('assets/js/color-settings.js') }} "></script>

<!--form-->
<script src="{{ asset('assets/js/validate.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="{{ asset('assets/js/map-script.js') }}"></script>


</body>


</html>
