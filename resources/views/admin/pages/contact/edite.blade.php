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
                      <div class="card-title">Modifier contact</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.contact-update', ['id'=>$contact->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      value="{{ $contact->name }}"
                                      name="name"
                                    />
                                  </div>


                                  <div class="form-group">
                                    <label for="contact">Message</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      value="{{ $contact->message }}"
                                      name="message"
                                    />
                                  </div>




                                  <div class="form-group">
                                    <label for="email">Email</label>
                                    <input
                                      type="email"
                                      class="form-control"
                                      id="email"
                                        value="{{ $contact->email }}"
                                      name="email"
                                    />
                                  </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success">Modifier</button>
                            </div>

                        </form>

                    </div>

                    </div>
            </div>
        </div>
    </div>
  </div>
@endsection
