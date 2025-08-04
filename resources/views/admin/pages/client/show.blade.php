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
                                  <h4 class="card-title">Liste des catégories</h4>

                                  <a  class="btn btn-primary btn-round ms-auto" href="{{ route('admin.add.client') }}">
                                    <i class="fa fa-plus"></i>
                                    Ajouter
                                  </a>

                                </div>
                              </div>
                              <div class="card-body">
                                <!-- Modal -->
                                <div
                                  class="modal fade"
                                  id="addRowModal"
                                  tabindex="-1"
                                  role="dialog"
                                  aria-hidden="true"
                                >
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header border-0">
                                        <h5 class="modal-title">
                                          <span class="fw-mediumbold"> New</span>
                                          <span class="fw-light"> Row </span>
                                        </h5>
                                        <button
                                          type="button"
                                          class="close"
                                          data-dismiss="modal"
                                          aria-label="Close"
                                        >
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <p class="small">
                                          Create a new row using this form, make sure you
                                          fill them all
                                        </p>
                                        <form>
                                          <div class="row">
                                            <div class="col-sm-12">
                                              <div class="form-group form-group-default">
                                                <label>Name</label>
                                                <input
                                                  id="addName"
                                                  type="text"
                                                  class="form-control"
                                                  placeholder="fill name"
                                                />
                                              </div>
                                            </div>
                                            <div class="col-md-6 pe-0">
                                              <div class="form-group form-group-default">
                                                <label>Position</label>
                                                <input
                                                  id="addPosition"
                                                  type="text"
                                                  class="form-control"
                                                  placeholder="fill position"
                                                />
                                              </div>
                                            </div>
                                            <div class="col-md-6">
                                              <div class="form-group form-group-default">
                                                <label>Office</label>
                                                <input
                                                  id="addOffice"
                                                  type="text"
                                                  class="form-control"
                                                  placeholder="fill office"
                                                />
                                              </div>
                                            </div>
                                          </div>
                                        </form>
                                      </div>
                                      <div class="modal-footer border-0">
                                        <button
                                          type="button"
                                          id="addRowButton"
                                          class="btn btn-primary"
                                        >
                                          Add
                                        </button>
                                        <button
                                          type="button"
                                          class="btn btn-danger"
                                          data-dismiss="modal"
                                        >
                                          Close
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="table-responsive">
                                  <table
                                    id="add-row"
                                    class="display table table-striped table-hover"
                                  >
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Description</th>
                                            <th>Adresse</th>
                                            <th>Téléphone</th>
                                            <th>Action</th>
                                          </tr>
                                    </thead>
                                    <tfoot>

                                    </tfoot>
                                    <tbody>
                                        @foreach ($clients as $item)
                                        <tr>

                                            <td><img src="{{ asset('storage/' . $item->image) }}" style="width: 80px; height: auto;" alt=""></td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->telephone }}</td>

                                            <td>
                                              <div class="form-button-action">
                                                <a type="button"
                                                data-bs-toggle="tooltip"
                                                title=""
                                                class="btn btn-link btn-primary btn-lg"
                                                data-original-title="Edit Task"
                                                href="{{ route('admin.client-edit', ['id'=>$item->id]) }}">
                                                <i class="fa fa-edit"></i>

                                                </a>
                                                <form action="{{ route('admin.client-delete',['id'=>$item->id]) }}" method="post">
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
