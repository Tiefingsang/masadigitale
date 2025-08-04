@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Services</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home"><a href="#"><i class="icon-home"></i></a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Base</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Services</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <a href="{{ route('admin.service') }}" class="btn btn-primary btn-round ms-auto">
                                <i class="fa fa-plus"></i> Ajouter un service
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="add-row" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Titre</th>
                                        <th>Description</th>
                                        <th>Short</th>
                                        <th>Prix min</th>
                                        <th>Prix max</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('storage/' . $service->image) }}"
                                                 alt="{{ $service->title }}"
                                                 style="width: 80px; height: 80px; object-fit: cover; border-radius: 6px;">
                                        </td>
                                        <td>{{ $service->title }}</td>
                                        <td>{{ $service->description }}</td>
                                        <td>{{ $service->short }}</td>
                                        <td>{{ $service->prix_min ?? '-' }}</td>
                                        <td>{{ $service->prix_max ?? '-' }}</td>
                                        <td>
                                            <div class="form-button-action d-flex">
                                                <a href="{{ route('admin.service-edit', ['id' => $service->id]) }}"
                                                   class="btn btn-link btn-primary btn-sm"
                                                   title="Modifier">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{ route('admin.service-delete', ['id' => $service->id]) }}"
                                                      method="post" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-link btn-danger btn-sm" title="Supprimer">
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
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
