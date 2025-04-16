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
                        <form action="{{ route('admin.category-update', ['id'=>$categories->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="icon">Icone</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      value="{{ $categories->icone }}"
                                      name="icone"
                                    />
                                  </div>


                                  <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="name"
                                      value="{{ $categories->name }}"
                                      name="name"
                                    />
                                  </div>


                                  <div class="form-group">
                                    <label for="description">Description</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="description"
                                      value="{{ $categories->description }}"
                                      name="description"
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
