@extends('layouts.master')
@section('content')

<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Contact</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="i{{ route('home.index') }}">Accueil </a></li>
            <li>Contact</li>
        </ul>
    </div>
</section>

<section class="contact-form-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="sec-title text-center">
                <span class="title">Écrire un message</span>
                <h2>Vous avez des questions ?</h2>
            </div>
            <div class="contact-form-two">
                <form method="post" action="{{ route('contact.store') }}" novalidate="novalidate">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <input type="text" name="name" placeholder="Votre nom" required="">
                            @error('name')
                                <div >
                                    <p class="alert text-danger">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <input type="email" name="email" placeholder="Votre adresse e-mail" required="name">
                            @error('email')
                            <div >
                                <p class="alert text-danger">{{ $message }}</p>
                            </div>
                        @enderror
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <textarea name="message" placeholder="Votre message"></textarea>
                            @error('message')
                                <div>
                                    <p class="alert text-danger" >{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 form-group text-center">
                            <button class="theme-btn btn-style-three" type="submit" name="Submit">Envoyer le message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>


<section class="contact-info-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Email et Téléphone -->
            <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="flaticon-mail"></span></div>
                    <ul>
                        <li><strong>Email :</strong> <a href="mailto:masadigitale@gmail.com">masadigitale@gmail.com</a></li>
                        <li><strong>Téléphone :</strong> <a href="tel:+22392516405">+223 92516405</a></li>
                    </ul>
                </div>
            </div>

            <!-- Horaires d'ouverture -->
            <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="flaticon-watch-2"></span></div>
                    <ul>
                        <li><strong>Horaires :</strong></li>
                        <li>Du lundi au samedi : 8h00 - 18h00</li>
                        <li>Dimanche : Fermé</li>
                    </ul>
                </div>
            </div>

            <!-- Adresse -->
            <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="flaticon-pin-1"></span></div>
                    <ul>
                        <li><strong>Adresse :</strong></li>
                        <li>Bamako, Mali</li>
                    </ul>
                </div> 
            </div>

            <!-- Réseaux sociaux -->
            <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <ul class="social-links">
                        <li><strong>Suivez-nous :</strong></li>
                        <li>
                            <ul class="social-icon-one">
                                <li><a href="https://www.facebook.com/share/1GuoWeSH5i/"><i class="la la-facebook-official"></i></a></li>
                                <li><a href="https://x.com/masadigitale?t=gFB_8Yck0dMPPfEo4cVH_A&s=09"><i class="la la-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/masadigitale?utm_source=qr&igsh=MTNrdXdjcWR2dDYybw=="><i class="la la-instagram"></i></a></li>
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- End Contact Info Section -->

<!-- Contact Map Section -->
<section class="contact-map-section">
    <!-- Colonne Carte -->
    <div class="map-column">
        <!-- Carte Extérieure -->
        <div class="map-outer">
            <div class="map-canvas"
                data-zoom="14"
                data-lat="12.6392"   
                data-lng="-8.0029"   
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="masadigitale"
                data-icon-path="{{ asset('assets/images/icons/map-marker-2.png') }}"
                data-content="Bamako, Mali<br><a href='mailto:tiefingsangare86@gmail.com'>tiefingsangare86@gmail.com</a>">
            </div>
        </div>
    </div>
</section>

<!--End Contact Map Section -->

<!-- Call To Action -->
<section class="call-to-action style-two alternate">
    <div class="auto-container">
        <div class="outer-box clearfix">
            <div class="title-column">
                <h3>Offrez des solutions pour une croissance fiable</h3>
            </div>

            <div class="btn-column">
                <div class="btn-box">
                    <a href="{{ route('contact.index') }}" class="theme-btn btn-style-one">Demander un devis</a>
                </div>
            </div>
        </div>
    </div>
</section>





@endsection
