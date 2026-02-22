@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Éditer un Blog</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#"><i class="icon-home"></i></a>
                </li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Blogs</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Éditer</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Modifier l'article</div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="user_id" value="{{ $blog->user_id }}">

                            <div class="row">
                                <!-- Titre -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Titre</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $blog->title) }}" required>
                                        @error('title')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Slug -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug', $blog->slug) }}" required>
                                        @error('slug')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Catégorie -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_id">Catégorie</label>
                                        <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
                                            <option value="">-- Choisir une catégorie --</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ (old('category_id', $blog->category_id) == $category->id) ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Image -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Image (laisser vide si inchangé)</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                                        <small class="form-text text-muted">Formats: jpeg, png, jpg, gif (max: 5 Mo)</small>
                                        @error('image')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror

                                        @if($blog->image)
                                            <div class="mt-2">
                                                <p>Image actuelle :</p>
                                                <img src="{{ asset('storage/' . $blog->image) }}" alt="image actuelle" style="max-width:200px; border-radius:5px;">
                                            </div>
                                        @endif

                                        <div class="mt-2">
                                            <img id="preview" src="#" alt="Aperçu" style="max-width:200px; display:none; border-radius:5px;">
                                        </div>
                                    </div>
                                </div>

                                <!-- Contenu -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="editor">Contenu</label>
                                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="editor" rows="10">{{ old('content', $blog->content) }}</textarea>
                                        @error('content')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="card-action text-end">
                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                <a href="{{ route('admin.blog') }}" class="btn btn-danger">Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Script Preview Image --}}
<script>
    document.getElementById("image").addEventListener("change", function(e){
        let reader = new FileReader();
        reader.onload = function(e){
            document.getElementById("preview").style.display = "block";
            document.getElementById("preview").src = e.target.result;
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script>
// Adaptateur personnalisé pour l'upload d'images dans CKEditor
class MyUploadAdapter {
    constructor(loader) {
        this.loader = loader;
    }

    upload() {
        return this.loader.file
            .then(file => new Promise((resolve, reject) => {
                const data = new FormData();
                data.append('upload', file);
                data.append('_token', '{{ csrf_token() }}');

                fetch('{{ route("ckeditor.upload") }}', {
                    method: 'POST',
                    body: data,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Erreur réseau');
                    }
                    return response.json();
                })
                .then(result => {
                    if (result.uploaded) {
                        resolve({
                            default: result.url
                        });
                    } else {
                        reject(result.error?.message || 'Erreur lors de l\'upload');
                    }
                })
                .catch(error => {
                    reject(error.message);
                });
            }));
    }

    abort() {
        // Nécessaire pour CKEditor
    }
}

// Plugin pour CKEditor
function MyCustomUploadAdapterPlugin(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
        return new MyUploadAdapter(loader);
    };
}

// Initialisation de CKEditor
ClassicEditor
    .create(document.querySelector('#editor'), {
        extraPlugins: [MyCustomUploadAdapterPlugin],
        toolbar: {
            items: [
                'heading', '|',
                'bold', 'italic', 'underline', 'strikethrough', '|',
                'link', 'blockQuote', 'insertTable', 'mediaEmbed', '|',
                'bulletedList', 'numberedList', '|',
                'imageUpload', 'undo', 'redo', '|',
                'fontColor', 'fontBackgroundColor', 'fontSize'
            ]
        },
        image: {
            toolbar: [
                'imageStyle:inline',
                'imageStyle:block',
                'imageStyle:side',
                '|',
                'toggleImageCaption',
                'imageTextAlternative'
            ]
        }
    })
    .then(editor => {
        console.log('CKEditor initialisé avec succès');

        // Mettre à jour le textarea avant la soumission du formulaire
        const form = document.querySelector('form');
        form.addEventListener('submit', () => {
            // Le textarea a name="content", donc son contenu est automatiquement envoyé
            // Pas besoin de manipulation supplémentaire
        });
    })
    .catch(error => {
        console.error('Erreur d\'initialisation CKEditor:', error);
    });
</script>
@endsection
