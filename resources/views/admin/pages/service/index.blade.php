@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Ajouter un service</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Base</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Services</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Formulaire de création de service</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="title">Titre</label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="short">Résumé</label>
                                    <input type="text" name="short" class="form-control" value="{{ old('short') }}" required>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" rows="4" class="form-control">{{ old('description') }}</textarea>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="image">Image du service</label>
                                    <input type="file" name="image" id="image" class="form-control" accept="image/*" onchange="previewImage(event)" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label>Aperçu de l’image</label><br>
                                    <img id="preview" src="#" alt="Prévisualisation" style="max-width: 100%; height: auto; display: none; border: 1px solid #ccc; padding: 5px; border-radius: 8px;">
                                </div>
                            </div>

                            <div class="card-action text-end">
                                <button type="submit" class="btn btn-success">Ajouter</button>
                            </div>
                        </form>
                    </div> <!-- card-body -->
                </div> <!-- card -->
            </div>
        </div>
    </div>
</div>

{{-- JavaScript pour l'aperçu d'image --}}
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
