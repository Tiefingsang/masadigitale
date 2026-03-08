<!DOCTYPE html>
<html lang="fr">


<head>
    <meta charset="utf-8">

    <title>@yield('title', 'Masadigitale - Agence digitale au Mali')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta name="description" content="Masadigitale est une agence de marketing digital et de développement technologique basée à Bamako. Publicité Facebook & Instagram, SEO, création de sites web et applications, accompagnement digital.">
    <meta name="keywords" content="marketing digital Mali, création site web Bamako, agence digitale Mali, SEO Bamako, publicité Facebook Mali, Masadigitale">
    <meta name="author" content="Masadigitale">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.masadigitale.com/">
    <meta property="og:title" content="Masadigitale 🚀 Votre agence de marketing digital au Mali">
    <meta property="og:description" content="De l’idée au digital, nous construisons le succès de votre entreprise. Découvrez nos services : sites web, applications, publicité en ligne, SEO, réseaux sociaux.">
    <meta property="og:image" content="https://www.masadigitale.com/assets/images/logo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.masadigitale.com/">
    <meta property="twitter:title" content="Masadigitale  Votre agence digitale au Mali">
    <meta property="twitter:description" content="Agence de marketing digital et développement web au Mali. Publicité, SEO, réseaux sociaux, applications et plus.">
    <meta property="twitter:image" content="https://www.masadigitale.com/assets/images/logo.png">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color-switcher-design.css') }}" rel="stylesheet">
    <link id="theme-color-file" href="{{ asset('assets/css/color-themes/default-theme.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">


    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-990CYP3GJJ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-990CYP3GJJ');
    </script>
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

<div id="whatsapp-widget">

    <div id="wa-button">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" width="55">
    </div>

    <div id="wa-popup">

        <div class="wa-header">
            Assistance WhatsApp
        </div>

        <div class="wa-messages">
            <div class="wa-msg">Bonjour 👋</div>
            <div class="wa-msg">Je voudrais plus d'informations</div>
            <div class="wa-msg">Je souhaite prendre un rendez-vous</div>
        </div>

        <input type="text" id="wa-input" placeholder="Votre message...">

        <button id="wa-send">Envoyer</button>

    </div>

</div>

<style>
    #whatsapp-widget{
        position: fixed;
        bottom:20px;
        right:20px;
        z-index:999999;
    }

    #wa-button{
        cursor:pointer;
    }

    #wa-popup{
        position:absolute;
        bottom:70px;
        right:0;
        width:280px;
        background:white;
        border-radius:10px;
        box-shadow:0 4px 15px rgba(0,0,0,0.2);
        display:none;
    }

    .wa-header{
        background:#25D366;
        color:white;
        padding:12px;
        border-radius:10px 10px 0 0;
        font-weight:bold;
    }

    .wa-messages{
        padding:10px;
    }

    .wa-msg{
        background:#f1f1f1;
        padding:8px;
        border-radius:6px;
        margin-bottom:6px;
        cursor:pointer;
    }

    .wa-msg:hover{
        background:#e3e3e3;
    }

    #wa-input{
        width:calc(100% - 20px);
        margin:10px;
        padding:8px;
        border:1px solid #ddd;
    }

    #wa-send{
        background:#25D366;
        border:none;
        color:white;
        width:calc(100% - 20px);
        margin:10px;
        padding:10px;
        border-radius:6px;
        cursor:pointer;
    }
</style>

<script>

document.addEventListener("DOMContentLoaded", function(){

const button = document.getElementById("wa-button");
const popup = document.getElementById("wa-popup");
const messages = document.querySelectorAll(".wa-msg");
const input = document.getElementById("wa-input");
const send = document.getElementById("wa-send");

const phone = "22392516405";

button.addEventListener("click", function(){
    popup.style.display = popup.style.display === "block" ? "none" : "block";
});

messages.forEach(function(msg){
    msg.addEventListener("click", function(){
        input.value = msg.innerText;
        input.focus();
    });
});

send.addEventListener("click", function(){

    const text = input.value.trim();

    if(text !== ""){
        const url = "https://wa.me/"+phone+"?text="+encodeURIComponent(text);
        window.open(url,"_blank");
    }

});

});

</script>

<!--Scroll to top-->
<script src="{{ asset('assets/js/jquery.js') }} "></script>
<script src="{{ asset('assets/js/popper.min.js') }} "></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }} "></script>
<!-- Bootstrap CSS -->


<!-- Bootstrap JS (IMPORTANT : bundle) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


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




<!--Google Map APi Key-->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="{{ asset('assets/js/map-script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Succès',
            text: '{{ session('success') }}',
            confirmButtonColor: '#3085d6',
            timer: 3000,
            showConfirmButton: false
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

@if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Erreur de validation',
            html: `{!! implode('<br>', $errors->all()) !!}`,
            confirmButtonColor: '#d33'
        });
    </script>
@endif


@stack('scripts')
</body>


</html>
