@extends('admin.layouts.master')

@section('title', 'Gestion des Projets')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Projets</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Base</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Projets</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="card-title">Liste des Projets</h4>
                            <a href="{{ route('admin.projets.create') }}" class="btn btn-primary btn-round ms-auto">
                                <i class="fa fa-plus"></i> Nouveau Projet
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <!-- Filtres -->
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <div class="btn-group" role="group">
                                    <a href="{{ route('admin.projets.index') }}"
                                       class="btn btn-{{ request('statut') == null ? 'primary' : 'secondary' }}">
                                        Tous
                                    </a>
                                    <a href="{{ route('admin.projets.index') }}?statut=realises"
                                       class="btn btn-{{ request('statut') == 'realises' ? 'primary' : 'secondary' }}">
                                        Réalisés
                                    </a>
                                    <a href="{{ route('admin.projets.index') }}?statut=en_cours"
                                       class="btn btn-{{ request('statut') == 'en_cours' ? 'primary' : 'secondary' }}">
                                        En cours
                                    </a>
                                    <a href="{{ route('admin.projets.index') }}?statut=avenir"
                                       class="btn btn-{{ request('statut') == 'avenir' ? 'primary' : 'secondary' }}">
                                        À venir
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table id="projets-table" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Titre</th>
                                        <th>Client</th>
                                        <th>Catégorie</th>
                                        <th>Statut</th>
                                        <th>Budget</th>
                                        <th>Mis en avant</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($projets as $projet)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if($projet->image_principale)
                                                <img src="{{ $projet->image_principale_url }}"
                                                     alt="{{ $projet->titre }}"
                                                     style="width: 80px; height: 60px; object-fit: cover; border-radius: 4px;">
                                            @else
                                                <div style="width: 80px; height: 60px; background-color: #f0f0f0; border-radius: 4px; display: flex; align-items: center; justify-content: center;">
                                                    <i class="fa fa-image" style="font-size: 20px; color: #999;"></i>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            <strong>{{ $projet->titre }}</strong><br>
                                            <small class="text-muted">{{ Str::limit($projet->description_courte, 50) }}</small>
                                        </td>
                                        <td>{{ $projet->client ?? '-' }}</td>
                                        <td>
                                            @if($projet->categorie)
                                                <span class="badge badge-info">{{ $projet->categorie_label }}</span>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            @if($projet->statut == 'realises')
                                                <span class="badge badge-success">Réalisé</span>
                                            @elseif($projet->statut == 'en_cours')
                                                <span class="badge badge-warning">En cours</span>
                                            @else
                                                <span class="badge badge-info">À venir</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($projet->budget)
                                                {{ number_format($projet->budget, 0, ',', ' ') }} FCFA
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.projets.toggleFeatured', $projet) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-sm btn-link p-0">
                                                    @if($projet->is_featured)
                                                        <i class="fa fa-star text-warning" style="font-size: 1.2rem;"></i>
                                                    @else
                                                        <i class="fa fa-star text-secondary" style="font-size: 1.2rem;"></i>
                                                    @endif
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="form-button-action d-flex">
                                                <a href="{{ route('projets.show', $projet->slug) }}"
                                                   target="_blank"
                                                   class="btn btn-link btn-info btn-sm mr-2"
                                                   title="Voir sur le site">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.projets.edit', $projet) }}"
                                                   class="btn btn-link btn-primary btn-sm mr-2"
                                                   title="Modifier">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="{{ route('admin.projets.show', $projet) }}"
                                                   class="btn btn-link btn-secondary btn-sm mr-2"
                                                   title="Détails">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                                <form action="{{ route('admin.projets.destroy', $projet) }}"
                                                      method="POST"
                                                      class="delete-form"
                                                      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link btn-danger btn-sm" title="Supprimer">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center mt-4">
                            {{ $projets->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .badge {
        font-size: 0.85em;
        padding: 0.35em 0.65em;
    }

    .form-button-action .btn-link {
        padding: 0.25rem 0.5rem;
    }

    .table img {
        border: 1px solid #dee2e6;
    }
</style>
@endsection
