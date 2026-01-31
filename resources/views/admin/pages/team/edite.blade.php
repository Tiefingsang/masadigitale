@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Modifier un membre</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Base</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="{{ route('admin.team.index') }}">Équipe</a></li>
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
                        <form action="{{ route('admin.team.update', $team) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <!-- Informations de base -->
                                <div class="col-md-6 mb-3">
                                    <label for="name">Nom complet *</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name', $team->name) }}" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="position">Poste *</label>
                                    <input type="text" name="position" class="form-control" value="{{ old('position', $team->position) }}" required>
                                    @error('position')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="department">Département</label>
                                    <input type="text" name="department" class="form-control" value="{{ old('department', $team->department) }}">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="category">Catégorie</label>
                                    <select name="category" class="form-control">
                                        <option value="">Sélectionner une catégorie</option>
                                        <option value="direction" {{ (old('category', $team->category) == 'direction') ? 'selected' : '' }}>Direction</option>
                                        <option value="technique" {{ (old('category', $team->category) == 'technique') ? 'selected' : '' }}>Technique</option>
                                        <option value="commercial" {{ (old('category', $team->category) == 'commercial') ? 'selected' : '' }}>Commercial</option>
                                        <option value="marketing" {{ (old('category', $team->category) == 'marketing') ? 'selected' : '' }}>Marketing</option>
                                        <option value="support" {{ (old('category', $team->category) == 'support') ? 'selected' : '' }}>Support</option>
                                    </select>
                                </div>

                                <!-- Contact -->
                                <div class="col-md-6 mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email', $team->email) }}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="phone">Téléphone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone', $team->phone) }}">
                                </div>

                                <!-- Biographie -->
                                <div class="col-md-12 mb-3">
                                    <label for="bio">Biographie</label>
                                    <textarea name="bio" rows="4" class="form-control">{{ old('bio', $team->bio) }}</textarea>
                                </div>

                                <!-- Photo -->
                                <div class="col-md-6 mb-3">
                                    <div class="d-flex align-items-center mb-2">
                                        <label for="image" class="mb-0">Nouvelle photo (facultatif)</label>
                                        @if($team->image)
                                            <div class="form-check ml-3">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="delete_image" value="1">
                                                    <span class="form-check-sign">Supprimer la photo actuelle</span>
                                                </label>
                                            </div>
                                        @endif
                                    </div>
                                    <input type="file" name="image" id="image" class="form-control" accept="image/*" onchange="previewImage(event)">
                                    <small class="text-muted">Formats acceptés: JPG, PNG, GIF, WebP. Max: 2MB</small>
                                    @error('image')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Photo actuelle / Aperçu</label><br>
                                    @if($team->image)
                                        <img id="preview" src="{{ asset('storage/' . $team->image) }}"
                                             alt="Photo actuelle"
                                             style="width: 150px; height: 150px; object-fit: cover; border: 1px solid #ccc; padding: 5px; border-radius: 8px;">
                                    @else
                                        <div id="preview-default" style="width: 150px; height: 150px; background-color: #f0f0f0; border: 1px solid #ccc; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                                            <i class="fa fa-user" style="font-size: 48px; color: #999;"></i>
                                        </div>
                                        <img id="preview" src="#" alt="Prévisualisation" style="width: 150px; height: 150px; object-fit: cover; display: none; border: 1px solid #ccc; padding: 5px; border-radius: 8px;">
                                    @endif
                                </div>

                                <!-- Liens sociaux -->
                                <div class="col-md-12 mb-4">
                                    <h5>Réseaux sociaux</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="linkedin">LinkedIn</label>
                                            <input type="url" name="linkedin" class="form-control"
                                                   value="{{ old('linkedin', $team->social_links['linkedin'] ?? '') }}"
                                                   placeholder="https://linkedin.com/in/...">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="twitter">Twitter/X</label>
                                            <input type="url" name="twitter" class="form-control"
                                                   value="{{ old('twitter', $team->social_links['twitter'] ?? '') }}"
                                                   placeholder="https://twitter.com/...">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="github">GitHub</label>
                                            <input type="url" name="github" class="form-control"
                                                   value="{{ old('github', $team->social_links['github'] ?? '') }}"
                                                   placeholder="https://github.com/...">
                                        </div>
                                    </div>
                                </div>

                                <!-- Options -->
                                <div class="col-md-6 mb-3">
                                    <label for="order">Ordre d'affichage</label>
                                    <input type="number" name="order" class="form-control" value="{{ old('order', $team->order) }}" min="0" max="100">
                                    <small class="text-muted">Plus le nombre est bas, plus le membre apparaît en premier</small>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-check mt-4">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="is_active" value="1" {{ $team->is_active ? 'checked' : '' }}>
                                            <span class="form-check-sign">Membre actif</span>
                                        </label>
                                        <small class="text-muted d-block">Décocher pour masquer temporairement</small>
                                    </div>
                                </div>
                            </div>

                            <div class="card-action text-end">
                                <a href="{{ route('admin.team.index') }}" class="btn btn-secondary mr-2">Annuler</a>
                                <button type="submit" class="btn btn-success">Mettre à jour</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function previewImage(event) {
    const input = event.target;
    const preview = document.getElementById('preview');
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

// Si l'utilisateur coche "Supprimer la photo", cacher la prévisualisation
document.addEventListener('DOMContentLoaded', function() {
    const deleteCheckbox = document.querySelector('input[name="delete_image"]');
    const preview = document.getElementById('preview');
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
</script>
@endsection
