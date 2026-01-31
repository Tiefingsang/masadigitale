@extends('layouts.master')

@section('title', 'Nos Projets - Masadigitale Mali')
@section('meta_description', 'Découvrez nos réalisations, projets en cours et à venir. Sites web, applications mobiles, e-commerce et solutions digitales innovantes au Mali.')

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/9.jpg') }});">
    <div class="auto-container">
        <h1>Nos Projets</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home.index') }}">Accueil</a></li>
            <li>Projets</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Projects Section -->
<section class="projects-section py-5">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Portfolio</span>
            <h2>Nos Réalisations</h2>
            <div class="text">
                Découvrez les projets que nous avons réalisés pour nos clients,
                ainsi que nos projets en cours et à venir. Chaque projet est une
                histoire unique de collaboration et d'innovation.
            </div>
        </div>

        <!-- Stats Counter -->
        <div class="stats-counter mb-5">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="counter-box text-center">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="{{ $counts['realises'] }}">0</span>+
                        </div>
                        <h4 class="counter-title">Projets Réalisés</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="counter-box text-center">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="{{ $counts['en_cours'] }}">0</span>+
                        </div>
                        <h4 class="counter-title">Projets en Cours</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="counter-box text-center">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="{{ $counts['avenir'] }}">0</span>+
                        </div>
                        <h4 class="counter-title">Projets à Venir</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="counter-box text-center">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="{{ $projetsFeatured->count() }}">0</span>+
                        </div>
                        <h4 class="counter-title">Projets Mis en Avant</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtres -->
        <div class="projects-filter mb-5">
            <div class="filter-tabs text-center">
                <ul class="filter-btns clearfix">
                    <li class="filter-btn active" data-filter="*">Tous les projets</li>
                    <li class="filter-btn" data-filter=".realises">Réalisés</li>
                    <li class="filter-btn" data-filter=".en_cours">En cours</li>
                    <li class="filter-btn" data-filter=".avenir">À venir</li>
                   {{--  @foreach($categories as $category)
                        <li class="filter-btn" data-filter=".{{ $category->slug }}">{{ $category->name }}</li>
                    @endforeach --}}
                </ul>
            </div>
        </div>

        <!-- Projets mis en avant -->
        @if($projetsFeatured->count() > 0)
        <div class="featured-projects mb-5">
            <h3 class="section-subtitle mb-4">Projets Mis en Avant</h3>
            <div class="row clearfix">
                @foreach($projetsFeatured as $projet)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="project-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <img src="{{ $projet->image_principale_url }}"
                                     alt="{{ $projet->titre }}"
                                     style="width: 100%; height: 250px; object-fit: cover;">
                                <div class="overlay-box">
                                    <div class="overlay-content">
                                        <div class="category">{{ $projet->categorie_label }}</div>
                                        <h4>{{ $projet->titre }}</h4>
                                        <div class="text">{{ Str::limit($projet->description_courte, 100) }}</div>
                                        <a href="{{ route('projets.show', $projet->slug) }}" class="theme-btn btn-style-one">
                                            Voir le projet
                                        </a>
                                    </div>
                                </div>
                                <div class="featured-badge">
                                    <i class="fa fa-star"></i> Mis en avant
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3><a href="{{ route('projets.show', $projet->slug) }}">{{ $projet->titre }}</a></h3>
                                <div class="client">{{ $projet->client ?? 'Client privé' }}</div>
                                <div class="meta">
                                    <span class="category">{{ $projet->categorie_label }}</span>
                                    <span class="date">{{ $projet->date_fin?->format('Y') ?? 'En cours' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Tous les projets -->
        <div class="all-projects">
            <div class="row clearfix" id="projects-container">
                @foreach($projetsRealises as $projet)
                <div class="project-block col-lg-3 col-md-4 col-sm-6 col-xs-12 mix realises
                    @if($projet->categorie) {{ $projet->categorie }} @endif">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{ $projet->image_principale_url }}"
                                 alt="{{ $projet->titre }}"
                                 style="width: 100%; height: 200px; object-fit: cover;">
                            <div class="overlay-box">
                                <a href="{{ route('projets.show', $projet->slug) }}" class="view-btn">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                            <div class="status-badge badge-realise">
                                <i class="fa fa-check-circle"></i> Réalisé
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ route('projets.show', $projet->slug) }}">{{ Str::limit($projet->titre, 40) }}</a></h4>
                            <div class="category">{{ $projet->categorie_label }}</div>
                            <div class="client">{{ Str::limit($projet->client ?? 'Client privé', 30) }}</div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach($projetsEnCours as $projet)
                <div class="project-block col-lg-3 col-md-4 col-sm-6 col-xs-12 mix en_cours
                    @if($projet->categorie) {{ $projet->categorie }} @endif">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{ $projet->image_principale_url }}"
                                 alt="{{ $projet->titre }}"
                                 style="width: 100%; height: 200px; object-fit: cover;">
                            <div class="overlay-box">
                                <a href="{{ route('projets.show', $projet->slug) }}" class="view-btn">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                            <div class="progress-bar">
                                <div class="progress" style="width: 75%"></div>
                            </div>
                            <div class="status-badge badge-encours">
                                <i class="fa fa-spinner"></i> En cours
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ route('projets.show', $projet->slug) }}">{{ Str::limit($projet->titre, 40) }}</a></h4>
                            <div class="category">{{ $projet->categorie_label }}</div>
                            <div class="progress-text">75% complété</div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach($projetsAvenir as $projet)
                <div class="project-block col-lg-3 col-md-4 col-sm-6 col-xs-12 mix avenir
                    @if($projet->categorie) {{ $projet->categorie }} @endif">
                    <div class="inner-box">
                        <div class="image-box">
                            <img src="{{ $projet->image_principale_url }}"
                                 alt="{{ $projet->titre }}"
                                 style="width: 100%; height: 200px; object-fit: cover;">
                            <div class="overlay-box">
                                <a href="{{ route('projets.show', $projet->slug) }}" class="view-btn">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                            <div class="status-badge badge-avenir">
                                <i class="fa fa-clock"></i> À venir
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{ route('projets.show', $projet->slug) }}">{{ Str::limit($projet->titre, 40) }}</a></h4>
                            <div class="category">{{ $projet->categorie_label }}</div>
                            <div class="date">Début: {{ $projet->date_debut?->format('m/Y') ?? 'Bientôt' }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Aucun projet -->
            @if($projetsRealises->isEmpty() && $projetsEnCours->isEmpty() && $projetsAvenir->isEmpty())
            <div class="no-projects text-center py-5">
                <div class="icon mb-4">
                    <i class="fa fa-folder-open fa-4x text-muted"></i>
                </div>
                <h3 class="mb-3">Projets en préparation</h3>
                <p class="text-muted">Nous travaillons sur de nouveaux projets passionnants. Revenez bientôt !</p>
            </div>
            @endif
        </div>

        <!-- Technologies utilisées -->
        @if($technologies->count() > 0)
        <div class="technologies-section mt-5 pt-5">
            <div class="sec-title text-center">
                <h3>Technologies que nous maîtrisons</h3>
            </div>
            <div class="technologies-list">
                <div class="row">
                    @foreach($technologies as $tech)
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3">
                        <div class="tech-item text-center">
                            <div class="tech-icon">
                                @php
                                    $icon = match(strtolower($tech)) {
                                        'php' => 'fab fa-php',
                                        'laravel' => 'fab fa-laravel',
                                        'javascript' => 'fab fa-js',
                                        'vue.js' => 'fab fa-vuejs',
                                        'react' => 'fab fa-react',
                                        'node.js' => 'fab fa-node-js',
                                        'python' => 'fab fa-python',
                                        'django' => 'fas fa-code',
                                        'html5' => 'fab fa-html5',
                                        'css3' => 'fab fa-css3',
                                        'bootstrap' => 'fab fa-bootstrap',
                                        'tailwind css' => 'fas fa-wind',
                                        'mysql' => 'fas fa-database',
                                        'git' => 'fab fa-git',
                                        'docker' => 'fab fa-docker',
                                        'aws' => 'fab fa-aws',
                                        'wordpress' => 'fab fa-wordpress',
                                        default => 'fas fa-code'
                                    };
                                @endphp
                                <i class="{{ $icon }} fa-2x"></i>
                            </div>
                            <div class="tech-name">{{ $tech }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<!-- End Projects Section -->

<!-- CTA Section -->
<section class="call-to-action" style="background-image: url({{ asset('assets/images/background/3.jpg') }});">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h3>Vous avez un projet en tête ?</h3>
                    <div class="text">
                        Discutons de votre idée et voyons comment nous pouvons la transformer en réalité digitale.
                    </div>
                </div>
            </div>
            <div class="btn-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column text-center">
                    <a href="{{ route('contact.index') }}" class="theme-btn btn-style-two btn-block">
                        <i class="fa fa-paper-plane"></i> Discuter de mon projet
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End CTA Section -->

@endsection

@section('styles')
<style>
    .projects-section {
        background: #fff;
    }

    .project-block {
        margin-bottom: 30px;
    }

    .project-block .inner-box {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        height: 100%;
    }

    .project-block .inner-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    .project-block .image-box {
        position: relative;
        overflow: hidden;
    }

    .project-block .image-box img {
        transition: transform 0.5s ease;
    }

    .project-block .inner-box:hover .image-box img {
        transform: scale(1.1);
    }

    .project-block .overlay-box {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 123, 255, 0.9);
        opacity: 0;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .project-block .inner-box:hover .overlay-box {
        opacity: 1;
    }

    .project-block .overlay-content {
        text-align: center;
        padding: 20px;
        color: #fff;
    }

    .project-block .overlay-content .category {
        color: #ffd700;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .project-block .overlay-content h4 {
        color: #fff;
        margin-bottom: 10px;
        font-size: 18px;
    }

    .project-block .overlay-content .text {
        color: rgba(255,255,255,0.9);
        font-size: 14px;
        margin-bottom: 15px;
    }

    .project-block .view-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        background: #fff;
        border-radius: 50%;
        color: #007bff;
        font-size: 20px;
        transition: all 0.3s ease;
    }

    .project-block .view-btn:hover {
        background: #0056b3;
        color: #fff;
        transform: scale(1.1);
    }

    .project-block .lower-content {
        padding: 20px;
    }

    .project-block .lower-content h4 {
        margin-bottom: 10px;
        font-size: 16px;
    }

    .project-block .lower-content h4 a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .project-block .lower-content h4 a:hover {
        color: #007bff;
    }

    .project-block .category {
        color: #007bff;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .project-block .client,
    .project-block .date,
    .project-block .progress-text {
        color: #666;
        font-size: 13px;
        margin-top: 5px;
    }

    /* Badges de statut */
    .status-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        color: #fff;
    }

    .badge-realise {
        background: #28a745;
    }

    .badge-encours {
        background: #ffc107;
    }

    .badge-avenir {
        background: #17a2b8;
    }

    .featured-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        background: #ffd700;
        color: #333;
    }

    /* Barre de progression */
    .progress-bar {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: rgba(255,255,255,0.3);
    }

    .progress-bar .progress {
        height: 100%;
        background: #ffc107;
        transition: width 1s ease;
    }

    /* Filtres */
    .filter-tabs .filter-btns {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 30px;
        list-style: none;
        padding: 0;
    }

    .filter-btn {
        padding: 8px 20px;
        background: #f8f9fa;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 500;
    }

    .filter-btn.active,
    .filter-btn:hover {
        background: #007bff;
        color: #fff;
    }

    /* Technologies */
    .tech-item {
        padding: 20px 10px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .tech-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .tech-icon {
        margin-bottom: 10px;
        color: #007bff;
    }

    .tech-name {
        font-size: 13px;
        font-weight: 600;
        color: #333;
    }

    /* Statistiques */
    .counter-box {
        padding: 20px;
    }

    .counter-box .count-text {
        font-size: 36px;
        font-weight: 700;
        color: #007bff;
        display: block;
        line-height: 1;
    }

    .counter-title {
        font-size: 14px;
        color: #666;
        margin-top: 10px;
        font-weight: 600;
    }

    @media (max-width: 767px) {
        .filter-tabs .filter-btns {
            gap: 5px;
        }

        .filter-btn {
            padding: 6px 15px;
            font-size: 14px;
        }

        .project-block {
            margin-bottom: 20px;
        }

        .counter-box {
            padding: 15px 10px;
        }

        .counter-box .count-text {
            font-size: 28px;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Filtrage des projets
        $('.filter-btn').on('click', function() {
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');

            const filterValue = $(this).data('filter');

            if (filterValue === '*') {
                $('.project-block').show();
            } else {
                $('.project-block').hide();
                $(filterValue).show();
            }
        });

        // Animation des compteurs
        function animateCounter() {
            $('.count-text').each(function() {
                const $this = $(this);
                const target = parseInt($this.data('stop'));
                const speed = parseInt($this.data('speed'));
                const current = parseInt($this.text());

                if (current < target) {
                    $this.text(Math.ceil(current + (target - current) / 10));
                    setTimeout(animateCounter, speed / 10);
                } else {
                    $this.text(target);
                }
            });
        }

        // Lancer l'animation des compteurs lorsque la section est visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        observer.observe(document.querySelector('.stats-counter'));
    });
</script>
@endsection
