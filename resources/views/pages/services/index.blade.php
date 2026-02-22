@extends('layouts.master')

@section('title', 'Nos services digitaux - Masadigitale Mali')
@section('meta_description', 'Découvrez nos services digitaux : création de sites web, SEO, publicité Facebook, design graphique et applications au Mali.')

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Nos Services</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home.index') }}">Accueil</a></li>
            <li>Services</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Introduction Section -->
<section class="intro-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-column col-lg-8 col-md-12 col-sm-12 mx-auto text-center">
                <div class="inner-column">
                    <h2>Solutions Digitales Complètes</h2>
                    <div class="text">
                        Chez Masadigitale, nous offrons une gamme complète de services digitaux
                        pour accompagner votre entreprise dans sa transformation numérique.
                        De la conception à la maintenance, nous couvrons tous vos besoins en matière de technologie.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Introduction Section -->

<!-- Services Section -->
<section class="services-section-two" style="background-image: url({{ asset('assets/images/background/5.jpg') }});">
    <div class="auto-container">
        <div class="sec-title light text-center">
            <span class="title">Nos Domaines d'Expertise</span>
            <h2>Des Services Adaptés à Vos Besoins</h2>
        </div>

        @if($getServices && $getServices->count() > 0)
            <div class="row clearfix">
                @foreach ($getServices as $item)
                    <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <!-- Image du service -->
                            <div class="image-container" style="width: 100%; height: 250px; overflow: hidden; border-radius: 8px;">
                                @if($item->image)
                                    <img src="{{ asset('storage/'.$item->image) }}"
                                         alt="{{ $item->title }}"
                                         class="img-fluid"
                                         style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;">
                                @else
                                    <div class="placeholder-image"
                                         style="width: 100%; height: 100%; background: linear-gradient(45deg, #007bff, #00d4ff);
                                                display: flex; align-items: center; justify-content: center; color: white;">
                                        <i class="fa fa-cogs fa-3x"></i>
                                    </div>
                                @endif
                            </div>

                            <!-- Contenu du service -->
                            <div class="content-box">
                                <h3>
                                    <a href="{{ route('services-detail', ['slug' => $item->slug]) }}"
                                       class="service-title">
                                        {{ $item->title }}
                                    </a>
                                </h3>

                                <div class="text">
                                    {{ Str::limit($item->description, 120, '...') }}
                                </div>

                                <!-- Prix si disponible -->
                                @if($item->prix_min || $item->prix_max)
                                    <div class="price-range">
                                        <span class="price-label">À partir de :</span>
                                        @if($item->prix_min && $item->prix_max)
                                            <span class="price">{{ $item->prix_min }} - {{ $item->prix_max }} XOF</span>
                                        @elseif($item->prix_min)
                                            <span class="price">{{ $item->prix_min }} XOF</span>
                                        @else
                                            <span class="price">Sur devis</span>
                                        @endif
                                    </div>
                                @endif

                                <!-- Lien de détail -->
                                <div class="link-box">
                                    <a href="{{ route('services-detail', ['slug' => $item->slug]) }}"
                                       class="service-link">
                                        <span>En savoir plus</span>
                                        <i class="la la-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination si nécessaire -->
            @if($getServices instanceof \Illuminate\Pagination\LengthAwarePaginator)
                <div class="pagination-wrapper mt-5">
                    {{ $getServices->links() }}
                </div>
            @endif

        @else
            <!-- Message si aucun service -->
            <div class="no-services text-center py-5">
                <div class="icon mb-4">
                    <i class="fa fa-cogs fa-4x text-muted"></i>
                </div>
                <h3 class="mb-3">Nos services seront bientôt disponibles</h3>
                <p class="text-muted mb-4">Nous préparons actuellement nos offres de services pour mieux vous servir.</p>
                <a href="{{ route('contact.index') }}" class="theme-btn btn-style-two">
                    <i class="fa fa-envelope"></i> Nous contacter
                </a>
            </div>
        @endif
    </div>
