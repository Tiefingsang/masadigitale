@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Gestion des Blogs</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#"><i class="icon-home"></i></a>
                </li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Blogs</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Ajouter</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Ajouter un article</div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.blog.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="1">

                            <div class="row">
                                <!-- Titre -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Titre</label>
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
                                    </div>
                                </div>

                                <!-- Slug -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control" name="slug" value="{{ old('slug') }}" required>
                                    </div>
                                </div>

                                <!-- Catégorie -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_id">Catégorie</label>
                                        <select name="category_id" class="form-control" required>
                                            <option value="">-- Choisir une catégorie --</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Image -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                                        <small class="form-text text-muted">Formats acceptés: jpeg, png, jpg, gif (max: 2 Mo)</small>
                                        <div class="mt-2">
                                            <img id="preview" src="#" alt="Aperçu" style="max-width: 200px; display: none; border-radius: 5px;">
                                        </div>
                                    </div>
                                </div>

                                <!-- Contenu -->
                                {{-- <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="content">Contenu</label>
                                        <textarea class="form-control" name="content" id="content" rows="5" required>{{ old('content') }}</textarea>
                                    </div>
                                </div> --}}
                                <!-- Contenu -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="content">Contenu</label>
                                        <textarea class="form-control" name="content" id="editor" rows="10" required>{{ old('content') }}</textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="card-action text-end">
                                {{-- <button class="btn btn-success">Ajouter</button> --}}
                                <button type="submit" class="btn btn-success">Ajouter</button>

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

                fetch("{{ route('ckeditor.upload') }}", {
                    method: 'POST',
                    body: data
                })
                .then(response => response.json())
                .then(result => {
                    if (result.url) {
                        resolve({
                            default: result.url
                        });
                    } else {
                        reject(result.error?.message ?? 'Erreur upload');
                    }
                })
                .catch(error => {
                    reject('Erreur serveur: ' + error);
                });
            }));
    }

    abort() {
        // Optionnel
    }
}

function MyCustomUploadAdapterPlugin(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
        return new MyUploadAdapter(loader);
    };
}

ClassicEditor
    .create(document.querySelector('#editor'), {
        extraPlugins: [ MyCustomUploadAdapterPlugin ],
        toolbar: [
            'heading', '|',
            'bold', 'italic', 'underline', 'strikethrough', '|',
            'link', 'blockQuote', 'insertTable', 'mediaEmbed', '|',
            'bulletedList', 'numberedList', '|',
            'imageUpload', 'undo', 'redo', '|',
            'fontColor', 'fontBackgroundColor', 'fontSize'
        ]
    })
    .then(editor => {
        console.log('Editor prêt', editor);

        const form = document.querySelector('form');

        // ✅ Mettre à jour le textarea avant submit
        form.addEventListener('submit', () => {
            editor.updateSourceElement();
        });

        // ✅ Optionnel : capturer la touche Entrée (submit direct)
        form.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' && (e.ctrlKey || e.metaKey)) {
                editor.updateSourceElement();
                form.submit();
            }
        });
    })
    .catch(error => {
        console.error(error);
    });



</script>


@endsection
