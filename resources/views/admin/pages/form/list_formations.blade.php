@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Liste des formations</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="{{ route('admin.index') }}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Formations</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Formations enregistrées</h4>
                        <a href="{{ route('admin.formations.create') }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> Ajouter une formation
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Niveau</th>
                                        <th>Mode</th>
                                        <th>Durée</th>
                                        <th>Prix</th>
                                        <th>Statut</th>
                                        <th>Date début</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($formations as $formation)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $formation->titre }}</td>
                                            <td>{{ $formation->niveau }}</td>
                                            <td>{{ $formation->mode }}</td>
                                            <td>{{ $formation->duree }} jours</td>
                                            <td>
                                                {{ $formation->prix ? number_format($formation->prix, 2) . ' $' : 'Gratuit' }}
                                            </td>
                                            <td>
                                                <span class="badge 
                                                    @if($formation->statut === 'à venir') badge-info
                                                    @elseif($formation->statut === 'en cours') badge-warning
                                                    @else badge-success
                                                    @endif">
                                                    {{ ucfirst($formation->statut) }}
                                                </span>
                                            </td>
                                            <td>
                                                {{ $formation->date_debut ? \Carbon\Carbon::parse($formation->date_debut)->format('d/m/Y') : '-' }}
                                            </td>
                                            <td class="d-flex gap-1">
                                                <a href="{{ route('admin.formations.edit', $formation->id) }}"
                                                   class="btn btn-sm btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>

                                                <form action="{{ route('admin.formations.destroy', $formation->id) }}"
                                                      method="POST"
                                                      onsubmit="return confirm('Voulez-vous vraiment supprimer cette formation ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center">
                                                Aucune formation enregistrée.
                                            </td>
                                        </tr>
                                    @endforelse
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
