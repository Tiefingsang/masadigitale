@extends('admin.layouts.master')

@section('title', 'Fiche Projet: ' . $projet->titre)

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Fiche Projet</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Base</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="{{ route('admin.projets.index') }}">Projets</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">{{ $projet->titre }}</a></li>
            </ul>
        </div>

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
                            <h4 class="card-title">Détails du projet</h4>
                            <div class="btn-group">
                                <a href="{{ route('admin.projets.edit', $projet) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i> Modifier
                                </a>
                                <a href="{{ route('projets.show', $projet->slug) }}" target="_blank" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i> Voir public
                                </a>
                                <a href="{{ route('admin.projets.index') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-arrow-left"></i> Retour
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <!-- Colonne gauche: Image et informations générales -->
                            <div class="col-md-4">
                                <!-- Image principale -->
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Image principale</h5>
                                    </div>
                                    <div class="card-body text-center">
                                        @if($projet->image_principale)
                                            <img src="{{ $projet->image_principale_url }}"
                                                 alt="{{ $projet->titre }}"
                                                 class="img-fluid rounded mb-3"
                                                 style="max-height: 300px; object-fit: contain;">
                                        @else
                                            <div class="d-flex align-items-center justify-content-center bg-light rounded mx-auto mb-3"
                                                 style="height: 200px;">
                                                <i class="fa fa-image fa-4x text-muted"></i>
                                            </div>
                                            <p class="text-muted">Aucune image</p>
                                        @endif
                                    </div>
                                </div>

                                <!-- Informations rapides -->
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Informations rapides</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <p class="mb-1"><strong>Statut:</strong></p>
                                            @if($projet->statut == 'realises')
                                                <span class="badge badge-success">Réalisé</span>
                                            @elseif($projet->statut == 'en_cours')
                                                <span class="badge badge-warning">En cours</span>
                                            @else
                                                <span class="badge badge-info">À venir</span>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <p class="mb-1"><strong>Mis en avant:</strong></p>
                                            @if($projet->is_featured)
                                                <span class="badge badge-warning">
                                                    <i class="fa fa-star"></i> Oui
                                                </span>
                                            @else
                                                <span class="badge badge-secondary">Non</span>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <p class="mb-1"><strong>Ordre d'affichage:</strong></p>
                                            <span class="badge badge-info">{{ $projet->ordre_affichage }}</span>
                                        </div>

                                        <div class="mb-3">
                                            <p class="mb-1"><strong>Créé le:</strong></p>
                                            <p class="text-muted">{{ $projet->created_at->format('d/m/Y H:i') }}</p>
                                        </div>

                                        <div class="mb-3">
                                            <p class="mb-1"><strong>Modifié le:</strong></p>
                                            <p class="text-muted">{{ $projet->updated_at->format('d/m/Y H:i') }}</p>
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
                                            <a href="{{ route('admin.projets.edit', $projet) }}" class="btn btn-primary btn-block mb-2">
                                                <i class="fa fa-edit"></i> Modifier
                                            </a>

                                            <form action="{{ route('admin.projets.toggleFeatured', $projet) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-{{ $projet->is_featured ? 'warning' : 'secondary' }} btn-block mb-2">
                                                    @if($projet->is_featured)
                                                        <i class="fa fa-star"></i> Retirer de la mise en avant
                                                    @else
                                                        <i class="fa fa-star"></i> Mettre en avant
                                                    @endif
                                                </button>
                                            </form>

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
                                <!-- Informations du projet -->
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Informations du Projet</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <p class="mb-1"><strong>Titre:</strong></p>
                                                <p class="text-dark">{{ $projet->titre }}</p>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <p class="mb-1"><strong>Slug:</strong></p>
                                                <p class="text-muted">{{ $projet->slug }}</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <p class="mb-1"><strong>Client:</strong></p>
                                                <p class="text-dark">{{ $projet->client ?? 'Non spécifié' }}</p>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <p class="mb-1"><strong>Catégorie:</strong></p>
                                                @if($projet->categorie)
                                                    <span class="badge badge-info">{{ $projet->categorie_label }}</span>
                                                @else
                                                    <p class="text-muted">Non spécifié</p>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="row">
                                            @if($projet->date_debut)
                                                <div class="col-md-6 mb-3">
                                                    <p class="mb-1"><strong>Date de début:</strong></p>
                                                    <p>{{ $projet->date_debut->format('d/m/Y') }}</p>
                                                </div>
                                            @endif
                                            @if($projet->date_fin)
                                                <div class="col-md-6 mb-3">
                                                    <p class="mb-1"><strong>Date de fin:</strong></p>
                                                    <p>{{ $projet->date_fin->format('d/m/Y') }}</p>
                                                </div>
                                            @endif
                                        </div>

                                        @if($projet->budget)
                                            <div class="mb-3">
                                                <p class="mb-1"><strong>Budget:</strong></p>
                                                <p class="text-success">{{ number_format($projet->budget, 0, ',', ' ') }} FCFA</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Description</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <p class="mb-1"><strong>Description courte:</strong></p>
                                            <p class="text-dark">{{ $projet->description_courte }}</p>
                                        </div>

                                        <div>
                                            <p class="mb-1"><strong>Description complète:</strong></p>
                                            <div class="bg-light p-3 rounded">
                                                {!! nl2br(e($projet->description_complete)) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Technologies -->
                                @if($projet->technologies && count($projet->technologies) > 0)
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Technologies utilisées</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap gap-2">
                                            @foreach($projet->technologies as $tech)
                                                <span class="badge badge-secondary">{{ $tech }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endif

                                <!-- Liens -->
                                <div class="card mb-4">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Liens</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            @if($projet->lien_demo)
                                                <div class="col-md-6 mb-3">
                                                    <p class="mb-1"><strong>Lien de démo:</strong></p>
                                                    <a href="{{ $projet->lien_demo }}" target="_blank" class="text-primary">
                                                        <i class="fa fa-external-link-alt me-2"></i>
                                                        {{ parse_url($projet->lien_demo, PHP_URL_HOST) }}
                                                    </a>
                                                </div>
                                            @endif
                                            @if($projet->lien_github)
                                                <div class="col-md-6 mb-3">
                                                    <p class="mb-1"><strong>Lien GitHub:</strong></p>
                                                    <a href="{{ $projet->lien_github }}" target="_blank" class="text-dark">
                                                        <i class="fab fa-github me-2"></i>
                                                        {{ parse_url($projet->lien_github, PHP_URL_PATH) }}
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                        @if(!$projet->lien_demo && !$projet->lien_github)
                                            <p class="text-muted text-center">Aucun lien renseigné</p>
                                        @endif
                                    </div>
                                </div>

                                <!-- Images supplémentaires -->
                                @if($projet->images && count($projet->images) > 0)
                                <div class="card">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Images supplémentaires</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            @foreach($projet->images as $index => $image)
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img src="{{ asset('storage/' . $image) }}"
                                                         alt="Image {{ $index + 1 }}"
                                                         class="card-img-top"
                                                         style="height: 150px; object-fit: cover; cursor: pointer;"
                                                         data-toggle="modal" data-target="#imageModal"
                                                         onclick="showImage('{{ asset('storage/' . $image) }}')">
                                                    <div class="card-body p-2 text-center">
                                                        <small class="text-muted">Image {{ $index + 1 }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                @endif

                                <!-- SEO -->
                                <div class="card mt-4">
                                    <div class="card-header bg-light">
                                        <h5 class="mb-0">Informations SEO</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <p class="mb-1"><strong>Meta titre:</strong></p>
                                                <p class="text-dark">{{ $projet->meta_titre ?? 'Non défini' }}</p>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <p class="mb-1"><strong>Meta description:</strong></p>
                                                <p class="text-dark">{{ $projet->meta_description ?? 'Non définie' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal d'affichage d'image -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Visualisation de l'image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" src="" alt="Image agrandie" class="img-fluid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
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
                <p>Êtes-vous sûr de vouloir supprimer le projet <strong>"{{ $projet->titre }}"</strong> ?</p>
                <p class="text-danger"><small>Cette action est irréversible. Toutes les données de ce projet seront perdues.</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <form action="{{ route('admin.projets.destroy', $projet) }}" method="POST" class="d-inline">
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
function showImage(src) {
    document.getElementById('modalImage').src = src;
}

// Auto-dismiss des alertes
setTimeout(function() {
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(function(alert) {
        if (alert.classList.contains('show')) {
            $(alert).alert('close');
        }
    });
}, 5000);
</script>

<style>
.badge {
    font-size: 0.85em;
    padding: 0.35em 0.65em;
}

.card {
    border: 1px solid #e0e0e0;
    border-radius: 8px;
}

.card-header.bg-light {
    background-color: #f8f9fa !important;
    border-bottom: 1px solid #e0e0e0;
}

.img-fluid.rounded {
    border: 1px solid #dee2e6;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.btn-group .btn {
    margin-left: 5px;
}

.gap-2 > * {
    margin-bottom: 0.5rem;
}
</style>
@endsection
