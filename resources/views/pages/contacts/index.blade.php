@extends('layouts.master')

@section('title', 'Contactez Masadigitale - Agence digitale au Mali')
@section('meta_description', 'Vous souhaitez développer votre business avec le digital au Mali ? Contactez Masadigitale pour un accompagnement personnalisé.')

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Contactez-nous</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home.index') }}">Accueil</a></li>
            <li>Contact</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Contact Info Section -->
<section class="contact-info-section">
    <div class="auto-container">
        <div class="sec-title text-center mb-5">
            <span class="title">Contact Rapide</span>
            <h2>Comment Nous Contacter</h2>
        </div>

        <div class="row clearfix">
            <!-- Email et Téléphone -->
            <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="fa fa-envelope fa-2x text-primary"></i>
                    </div>
                    <h4>Email & Téléphone</h4>
                    <ul>
                        <li>
                            <i class="fa fa-envelope me-2"></i>
                            <a href="mailto:masadigitale@gmail.com">masadigitale@gmail.com</a>
                        </li>
                        <li>
                            <i class="fa fa-phone me-2"></i>
                            <a href="tel:+22392516405">+223 92 51 64 05</a>
                        </li>
                        <li>
                            <i class="fab fa-whatsapp me-2 text-success"></i>
                            <a href="https://wa.me/22392516405" target="_blank">WhatsApp</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Horaires d'ouverture -->
            <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="fa fa-clock fa-2x text-primary"></i>
                    </div>
                    <h4>Horaires</h4>
                    <ul>
                        <li><i class="fa fa-calendar me-2"></i> Lundi - Vendredi</li>
                        <li>8h00 - 18h00</li>
                        <li><i class="fa fa-calendar me-2"></i> Samedi</li>
                        <li>9h00 - 13h00</li>
                        <li><i class="fa fa-calendar me-2"></i> Dimanche</li>
                        <li>Fermé</li>
                    </ul>
                </div>
            </div>

            <!-- Adresse -->
            <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Adresse</h4>
                    <ul>
                        <li><strong>Siège social :</strong></li>
                        <li><i class="fa fa-building me-2"></i> Bamako, Mali</li>
                        <li><i class="fa fa-map-pin me-2"></i> Quartier de la Bourse</li>
                        <li><i class="fa fa-city me-2"></i> Avenue de l'Indépendance</li>
                    </ul>
                </div>
            </div>

            <!-- Réseaux sociaux -->
            <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <i class="fa fa-share-alt fa-2x text-primary"></i>
                    </div>
                    <h4>Réseaux Sociaux</h4>
                    <p class="mb-3">Suivez-nous sur nos réseaux</p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/share/1GuoWeSH5i/" target="_blank" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://x.com/masadigitale?t=gFB_8Yck0dMPPfEo4cVH_A&s=09" target="_blank" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/masadigitale?utm_source=qr&igsh=MTNrdXdjcWR2dDYybw==" target="_blank" class="social-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/masadigitale" target="_blank" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.tiktok.com/@masadigitale" target="_blank" class="social-icon">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a href="https://youtube.com/@masadigitale" target="_blank" class="social-icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info Section -->

