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
                      <div class="card-title">Modifier catégorie</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.client-update', ['id'=>$clients->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      value="{{ $clients->name }}"
                                      name="name"
                                    />
                                  </div>


                                  <div class="form-group">
                                    <label for="email">email</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      value="{{ $clients->email }}"
                                      name="email"
                                    />
                                  </div>

                                  <div class="form-group">
                                    <label for="description">Description</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="description"
                                      value="{{ $clients->description }}"
                                      name="description"
                                    />
                                  </div>

                                  <div class="form-group">
                                    <label for="telephone">Téléphone</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="telephone"
                                      value="{{ $clients->telephone }}"
                                      name="telephone"
                                    />
                                  </div>


                                  <div class="form-group">
                                    <label for="address">Adresse</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="address"
                                      value="{{ $clients->address }}"
                                      name="address"
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
