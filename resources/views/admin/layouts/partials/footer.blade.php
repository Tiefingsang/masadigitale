<footer class="footer">
  <div class="container-fluid d-flex justify-content-between">
    <nav class="pull-left">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about.index') }}">
            À propos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact.index') }}">
            Contact
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('services.index') }}">
            Services
          </a>
        </li>
      </ul>
    </nav>
    <div class="copyright">
      &copy; {{ date('Y') }} <b>Masadigitale</b>, créé avec 
      <i class="fa fa-heart heart text-danger"></i> par 
      <a href="https://masadigitale.com" target="_blank">Masadigitale</a>.
    </div>
    <div>
      Propulsé par <a target="_blank" href="https://masadigitale.com/">Masadigitale</a>.
    </div>
  </div>
</footer>