<!-- Contact Form Section -->
<section class="contact-form-section" style="background-color: #f8f9fa;">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Formulaire de contact -->
            <div class="form-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="title">Écrire un message</span>
                        <h2>Parlons de votre projet</h2>
                        <p class="mb-4">Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.</p>
                    </div>

                    <!-- Messages de succès/erreur -->
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fa fa-check-circle me-2"></i>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fa fa-exclamation-circle me-2"></i>
                            <strong>Veuillez corriger les erreurs suivantes :</strong>
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="contact-form-two">
                        <form method="post" action="{{ route('contact.store') }}" id="contactForm">
                            @csrf

                            <div class="row clearfix">
                                <!-- Nom -->
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <label for="name" class="form-label">Nom complet *</label>
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           class="form-control @error('name') is-invalid @enderror"
                                           placeholder="Votre nom"
                                           value="{{ old('name') }}"
                                           required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email"
                                           name="email"
                                           id="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           placeholder="Votre adresse e-mail"
                                           value="{{ old('email') }}"
                                           required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Téléphone -->
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <label for="phone" class="form-label">Téléphone</label>
                                    <input type="tel"
                                           name="phone"
                                           id="phone"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           placeholder="Votre numéro de téléphone"
                                           value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Sujet -->
                                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                                    <label for="subject" class="form-label">Sujet *</label>
                                    <select name="subject"
                                            id="subject"
                                            class="form-control @error('subject') is-invalid @enderror"
                                            required>
                                        <option value="">Choisir un sujet</option>
                                        <option value="Demande de devis" {{ old('subject') == 'Demande de devis' ? 'selected' : '' }}>Demande de devis</option>
                                        <option value="Support technique" {{ old('subject') == 'Support technique' ? 'selected' : '' }}>Support technique</option>
                                        <option value="Information service" {{ old('subject') == 'Information service' ? 'selected' : '' }}>Information sur un service</option>
                                        <option value="Formation" {{ old('subject') == 'Formation' ? 'selected' : '' }}>Formation</option>
                                        <option value="Recrutement" {{ old('subject') == 'Recrutement' ? 'selected' : '' }}>Recrutement</option>
                                        <option value="Autre" {{ old('subject') == 'Autre' ? 'selected' : '' }}>Autre</option>
                                    </select>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Message -->
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <label for="message" class="form-label">Message *</label>
                                    <textarea name="message"
                                              id="message"
                                              class="form-control @error('message') is-invalid @enderror"
                                              rows="6"
                                              placeholder="Décrivez votre projet ou votre demande..."
                                              required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Bouton d'envoi -->
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit">
                                        <i class="fa fa-paper-plane me-2"></i> Envoyer le message
                                    </button>
                                    <button class="theme-btn btn-style-two ms-3" type="reset">
                                        <i class="fa fa-redo me-2"></i> Réinitialiser
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Informations complémentaires -->
            <div class="info-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="contact-info-card">
                        <h3>Pourquoi choisir Masadigitale ?</h3>
                        <ul class="feature-list">
                            <li>
                                <i class="fa fa-check-circle text-success me-2"></i>
                                <strong>Expertise locale</strong> : Connaissance approfondie du marché malien
                            </li>
                            <li>
                                <i class="fa fa-check-circle text-success me-2"></i>
                                <strong>Support réactif</strong> : Réponse sous 24h ouvrables
                            </li>
                            <li>
                                <i class="fa fa-check-circle text-success me-2"></i>
                                <strong>Solutions sur mesure</strong> : Adaptées à vos besoins spécifiques
                            </li>
                            <li>
                                <i class="fa fa-check-circle text-success me-2"></i>
                                <strong>Transparence des prix</strong> : Pas de coûts cachés
                            </li>
                            <li>
                                <i class="fa fa-check-circle text-success me-2"></i>
                                <strong>Suivi personnalisé</strong> : Accompagnement de A à Z
                            </li>
                        </ul>

                        <div class="emergency-contact mt-4">
                            <h4>Contact d'urgence</h4>
                            <p class="mb-2">Pour les demandes urgentes :</p>
                            <a href="tel:+22392516405" class="emergency-phone">
                                <i class="fa fa-phone-alt me-2"></i> +223 92 51 64 05
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Form Section -->

