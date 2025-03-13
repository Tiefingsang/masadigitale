<header class="main-header">

    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="top-left">
                    <ul class="contact-list clearfix">
                        <li><i class="flaticon-call-1"></i> <a href="tel:+223 79 13 13 95">+223 79 13 13 95</a></li>
                        <li><i class="flaticon-mail"></i> <a href="#">egs_sarl@domain.com</a></li>
                        {{-- <li><i class="flaticon-watch-2"></i> Mon - Sat 8.00 to 18.00 Sunday Closed</li> --}}
                    </ul>
                </div>
                <div class="top-right clearfix">
                    <ul class="social-icon-one">
                        <li><a href="#"><i class="la la-facebook-official"></i></a></li>
                        <li><a href="#"><i class="la la-twitter"></i></a></li>
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
                    <div class="logo"><a href="{{ route('home.index') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="" title=""></a></div>
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
                                    <li class="current "><a href="{{ route('home.index') }}">Accueils</a>
                                        
                                    </li>
                                    <li><a href="{{ route('about.index') }}">apropos</a></li>
                                    <li class="dropdown"><a href="">Services</a>
                                        <ul>
                                            <li><a href="{{ route('services.index') }}">1</a></li>
                                            <li><a href="{{ route('services.index') }}">1</a></li>
                                            <li><a href="{{ route('services.index') }}">3</a></li>
                                            
                                        </ul>
                                    </li>
                                    
                                    
                                    <li class=""><a href="{{ route('blogs.index') }}">Blog</a>
                                        
                                    </li>
                                    <li><a href="{{ route('team.index') }}">team</a></li>
                                    <li><a href="{{ route('contact.index') }}">Contact</a></li>
                                    <li><a href="{{ route('gallery.index') }}">Galerie</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                            
                        <!-- Main Menu End-->
                        <div class="outer-box">
                            <!--Search Box-->
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
                        </div>
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
                <a href="{{ route('home.index') }}" title=""><img src="{{ asset('assets/images/logo-small.png') }} " alt="" title=""></a>
            </div>

            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li class="{{-- current dropdown --}}"><a href="{{ route('home.index') }}">Accueil</a>
                                
                            </li>
                            <li><a href="{{ route('about.index') }}">Apropos</a></li>
                            <li class="dropdown"><a href="#">Services</a>
                                <ul>
                                    <li><a href="{{ route('services.index') }}">1</a></li>
                                    <li><a href="{{ route('services.index') }}">2</a></li>
                                    
                                </ul>
                            </li>
                            
                            
                            <li class="dropdown"><a href="{{ route("blogs.index") }}">Blog</a> </li>
                            <li><a href="{{ route('team.index') }}">team</a></li>
                            <li><a href="{{ route('contact.index') }}">Contact</a></li>
                            <li><a href="{{ route('gallery.index') }}">Galerie</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div>
</header>
<!--End Main Header -->