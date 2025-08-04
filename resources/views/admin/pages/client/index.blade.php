@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Ajouter un Client</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#"><i class="icon-home"></i></a>
                </li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Clients</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Ajouter</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Nouveau Client</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.client.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- Nom -->
                                <div class="form-group col-md-6">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>

                                <!-- Email -->
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>

                                <!-- Téléphone -->
                                <div class="form-group col-md-6">
                                    <label for="telephone">Téléphone</label>
                                    <input type="text" class="form-control" name="telephone" value="{{ old('telephone') }}">
                                </div>

                                <!-- Adresse -->
                                <div class="form-group col-md-6">
                                    <label for="address">Adresse</label>
                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                                </div>

                                <!-- Description -->
                                <div class="form-group col-md-12">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                                </div>

                                <!-- Image -->
                                <div class="form-group col-md-12">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control-file" name="image">
                                </div>
                            </div>

                            <div class="card-action mt-4">
                                <button type="submit" class="btn btn-success">Créer le client</button>
                                <a href="{{ route('admin.client.list') }}" class="btn btn-secondary">Annuler</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