<!-- Contact Map Section -->
<section class="contact-map-section">
    <div class="auto-container">
        <div class="sec-title text-center mb-5">
            <span class="title">Notre Localisation</span>
            <h2>Nous Trouver à Bamako</h2>
            <p class="mb-4">Venez nous rencontrer à notre bureau principal situé au cœur de Bamako.</p>
        </div>

        <div class="row">
            <!-- Carte Google Maps -->
            <div class="col-lg-8 col-md-12 mb-4 mb-lg-0">
                <div class="map-container">
                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.051164094206!2d-7.926235684639506!3d12.58412973033385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe51d137a21eef2f%3A0xc9786382ee53c21e!2sMasasugu!5e0!3m2!1sfr!2sfr!4v1706400000000!5m2!1sfr!2sfr"
                            width="100%"
                            height="450"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Localisation de Masasugu à Bamako">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Informations d'adresse -->
            <div class="col-lg-4 col-md-12">
                <div class="address-info-card">
                    <h3>Bureau Masasugu</h3>
                    <div class="address-details">
                        <div class="address-item">
                            <div class="icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <h4>Adresse</h4>
                                <p>Quartier de la Bourse<br>
                                Avenue de l'Indépendance<br>
                                Bamako, Mali</p>
                            </div>
                        </div>

                        <div class="address-item">
                            <div class="icon">
                                <i class="fa fa-clock"></i>
                            </div>
                            <div class="content">
                                <h4>Horaires d'ouverture</h4>
                                <p><strong>Lundi - Vendredi:</strong> 8h00 - 18h00<br>
                                <strong>Samedi:</strong> 9h00 - 13h00<br>
                                <strong>Dimanche:</strong> Fermé</p>
                            </div>
                        </div>

                        <div class="address-item">
                            <div class="icon">
                                <i class="fa fa-directions"></i>
                            </div>
                            <div class="content">
                                <h4>Itinéraire</h4>
                                <a href="https://www.google.com/maps/dir//Masasugu,+Bamako,+Mali/@12.5841297,-7.9262357,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0xe51d137a21eef2f:0xc9786382ee53c21e!2m2!1d-7.9240533!2d12.5841297?entry=ttu"
                                   target="_blank"
                                   class="directions-btn">
                                    <i class="fa fa-route me-2"></i> Obtenir l'itinéraire
                                </a>
                            </div>
                        </div>

                        <div class="address-item">
                            <div class="icon">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="content">
                                <h4>Stationnement</h4>
                                <p>Parking disponible sur place<br>
                                <small>Accessible aux personnes à mobilité réduite</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="map-actions mt-4">
                        <a href="https://www.google.com/maps/place/Masasugu/@12.5841297,-7.9240533,17z/data=!3m1!4b1!4m6!3m5!1s0xe51d137a21eef2f:0xc9786382ee53c21e!8m2!3d12.5841297!4d-7.9240533!16s%2Fg%2F11kqvq1_6l?entry=ttu"
                           target="_blank"
                           class="theme-btn btn-style-one me-2">
                            <i class="fab fa-google me-2"></i> Voir sur Google Maps
                        </a>
                        <a href="geo:12.5841297,-7.9240533" class="theme-btn btn-style-two">
                            <i class="fa fa-map me-2"></i> Ouvrir dans l'application
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Points d'intérêt à proximité -->
        <div class="nearby-places mt-5">
            <h4 class="text-center mb-4">À proximité</h4>
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="place-card">
                        <i class="fa fa-utensils text-warning"></i>
                        <span>Restaurants</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="place-card">
                        <i class="fa fa-shopping-cart text-primary"></i>
                        <span>Commerces</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="place-card">
                        <i class="fa fa-bus text-success"></i>
                        <span>Transport en commun</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="place-card">
                        <i class="fa fa-hotel text-danger"></i>
                        <span>Hôtels</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Map Section -->

<!-- CTA Section -->
<section class="call-to-action style-two alternate">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12 mb-4 mb-lg-0">
                <h3 class="mb-2">Prêt à digitaliser votre entreprise ?</h3>
                <p class="mb-0">Demandez une consultation gratuite avec nos experts.</p>
            </div>
            <div class="col-lg-4 col-md-12 text-lg-end">
                <a href="{{ route('contact.index') }}?subject=Demande%20de%20consultation" class="theme-btn btn-style-one me-3">
                    <i class="fa fa-calendar-check me-2"></i> Consultation gratuite
                </a>
                <a href="tel:+22392516405" class="theme-btn btn-style-two">
                    <i class="fa fa-phone me-2"></i> Appeler maintenant
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End CTA Section -->

@endsection

