@extends('admin.layouts.master')

@section('title', 'Ajouter un Projet')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Ajouter un projet</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Base</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="{{ route('admin.projets.index') }}">Projets</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Ajouter</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Formulaire d'ajout</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.projets.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <!-- Informations de base -->
                                <div class="col-md-8 mb-3">
                                    <label for="titre">Titre *</label>
                                    <input type="text" name="titre" id="titre" class="form-control"
                                           value="{{ old('titre') }}" required>
                                    @error('titre')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="slug">Slug *</label>
                                    <input type="text" name="slug" id="slug" class="form-control"
                                           value="{{ old('slug') }}" required>
                                    <small class="text-muted">URL unique du projet</small>
                                    @error('slug')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Descriptions -->
                                <div class="col-md-12 mb-3">
                                    <label for="description_courte">Description courte *</label>
                                    <textarea name="description_courte" id="description_courte"
                                              class="form-control" rows="2" required>{{ old('description_courte') }}</textarea>
                                    <small class="text-muted">Maximum 255 caractères</small>
                                    @error('description_courte')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="description_complete">Description complète *</label>
                                    <textarea name="description_complete" id="description_complete"
                                              class="form-control" rows="5" required>{{ old('description_complete') }}</textarea>
                                    @error('description_complete')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Client et dates -->
                                <div class="col-md-6 mb-3">
                                    <label for="client">Client</label>
                                    <input type="text" name="client" id="client" class="form-control"
                                           value="{{ old('client') }}">
                                    @error('client')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="date_debut">Date de début</label>
                                    <input type="date" name="date_debut" id="date_debut" class="form-control"
                                           value="{{ old('date_debut') }}">
                                    @error('date_debut')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="date_fin">Date de fin</label>
                                    <input type="date" name="date_fin" id="date_fin" class="form-control"
                                           value="{{ old('date_fin') }}">
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
                                            <option value="{{ $key }}" {{ old('categorie') == $key ? 'selected' : '' }}>
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
                                            <option value="{{ $key }}" {{ old('statut') == $key ? 'selected' : '' }}>
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
                                           value="{{ old('budget') }}" min="0" step="1000">
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
                                                       {{ in_array($tech, old('technologies', [])) ? 'checked' : '' }}>
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

                                <!-- Images -->
                                <div class="col-md-6 mb-3">
                                    <label for="image_principale">Image principale *</label>
                                    <input type="file" name="image_principale" id="image_principale"
                                           class="form-control" accept="image/*" required
                                           onchange="previewImage(event, 'previewPrincipale')">
                                    <small class="text-muted">Format: JPEG, PNG, Max: 2MB</small>
                                    @error('image_principale')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Aperçu de l'image principale</label><br>
                                    <img id="previewPrincipale" src="#" alt="Prévisualisation"
                                         style="width: 150px; height: 150px; object-fit: cover; display: none; border: 1px solid #ccc; padding: 5px; border-radius: 8px;">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="images">Images supplémentaires</label>
                                    <input type="file" name="images[]" id="images"
                                           class="form-control" multiple accept="image/*">
                                    <small class="text-muted">Vous pouvez sélectionner plusieurs images</small>
                                    @error('images.*')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Liens -->
                                <div class="col-md-6 mb-3">
                                    <label for="lien_demo">Lien de démo</label>
                                    <input type="url" name="lien_demo" id="lien_demo" class="form-control"
                                           value="{{ old('lien_demo') }}" placeholder="https://">
                                    @error('lien_demo')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="lien_github">Lien GitHub</label>
                                    <input type="url" name="lien_github" id="lien_github" class="form-control"
                                           value="{{ old('lien_github') }}" placeholder="https://">
                                    @error('lien_github')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- SEO -->
                                <div class="col-md-6 mb-3">
                                    <label for="meta_titre">Meta Titre (SEO)</label>
                                    <input type="text" name="meta_titre" id="meta_titre" class="form-control"
                                           value="{{ old('meta_titre') }}">
                                    @error('meta_titre')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="meta_description">Meta Description (SEO)</label>
                                    <textarea name="meta_description" id="meta_description"
                                              class="form-control" rows="2">{{ old('meta_description') }}</textarea>
                                    @error('meta_description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <!-- Options -->
                                <div class="col-md-6 mb-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured"
                                                   value="1" {{ old('is_featured') ? 'checked' : '' }}>
                                            <span class="form-check-sign">Mettre en avant</span>
                                        </label>
                                        <small class="text-muted d-block">Ce projet apparaîtra en tête de liste</small>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="ordre_affichage">Ordre d'affichage</label>
                                    <input type="number" name="ordre_affichage" id="ordre_affichage"
                                           class="form-control" value="{{ old('ordre_affichage', 0) }}" min="0">
                                    <small class="text-muted">Plus le nombre est bas, plus le projet apparaît en premier</small>
                                    @error('ordre_affichage')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="card-action text-end mt-4">
                                <a href="{{ route('admin.projets.index') }}" class="btn btn-secondary mr-2">Annuler</a>
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-save"></i> Enregistrer
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

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}

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
