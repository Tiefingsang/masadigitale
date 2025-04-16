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
                        <form action="{{ route('admin.register.store') }}" method="post">
                            @csrf
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                  <label for="name">Votre nom</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="name"
                                    placeholder="Entrer votre nom"
                                    name="name"
                                  />
                                    @error('name')
                                    <small id="emailHelp2" class="text-danger"
                                    >
                                        {{ $message }}
                                    </small>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="email2"> Email</label>
                                    <input
                                      type="email"
                                      class="form-control"
                                      id="email2"
                                      placeholder="Entrer votre email"
                                      name="email"
                                    />
                                    @error('email')
                                    <small id="emailHelp2" class="text-danger"
                                    >
                                        {{ $message }}
                                    </small>
                                    @enderror
                                  </div>
                                <div class="form-group">
                                  <label for="password">Mot de passe</label>
                                  <input
                                    type="password"
                                    class="form-control"
                                    id="password"
                                    placeholder="Mot de passe"
                                    name="password"
                                  />
                                  @error('password')
                                    <small id="emailHelp2" class="text-danger"
                                    >
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success">Créer le compte</button>

                              </div>

                        </form>



                    </div>

                    </div>
            </div>
        </div>
    </div>
  </div>
@endsection