</section>
<!-- End Services Section -->



@endsection

@section('styles')
<style>
    /* Styles pour la page services */
    .services-section-two {
        padding: 100px 0;
    }

    .service-block-two {
        margin-bottom: 30px;
    }

    .service-block-two .inner-box {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .service-block-two .inner-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    .service-block-two .inner-box:hover .image-container img {
        transform: scale(1.1);
    }

    .image-container {
        position: relative;
    }

    .content-box {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .service-title {
        color: #333;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 15px;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .service-title:hover {
        color: #007bff;
    }

    .service-block-two .text {
        color: #666;
        line-height: 1.6;
        margin-bottom: 15px;
        flex-grow: 1;
    }

    .price-range {
        margin: 15px 0;
        padding: 10px;
        background: #f8f9fa;
        border-radius: 5px;
    }

    .price-label {
        color: #666;
        font-size: 14px;
    }

    .price {
        color: #007bff;
        font-weight: 600;
        font-size: 16px;
        margin-left: 5px;
    }

    .link-box {
        margin-top: auto;
    }

    .service-link {
        color: #007bff;
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        transition: all 0.3s ease;
    }

    .service-link:hover {
        color: #0056b3;
        transform: translateX(5px);
    }

    .service-link i {
        margin-left: 5px;
        transition: transform 0.3s ease;
    }

    .service-link:hover i {
        transform: translateX(5px);
    }

    /* Process section */
    .process-block .inner-box {
        padding: 30px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .process-block .inner-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .process-block .icon-box {
        position: relative;
        width: 80px;
        height: 80px;
        margin: 0 auto 20px;
        background: #007bff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .process-block .icon-box i {
        color: white;
        font-size: 32px;
        z-index: 2;
    }

    .process-block .icon-box .number {
        position: absolute;
        top: -10px;
        right: -10px;
        width: 30px;
        height: 30px;
        background: #ff6b6b;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
    }

    /* FAQ section */
    .accordion-box {
        margin-bottom: 30px;
    }

    .accordion {
        margin-bottom: 15px;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        overflow: hidden;
    }

    .acc-btn {
        padding: 15px 20px;
        background: #f8f9fa;
        cursor: pointer;
        font-weight: 600;
        display: flex;
        align-items: center;
        transition: background 0.3s ease;
    }

    .acc-btn:hover {
        background: #e9ecef;
    }

    .acc-btn .icon {
        margin-right: 10px;
        font-weight: bold;
    }

    .acc-content {
        display: none;
        padding: 20px;
        background: white;
    }

    .acc-content.current {
        display: block;
    }

    /* Responsive */
    @media (max-width: 991px) {
        .service-block-two {
            margin-bottom: 20px;
        }

        .process-block {
            margin-bottom: 20px;
        }
    }

    @media (max-width: 767px) {
        .services-section-two {
            padding: 60px 0;
        }

        .service-block-two .inner-box {
            margin-bottom: 20px;
        }

        .content-box {
            padding: 20px;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // FAQ Accordion
        $('.accordion .acc-btn').on('click', function() {
            var $this = $(this);
            var $parent = $this.closest('.accordion');
            var $content = $parent.find('.acc-content');
            var $icon = $this.find('.icon');

            if ($parent.hasClass('active-block')) {
                $content.slideUp(300);
                $parent.removeClass('active-block');
                $icon.text('+');
            } else {
                $('.accordion .acc-content').slideUp(300);
                $('.accordion').removeClass('active-block');
                $('.accordion .icon').text('+');

                $content.slideDown(300);
                $parent.addClass('active-block');
                $icon.text('-');
            }
        });

        // Animation au scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        // Observer les cartes de services
        document.querySelectorAll('.service-block-two').forEach(el => {
            observer.observe(el);
        });
    });
</script>
@endsection
