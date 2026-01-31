@extends('layouts.master')

@section('title', $projet->meta_titre ?? $projet->titre . ' - Masadigitale')
@section('meta_description', $projet->meta_description ?? $projet->description_courte)

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url({{ $projet->image_principale_url }}); background-size: cover; background-position: center; position: relative;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6);"></div>
    <div class="auto-container" style="position: relative; z-index: 2;">
        <div class="title-container">
            <div class="status-badge mb-3">
                @if($projet->statut == 'realises')
                    <span class="badge-realise"><i class="fa fa-check-circle"></i> Projet Réalisé</span>
                @elseif($projet->statut == 'en_cours')
                    <span class="badge-encours"><i class="fa fa-spinner"></i> Projet en Cours</span>
                @else
                    <span class="badge-avenir"><i class="fa fa-clock"></i> Projet à Venir</span>
                @endif
                @if($projet->is_featured)
                    <span class="badge-featured"><i class="fa fa-star"></i> Mis en avant</span>
                @endif
            </div>
            <h1>{{ $projet->titre }}</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home.index') }}">Accueil</a></li>
                <li><a href="{{ route('projets.index') }}">Projets</a></li>
                <li>{{ Str::limit($projet->titre, 30) }}</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->

<!-- Project Details Section -->
<section class="project-details-section py-5">
    <div class="auto-container">
        <div class="row">
            <!-- Colonne principale -->
            <div class="col-lg-8 col-md-12">
                <!-- Informations du projet -->
                <div class="project-info mb-5">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="fa fa-user-tie"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Client</h4>
                                    <p>{{ $projet->client ?? 'Client privé' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="fa fa-calendar-alt"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Période</h4>
                                    <p>
                                        @if($projet->date_debut && $projet->date_fin)
                                            {{ $projet->date_debut->format('m/Y') }} - {{ $projet->date_fin->format('m/Y') }}
                                        @elseif($projet->date_debut)
                                            Depuis {{ $projet->date_debut->format('m/Y') }}
                                        @else
                                            En cours
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="info-box">
                                <div class="info-icon">
                                    <i class="fa fa-tag"></i>
                                </div>
                                <div class="info-content">
                                    <h4>Catégorie</h4>
                                    <p>{{ $projet->categorie_label }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if($projet->budget)
                    <div class="budget-info mt-4">
                        <div class="info-box">
                            <div class="info-icon">
                                <i class="fa fa-money-bill-wave"></i>
                            </div>
                            <div class="info-content">
                                <h4>Budget</h4>
                                <p class="text-success">{{ $projet->formatted_budget }}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Description -->
                <div class="project-description mb-5">
                    <h3 class="section-title">À propos du projet</h3>
                    <div class="description-content">
                        {!! nl2br(e($projet->description_complete)) !!}
                    </div>
                </div>

                <!-- Technologies -->
                @if($projet->technologies && count($projet->technologies) > 0)
                <div class="project-technologies mb-5">
                    <h3 class="section-title">Technologies utilisées</h3>
                    <div class="technologies-list">
                        @foreach($projet->technologies as $tech)
                        <span class="tech-tag">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Gallerie d'images -->
                @if($projet->images && count($projet->images) > 0)
                <div class="project-gallery mb-5">
                    <h3 class="section-title">Galerie du projet</h3>
                    <div class="row gallery-grid">
                        @foreach($projet->images as $index => $image)
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                            <div class="gallery-item">
                                <a href="{{ asset('storage/' . $image) }}"
                                   data-lightbox="project-gallery"
                                   data-title="{{ $projet->titre }} - Image {{ $index + 1 }}">
                                    <img src="{{ asset('storage/' . $image) }}"
                                         alt="{{ $projet->titre }} - Image {{ $index + 1 }}"
                                         class="img-fluid"
                                         style="width: 100%; height: 200px; object-fit: cover;">
                                    <div class="gallery-overlay">
                                        <i class="fa fa-search-plus"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Liens -->
                @if($projet->lien_demo || $projet->lien_github)
                <div class="project-links mb-5">
                    <h3 class="section-title">Liens du projet</h3>
                    <div class="links-container">
                        @if($projet->lien_demo)
                        <a href="{{ $projet->lien_demo }}"
                           target="_blank"
                           class="project-link-btn btn-demo">
                            <i class="fa fa-external-link-alt"></i> Voir la démo
                        </a>
                        @endif
                        @if($projet->lien_github)
                        <a href="{{ $projet->lien_github }}"
                           target="_blank"
                           class="project-link-btn btn-github">
                            <i class="fab fa-github"></i> Code source
                        </a>
                        @endif
                    </div>
                </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 col-md-12">
                <!-- Image principale -->
                <div class="project-sidebar mb-5">
                    <div class="sidebar-card">
                        <div class="card-header">
                            <h4>Aperçu du projet</h4>
                        </div>
                        <div class="card-body">
                            <img src="{{ $projet->image_principale_url }}"
                                 alt="{{ $projet->titre }}"
                                 class="img-fluid rounded mb-3"
                                 style="width: 100%; height: 250px; object-fit: cover;">

                            <div class="project-meta">
                                <div class="meta-item">
                                    <strong>Statut:</strong>
                                    <span class="badge badge-{{ $projet->statut == 'realises' ? 'success' : ($projet->statut == 'en_cours' ? 'warning' : 'info') }}">
                                        {{ $projet->statut_label }}
                                    </span>
                                </div>

                                @if($projet->date_debut)
                                <div class="meta-item">
                                    <strong>Date de début:</strong>
                                    <span>{{ $projet->date_debut->format('d/m/Y') }}</span>
                                </div>
                                @endif

                                @if($projet->date_fin)
                                <div class="meta-item">
                                    <strong>Date de fin:</strong>
                                    <span>{{ $projet->date_fin->format('d/m/Y') }}</span>
                                </div>
                                @endif

                                <div class="meta-item">
                                    <strong>Durée:</strong>
                                    <span>{{ $projet->duree }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projets similaires -->
                @if(isset($projetsSimilaires) && $projetsSimilaires->count() > 0)
                <div class="similar-projects">
                    <div class="sidebar-card">
                        <div class="card-header">
                            <h4>Projets similaires</h4>
                        </div>
                        <div class="card-body">
                            @foreach($projetsSimilaires as $projetSimilaire)
                            <div class="similar-project-item mb-3">
                                <a href="{{ route('projets.show', $projetSimilaire->slug) }}">
                                    <div class="row align-items-center">
                                        <div class="col-4">
                                            <img src="{{ $projetSimilaire->image_principale_url }}"
                                                 alt="{{ $projetSimilaire->titre }}"
                                                 class="img-fluid rounded"
                                                 style="width: 80px; height: 60px; object-fit: cover;">
                                        </div>
                                        <div class="col-8">
                                            <h6>{{ Str::limit($projetSimilaire->titre, 40) }}</h6>
                                            <small class="text-muted">{{ $projetSimilaire->categorie_label }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                <!-- CTA -->
                <div class="project-cta mt-5">
                    <div class="cta-card text-center">
                        <div class="cta-icon mb-3">
                            <i class="fa fa-lightbulb fa-3x text-warning"></i>
                        </div>
                        <h4>Vous avez un projet similaire ?</h4>
                        <p class="mb-4">Discutons de votre idée et voyons comment nous pouvons vous aider.</p>
                        <a href="{{ route('contact.index') }}" class="theme-btn btn-style-one btn-block">
                            <i class="fa fa-comments"></i> Discuter de mon projet
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation entre projets -->
        <div class="project-navigation mt-5 pt-5">
            <div class="row">
                <div class="col-md-6">
                    @if(isset($projetPrecedent))
                    <a href="{{ route('projets.show', $projetPrecedent->slug) }}" class="nav-link prev-project">
                        <div class="nav-icon">
                            <i class="fa fa-chevron-left"></i>
                        </div>
                        <div class="nav-content">
                            <span class="nav-label">Projet précédent</span>
                            <h5>{{ $projetPrecedent->titre }}</h5>
                        </div>
                    </a>
                    @endif
                </div>
                <div class="col-md-6 text-right">
                    @if(isset($projetSuivant))
                    <a href="{{ route('projets.show', $projetSuivant->slug) }}" class="nav-link next-project">
                        <div class="nav-content">
                            <span class="nav-label">Projet suivant</span>
                            <h5>{{ $projetSuivant->titre }}</h5>
                        </div>
                        <div class="nav-icon">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Project Details Section -->

<!-- CTA Section -->
<section class="call-to-action" style="background-image: url({{ asset('assets/images/background/4.jpg') }});">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h3>Prêt à réaliser votre projet ?</h3>
                    <div class="text">
                        Contactez-nous dès aujourd'hui pour discuter de vos besoins
                        et obtenir un devis personnalisé.
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
    .page-title {
        padding: 150px 0 100px;
        position: relative;
    }

    .title-container {
        text-align: center;
        color: #fff;
    }

    .status-badge {
        display: flex;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .status-badge span {
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 600;
    }

    .badge-realise {
        background: #28a745;
        color: #fff;
    }

    .badge-encours {
        background: #ffc107;
        color: #333;
    }

    .badge-avenir {
        background: #17a2b8;
        color: #fff;
    }

    .badge-featured {
        background: #ffd700;
        color: #333;
    }

    .project-info .info-box {
        display: flex;
        align-items: center;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        height: 100%;
    }

    .info-icon {
        width: 50px;
        height: 50px;
        background: #007bff;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
    }

    .info-icon i {
        font-size: 20px;
    }

    .info-content h4 {
        font-size: 14px;
        color: #666;
        margin-bottom: 5px;
    }

    .info-content p {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin: 0;
    }

    .budget-info .info-box {
        background: #f8f9fa;
        border-left: 4px solid #28a745;
    }

    .section-title {
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #007bff;
    }

    .description-content {
        font-size: 16px;
        line-height: 1.8;
        color: #555;
    }

    .technologies-list {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .tech-tag {
        padding: 8px 15px;
        background: #f1f8ff;
        color: #0366d6;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 500;
    }

    .gallery-item {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .gallery-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 123, 255, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .gallery-overlay i {
        color: #fff;
        font-size: 30px;
    }

    .links-container {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .project-link-btn {
        padding: 12px 25px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
    }

    .btn-demo {
        background: #007bff;
        color: #fff;
    }

    .btn-demo:hover {
        background: #0056b3;
        color: #fff;
        transform: translateY(-2px);
    }

    .btn-github {
        background: #333;
        color: #fff;
    }

    .btn-github:hover {
        background: #000;
        color: #fff;
        transform: translateY(-2px);
    }

    .sidebar-card {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin-bottom: 30px;
    }

    .sidebar-card .card-header {
        padding: 15px 20px;
        background: #f8f9fa;
        border-bottom: 1px solid #e9ecef;
    }

    .sidebar-card .card-header h4 {
        margin: 0;
        font-size: 18px;
        color: #333;
    }

    .sidebar-card .card-body {
        padding: 20px;
    }

    .project-meta .meta-item {
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
        padding-bottom: 10px;
        border-bottom: 1px solid #f0f0f0;
    }

    .project-meta .meta-item:last-child {
        border-bottom: none;
    }

    .similar-project-item {
        padding: 10px;
        border-radius: 8px;
        background: #f8f9fa;
        transition: all 0.3s ease;
    }

    .similar-project-item:hover {
        background: #e9ecef;
        transform: translateX(5px);
    }

    .similar-project-item a {
        text-decoration: none;
        color: inherit;
    }

    .similar-project-item h6 {
        margin: 0 0 5px 0;
        font-size: 14px;
        color: #333;
    }

    .cta-card {
        padding: 30px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border-radius: 10px;
        color: #fff;
    }

    .cta-card h4 {
        color: #fff;
        margin-bottom: 15px;
    }

    .project-navigation .nav-link {
        display: flex;
        align-items: center;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        text-decoration: none;
        color: inherit;
        transition: all 0.3s ease;
    }

    .project-navigation .nav-link:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .prev-project {
        justify-content: flex-start;
    }

    .next-project {
        justify-content: flex-end;
    }

    .nav-icon {
        width: 40px;
        height: 40px;
        background: #007bff;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 15px;
        flex-shrink: 0;
    }

    .nav-label {
        font-size: 12px;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .nav-content h5 {
        margin: 5px 0 0 0;
        font-size: 16px;
        color: #333;
    }

    @media (max-width: 767px) {
        .project-info .row > div {
            margin-bottom: 15px;
        }

        .links-container {
            flex-direction: column;
        }

        .project-link-btn {
            width: 100%;
            justify-content: center;
        }

        .project-navigation .row > div {
            margin-bottom: 15px;
        }
    }
</style>
@endsection

@section('scripts')
<!-- Lightbox pour la galerie -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'albumLabel': "Image %1 sur %2"
    });

    // Animation des éléments au scroll
    $(document).ready(function() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observer les cartes d'information
        document.querySelectorAll('.info-box, .sidebar-card, .cta-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });
    });
</script>
@endsection
