@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Ajouter une nouvelle formation</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="{{ route('admin.index') }}"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="{{ route('admin.formations.index') }}">Formations</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Ajouter</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Formulaire de création</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.formations.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="titre" class="form-label">Titre</label>
                                <input type="text" name="titre" id="titre" class="form-control @error('titre') is-invalid @enderror" value="{{ old('titre') }}" required>
                                @error('titre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description_courte" class="form-label">Description courte</label>
                                <textarea name="description_courte" id="description_courte" class="form-control @error('description_courte') is-invalid @enderror" rows="2" required>{{ old('description_courte') }}</textarea>
                                @error('description_courte')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description_complete" class="form-label">Description longue</label>
                                <textarea name="description_complete" id="description_complete" class="form-control @error('description_complete') is-invalid @enderror" rows="5" required>{{ old('description_complete') }}</textarea>
                                @error('description_complete')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="duree" class="form-label">Durée (en jours)</label>
                                    <input type="number" name="duree" id="duree" class="form-control @error('duree') is-invalid @enderror" value="{{ old('duree') }}" required>
                                    @error('duree')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="niveau" class="form-label">Niveau</label>
                                    <select name="niveau" id="niveau" class="form-control @error('niveau') is-invalid @enderror" required>
                                        <option value="">-- Sélectionner --</option>
                                        <option value="Débutant" {{ old('niveau') == 'Débutant' ? 'selected' : '' }}>Débutant</option>
                                        <option value="Intermédiaire" {{ old('niveau') == 'Intermédiaire' ? 'selected' : '' }}>Intermédiaire</option>
                                        <option value="Avancé" {{ old('niveau') == 'Avancé' ? 'selected' : '' }}>Avancé</option>
                                    </select>
                                    @error('niveau')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="mode" class="form-label">Mode</label>
                                    <select name="mode" id="mode" class="form-control @error('mode') is-invalid @enderror" required>
                                        <option value="">-- Sélectionner --</option>
                                        <option value="Présentiel" {{ old('mode') == 'Présentiel' ? 'selected' : '' }}>Présentiel</option>
                                        <option value="En ligne" {{ old('mode') == 'En ligne' ? 'selected' : '' }}>En ligne</option>
                                        <option value="Hybride" {{ old('mode') == 'Hybride' ? 'selected' : '' }}>Hybride</option>
                                    </select>
                                    @error('mode')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="prix" class="form-label">Prix (en USD)</label>
                                    <input type="number" step="0.01" name="prix" id="prix" class="form-control @error('prix') is-invalid @enderror" value="{{ old('prix') }}">
                                    @error('prix')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="statut" class="form-label">Statut</label>
                                    <select name="statut" id="statut" class="form-control @error('statut') is-invalid @enderror" required>
                                        <option value="">-- Sélectionner --</option>
                                        <option value="à venir" {{ old('statut') == 'à venir' ? 'selected' : '' }}>À venir</option>
                                        <option value="en cours" {{ old('statut') == 'en cours' ? 'selected' : '' }}>En cours</option>
                                        <option value="terminée" {{ old('statut') == 'terminée' ? 'selected' : '' }}>Terminée</option>
                                    </select>
                                    @error('statut')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="date_debut" class="form-label">Date de début</label>
                                    <input type="date" name="date_debut" id="date_debut" class="form-control @error('date_debut') is-invalid @enderror" value="{{ old('date_debut') }}">
                                    @error('date_debut')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="date_fin" class="form-label">Date de fin</label>
                                    <input type="date" name="date_fin" id="date_fin" class="form-control @error('date_fin') is-invalid @enderror" value="{{ old('date_fin') }}">
                                    @error('date_fin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Créer la formation</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
