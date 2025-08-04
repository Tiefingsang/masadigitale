@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Galerie</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Base</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Ajouter à la galerie</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><div class="card-title">Ajouter une image à la galerie</div></div>

                    <div class="card-body">
                        <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group mb-3">
                                        <label for="title">Titre</label>
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Titre de l'image">
                                        @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="description">Description</label>
                                        <input type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="Description de l'image">
                                        @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="image">Image <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" name="image" id="image" required accept="image/*" onchange="previewImage(event)">
                                        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    <!-- Preview -->
                                    <div class="form-group mb-3">
                                        <label>Aperçu :</label><br>
                                        <img id="imagePreview" src="#" alt="Aperçu de l'image" style="max-width: 100%; height: auto; display: none; border-radius: 8px; box-shadow: 0 0 5px rgba(0,0,0,0.1);">
                                    </div>

                                    <div class="card-action">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-upload me-1"></i>Créer une galerie
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function previewImage(event) {
        const reader = new FileReader();
        const imagePreview = document.getElementById('imagePreview');
        
        reader.onload = function(){
            imagePreview.src = reader.result;
            imagePreview.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
