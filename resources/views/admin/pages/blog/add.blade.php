@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Avatars</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Base</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Avatars</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="card-title">Ajouter de gallery</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.blog.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 col-lg-4">
                                <input type="hidden" name="category_id" value="1">
                                <input type="hidden" name="user_id" value="1" >
                                <div class="form-group">
                                    <label for="name">Titre</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      value="{{ old('title') }}"
                                      name="title"
                                    />
                                  </div>
                                  <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      value="{{ old('title') }}"
                                      name="slug"
                                    />
                                  </div>

                                  <div class="form-group">
                                    <label for="content">Contenu</label>
                                    <textarea class="form-control" name="content" id="content"></textarea>
                                    
                                  </div>

                                  

                                  




                                  




                                  <div class="form-group">
                                    <label for="image">Image</label>
                                    <input
                                      type="file"
                                      class="form-control"
                                      id="image"
                                      value="{{ old('image') }}"
                                      name="image"
                                    />
                                  </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success">Ajouter</button>
                            </div>

                        </form>

                    </div>

                    </div>
            </div>
        </div>
    </div>
  </div>
@endsection
