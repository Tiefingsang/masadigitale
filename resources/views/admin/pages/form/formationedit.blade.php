@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Modifier la formation</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="{{ route('admin.index') }}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.formations.index') }}">Formations</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Modifier</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">

                {{-- Erreurs globales --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Formulaire de modification</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.formations.update', $formation->id) }}"
                              method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">Titre</label>
                                <input type="text"
                                       name="titre"
                                       class="form-control @error('titre') is-invalid @enderror"
                                       value="{{ old('titre', $formation->titre) }}">
                                @error('titre') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description courte</label>
                                <textarea name="description_courte"
                                          class="form-control @error('description_courte') is-invalid @enderror"
                                          rows="2">{{ old('description_courte', $formation->description_courte) }}</textarea>
                                @error('description_courte') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description complète</label>
                                <textarea name="description_complete"
                                          class="form-control @error('description_complete') is-invalid @enderror"
                                          rows="5">{{ old('description_complete', $formation->description_complete) }}</textarea>
                                @error('description_complete') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Durée (jours)</label>
                                    <input type="number"
                                           name="duree"
                                           class="form-control @error('duree') is-invalid @enderror"
                                           value="{{ old('duree', $formation->duree) }}">
                                    @error('duree') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Niveau</label>
                                    <select name="niveau"
                                            class="form-control @error('niveau') is-invalid @enderror">
                                        <option value="">-- Choisir --</option>
                                        @foreach (['Débutant','Intermédiaire','Avancé'] as $niveau)
                                            <option value="{{ $niveau }}"
                                                {{ old('niveau', $formation->niveau) === $niveau ? 'selected' : '' }}>
                                                {{ $niveau }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('niveau') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Mode</label>
                                    <select name="mode"
                                            class="form-control @error('mode') is-invalid @enderror">
                                        @foreach (['Présentiel','En ligne','Hybride'] as $mode)
                                            <option value="{{ $mode }}"
                                                {{ old('mode', $formation->mode) === $mode ? 'selected' : '' }}>
                                                {{ $mode }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('mode') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Prix</label>
                                    <input type="number"
                                           step="0.01"
                                           name="prix"
                                           class="form-control"
                                           value="{{ old('prix', $formation->prix) }}">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Statut</label>
                                    <select name="statut"
                                            class="form-control @error('statut') is-invalid @enderror">
                                        @foreach (['à venir','en cours','terminée'] as $statut)
                                            <option value="{{ $statut }}"
                                                {{ old('statut', $formation->statut) === $statut ? 'selected' : '' }}>
                                                {{ ucfirst($statut) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('statut') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    @if ($formation->image)
                                        <small class="d-block mt-1">
                                            Image actuelle :
                                            <img src="{{ asset('storage/'.$formation->image) }}" height="40">
                                        </small>
                                    @endif
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                Mettre à jour
                            </button>

                            <a href="{{ route('admin.formations.index') }}"
                               class="btn btn-secondary">
                                Annuler
                            </a>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
