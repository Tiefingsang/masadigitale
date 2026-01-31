@extends('layouts.master')

@section('title', $serviceFindByTitle->title . ' - Masadigitale Mali')
@section('meta_description', $serviceFindByTitle->description ? Str::limit($serviceFindByTitle->description, 150) : 'Découvrez notre service ' . $serviceFindByTitle->title)

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>{{ $serviceFindByTitle->title }}</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home.index') }}">Accueil</a></li>
            <li><a href="{{ route('services.index') }}">Services</a></li>
            <li>{{ $serviceFindByTitle->title }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<div class="service-detail-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side order-last col-xl-9 col-lg-8 col-md-12 col-sm-12">
                <div class="service-detail">
                    <!-- Image Box -->
                    @if($serviceFindByTitle->image)
                        <div class="image-box">
                            <img src="{{ asset('storage/' . $serviceFindByTitle->image) }}"
                                 alt="{{ $serviceFindByTitle->title }}"
                                 class="img-fluid">
                        </div>
                    @endif

                    <div class="lower-content">
                        <h1 class="mb-4">{{ $serviceFindByTitle->title }}</h1>

                        @if($serviceFindByTitle->short)
                            <div class="short-description mb-4">
                                <p class="lead">{{ $serviceFindByTitle->short }}</p>
                            </div>
                        @endif

                        @if($serviceFindByTitle->description)
                            <div class="description mb-5">
                                {!! nl2br(e($serviceFindByTitle->description)) !!}
                            </div>
                        @endif

                        <!-- Prix si disponibles -->
                        @if($serviceFindByTitle->prix_min || $serviceFindByTitle->prix_max)
                            <div class="price-box mb-5">
                                <h3>Tarification</h3>
                                <div class="price-display">
                                    @if($serviceFindByTitle->prix_min && $serviceFindByTitle->prix_max)
                                        <span class="price-range">À partir de {{ $serviceFindByTitle->prix_min }} XOF - jusqu'à {{ $serviceFindByTitle->prix_max }} XOF</span>
                                    @elseif($serviceFindByTitle->prix_min)
                                        <span class="price-range">À partir de {{ $serviceFindByTitle->prix_min }} XOF</span>
                                    @elseif($serviceFindByTitle->prix_max)
                                        <span class="price-range">Jusqu'à {{ $serviceFindByTitle->prix_max }} XOF</span>
                                    @endif
                                    <p class="text-muted small mt-2">*Prix indicatif - Devis personnalisé sur demande</p>
                                </div>
                            </div>
                        @endif

                        <!-- Caractéristiques -->
                        <div class="features-section mb-5">
                            <h3 class="mb-4">Ce que nous offrons</h3>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fa fa-rocket text-primary"></i>
                                        </div>
                                        <div class="feature-content">
                                            <h4>Solutions Innovantes</h4>
                                            <p>Des technologies de pointe adaptées à vos besoins spécifiques.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fa fa-headset text-primary"></i>
                                        </div>
                                        <div class="feature-content">
                                            <h4>Support Continu</h4>
                                            <p>Un accompagnement personnalisé avant, pendant et après le projet.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fa fa-chart-line text-primary"></i>
                                        </div>
                                        <div class="feature-content">
                                            <h4>Résultats Mesurables</h4>
                                            <p>Des solutions qui génèrent un retour sur investissement concret.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="feature-item">
                                        <div class="feature-icon">
                                            <i class="fa fa-shield-alt text-primary"></i>
                                        </div>
                                        <div class="feature-content">
                                            <h4>Qualité Garantie</h4>
                                            <p>Des produits fiables et des services de haute qualité.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Section -->
                        <div class="faq-section mb-5">
                            <h3 class="mb-4">Questions Fréquentes</h3>
                            <div class="accordion" id="serviceFaq">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                            Quel est le délai de réalisation ?
                                        </button>
                                    </h2>
                                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#serviceFaq">
                                        <div class="accordion-body">
                                            Le délai dépend de la complexité du projet. Pour un site web simple, comptez 2-3 semaines. Pour des solutions plus complexes, nous établissons un planning détaillé dès le début.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                            Proposez-vous un suivi après la livraison ?
                                        </button>
                                    </h2>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#serviceFaq">
                                        <div class="accordion-body">
                                            Oui, nous offrons différentes formules de maintenance et de support technique pour assurer le bon fonctionnement continu de votre solution.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                            Puis-je modifier ma solution ultérieurement ?
                                        </button>
                                    </h2>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#serviceFaq">
                                        <div class="accordion-body">
                                            Absolument ! Nos solutions sont évolutives et peuvent être adaptées selon l'évolution de vos besoins.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- Service Detail -->
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar services-sidebar">

                    <!-- Services Cat List -->
                    <div class="sidebar-widget categories">
                        <div class="widget-content">
                            <h3 class="widget-title">Nos Services</h3>
                            <ul class="services--list">
                                <li class="{{ Route::is('services.index') ? 'active' : '' }}">
                                    <a href="{{ route('services.index') }}">
                                        <i class="fa fa-list"></i> Tous les services
                                    </a>
                                </li>

                                @foreach ($getServices as $item)
                                    <li class="{{ request('title') == $item->title || request('id') == $item->id ? 'active' : '' }}">
                                        <a href="{{ route('services-detail', ['title' => $item->title]) }}">
                                            <i class="fa fa-chevron-right"></i> {{ $item->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Brochure -->
                    <div class="sidebar-widget brochure">
                        <div class="brochure-box">
                            <span>Documentation</span>
                            <h4>Brochure du service</h4>
                            <p>Téléchargez notre documentation complète</p>
                            <a href="#" class="theme-btn btn-style-two">
                                <i class="fa fa-download"></i> Télécharger PDF
                            </a>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="sidebar-widget contact-widget">
                        <div class="widget-content">
                            <h3 class="widget-title">Contact Rapide</h3>
                            <div class="contact-info">
                                <div class="info-item">
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:+22392516405">+223 92 51 64 05</a>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:masadigitale@gmail.com">masadigitale@gmail.com</a>
                                </div>
                                <div class="info-item">
                                    <i class="fa fa-clock"></i>
                                    <span>Lun - Sam: 8h - 18h</span>
                                </div>
                            </div>
                            <a href="{{ route('contact.index') }}" class="theme-btn btn-style-one w-100 mt-3">
                                <i class="fa fa-paper-plane"></i> Demander un devis
                            </a>
                        </div>
                    </div>

                    <!-- Related Services -->
                    @php
                        $relatedServices = $getServices->where('id', '!=', $serviceFindByTitle->id)->take(3);
                    @endphp

                    @if($relatedServices->count() > 0)
                        <div class="sidebar-widget related-services">
                            <div class="widget-content">
                                <h3 class="widget-title">Services Similaires</h3>
                                <ul class="related-list">
                                    @foreach($relatedServices as $related)
                                        <li>
                                            <a href="{{ route('services-detail', ['title' => $related->title]) }}">
                                                <div class="related-item">
                                                    @if($related->image)
                                                        <img src="{{ asset('storage/' . $related->image) }}"
                                                             alt="{{ $related->title }}"
                                                             class="related-img">
                                                    @endif
                                                    <div class="related-content">
                                                        <h5>{{ $related->title }}</h5>
                                                        @if($related->short)
                                                            <p>{{ Str::limit($related->short, 60) }}</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Service Detail Section -->

<!-- Call To Action -->
<section class="call-to-action style-two alternate">
    <div class="auto-container">
        <div class="outer-box clearfix">
            <div class="title-column">
                <h3>Prêt à transformer votre projet en réalité ?</h3>
                <p>Discutons de votre projet et trouvons la meilleure solution ensemble.</p>
            </div>

            <div class="btn-column">
                <div class="btn-box">
                    <a href="{{ route('contact.index') }}" class="theme-btn btn-style-one">
                        <i class="fa fa-paper-plane"></i> Demander un devis
                    </a>
                    <a href="tel:+22392516405" class="theme-btn btn-style-two">
                        <i class="fa fa-phone"></i> Nous appeler
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Call To Action -->

@endsection

@section('styles')
<style>
    .service-detail-section {
        padding: 80px 0;
    }

    .service-detail .image-box {
        margin-bottom: 40px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .service-detail .image-box img {
        width: 100%;
        height: auto;
        transition: transform 0.5s ease;
    }

    .service-detail .image-box:hover img {
        transform: scale(1.05);
    }

    .lower-content h1 {
        font-size: 36px;
        font-weight: 700;
        color: #333;
        margin-bottom: 20px;
    }

    .short-description p.lead {
        font-size: 20px;
        color: #007bff;
        font-weight: 300;
        line-height: 1.6;
    }

    .description {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
    }

    .description p {
        margin-bottom: 20px;
    }

    .price-box {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 10px;
        border-left: 4px solid #007bff;
    }

    .price-box h3 {
        margin-bottom: 15px;
        color: #333;
    }

    .price-range {
        font-size: 24px;
        font-weight: 700;
        color: #007bff;
    }

    .features-section .feature-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        margin-bottom: 20px;
    }

    .feature-icon {
        width: 50px;
        height: 50px;
        background: #f0f8ff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .feature-icon i {
        font-size: 24px;
    }

    .feature-content h4 {
        font-size: 18px;
        margin-bottom: 5px;
        color: #333;
    }

    .feature-content p {
        color: #666;
        font-size: 14px;
        line-height: 1.5;
    }

    /* Sidebar */
    .services-sidebar .widget-content {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin-bottom: 30px;
    }

    .widget-title {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 2px solid #f0f0f0;
    }

    .services--list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .services--list li {
        margin-bottom: 10px;
    }

    .services--list li a {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 15px;
        background: #f8f9fa;
        border-radius: 5px;
        color: #333;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .services--list li a:hover,
    .services--list li.active a {
        background: #007bff;
        color: white;
        transform: translateX(5px);
    }

    .services--list li.active a {
        font-weight: 600;
    }

    .brochure-box {
        background: linear-gradient(135deg, #007bff, #00d4ff);
        color: white;
        padding: 30px;
        border-radius: 10px;
        text-align: center;
    }

    .brochure-box span {
        font-size: 14px;
        opacity: 0.9;
    }

    .brochure-box h4 {
        font-size: 22px;
        margin: 10px 0;
    }

    .brochure-box p {
        margin-bottom: 20px;
        opacity: 0.9;
    }

    .contact-widget .contact-info {
        padding: 15px 0;
    }

    .contact-info .info-item {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
        padding: 10px;
        background: #f8f9fa;
        border-radius: 5px;
    }

    .info-item i {
        color: #007bff;
        font-size: 18px;
        width: 30px;
    }

    .info-item a, .info-item span {
        color: #333;
        text-decoration: none;
        font-size: 14px;
    }

    .info-item a:hover {
        color: #007bff;
    }

    .related-services .related-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .related-list li {
        margin-bottom: 15px;
    }

    .related-list li a {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .related-item {
        display: flex;
        gap: 15px;
        align-items: center;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .related-item:hover {
        background: #e9ecef;
        transform: translateX(5px);
    }

    .related-img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 5px;
        flex-shrink: 0;
    }

    .related-content h5 {
        font-size: 16px;
        margin-bottom: 5px;
        color: #333;
    }

    .related-content p {
        font-size: 13px;
        color: #666;
        line-height: 1.4;
    }

    /* Call to Action */
    .call-to-action.style-two {
        background: linear-gradient(135deg, #007bff, #0056b3);
        color: white;
        padding: 60px 0;
    }

    .call-to-action .title-column h3 {
        color: white;
        margin-bottom: 10px;
    }

    .call-to-action .title-column p {
        color: rgba(255,255,255,0.8);
    }

    .btn-box {
        display: flex;
        gap: 15px;
    }

    @media (max-width: 991px) {
        .service-detail-section {
            padding: 50px 0;
        }

        .lower-content h1 {
            font-size: 28px;
        }

        .short-description p.lead {
            font-size: 18px;
        }

        .btn-box {
            flex-direction: column;
            gap: 10px;
        }

        .btn-box .theme-btn {
            width: 100%;
        }
    }

    @media (max-width: 767px) {
        .content-side, .sidebar-side {
            padding: 0;
        }

        .sidebar-side {
            margin-top: 40px;
        }

        .features-section .row {
            flex-direction: column;
        }

        .call-to-action .outer-box {
            flex-direction: column;
            text-align: center;
        }

        .call-to-action .title-column {
            margin-bottom: 20px;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Accordion FAQ
        $('.accordion-button').on('click', function() {
            $(this).toggleClass('collapsed');
        });

        // Smooth scroll for anchor links
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            var target = $(this.getAttribute('href'));
            if(target.length) {
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
            }
        });

        // Highlight current service in sidebar
        const currentService = '{{ request("title") }}';
        if(currentService) {
            $('.services--list li a').each(function() {
                if($(this).text().trim() === currentService) {
                    $(this).closest('li').addClass('active');
                }
            });
        }
    });
</script>
@endsection
