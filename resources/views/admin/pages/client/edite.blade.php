@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Modifier un Client</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Clients</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Modifier</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">

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
                        <h4 class="card-title">Informations du client</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.client-update', ['id' => $clients->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $clients->id }}">

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" name="name" value="{{ $clients->name }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $clients->email }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="telephone">Téléphone</label>
                                    <input type="text" class="form-control" name="telephone" value="{{ $clients->telephone }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="address">Adresse</label>
                                    <input type="text" class="form-control" name="address" value="{{ $clients->address }}">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" rows="3">{{ $clients->description }}</textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control-file" name="image">

                                    @if ($clients->image)
                                        <div class="mt-2">
                                            <p>Image actuelle :</p>
                                            <img src="{{ asset('storage/' . $clients->image) }}" alt="Client image" style="max-width: 200px; border-radius: 8px;">
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="card-action mt-4">
                                <button type="submit" class="btn btn-success">Modifier le client</button>
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
