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
                        <div class="card-title">Modifier l’article</div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.blog.update', $blog->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <input type="hidden" name="user_id" value="{{ $blog->user_id }}">

                            <div class="row">
                                <!-- Titre -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Titre</label>
                                        <input type="text" class="form-control" name="title" 
                                            value="{{ old('title', $blog->title) }}" required>
                                    </div>
                                </div>

                                <!-- Slug -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control" name="slug" 
                                            value="{{ old('slug', $blog->slug) }}" required>
                                    </div>
                                </div>

                                <!-- Catégorie -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_id">Catégorie</label>
                                        <select name="category_id" class="form-control" required>
                                            <option value="">-- Choisir une catégorie --</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" 
                                                    {{ (old('category_id', $blog->category_id) == $category->id) ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Image -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Image (laisser vide si inchangé)</label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                        <small class="form-text text-muted">Formats: jpeg, png, jpg, gif (max: 2 Mo)</small>
                                        
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
                                        <textarea class="form-control" id="editor" rows="10">{{ old('content', $blog->content) }}</textarea>
                                        <input type="hidden" name="content" id="content_hidden" value="{{ old('content', $blog->content) }}" required>
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

{{-- Scripts identiques (preview + CKEditor) --}}
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
    ClassicEditor.create(document.querySelector('#editor'))
    .then(editor => {
        const hiddenInput = document.querySelector('#content_hidden');
        editor.model.document.on('change:data', () => {
            hiddenInput.value = editor.getData();
        });
    });
</script>
@endsection
