@extends('layouts.master')

@section('title', 'Notre Équipe - Masadigitale Mali')
@section('meta_description', 'Rencontrez notre équipe d\'experts en développement web, marketing digital, design et gestion de projet. Des professionnels passionnés pour vos projets digitaux.')

@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Notre Équipe</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home.index') }}">Accueil</a></li>
            <li>Notre Équipe</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Nos Experts</span>
            <h2>Rencontrez nos talents</h2>
            <div class="text">
                Une équipe de professionnels passionnés, unis par une vision commune :
                accompagner votre transformation digitale avec expertise et innovation.
            </div>
        </div>

        <!-- Filtres par catégorie -->
        @if($categories->count() > 1)
        <div class="team-filters text-center mb-5">
            <ul class="filter-tabs filter-btns clearfix">
                <li class="active filter" data-filter="all">Toute l'équipe</li>
                @foreach($categories as $category)
                    <li class="filter" data-filter=".{{ $category->slug }}">{{ $category->name }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Liste des membres -->
        @if($members->count() > 0)
            <div class="row clearfix">
                @foreach($members as $member)
                    <!-- Team Block -->
                    <div class="team-block col-lg-3 col-md-4 col-sm-6 col-xs-12 mix all
                        @if($member->category) {{ Str::slug($member->category) }} @endif">
                        <div class="inner-box">
                            <div class="image-box">
                                @if($member->image)
                                    <img src="{{ asset('storage/' . $member->image) }}"
                                         alt="{{ $member->name }}"
                                         style="width: 100%; height: 280px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('assets/images/team/default-avatar.jpg') }}"
                                         alt="{{ $member->name }}"
                                         style="width: 100%; height: 280px; object-fit: cover;">
                                @endif
                                <div class="overlay-box">
                                    <ul class="social-links">
                                        @if(isset($member->social_links['linkedin']))
                                            <li>
                                                <a href="{{ $member->social_links['linkedin'] }}"
                                                   target="_blank"
                                                   title="LinkedIn">
                                                    <i class="fab fa-linkedin"></i>
                                                </a>
                                            </li>
                                        @endif
                                        @if(isset($member->social_links['twitter']))
                                            <li>
                                                <a href="{{ $member->social_links['twitter'] }}"
                                                   target="_blank"
                                                   title="Twitter">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                        @endif
                                        @if(isset($member->social_links['github']))
                                            <li>
                                                <a href="{{ $member->social_links['github'] }}"
                                                   target="_blank"
                                                   title="GitHub">
                                                    <i class="fab fa-github"></i>
                                                </a>
                                            </li>
                                        @endif
                                        @if(isset($member->social_links['facebook']))
                                            <li>
                                                <a href="{{ $member->social_links['facebook'] }}"
                                                   target="_blank"
                                                   title="Facebook">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h3>
                                    <a href="{{ route('team.show', $member) }}">
                                        {{ $member->name }}
                                    </a>
                                </h3>
                                <div class="designation">{{ $member->position }}</div>
                                @if($member->department)
                                    <div class="department">
                                        <i class="fa fa-building"></i> {{ $member->department }}
                                    </div>
                                @endif

                                @if($member->bio)
                                    <div class="text">
                                        {{ Str::limit($member->bio, 80) }}
                                    </div>
                                @endif

                                <a href="{{ route('team.show', $member) }}" class="read-more">
                                    Voir le profil <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-5">
                <div class="icon mb-4">
                    <i class="fa fa-users fa-4x text-muted"></i>
                </div>
                <h3 class="mb-3">Notre équipe s'agrandit</h3>
                <p class="text-muted">Nous recrutons activement de nouveaux talents pour mieux vous servir.</p>
                <a href="{{ route('contact.index') }}" class="theme-btn btn-style-two mt-3">
                    <i class="fa fa-envelope"></i> Rejoindre l'équipe
                </a>
            </div>
        @endif

        <!-- Statistiques de l'équipe -->
        <div class="team-stats mt-5 pt-5">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-box text-center">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="{{ $members->count() }}">0</span>
                        </div>
                        <h4 class="counter-title">Membres</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-box text-center">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="{{ $categories->count() }}">0</span>
                        </div>
                        <h4 class="counter-title">Départements</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-box text-center">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="{{ $totalProjects }}">0</span>
                        </div>
                        <h4 class="counter-title">Projets réalisés</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="counter-box text-center">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="{{ $totalExperience }}">0</span>+
                        </div>
                        <h4 class="counter-title">Années d'expérience</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Section -->

<!-- Team Values -->
<section class="why-us-section" style="background-color: #f8f9fa;">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Nos Valeurs</span>
            <h2>Ce qui nous unit</h2>
        </div>
        <div class="row clearfix">
            <div class="value-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <div class="icon-box">
                        <i class="fa fa-handshake fa-3x text-primary"></i>
                    </div>
                    <h3>Collaboration</h3>
                    <p>Nous croyons en la force du travail d'équipe et de l'intelligence collective pour offrir les meilleures solutions.</p>
                </div>
            </div>
            <div class="value-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <div class="icon-box">
                        <i class="fa fa-lightbulb fa-3x text-warning"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>Nous repoussons constamment les limites pour proposer des solutions digitales modernes et efficaces.</p>
                </div>
            </div>
            <div class="value-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box text-center">
                    <div class="icon-box">
                        <i class="fa fa-heart fa-3x text-danger"></i>
                    </div>
                    <h3>Passion</h3>
                    <p>Chaque membre de notre équipe est animé par une passion profonde pour la technologie et l'excellence.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Values -->

<!-- Join Team CTA -->
<section class="call-back-section" style="background-image: url({{ asset('assets/images/background/2.jpg') }});">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h3>Vous souhaitez rejoindre notre équipe ?</h3>
                    <div class="text">
                        Nous recherchons constamment des talents passionnés par le digital.
                        Si vous partagez nos valeurs et souhaitez contribuer à des projets innovants,
                        nous serions ravis de vous rencontrer.
                    </div>
                </div>
            </div>
            <div class="btn-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column text-center">
                    <a href="{{ route('contact.index') }}" class="theme-btn btn-style-three btn-block">
                        <i class="fa fa-paper-plane"></i> Postuler maintenant
                    </a>
                    <p class="mt-3">
                        <small>Envoyez-nous votre CV et lettre de motivation</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Join Team CTA -->

<!-- Departments Section -->
@if($categories->count() > 0)
<section class="departments-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Nos Départements</span>
            <h2>Expertises spécialisées</h2>
        </div>
        <div class="row clearfix">
            @foreach($categories as $category)
                @php
                    $categoryMembers = $members->where('category', $category->slug);
                    $icon = match($category->slug) {
                        'direction' => 'fa-user-tie',
                        'technique' => 'fa-code',
                        'commercial' => 'fa-chart-line',
                        'marketing' => 'fa-bullhorn',
                        'support' => 'fa-headset',
                        'design' => 'fa-paint-brush',
                        default => 'fa-users'
                    };
                @endphp
                <div class="department-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box text-center">
                        <div class="icon-box">
                            <i class="fa {{ $icon }} fa-3x text-primary"></i>
                        </div>
                        <h3>{{ $category->name }}</h3>
                        <div class="member-count">{{ $categoryMembers->count() }} membres</div>
                        <p>{{ $category->description ?? 'Experts spécialisés dans ce domaine.' }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!-- End Departments Section -->

@endsection

@section('styles')
<style>
    .team-section .team-block {
        margin-bottom: 30px;
    }

    .team-block .inner-box {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }

    .team-block .inner-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    }

    .team-block .image-box {
        position: relative;
        overflow: hidden;
    }

    .team-block .overlay-box {
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

    .team-block .inner-box:hover .overlay-box {
        opacity: 1;
    }

    .team-block .social-links {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        gap: 15px;
    }

    .team-block .social-links a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: #fff;
        border-radius: 50%;
        color: #007bff;
        font-size: 18px;
        transition: all 0.3s ease;
    }

    .team-block .social-links a:hover {
        background: #0056b3;
        color: #fff;
        transform: scale(1.1);
    }

    .team-block .lower-content {
        padding: 20px;
    }

    .team-block h3 {
        margin-bottom: 5px;
        font-size: 18px;
    }

    .team-block h3 a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .team-block h3 a:hover {
        color: #007bff;
    }

    .team-block .designation {
        color: #007bff;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .team-block .department {
        color: #666;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .team-block .text {
        color: #777;
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .team-block .read-more {
        color: #007bff;
        font-size: 14px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .team-block .read-more:hover {
        color: #0056b3;
        padding-left: 5px;
    }

    .team-filters .filter-btns {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 30px;
    }

    .team-filters .filter {
        padding: 8px 20px;
        background: #f8f9fa;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 500;
    }

    .team-filters .filter.active,
    .team-filters .filter:hover {
        background: #007bff;
        color: #fff;
    }

    .value-block .inner-box {
        padding: 30px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        height: 100%;
        transition: transform 0.3s ease;
    }

    .value-block .inner-box:hover {
        transform: translateY(-5px);
    }

    .value-block .icon-box {
        margin-bottom: 20px;
    }

    .counter-box {
        padding: 30px 15px;
    }

    .counter-box .count-text {
        font-size: 48px;
        font-weight: 700;
        color: #007bff;
        display: block;
        line-height: 1;
    }

    .department-block .inner-box {
        padding: 30px 15px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }

    .department-block .inner-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }

    .department-block .member-count {
        color: #007bff;
        font-weight: 600;
        margin: 10px 0;
    }

    @media (max-width: 767px) {
        .team-filters .filter-btns {
            gap: 5px;
        }

        .team-filters .filter {
            padding: 6px 15px;
            font-size: 14px;
        }

        .team-block {
            margin-bottom: 20px;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Filtrage des membres par catégorie
        $('.team-filters .filter').on('click', function() {
            $('.team-filters .filter').removeClass('active');
            $(this).addClass('active');

            const filterValue = $(this).data('filter');

            if (filterValue === 'all') {
                $('.team-block').show();
            } else {
                $('.team-block').hide();
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

        observer.observe(document.querySelector('.team-stats'));
    });
</script>
@endsection
