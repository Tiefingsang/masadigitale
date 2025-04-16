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
                        <form action="{{ route('admin.service.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="titre">Titre</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      value="{{ old('title') }}"
                                      name="title"
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
                                    <label for="short">Short</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="short"
                                      value="{{ old('short') }}"
                                      name="short"
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
                                        <label for="prix_min">prix_min</label>
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="prix_min"
                                          value="{{ old('prix_min') }}"
                                          name="prix_min"
                                        />
                                      </div>

                                      <div class="form-group">
                                        <label for="prix_max">prix_max</label>
                                        <input
                                          type="text"
                                          class="form-control"
                                          id="prix_max"
                                          value="{{ old('prix_max') }}"
                                          name="prix_max"
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
