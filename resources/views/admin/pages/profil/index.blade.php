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
                        <form action="{{ route('admin.profil.update.index', ['id'=>$userinfo->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                  <label for="email">Nom</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    value="{{ $userinfo->name }}"
                                    name="name"
                                  />
                                </div>





                                <div class="form-group">
                                  <label for="email">Email</label>
                                  <input
                                    type="email"
                                    class="form-control"
                                    id="Email"
                                    value="{{ $userinfo->email }}"
                                    name="email"
                                  />
                                </div>




                                <div class="form-group">
                                    <label for="email">Téléphone</label>
                                    <input
                                      type="phone"
                                      class="form-control"
                                      id="phone"
                                      value="{{ $userinfo->phone }}"
                                      name="phone"
                                    />
                                  </div>

                                </div>


                                <div class="form-group">
                                    <label for="address">Adresse</label>
                                    <input
                                      type="address"
                                      class="form-control"
                                      id="address"
                                      value="{{ $userinfo->address }}"
                                      name="address"
                                    />
                                  </div>

                                </div>




                                <div class="form-group">
                                    <label for="country">Pays</label>
                                    <input
                                      type="country"
                                      class="form-control"
                                      id="country"
                                      value="{{ $userinfo->country }}"
                                      name="country"
                                    />
                                  </div>
                                </div>


                                <div class="form-group">
                                    <label for="cv">CV</label>
                                    <input
                                      type="cv"
                                      class="form-control"
                                      id="cv"
                                      value="{{ $userinfo->cv }}"
                                      name="cv"
                                    />
                                  </div>
                                </div>


                                <div class="form-group">
                                    <label for="profession">Profession</label>
                                    <input
                                      type="profession"
                                      class="form-control"
                                      id="profession"
                                      value="{{ $userinfo->profession }}"
                                      name="profession"
                                    />
                                  </div>
                                </div>


                                <div class="form-group">
                                    <label for="image">IMAGE</label>
                                    <input
                                      type="file"
                                      class="form-control"
                                      id="image"
                                      value="{{ $userinfo->image }}"
                                      name="image"
                                    />
                                  </div>
                                </div>


                              </div>
                              <div class="card-action">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button class="btn btn-danger">Cancel</button>
                              </div>

                        </form>





                    </div>


            </div>
        </div>
    </div>
  </div>
@endsection
