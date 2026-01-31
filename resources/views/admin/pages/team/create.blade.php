@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Ajouter un membre</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Base</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="{{ route('admin.team.index') }}">Équipe</a></li>
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
                        <form action="{{ route('admin.team.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <!-- Informations de base -->
                                <div class="col-md-6 mb-3">
                                    <label for="name">Nom complet *</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="position">Poste *</label>
                                    <input type="text" name="position" class="form-control" value="{{ old('position') }}" required>
                                    @error('position')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="department">Département</label>
                                    <input type="text" name="department" class="form-control" value="{{ old('department') }}">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="category">Catégorie</label>
                                    <select name="category" class="form-control">
                                        <option value="">Sélectionner une catégorie</option>
                                        <option value="direction" {{ old('category') == 'direction' ? 'selected' : '' }}>Direction</option>
                                        <option value="technique" {{ old('category') == 'technique' ? 'selected' : '' }}>Technique</option>
                                        <option value="commercial" {{ old('category') == 'commercial' ? 'selected' : '' }}>Commercial</option>
                                        <option value="marketing" {{ old('category') == 'marketing' ? 'selected' : '' }}>Marketing</option>
                                        <option value="support" {{ old('category') == 'support' ? 'selected' : '' }}>Support</option>
                                    </select>
                                </div>

                                <!-- Contact -->
                                <div class="col-md-6 mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="phone">Téléphone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                </div>

                                <!-- Biographie -->
                                <div class="col-md-12 mb-3">
                                    <label for="bio">Biographie</label>
                                    <textarea name="bio" rows="4" class="form-control">{{ old('bio') }}</textarea>
                                </div>

                                <!-- Photo -->
                                <div class="col-md-6 mb-3">
                                    <label for="image">Photo de profil</label>
                                    <input type="file" name="image" id="image" class="form-control" accept="image/*" onchange="previewImage(event)">
                                    <small class="text-muted">Formats acceptés: JPG, PNG, GIF, WebP. Max: 2MB</small>
                                    @error('image')
                                        <small class="text-danger d-block">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Aperçu de la photo</label><br>
                                    <img id="preview" src="#" alt="Prévisualisation" style="width: 150px; height: 150px; object-fit: cover; display: none; border: 1px solid #ccc; padding: 5px; border-radius: 8px;">
                                </div>

                                <!-- Liens sociaux -->
                                <div class="col-md-12 mb-4">
                                    <h5>Réseaux sociaux</h5>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="linkedin">LinkedIn</label>
                                            <input type="url" name="linkedin" class="form-control" value="{{ old('linkedin') }}" placeholder="https://linkedin.com/in/...">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="twitter">Twitter/X</label>
                                            <input type="url" name="twitter" class="form-control" value="{{ old('twitter') }}" placeholder="https://twitter.com/...">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="github">GitHub</label>
                                            <input type="url" name="github" class="form-control" value="{{ old('github') }}" placeholder="https://github.com/...">
                                        </div>
                                    </div>
                                </div>

                                <!-- Options -->
                                <div class="col-md-6 mb-3">
                                    <label for="order">Ordre d'affichage</label>
                                    <input type="number" name="order" class="form-control" value="{{ old('order', 0) }}" min="0" max="100">
                                    <small class="text-muted">Plus le nombre est bas, plus le membre apparaît en premier</small>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="form-check mt-4">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="is_active" value="1" checked>
                                            <span class="form-check-sign">Membre actif</span>
                                        </label>
                                        <small class="text-muted d-block">Décocher pour masquer temporairement</small>
                                    </div>
                                </div>
                            </div>

                            <div class="card-action text-end">
                                <a href="{{ route('admin.team.index') }}" class="btn btn-secondary mr-2">Annuler</a>
                                <button type="submit" class="btn btn-success">Ajouter le membre</button>
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

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection
