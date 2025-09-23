@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div class="page-inner">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
    <div>
      <h3 class="fw-bold mb-3">Admin</h3>
      <h6 class="op-7 mb-2">
        Bienvenue sur l’espace administrateur de <b>Masadigitale</b>
      </h6>
    </div>
    <div class="ms-md-auto py-2 py-md-0">
      <a href="{{ route('admin.profil.index') }}" class="btn btn-label-info btn-round me-2">
        Mon Profil
      </a>
      <a href="{{ route('admin.client.list') }}" class="btn btn-primary btn-round">
        Gérer les clients
      </a>
    </div>
  </div>

  <div class="row">
  <!-- Contacts -->
    <div class="col-sm-6 col-md-3">
      <a href="">
        <div class="card card-stats card-round">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-icon">
                <div class="icon-big text-center icon-primary bubble-shadow-small">
                  <i class="fas fa-envelope"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Contacts</p>
                  <h4 class="card-title">{{ $contactsCount ?? 0 }}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>

    <!-- Newsletter -->
    <div class="col-sm-6 col-md-3">
      <a href="">
        <div class="card card-stats card-round">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-icon">
                <div class="icon-big text-center icon-info bubble-shadow-small">
                  <i class="fas fa-users"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Newsletter</p>
                  <h4 class="card-title">{{ $newsletterCount ?? 0 }}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
      
    </div>

    <!-- Projets -->
    <div class="col-sm-6 col-md-3">
      <a href="">
          <div class="card card-stats card-round">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-icon">
              <div class="icon-big text-center icon-success bubble-shadow-small">
                <i class="fas fa-project-diagram"></i>
              </div>
            </div>
            <div class="col col-stats ms-3 ms-sm-0">
              <div class="numbers">
                <p class="card-category">Projets</p>
                <h4 class="card-title">{{ $projectsCount ?? 0 }}</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      </a>
    </div>

    <!-- Services -->
    <div class="col-sm-6 col-md-3">
      <div class="card card-stats card-round">
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-icon">
              <div class="icon-big text-center icon-secondary bubble-shadow-small">
                <i class="fas fa-cogs"></i>
              </div>
            </div>
            <div class="col col-stats ms-3 ms-sm-0">
              <div class="numbers">
                <p class="card-category">Services</p>
                <h4 class="card-title">{{ $servicesCount ?? 0 }}</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

      <div class="row">
        <div class="col-md-8">
          <div class="card card-round">
            <div class="card-header">
              <div class="card-head-row">
                <div class="card-title">Statistique général</div>
                <div class="card-tools">
                  <a
                    href="#"
                    class="btn btn-label-success btn-round btn-sm me-2"
                  >
                    <span class="btn-label">
                      <i class="fa fa-pencil"></i>
                    </span>
                    Export
                  </a>
                  <a href="#" class="btn btn-label-info btn-round btn-sm">
                    <span class="btn-label">
                      <i class="fa fa-print"></i>
                    </span>
                    Print
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-container" style="min-height: 375px">
                <canvas id="statisticsChart"></canvas>
              </div>
              <div id="myChartLegend"></div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-primary card-round">
            <div class="card-header">
              <div class="card-head-row">
                <div class="card-title">Contact</div>
                <div class="card-tools">
                  <div class="dropdown">
                    <button
                      class="btn btn-sm btn-label-light dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      Export
                    </button>
                    <div
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton"
                    >
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#"
                        >Something else here</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-category">March 25 - April 02</div>
            </div>
            <div class="card-body pb-0">
              <div class="mb-4 mt-2">
                <h1>$4,578.58</h1>
              </div>
              <div class="pull-in">
                <canvas id="dailySalesChart"></canvas>
              </div>
            </div>
          </div>
          <div class="card card-round">
            <div class="card-body pb-0">
              <div class="h1 fw-bold float-end text-primary">+5%</div>
              <h2 class="mb-2">17</h2>
              <p class="text-muted">Commentaires</p>
              <div class="pull-in sparkline-fix">
                <div id="lineChart"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </div>
  </div>
@endsection
