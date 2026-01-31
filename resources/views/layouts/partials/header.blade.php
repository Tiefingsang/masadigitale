<header class="main-header">

    <!-- Bandeau d'information sur la formation -->
{{-- <div class="formation-banner"
     style="background: linear-gradient(90deg, #007bff, #cbf191, #07213c);
            background-size: 300% 300%;
            color: #fff;
            text-align: center;
            padding: 14px 10px;
            font-size: 17px;
            font-weight: 500;
            animation: gradientMove 6s ease infinite;
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);">
    <strong> Formation en cours : Photoshop pour débutants !</strong>
    <span style="margin-left: 8px;">Rejoignez-nous pour apprendre à maîtriser Photoshop </span>
    <a href="{{ route('get.formPage') }}"
       class="btn-inscription">
        S'inscrire maintenant
    </a>
</div> --}}

<style>
@keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.btn-inscription {
    background-color: #fff;
    color: #007bff;
    font-weight: bold;
    padding: 6px 18px;
    border-radius: 25px;
    margin-left: 15px;
    display: inline-block;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
    animation: pulseButton 2s infinite;
}

.btn-inscription:hover {
    background-color: #0056b3;
    color: #fff;
    transform: translateY(-2px);
}

@keyframes pulseButton {
    0% {
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0.7);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(255, 255, 255, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
    }
}
</style>




    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="top-left">
                    <ul class="contact-list clearfix">
                        <li><i class="flaticon-call-1"></i> <a href="tel:+22392516405">+223 92516405</a></li>
                        <li><i class="flaticon-mail"></i> <a href="contactegssarl@gmail.com">masadigitale@gmail.com</a></li>
                        <li><i class="flaticon-watch-2"></i> Toujours ouvert</li>
                    </ul>
                </div>
                <div class="top-right clearfix">
                    <ul class="social-icon-one">
                        <li><a href="https://www.facebook.com/share/1GuoWeSH5i/"><i class="la la-facebook-official"></i></a></li>
                        <li><a href="www.tiktok.com/@masadigitale"><i class="fab fa-tiktok"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('home.index') }}"><img src="{{ asset('assets/images/logorect.png') }}"  alt="" title=""></a></div>
                </div>

                <div class="nav-outer">
                    <div class="main-box clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="la la-bars"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="{{ Route::is('home.index') ? 'current' : '' }}">
                                        <a href="{{ route('home.index') }}">Accueils</a>
                                    </li>
                                    <li class="{{ Route::is('about.index') ? 'current' : '' }}">
                                        <a href="{{ route('about.index') }}">A propos</a>
                                    </li>
                                    <li class="{{ Route::is('services.index') ? 'current' : '' }}">
                                        <a href="{{ route('services.index') }}">Services</a>
                                    </li>
                                    <li class="{{ Route::is('blogs.index') ? 'current' : '' }}">
                                        <a href="{{ route('blogs.index') }}">Blog</a>
                                    </li>
                                    <li class="{{ Route::is('contact.index') ? 'current' : '' }}">
                                        <a href="{{ route('contact.index') }}">Contact</a>
                                    </li>
                                    <li class="{{ Route::is('formations.index') ? 'current' : '' }}">
                                        <a href="{{ route('formations.index') }}">Formations</a>
                                    </li>
                                     <li class="{{ Route::is('team.index') ? 'current' : '' }}">
                                        <a href="{{ route('team.index') }}">Team</a>
                                    </li>
                                    <li class="{{ Route::is('projets.index') ? 'current' : '' }}">
                                        <a href="{{ route('projets.index') }}">Projets</a>
                                    </li>
                                </ul>
                            </div>

                        </nav><!-- Main Menu End-->

                        <!-- Main Menu End-->
                        <!-- <div class="outer-box">

                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="la la-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Recherche" required>
                                                        <button type="submit" class="search-btn"><span class="la la-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Lower-->

    <!-- Sticky Header -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{ route('home.index') }}" title=""><img src="{{ asset('assets/images/logolargtransp.png') }} "   alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="{{ request()->routeIs('home.index') ? 'current dropdown' : '' }}">
                                <a href="{{ route('home.index') }}">Accueil</a>
                            </li>
                            <li class="{{ request()->routeIs('about.index') ? 'current' : '' }}">
                                <a href="{{ route('about.index') }}">Apropos</a>
                            </li>
                            <li class="{{ request()->routeIs('services.*') ? 'current' : '' }}">
                                <a href="{{ route('services.index') }}">Services</a>
                            </li>
                            <li class="{{ request()->routeIs('blogs.*') ? 'current' : '' }}">
                                <a href="{{ route('blogs.index') }}">Blog</a>
                            </li>
                            <!-- <li class="{{ request()->routeIs('team.index') ? 'current' : '' }}">
                                <a href="{{ route('team.index') }}">Team</a>
                            </li> -->
                            <li class="{{ request()->routeIs('contact.index') ? 'current' : '' }}">
                                <a href="{{ route('contact.index') }}">Contact</a>
                            </li>
                            <li class="{{ Route::is('formations.index') ? 'current' : '' }}">
                                <a href="{{ route('formations.index') }}">Formations</a>
                            </li>
                            <li class="{{ Route::is('team.index') ? 'current' : '' }}">
                                        <a href="{{ route('team.index') }}">Team</a>
                            </li>

                            <li class="{{ Route::is('projets.index') ? 'current' : '' }}">
                                        <a href="{{ route('projets.index') }}">Projets</a>
                            </li>
                        </ul>

                    </div>
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div>
    @if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Succès',
        text: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 3000
    })
</script>
@endif

@if(session('fail'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Erreur',
        text: "{{ session('fail') }}",
        showConfirmButton: true,
    })
</script>
@endif

@if ($errors->any())
<script>
    Swal.fire({
        icon: 'error',
        title: 'Erreurs de validation',
        html: `{!! implode('<br>', $errors->all()) !!}`,
        showConfirmButton: true,
    })
</script>
@endif


</header>
<!--End Main Header -->