@section('styles')
<style>
    .contact-info-section {
        padding: 80px 0 50px;
    }

    .contact-info-box .inner-box {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        height: 100%;
        transition: all 0.3s ease;
        text-align: center;
    }

    .contact-info-box .inner-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }

    .contact-info-box .icon-box {
        margin-bottom: 20px;
    }

    .contact-info-box h4 {
        font-size: 20px;
        margin-bottom: 20px;
        color: #333;
    }

    .contact-info-box ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .contact-info-box ul li {
        margin-bottom: 10px;
        color: #666;
        font-size: 15px;
    }

    .contact-info-box ul li i {
        width: 20px;
        color: #007bff;
    }

    .contact-info-box ul li a {
        color: #666;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-info-box ul li a:hover {
        color: #007bff;
    }

    .contact-info-box .social-links {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 15px;
    }

    .contact-info-box .social-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: #f0f8ff;
        border-radius: 50%;
        color: #007bff;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .contact-info-box .social-icon:hover {
        background: #007bff;
        color: white;
        transform: translateY(-3px);
    }

    /* Contact Form */
    .contact-form-section {
        padding: 80px 0;
    }

    .contact-form-two .form-group {
        margin-bottom: 25px;
    }

    .contact-form-two .form-label {
        font-weight: 600;
        margin-bottom: 8px;
        color: #333;
        display: block;
    }

    .contact-form-two .form-control {
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 15px;
        transition: all 0.3s ease;
    }

    .contact-form-two .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }

    .contact-form-two .form-control.is-invalid {
        border-color: #dc3545;
    }

    .contact-form-two textarea.form-control {
        resize: vertical;
        min-height: 120px;
    }

    .contact-form-two select.form-control {
        height: 46px;
    }

    /* Contact Info Card */
    .contact-info-card {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .contact-info-card h3 {
        font-size: 22px;
        margin-bottom: 20px;
        color: #333;
    }

    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0 0 25px;
    }

    .feature-list li {
        margin-bottom: 12px;
        padding-left: 0;
        color: #555;
        font-size: 15px;
    }

    .emergency-contact {
        padding: 20px;
        background: #f8f9fa;
        border-radius: 8px;
        border-left: 4px solid #007bff;
    }

    .emergency-contact h4 {
        font-size: 18px;
        margin-bottom: 10px;
        color: #333;
    }

    .emergency-phone {
        display: inline-flex;
        align-items: center;
        padding: 10px 20px;
        background: #007bff;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .emergency-phone:hover {
        background: #0056b3;
        transform: translateY(-2px);
    }

    /* Map Section */
    .contact-map-section {
        padding: 50px 0 80px;
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
    }

    .map-container {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        height: 450px;
        position: relative;
    }

    .map-wrapper iframe {
        width: 100%;
        height: 100%;
        border: none;
        filter: grayscale(10%);
        transition: filter 0.3s ease;
    }

    .map-wrapper:hover iframe {
        filter: grayscale(0%);
    }

    .address-info-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        height: 100%;
    }

    .address-info-card h3 {
        font-size: 24px;
        color: #333;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid #007bff;
    }

    .address-details {
        margin-bottom: 25px;
    }

    .address-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        margin-bottom: 20px;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .address-item:hover {
        background: #e9ecef;
        transform: translateX(5px);
    }

    .address-item .icon {
        width: 40px;
        height: 40px;
        background: #007bff;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .address-item .icon i {
        font-size: 18px;
    }

    .address-item .content h4 {
        font-size: 16px;
        color: #333;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .address-item .content p {
        color: #666;
        font-size: 14px;
        line-height: 1.5;
        margin: 0;
    }

    .address-item .content small {
        color: #999;
        font-size: 12px;
    }

    .directions-btn {
        display: inline-flex;
        align-items: center;
        padding: 8px 16px;
        background: #28a745;
        color: white;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .directions-btn:hover {
        background: #218838;
        color: white;
        transform: translateY(-2px);
    }

    .map-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .map-actions .theme-btn {
        flex: 1;
        min-width: 180px;
        text-align: center;
        padding: 12px 15px;
        font-size: 14px;
    }

    .nearby-places {
        margin-top: 50px;
    }

    .nearby-places h4 {
        font-size: 22px;
        color: #333;
        font-weight: 600;
    }

    .place-card {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        text-align: center;
        transition: all 0.3s ease;
        height: 100%;
    }

    .place-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .place-card i {
        font-size: 32px;
        margin-bottom: 10px;
        display: block;
    }

    .place-card span {
        font-size: 14px;
        color: #666;
        font-weight: 500;
    }

    /* Alertes */
    .alert {
        border-radius: 8px;
        border: none;
        padding: 15px 20px;
        margin-bottom: 25px;
    }

    .alert-success {
        background: #d4edda;
        color: #155724;
    }

    .alert-danger {
        background: #f8d7da;
        color: #721c24;
    }

    /* Animation pour la carte */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .map-container,
    .address-info-card {
        animation: fadeInUp 0.6s ease-out;
    }

    .map-container {
        animation-delay: 0.2s;
    }

    .address-info-card {
        animation-delay: 0.4s;
    }

    /* Responsive */
    @media (max-width: 991px) {
        .contact-info-section,
        .contact-form-section {
            padding: 60px 0;
        }

        .contact-info-box {
            margin-bottom: 30px;
        }

        .contact-form-two .form-group {
            margin-bottom: 20px;
        }

        .info-column {
            margin-top: 40px;
        }

        .contact-map-section {
            padding: 60px 0;
        }

        .map-container {
            height: 400px;
            margin-bottom: 30px;
        }

        .address-info-card {
            padding: 25px;
        }

        .map-actions .theme-btn {
            min-width: 150px;
        }
    }

    @media (max-width: 767px) {
        .contact-form-section {
            padding: 40px 0;
        }

        .contact-info-box .inner-box {
            padding: 25px;
        }

        .emergency-phone {
            width: 100%;
            justify-content: center;
        }

        .call-to-action .btn-style-one,
        .call-to-action .btn-style-two {
            width: 100%;
            margin-bottom: 10px;
        }

        .call-to-action .me-3 {
            margin-right: 0 !important;
        }

        .contact-map-section {
            padding: 40px 0;
        }

        .map-container {
            height: 300px;
            border-radius: 10px;
        }

        .address-item {
            flex-direction: column;
            text-align: center;
            align-items: center;
        }

        .address-item .content h4,
        .address-item .content p {
            text-align: center;
        }

        .map-actions {
            flex-direction: column;
        }

        .map-actions .theme-btn {
            width: 100%;
            margin-bottom: 10px;
        }

        .place-card {
            padding: 15px;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Validation du formulaire
        $('#contactForm').on('submit', function(e) {
            let isValid = true;

            // Validation des champs requis
            $(this).find('[required]').each(function() {
                if (!$(this).val().trim()) {
                    $(this).addClass('is-invalid');
                    isValid = false;
                } else {
                    $(this).removeClass('is-invalid');
                }
            });

            // Validation de l'email
            const email = $('#email').val();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email && !emailRegex.test(email)) {
                $('#email').addClass('is-invalid');
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('.is-invalid').first().offset().top - 100
                }, 1000);
            }
        });

        // Réinitialisation des erreurs lors de la saisie
        $('input, textarea, select').on('input change', function() {
            $(this).removeClass('is-invalid');
        });

        // Copie du numéro de téléphone
        $('.copy-phone').on('click', function(e) {
            e.preventDefault();
            const phone = $(this).attr('data-phone');
            navigator.clipboard.writeText(phone).then(function() {
                const originalText = $(e.target).text();
                $(e.target).text('Copié !');
                setTimeout(function() {
                    $(e.target).text(originalText);
                }, 2000);
            });
        });

        // Pré-remplir le sujet depuis l'URL
        const urlParams = new URLSearchParams(window.location.search);
        const subjectParam = urlParams.get('subject');
        if (subjectParam) {
            $('#subject').val(decodeURIComponent(subjectParam));
        }

        // Gestion des liens de géolocalisation
        $('a[href^="geo:"]').on('click', function(e) {
            const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

            if (!isMobile) {
                e.preventDefault();
                const coords = $(this).attr('href').replace('geo:', '').split(',');
                const lat = coords[0];
                const lng = coords[1];

                // Ouvrir dans Google Maps Web
                window.open(`https://www.google.com/maps?q=${lat},${lng}`, '_blank');
            }
        });

        // Animation des cartes de proximité
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -20px 0px'
        };

        const placeObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 100);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.place-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.4s ease';
            placeObserver.observe(card);
        });

        // Animation des boîtes de contact
        const contactObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.contact-info-box .inner-box').forEach(el => {
            contactObserver.observe(el);
        });

        // Geolocation pour itinéraire
        $('.get-directions').on('click', function(e) {
            if (navigator.geolocation) {
                e.preventDefault();

                navigator.geolocation.getCurrentPosition((position) => {
                    const userLat = position.coords.latitude;
                    const userLng = position.coords.longitude;
                    const destinationLat = 12.5841297;
                    const destinationLng = -7.9240533;

                    // Ouvrir Google Maps avec l'itinéraire
                    window.open(`https://www.google.com/maps/dir/${userLat},${userLng}/${destinationLat},${destinationLng}/`, '_blank');
                }, (error) => {
                    // Fallback vers l'itinéraire générique
                    window.open('https://www.google.com/maps/dir//Masasugu,+Bamako,+Mali/@12.5841297,-7.9262357,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0xe51d137a21eef2f:0xc9786382ee53c21e!2m2!1d-7.9240533!2d12.5841297?entry=ttu', '_blank');
                });
            }
        });
    });
</script>
@endsection
