@extends('layouts.app') <!-- Ou votre layout principal -->

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Accueil</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('team.index') }}">Notre Équipe</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $team->name }}</li>
                </ol>
            </nav>

            <div class="card shadow-lg">
                <div class="row g-0">
                    <!-- Photo -->
                    <div class="col-md-4">
                        @if($team->image)
                            <img src="{{ asset('storage/' . $team->image) }}"
                                 class="img-fluid rounded-start h-100"
                                 alt="{{ $team->name }}"
                                 style="object-fit: cover; min-height: 400px;">
                        @else
                            <div class="d-flex align-items-center justify-content-center h-100 bg-light">
                                <i class="fa fa-user fa-6x text-muted"></i>
                            </div>
                        @endif
                    </div>

                    <!-- Informations -->
                    <div class="col-md-8">
                        <div class="card-body p-5">
                            <h1 class="card-title fw-bold mb-2">{{ $team->name }}</h1>
                            <h4 class="text-primary mb-4">{{ $team->position }}</h4>

                            @if($team->department)
                                <p class="mb-3">
                                    <i class="fa fa-building me-2"></i>
                                    <strong>Département:</strong> {{ $team->department }}
                                </p>
                            @endif

                            @if($team->category)
                                <p class="mb-3">
                                    <span class="badge bg-info">{{ ucfirst($team->category) }}</span>
                                </p>
                            @endif

                            @if($team->bio)
                                <div class="mb-4">
                                    <h5 class="mb-3">À propos</h5>
                                    <p class="card-text" style="line-height: 1.8;">
                                        {{ $team->bio }}
                                    </p>
                                </div>
                            @endif

                            <!-- Coordonnées -->
                            <div class="row mb-4">
                                @if($team->email)
                                    <div class="col-md-6 mb-3">
                                        <p class="mb-1">
                                            <i class="fa fa-envelope me-2 text-primary"></i>
                                            <strong>Email:</strong>
                                        </p>
                                        <a href="mailto:{{ $team->email }}" class="text-decoration-none">
                                            {{ $team->email }}
                                        </a>
                                    </div>
                                @endif

                                @if($team->phone)
                                    <div class="col-md-6 mb-3">
                                        <p class="mb-1">
                                            <i class="fa fa-phone me-2 text-primary"></i>
                                            <strong>Téléphone:</strong>
                                        </p>
                                        <a href="tel:{{ $team->phone }}" class="text-decoration-none">
                                            {{ $team->phone }}
                                        </a>
                                    </div>
                                @endif
                            </div>

                            <!-- Réseaux sociaux -->
                            @if($team->social_links && count($team->social_links) > 0)
                                <div class="mt-4 pt-4 border-top">
                                    <h5 class="mb-3">Suivez-moi</h5>
                                    <div class="social-links">
                                        @if(isset($team->social_links['linkedin']))
                                            <a href="{{ $team->social_links['linkedin'] }}"
                                               target="_blank"
                                               class="btn btn-outline-primary btn-sm me-2 mb-2">
                                                <i class="fab fa-linkedin me-1"></i> LinkedIn
                                            </a>
                                        @endif
                                        @if(isset($team->social_links['twitter']))
                                            <a href="{{ $team->social_links['twitter'] }}"
                                               target="_blank"
                                               class="btn btn-outline-info btn-sm me-2 mb-2">
                                                <i class="fab fa-twitter me-1"></i> Twitter
                                            </a>
                                        @endif
                                        @if(isset($team->social_links['github']))
                                            <a href="{{ $team->social_links['github'] }}"
                                               target="_blank"
                                               class="btn btn-outline-dark btn-sm me-2 mb-2">
                                                <i class="fab fa-github me-1"></i> GitHub
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bouton retour -->
            <div class="text-center mt-4">
                <a href="{{ route('team.index') }}" class="btn btn-outline-primary">
                    <i class="fa fa-arrow-left me-2"></i> Retour à l'équipe
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
    }

    .social-links a:hover {
        transform: translateY(-2px);
        transition: transform 0.3s ease;
    }

    @media (max-width: 768px) {
        .rounded-start {
            border-radius: 15px 15px 0 0 !important;
            height: 300px !important;
        }
    }
</style>
@endsection
