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
                      <div class="card-title">Form Elements</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.blog.update', ['id'=>$blog->slug]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="titre">Titre</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      value="{{ $blog->title }}"
                                      name="title"
                                    />
                                  </div>





                                  <div class="form-group">
                                    <label for="description">Description</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="description"
                                      value="{{ $blog->content }}"
                                      name="content"
                                    />
                                  </div>

                                  <div class="form-group">
                                    <label for="slug">slug</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="slug"
                                      value="{{ $blog->slug }}"
                                      name="slug"
                                    />
                                  </div>




                                  <div class="form-group">
                                      <label for="image">Image</label>
                                      <input
                                        type="file"
                                        class="form-control"
                                        id="image"

                                        name="image"
                                      />
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id">category_id</label>
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="category_id"
                                          value="{{ $blog->category_id }}"
                                          name="category_id"
                                        />
                                      </div>

                                      <div class="form-group">
                                        <label for="user_id">user_id</label>
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="user_id"
                                          value="{{ $blog->user_id }}"
                                          name="user_id"
                                        />
                                      </div>

                                  </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success">Modifier</button>
                            </div>

                        </form>

                    </div>

                    </div>
            </div>
        </div>
    </div>
  </div>
@endsection
