<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="index.html" class="logo">
        <img
          src="{{ asset('assets/images/logorect.png') }}"
          alt="navbar brand"
          class="navbar-brand"
          height="20"
        />
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-item active">
          <a
            data-bs-toggle="collapse"
            href="{{ route('admin.index') }}"

            aria-expanded="false"
          >
            <i class="fas fa-home"></i>
            <p>Dashboard</p>

          </a>
         {{--  <div class="collapse" id="dashboard">
            <ul class="nav nav-collapse">
              <li>
                <a href="../demo1/index.html">
                  <span class="sub-item">Dashboard 1</span>
                </a>
              </li>
            </ul>
          </div> --}}
        </li>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Components</h4>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#base">
            <i class="fas fa-layer-group"></i>
            <p>Profil</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="base">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ route('admin.profil.index') }}">
                  <span class="sub-item">Modifier</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#sidebarLayouts">
            <i class="fas fa-th-list"></i>
            <p>Apropos</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="sidebarLayouts">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ route('admin.about') }}">
                  <span class="sub-item">Modifier</span>
                </a>
              </li>

            </ul>
          </div>
        </li>

        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#tables">
            <i class="fas fa-table"></i>
            <p>Services</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="tables">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ route('admin.service') }}">
                  <span class="sub-item">Créer</span>
                </a>
              </li>
              <li>
                <a href="{{ route('admin.service.list') }}">
                  <span class="sub-item">Liste des services</span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#category">
            <i class="fas fa-table"></i>
            <p>Cotégories</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="category">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ route('admin.add.categories') }}">
                  <span class="sub-item">Créer nouveau</span>
                </a>
              </li>
              <li>
                <a href="{{ route('admin.category.list') }}">
                  <span class="sub-item">Liste des categories</span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#client">
            <i class="fas fa-table"></i>
            <p>Client</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="client">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ route('admin.add.client') }}">
                  <span class="sub-item">Créer nouveau client</span>
                </a>
              </li>
              <li>
                <a href="{{ route('admin.client.list') }}">
                  <span class="sub-item">Liste des client</span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
            <a data-bs-toggle="collapse" href="#gallery">
              <i class="fas fa-table"></i>
              <p>Gallery</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="gallery">
              <ul class="nav nav-collapse">
                <li>
                  <a href="{{ route('admin.add.gallery') }}">
                    <span class="sub-item">Créer nouveau gallery</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('admin.gallery.list') }}">
                    <span class="sub-item">Liste des gallery</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#partner">
            <i class="fas fa-table"></i>
            <p>Partenaire</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="partner">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ route('admin.add.partner') }}">
                  <span class="sub-item">Créer nouveau partenaire</span>
                </a>
              </li>
              <li>
                <a href="{{ route('admin.partner.list') }}">
                  <span class="sub-item">Liste des partenaire</span>
                </a>
              </li>
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#maps">
            <i class="fas fa-map-marker-alt"></i>
            <p>Projets</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="maps">
            <ul class="nav nav-collapse">
              <li>
                <a href="maps/googlemaps.html">
                  <span class="sub-item">AJouter</span>
                </a>
              </li>
              <li>
                <a href="maps/jsvectormap.html">
                  <span class="sub-item">Liste des projets</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#charts">
            <i class="far fa-chart-bar"></i>
            <p>Blog</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="charts">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ route('admin.blog.show') }}">
                  <span class="sub-item">Edite</span>
                </a>
              </li>
              <li>
                <a href="{{ route('admin.blog') }}">
                  <span class="sub-item">Liste</span>
                </a>
              </li>
              <li>
                  <a href="charts/sparkline.html">
                    <span class="sub-item">Commentaires</span>
                  </a>
                </li>
            </ul>
          </div>

        </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#contact">
            <i class="far fa-chart-bar"></i>
            <p>Contact</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="contact">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{ route('admin.contact.list') }}">
                  <span class="sub-item">Messages</span>
                </a>
              </li>
            </ul>
          </div>

        </li>

        
      </ul>
    </div>
  </div>
</div>
<!-- End Sidebar -->
