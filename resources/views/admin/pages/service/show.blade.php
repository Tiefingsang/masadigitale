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

                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="card">
                              <div class="card-header">
                                <div class="d-flex align-items-center">
                                  
                                  
                                  <a href="{{ route('admin.service') }}"
                                    class="btn btn-primary btn-round ms-auto"
                                    
                                    
                                  >
                                    <i class="fa fa-plus"></i>
                                    Add Row
                                </a>
                                </div>
                              </div>
                              <div class="card-body">


                                <div class="table-responsive">
                                  <table
                                    id="add-row"
                                    class="display table table-striped table-hover"
                                  >
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
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                        @foreach ($services as $service)
                                        <tr>
                                            <td><img src="" alt=""></td>
                                            <td>{{ $service->title }}</td>
                                            <td>{{ $service->description }}</td>
                                            <td>{{ $service->short }}</td>
                                            <td>{{ $service->prix_min }}</td>
                                            <td>{{ $service->prix_max }}</td>
                                            <td>
                                              <div class="form-button-action">
                                                <a type="button"
                                                data-bs-toggle="tooltip"
                                                title=""
                                                class="btn btn-link btn-primary btn-lg"
                                                data-original-title="Edit Task"
                                                href="{{ route('admin.service-edit', ['id'=>$service->id]) }}">
                                                <i class="fa fa-edit"></i>

                                                </a>
                                                <form action="{{ route('admin.service-delete',['id'=>$service->id]) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                  type="submit"
                                                  data-bs-toggle="tooltip"
                                                  title=""
                                                  class="btn btn-link btn-danger"
                                                  data-original-title="Remove"
                                                >
                                                  <i class="fa fa-times"></i>
                                                </button>

                                                </form>

                                              </div>
                                            </td>



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
    </div>
  </div>
@endsection
