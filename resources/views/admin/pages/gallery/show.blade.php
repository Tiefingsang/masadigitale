@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Galerie</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Galerie</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Liste</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Liste des images de la galerie</h4>
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.add.gallery') }}">
                            <i class="fa fa-plus"></i> Ajouter une image
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gallery as $item)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" style="width: 100px; height: auto;">
                                            </td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($item->description, 60) }}</td>
                                            <td>
                                                <div class="form-button-action d-flex">
                                                    <a class="btn btn-sm btn-primary me-2"
                                                    href="{{ route('admin.gallery-edit', ['id' => $item->id]) }}"
                                                    title="Modifier">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <form action="{{ route('admin.gallery-delete', ['id' => $item->id]) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" title="Supprimer">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
