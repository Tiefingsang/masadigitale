@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Apropos</h3>
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
                    <a href="{{ route('admin.index') }}">Base</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Apropos</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="card-title">Apropos</div>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.about.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="titre">Titre</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      value="{{ $data->title }}"
                                      name="title"
                                    />
                                  </div>





                                  <div class="form-group">
                                    <label for="description">Description</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="description"
                                      value="{{ $data->description }}"
                                      name="description"
                                    />
                                  </div>




                                  <div class="form-group">
                                      <label for="titre">Image</label>
                                      <input
                                        type="file"
                                        class="form-control"
                                        id="image"
                                        value="{{ $data->image }}"
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
