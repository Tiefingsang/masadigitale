@extends('layouts.master')

@section('title', $team->name . ' - ' . $team->position . ' | Masadigitale Mali')
@section('meta_description', $team->bio ? Str::limit($team->bio, 150) : 'Découvrez le profil de ' . $team->name . ', ' . $team->position . ' chez Masadigitale.')

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Profil Membre</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home.index') }}">Accueil</a></li>
            <li><a href="{{ route('team.index') }}">Notre Équipe</a></li>
            <li>{{ $team->name }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Team Member Detail -->
<section class="team-detail-section">
    <div class="auto-container">
        <div class="team-detail">
            <div class="row clearfix">
                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image-box">
                            @if($team->image)
                                <img src="{{ asset('storage/' . $team->image) }}"
                                     alt="{{ $team->name }}"
                                     class="img-fluid rounded"
                                     style="width: 100%; max-height: 500px; object-fit: cover;">
                            @else
                                <div class="default-avatar text-center p-5 bg-light rounded">
                                    <i class="fa fa-user fa-7x text-muted"></i>
                                    <h4 class="mt-3">{{ $team->name }}</h4>
                                </div>
                            @endif

                            <!-- Badges -->
                            <div class="member-badges mt-3">
                                @if($team->department)
                                    <span class="badge bg-primary">
                                        <i class="fa fa-building me-1"></i> {{ $team->department }}
                                    </span>
                                @endif

                                @if($team->category)
                                    <span class="badge bg-info">
                                        {{ ucfirst($team->category) }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Social Links -->
                        @php
                            $socialLinks = $team->social_links ?? [];
                            $hasSocialLinks = false;
                            foreach ($socialLinks as $link) {
                                if (!empty($link)) {
                                    $hasSocialLinks = true;
                                    break;
                                }
                            }
                        @endphp

                        @if($hasSocialLinks)
                            <div class="social-box mt-4">
                                <h4>Suivez-moi</h4>
                                <div class="social-links d-flex flex-wrap gap-2">
                                    @if(!empty($socialLinks['linkedin']))
                                        <a href="{{ $socialLinks['linkedin'] }}"
                                           target="_blank"
                                           class="btn btn-outline-primary btn-sm d-flex align-items-center">
                                            <i class="fab fa-linkedin me-2"></i> LinkedIn
                                        </a>
                                    @endif

                                    @if(!empty($socialLinks['twitter']))
                                        <a href="{{ $socialLinks['twitter'] }}"
                                           target="_blank"
                                           class="btn btn-outline-info btn-sm d-flex align-items-center">
                                            <i class="fab fa-twitter me-2"></i> Twitter/X
                                        </a>
                                    @endif

                                    @if(!empty($socialLinks['github']))
                                        <a href="{{ $socialLinks['github'] }}"
                                           target="_blank"
                                           class="btn btn-outline-dark btn-sm d-flex align-items-center">
                                            <i class="fab fa-github me-2"></i> GitHub
                                        </a>
                                    @endif

                                    @if(!empty($socialLinks['facebook']))
                                        <a href="{{ $socialLinks['facebook'] }}"
                                           target="_blank"
                                           class="btn btn-outline-primary btn-sm d-flex align-items-center">
                                            <i class="fab fa-facebook me-2"></i> Facebook
                                        </a>
                                    @endif

                                    @if(!empty($socialLinks['instagram']))
                                        <a href="{{ $socialLinks['instagram'] }}"
                                           target="_blank"
                                           class="btn btn-outline-danger btn-sm d-flex align-items-center">
                                            <i class="fab fa-instagram me-2"></i> Instagram
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Info Column -->
                <div class="info-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Member Info -->
                        <div class="member-info">
                            <h2 class="mb-2">{{ $team->name }}</h2>
                            <h4 class="text-primary mb-4">{{ $team->position }}</h4>

                            <!-- Biographie -->
                            @if($team->bio)
                                <div class="bio-section mb-5">
                                    <h3 class="section-title">À propos</h3>
                                    <div class="bio-content">
                                        {!! nl2br(e($team->bio)) !!}
                                    </div>
                                </div>
                            @endif

                            <!-- Coordonnées -->
                            <div class="contact-section mb-5">
                                <h3 class="section-title">Coordonnées</h3>
                                <div class="row">
                                    @if($team->email)
                                        <div class="col-md-6 mb-3">
                                            <div class="contact-item">
                                                <div class="contact-icon">
                                                    <i class="fa fa-envelope text-primary"></i>
                                                </div>
                                                <div class="contact-details">
                                                    <h5>Email</h5>
                                                    <a href="mailto:{{ $team->email }}" class="text-primary">
                                                        {{ $team->email }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($team->phone)
                                        <div class="col-md-6 mb-3">
                                            <div class="contact-item">
                                                <div class="contact-icon">
                                                    <i class="fa fa-phone text-primary"></i>
                                                </div>
                                                <div class="contact-details">
                                                    <h5>Téléphone</h5>
                                                    <a href="tel:{{ $team->phone }}" class="text-primary">
                                                        {{ $team->phone }}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>

                                @if(!$team->email && !$team->phone)
                                    <div class="alert alert-info">
                                        <i class="fa fa-info-circle"></i>
                                        Pour contacter ce membre, veuillez utiliser le formulaire de contact général.
                                    </div>
                                @endif
                            </div>

                            <!-- Expertises -->
                            @if($team->category || $team->department)
                                <div class="expertise-section mb-5">
                                    <h3 class="section-title">Expertises</h3>
                                    <div class="expertise-tags">
                                        @if($team->category)
                                            <span class="expertise-tag">
                                                <i class="fa fa-tag me-2"></i> {{ ucfirst($team->category) }}
                                            </span>
                                        @endif

                                        @if($team->department)
                                            <span class="expertise-tag">
                                                <i class="fa fa-building me-2"></i> {{ $team->department }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Call to Action -->
                        <div class="cta-section mt-4">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <a href="{{ route('contact.index') }}" class="btn btn-primary btn-block">
                                        <i class="fa fa-envelope me-2"></i> Contacter {{ $team->name }}
                                    </a>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <a href="{{ route('team.index') }}" class="btn btn-outline-secondary btn-block">
                                        <i class="fa fa-users me-2"></i> Voir toute l'équipe
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projects ou réalisations (optionnel) -->
        @if(false) <!-- À adapter si vous avez des projets liés -->
        <div class="member-projects mt-5 pt-5">
            <div class="sec-title">
                <h2>Projets réalisés</h2>
                <div class="text">Quelques projets auxquels {{ $team->name }} a contribué</div>
            </div>
            <div class="row clearfix">
                <!-- Projets ici -->
            </div>
        </div>
        @endif

        <!-- Autres membres de la même catégorie -->
        @php
            $relatedMembers = \App\Models\Team::where('id', '!=', $team->id)
                ->where('is_active', true)
                ->where('category', $team->category)
                ->orderBy('order')
                ->limit(3)
                ->get();
        @endphp

        @if($relatedMembers->count() > 0)
            <div class="related-members mt-5 pt-5">
                <div class="sec-title">
                    <h2>Autres membres du département {{ ucfirst($team->category) }}</h2>
                </div>
                <div class="row clearfix">
                    @foreach($relatedMembers as $related)
                        <div class="team-block col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    @if($related->image)
                                        <img src="{{ asset('storage/' . $related->image) }}"
                                             alt="{{ $related->name }}"
                                             style="width: 100%; height: 200px; object-fit: cover;">
                                    @else
                                        <div class="default-avatar-small text-center p-3 bg-light">
                                            <i class="fa fa-user fa-3x text-muted"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="lower-content text-center">
                                    <h4>
                                        <a href="{{ route('team.show', $related) }}">
                                            {{ $related->name }}
                                        </a>
                                    </h4>
                                    <div class="designation">{{ $related->position }}</div>
                                    <a href="{{ route('team.show', $related) }}" class="btn btn-sm btn-outline-primary mt-2">
                                        Voir le profil
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>
<!-- End Team Member Detail -->

<!-- Contact CTA -->
<section class="call-back-section" style="background-image: url({{ asset('assets/images/background/2.jpg') }});">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h3>Travailler avec {{ $team->name }} et notre équipe</h3>
                    <div class="text">
                        Vous avez un projet digital à réaliser ? Notre équipe d'experts est à votre disposition
                        pour étudier vos besoins et vous proposer la meilleure solution.
                    </div>
                </div>
            </div>
            <div class="btn-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column text-center">
                    <a href="{{ route('contact.index') }}" class="theme-btn btn-style-three btn-block">
                        <i class="fa fa-paper-plane"></i> Discuter de mon projet
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact CTA -->

@endsection

@section('styles')
<style>
    .team-detail-section {
        padding: 80px 0;
    }

    .member-badges {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .member-badges .badge {
        padding: 8px 15px;
        font-size: 14px;
        border-radius: 20px;
    }

    .social-box {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
    }

    .social-box h4 {
        margin-bottom: 15px;
        font-size: 18px;
    }

    .social-links .btn {
        border-radius: 20px;
        padding: 8px 15px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .social-links .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .section-title {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #007bff;
        position: relative;
    }

    .section-title:after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 60px;
        height: 2px;
        background: #0056b3;
    }

    .bio-content {
        line-height: 1.8;
        font-size: 16px;
        color: #555;
        white-space: pre-line;
    }

    .contact-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .contact-item:hover {
        background: #e9ecef;
        transform: translateY(-2px);
    }

    .contact-icon {
        width: 40px;
        height: 40px;
        background: #007bff;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    .contact-details h5 {
        font-size: 14px;
        color: #666;
        margin-bottom: 5px;
    }

    .contact-details a {
        font-size: 16px;
        text-decoration: none;
    }

    .expertise-tags {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .expertise-tag {
        background: #e9ecef;
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 14px;
        color: #333;
    }

    .expertise-tag i {
        color: #007bff;
    }

    .default-avatar {
        border: 2px dashed #dee2e6;
        border-radius: 10px;
    }

    .default-avatar-small {
        height: 200px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 1px solid #dee2e6;
        border-radius: 8px;
    }

    .related-members .team-block .inner-box {
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        height: 100%;
    }

    .related-members .team-block .inner-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    .related-members .lower-content {
        padding: 20px;
    }

    .related-members h4 {
        margin-bottom: 5px;
    }

    .related-members h4 a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .related-members h4 a:hover {
        color: #007bff;
    }

    .cta-section .btn {
        padding: 12px 20px;
        font-weight: 500;
    }

    @media (max-width: 991px) {
        .team-detail-section {
            padding: 50px 0;
        }

        .image-column {
            margin-bottom: 30px;
        }
    }

    @media (max-width: 767px) {
        .contact-item {
            flex-direction: column;
            text-align: center;
            align-items: center;
        }

        .social-links {
            justify-content: center;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Animation pour les éléments au scroll
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

        // Observer les sections
        document.querySelectorAll('.contact-item, .social-box, .bio-content').forEach(el => {
            observer.observe(el);
        });
    });
</script>
@endsection
