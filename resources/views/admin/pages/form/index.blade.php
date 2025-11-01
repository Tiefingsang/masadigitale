@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Liste des inscriptions</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Formations</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Inscriptions</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Personnes inscrites</h4>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom & Prénom</th>
                                        <th>Quartier</th>
                                        <th>Téléphone</th>
                                        <th>Ordinateur</th>
                                        <th>Niveau d’étude</th>
                                        <th>Métier</th>
                                        <th>Date d’inscription</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscriptions as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nom }}</td>
                                            <td>{{ $item->quartier }}</td>
                                            <td>{{ $item->telephone }}</td>
                                            <td>{{ $item->ordinateur }}</td>
                                            <td>{{ $item->niveau_etude }}</td>
                                            <td>{{ $item->metier }}</td>
                                            <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
                                            <td>
                                                <form action="{{ route('admin.inscriptions.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cette inscription ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
