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
                      <div class="card-title">Ajouter une catégorie</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.partner.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      value="{{ old('name') }}"
                                      name="name"
                                    />
                                  </div>





                                  <div class="form-group">
                                    <label for="description">Description</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="description"
                                      value="{{ old('description') }}"
                                      name="description"
                                    />
                                  </div>

                                  <div class="form-group">
                                    <label for="site_web">site web</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="site_web"
                                      value="{{ old('site_web') }}"
                                      name="site_web"
                                    />
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
                            <div class="card-action">
                                <button class="btn btn-success">Créer</button>
                            </div>

                        </form>

                    </div>

                    </div>
            </div>
        </div>
    </div>
  </div>
@endsection
