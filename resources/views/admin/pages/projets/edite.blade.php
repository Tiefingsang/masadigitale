@extends('admin.layouts.master')

@section('title', 'Modifier le Projet: ' . $projet->titre)

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Modifier un projet</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Base</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="{{ route('admin.projets.index') }}">Projets</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Modifier</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Formulaire de modification</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.projets.update', $projet) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <!-- Informations de base -->
                                <div class="col-md-8 mb-3">
                                    <label for="titre">Titre *</label>
                                    <input type="text" name="titre" id="titre" class="form-control"
                                           value="{{ old('titre', $projet->titre) }}" required>
                                    @error('titre')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="slug">Slug *</label>
                                    <input type="text" name="slug" id="slug" class="form-control"
                                           value="{{ old('slug', $projet->slug) }}" required>
                                    <small class="text-muted">URL unique du projet</small>
                                    @error('slug')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Descriptions -->
                                <div class="col-md-12 mb-3">
                                    <label for="description_courte">Description courte *</label>
                                    <textarea name="description_courte" id="description_courte"
                                              class="form-control" rows="2" required>{{ old('description_courte', $projet->description_courte) }}</textarea>
                                    <small class="text-muted">Maximum 255 caractères</small>
                                    @error('description_courte')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="description_complete">Description complète *</label>
                                    <textarea name="description_complete" id="description_complete"
                                              class="form-control" rows="5" required>{{ old('description_complete', $projet->description_complete) }}</textarea>
                                    @error('description_complete')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Client et dates -->
                                <div class="col-md-6 mb-3">
                                    <label for="client">Client</label>
                                    <input type="text" name="client" id="client" class="form-control"
                                           value="{{ old('client', $projet->client) }}">
                                    @error('client')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="date_debut">Date de début</label>
                                    <input type="date" name="date_debut" id="date_debut" class="form-control"
                                           value="{{ old('date_debut', $projet->date_debut ? $projet->date_debut->format('Y-m-d') : '') }}">
                                    @error('date_debut')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="date_fin">Date de fin</label>
                                    <input type="date" name="date_fin" id="date_fin" class="form-control"
                                           value="{{ old('date_fin', $projet->date_fin ? $projet->date_fin->format('Y-m-d') : '') }}">
                                    @error('date_fin')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Catégorie et Statut -->
                                <div class="col-md-4 mb-3">
                                    <label for="categorie">Catégorie</label>
                                    <select name="categorie" id="categorie" class="form-control">
                                        <option value="">Sélectionner une catégorie</option>
                                        @foreach($categories as $key => $label)
                                            <option value="{{ $key }}" {{ old('categorie', $projet->categorie) == $key ? 'selected' : '' }}>
                                                {{ $label }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('categorie')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="statut">Statut *</label>
                                    <select name="statut" id="statut" class="form-control" required>
                                        @foreach($statuts as $key => $label)
                                            <option value="{{ $key }}" {{ old('statut', $projet->statut) == $key ? 'selected' : '' }}>
                                                {{ $label }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('statut')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="budget">Budget (FCFA)</label>
                                    <input type="number" name="budget" id="budget" class="form-control"
                                           value="{{ old('budget', $projet->budget) }}" min="0" step="1000">
                                    @error('budget')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Technologies -->
                                <div class="col-md-12 mb-3">
                                    <label>Technologies utilisées</label>
                                    <div class="row">
                                        @foreach($technologies as $tech)
                                        <div class="col-md-3 col-sm-4 col-6 mb-2">
                                            <div class="form-check">
                                                <input type="checkbox" name="technologies[]"
                                                       value="{{ $tech }}"
                                                       id="tech_{{ $loop->index }}"
                                                       class="form-check-input"
                                                       {{ in_array($tech, old('technologies', $projet->technologies ?? [])) ? 'checked' : '' }}>
                                                <label for="tech_{{ $loop->index }}" class="form-check-label">
                                                    {{ $tech }}
                                                </label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @error('technologies')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Image principale -->
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <label for="image_principale" class="mb-0">Nouvelle image principale (facultatif)</label>
                                        @if($projet->image_principale)
                                            <div class="form-check ml-3">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="delete_image_principale" value="1">
                                                    <span class="form-check-sign">Supprimer l'image actuelle</span>
                                                </label>
                                            </div>
                                        @endif
                                    </div>
                                    <input type="file" name="image_principale" id="image_principale"
                                           class="form-control" accept="image/*"
                                           onchange="previewImage(event, 'previewPrincipale')">
                                    <small class="text-muted">Format: JPEG, PNG, Max: 2MB</small>
                                    @error('image_principale')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Image actuelle / Aperçu</label><br>
                                    @if($projet->image_principale)
                                        <img id="previewPrincipale" src="{{ $projet->image_principale_url }}"
                                             alt="Image actuelle"
                                             style="width: 150px; height: 150px; object-fit: cover; border: 1px solid #ccc; padding: 5px; border-radius: 8px;">
                                    @else
                                        <div id="preview-default" style="width: 150px; height: 150px; background-color: #f0f0f0; border: 1px solid #ccc; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                                            <i class="fa fa-image" style="font-size: 48px; color: #999;"></i>
                                        </div>
                                        <img id="previewPrincipale" src="#" alt="Prévisualisation" style="width: 150px; height: 150px; object-fit: cover; display: none; border: 1px solid #ccc; padding: 5px; border-radius: 8px;">
                                    @endif
                                </div>

                                <!-- Images supplémentaires -->
                                <div class="col-md-12 mb-3">
                                    <label for="images">Nouvelles images supplémentaires (facultatif)</label>
                                    <input type="file" name="images[]" id="images"
                                           class="form-control" multiple accept="image/*">
                                    <small class="text-muted">Vous pouvez sélectionner plusieurs images</small>
                                    @error('images.*')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror

                                    <!-- Affichage des images actuelles -->
                                    @if($projet->images && count($projet->images) > 0)
                                    <div class="mt-3">
                                        <label class="mb-2">Images actuelles :</label>
                                        <div class="row">
                                            @foreach($projet->images as $index => $image)
                                            <div class="col-md-3 mb-2">
                                                <div class="card">
                                                    <img src="{{ asset('storage/' . $image) }}"
                                                         alt="Image {{ $index + 1 }}"
                                                         class="card-img-top" style="height: 100px; object-fit: cover;">
                                                    <div class="card-body p-2 text-center">
                                                        <div class="form-check">
                                                            <input type="checkbox" name="delete_images[]"
                                                                   value="{{ $image }}"
                                                                   id="delete_image_{{ $index }}"
                                                                   class="form-check-input">
                                                            <label for="delete_image_{{ $index }}" class="form-check-label small">
                                                                Supprimer
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif
                                </div>

                                <!-- Liens -->
                                <div class="col-md-6 mb-3">
                                    <label for="lien_demo">Lien de démo</label>
                                    <input type="url" name="lien_demo" id="lien_demo" class="form-control"
                                           value="{{ old('lien_demo', $projet->lien_demo) }}" placeholder="https://">
                                    @error('lien_demo')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="lien_github">Lien GitHub</label>
                                    <input type="url" name="lien_github" id="lien_github" class="form-control"
                                           value="{{ old('lien_github', $projet->lien_github) }}" placeholder="https://">
                                    @error('lien_github')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- SEO -->
                                <div class="col-md-6 mb-3">
                                    <label for="meta_titre">Meta Titre (SEO)</label>
                                    <input type="text" name="meta_titre" id="meta_titre" class="form-control"
                                           value="{{ old('meta_titre', $projet->meta_titre) }}">
                                    @error('meta_titre')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="meta_description">Meta Description (SEO)</label>
                                    <textarea name="meta_description" id="meta_description"
                                              class="form-control" rows="2">{{ old('meta_description', $projet->meta_description) }}</textarea>
                                    @error('meta_description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Options -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured"
                                                   value="1" {{ old('is_featured', $projet->is_featured) ? 'checked' : '' }}>
                                            <span class="form-check-sign">Mettre en avant</span>
                                        </label>
                                        <small class="text-muted d-block">Ce projet apparaîtra en tête de liste</small>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="ordre_affichage">Ordre d'affichage</label>
                                    <input type="number" name="ordre_affichage" id="ordre_affichage"
                                           class="form-control" value="{{ old('ordre_affichage', $projet->ordre_affichage) }}" min="0">
                                    <small class="text-muted">Plus le nombre est bas, plus le projet apparaît en premier</small>
                                    @error('ordre_affichage')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="card-action text-end mt-4">
                                <a href="{{ route('admin.projets.index') }}" class="btn btn-secondary mr-2">Annuler</a>
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-save"></i> Mettre à jour
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function previewImage(event, previewId) {
    const input = event.target;
    const preview = document.getElementById(previewId);
    const previewDefault = document.getElementById('preview-default');

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            if (previewDefault) previewDefault.style.display = 'none';
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}

// Gestion de la suppression de l'image principale
document.addEventListener('DOMContentLoaded', function() {
    const deleteCheckbox = document.querySelector('input[name="delete_image_principale"]');
    const preview = document.getElementById('previewPrincipale');
    const previewDefault = document.getElementById('preview-default');

    if (deleteCheckbox && preview) {
        deleteCheckbox.addEventListener('change', function() {
            if (this.checked) {
                preview.style.display = 'none';
                if (previewDefault) previewDefault.style.display = 'flex';
            } else {
                preview.style.display = 'block';
                if (previewDefault) previewDefault.style.display = 'none';
            }
        });
    }
});

// Génération automatique du slug
document.getElementById('titre').addEventListener('keyup', function() {
    const titre = this.value;
    if (titre) {
        document.getElementById('slug').value = titre
            .toLowerCase()
            .normalize("NFD").replace(/[\u0300-\u036f]/g, "")
            .replace(/[^\w\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/--+/g, '-')
            .trim();
    }
});
</script>
@endsection
