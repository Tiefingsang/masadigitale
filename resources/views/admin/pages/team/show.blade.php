@extends('admin.layouts.master')

@section('title', 'Fiche Membre: ' . $team->name)

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Fiche Membre</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Base</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="{{ route('admin.team.index') }}">Équipe</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">{{ $team->name }}</a></li>
            </ul>
        </div>

        <!-- Messages de succès/erreur -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">Détails du membre</h4>
                            <div class="btn-group">
                                <a href="{{ route('admin.team.edit', $team) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i> Modifier
                                </a>
                                <a href="{{ route('team.show', $team) }}" target="_blank" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i> Voir public
                                </a>
                                <a href="{{ route('admin.team.index') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-arrow-left"></i> Retour
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <!-- Colonne gauche: Photo et informations générales -->
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Photo</h5>
                                    </div>
                                    <div class="card-body text-center">
                                        @if($team->image)
                                            <img src="{{ asset('storage/' . $team->image) }}"
                                                 alt="{{ $team->name }}"
                                                 class="img-fluid rounded-circle mb-3"
                                                 style="width: 200px; height: 200px; object-fit: cover;">
                                            <p class="text-muted small">
                                                {{ basename($team->image) }}
                                            </p>
                                        @else
                                            <div class="d-flex align-items-center justify-content-center bg-light rounded-circle mx-auto mb-3"
                                                 style="width: 200px; height: 200px;">
                                                <i class="fa fa-user fa-5x text-muted"></i>
                                            </div>
                                            <p class="text-muted">Aucune photo</p>
                                        @endif
                                    </div>
                                </div>

                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Statut</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <p class="mb-1"><strong>Statut:</strong></p>
                                                @if($team->is_active)
                                                    <span class="badge badge-success">Actif</span>
                                                @else
                                                    <span class="badge badge-danger">Inactif</span>
                                                @endif
                                            </div>
                                            <div class="col-6">
                                                <p class="mb-1"><strong>Ordre:</strong></p>
                                                <span class="badge badge-info">{{ $team->order }}</span>
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <p class="mb-1"><strong>Créé le:</strong></p>
                                            <p class="text-muted">{{ $team->created_at->format('d/m/Y H:i') }}</p>

                                            <p class="mb-1"><strong>Modifié le:</strong></p>
                                            <p class="text-muted">{{ $team->updated_at->format('d/m/Y H:i') }}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Actions rapides -->
                                <div class="card">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Actions</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-grid gap-2">
                                            <form action="{{ route('admin.team.update', $team) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="update_type" value="toggle_active">
                                                <button type="submit" class="btn btn-{{ $team->is_active ? 'warning' : 'success' }} btn-block mb-2">
                                                    <i class="fa fa-power-off"></i>
                                                    {{ $team->is_active ? 'Désactiver' : 'Activer' }}
                                                </button>
                                            </form>

                                            <a href="{{ route('admin.team.edit', $team) }}" class="btn btn-primary btn-block mb-2">
                                                <i class="fa fa-edit"></i> Modifier
                                            </a>

                                            <button type="button" class="btn btn-danger btn-block"
                                                    data-toggle="modal" data-target="#deleteModal">
                                                <i class="fa fa-trash"></i> Supprimer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Colonne droite: Informations détaillées -->
                            <div class="col-md-8">
                                <!-- Informations personnelles -->
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Informations Personnelles</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <p class="mb-1"><strong>Nom complet:</strong></p>
                                                <p class="text-dark">{{ $team->name }}</p>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <p class="mb-1"><strong>Poste:</strong></p>
                                                <p class="text-dark">{{ $team->position }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <p class="mb-1"><strong>Département:</strong></p>
                                                <p class="text-dark">{{ $team->department ?? 'Non spécifié' }}</p>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <p class="mb-1"><strong>Catégorie:</strong></p>
                                                @if($team->category)
                                                    <span class="badge badge-info">{{ ucfirst($team->category) }}</span>
                                                @else
                                                    <p class="text-muted">Non spécifié</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Coordonnées -->
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Coordonnées</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            @if($team->email)
                                                <div class="col-md-6 mb-3">
                                                    <p class="mb-1"><strong>Email:</strong></p>
                                                    <p>
                                                        <a href="mailto:{{ $team->email }}" class="text-primary">
                                                            <i class="fa fa-envelope me-2"></i>{{ $team->email }}
                                                        </a>
                                                    </p>
                                                </div>
                                            @endif
                                            @if($team->phone)
                                                <div class="col-md-6 mb-3">
                                                    <p class="mb-1"><strong>Téléphone:</strong></p>
                                                    <p>
                                                        <a href="tel:{{ $team->phone }}" class="text-primary">
                                                            <i class="fa fa-phone me-2"></i>{{ $team->phone }}
                                                        </a>
                                                    </p>
                                                </div>
                                            @endif
                                        </div>
                                        @if(!$team->email && !$team->phone)
                                            <p class="text-muted text-center">Aucune coordonnée renseignée</p>
                                        @endif
                                    </div>
                                </div>

                                <!-- Biographie -->
                                @if($team->bio)
                                    <div class="card mb-4">
                                        <div class="card-header bg-light">
                                            <h5 class="mb-0">Biographie</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="bg-light p-3 rounded">
                                                {!! nl2br(e($team->bio)) !!}
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                <!-- Réseaux sociaux -->
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
                                    <div class="card">
                                        <div class="card-header bg-light">
                                            <h5 class="mb-0">Réseaux Sociaux</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                @if(!empty($socialLinks['linkedin']))
                                                    <div class="col-md-4 mb-3">
                                                        <p class="mb-1"><strong>LinkedIn:</strong></p>
                                                        <a href="{{ $socialLinks['linkedin'] }}" target="_blank" class="text-primary">
                                                            <i class="fab fa-linkedin me-2"></i>Profil
                                                        </a>
                                                    </div>
                                                @endif
                                                @if(!empty($socialLinks['twitter']))
                                                    <div class="col-md-4 mb-3">
                                                        <p class="mb-1"><strong>Twitter/X:</strong></p>
                                                        <a href="{{ $socialLinks['twitter'] }}" target="_blank" class="text-info">
                                                            <i class="fab fa-twitter me-2"></i>Profil
                                                        </a>
                                                    </div>
                                                @endif
                                                @if(!empty($socialLinks['github']))
                                                    <div class="col-md-4 mb-3">
                                                        <p class="mb-1"><strong>GitHub:</strong></p>
                                                        <a href="{{ $socialLinks['github'] }}" target="_blank" class="text-dark">
                                                            <i class="fab fa-github me-2"></i>Profil
                                                        </a>
                                                    </div>
                                                @endif
                                                @if(!empty($socialLinks['facebook']))
                                                    <div class="col-md-4 mb-3">
                                                        <p class="mb-1"><strong>Facebook:</strong></p>
                                                        <a href="{{ $socialLinks['facebook'] }}" target="_blank" class="text-primary">
                                                            <i class="fab fa-facebook me-2"></i>Profil
                                                        </a>
                                                    </div>
                                                @endif
                                                @if(!empty($socialLinks['instagram']))
                                                    <div class="col-md-4 mb-3">
                                                        <p class="mb-1"><strong>Instagram:</strong></p>
                                                        <a href="{{ $socialLinks['instagram'] }}" target="_blank" class="text-danger">
                                                            <i class="fab fa-instagram me-2"></i>Profil
                                                        </a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de suppression -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmer la suppression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sûr de vouloir supprimer <strong>{{ $team->name }}</strong> ?</p>
                <p class="text-danger"><small>Cette action est irréversible. Toutes les données de ce membre seront perdues.</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <form action="{{ route('admin.team.destroy', $team) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer définitivement</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    // Script pour gérer les modales et autres interactions
    document.addEventListener('DOMContentLoaded', function() {
        // Auto-dismiss des alertes après 5 secondes
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
    });
</script>

<style>
    .card {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
    }

    .card-header.bg-light {
        background-color: #f8f9fa !important;
        border-bottom: 1px solid #e0e0e0;
    }

    .badge {
        font-size: 0.85em;
        padding: 0.35em 0.65em;
    }

    .img-fluid.rounded-circle {
        border: 3px solid #dee2e6;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .btn-group .btn {
        margin-left: 5px;
    }
</style>
@endsection
