@extends('layouts.master')
@section('content')

<section class="page-title" style="background-image:url({{ asset('assets/images/background/masatechnologie-background.jpg') }});">
    <div class="auto-container">
        <h1>Notre Équipe</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home.index') }}">Accueil</a></li>
            <li>Notre Équipe</li>
        </ul>
    </div>
</section>


<section class="team-page-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Notre Équipe</span>
            <h2>Directeurs des Opérations</h2>
        </div>

        <div class="row clearfix">
            <!-- Bloc Équipe -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image"><a href="{{ asset('assets/images/resource/team-1.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/resource/team-1.jpg') }}" alt=""></a></div>
                        <ul class="social-links">
                            <li><a href="#"><i class="la la-facebook-official"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-google-plus"></i></a></li>
                            <li><a href="#"><i class="la la-dribbble"></i></a></li>
                            <li><a href="#"><i class="la la-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <h4 class="name"><a href="team.html">Felicia Eberly</a></h4>
                        <span class="designation">Directrice Créative</span>
                    </div>
                </div>
            </div>

            <!-- Bloc Équipe -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image"><a href="{{ asset('assets/images/resource/team-2.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/resource/team-2.jpg') }}" alt=""></a></div>
                        <ul class="social-links">
                            <li><a href="#"><i class="la la-facebook-official"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-google-plus"></i></a></li>
                            <li><a href="#"><i class="la la-dribbble"></i></a></li>
                            <li><a href="#"><i class="la la-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <h4 class="name"><a href="team.html">Monika Joni</a></h4>
                        <span class="designation">Responsable Financier</span>
                    </div>
                </div>
            </div>

            <!-- Bloc Équipe -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image"><a href="{{ asset('assets/images/resource/team-3.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/resource/team-3.jpg') }}" alt=""></a></div>
                        <ul class="social-links">
                            <li><a href="#"><i class="la la-facebook-official"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-google-plus"></i></a></li>
                            <li><a href="#"><i class="la la-dribbble"></i></a></li>
                            <li><a href="#"><i class="la la-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <h4 class="name"><a href="team.html">Robinal Rector</a></h4>
                        <span class="designation">Responsable Marketing</span>
                    </div>
                </div>
            </div>

            <!-- Bloc Équipe -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image"><a href="{{ asset('assets/images/resource/team-4.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/resource/team-4.jpg') }}" alt=""></a></div>
                        <ul class="social-links">
                            <li><a href="#"><i class="la la-facebook-official"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-google-plus"></i></a></li>
                            <li><a href="#"><i class="la la-dribbble"></i></a></li>
                            <li><a href="#"><i class="la la-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <h4 class="name"><a href="team.html">Katrina Gone</a></h4>
                        <span class="designation">Directrice Générale</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>




@endsection

