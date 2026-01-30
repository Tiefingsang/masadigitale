@extends('layouts.master')

@section('content')

<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Nos Formations</h1>
    </div>
</section>

<section class="news-section style-two">
    <div class="auto-container">
        <div class="row">

            @foreach($formations as $formation)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="news-block">
                    <div class="inner-box">
                        <div class="lower-content">
                            <h4>{{ $formation->titre }}</h4>
                            <p>{{ Str::limit($formation->description_courte, 100) }}</p>

                            <ul class="post-info">
                                <li>Niveau : {{ $formation->niveau }}</li>
                                <li>Mode : {{ $formation->mode }}</li>
                                <li>Durée : {{ $formation->duree }} h</li>
                            </ul>

                            <button class="theme-btn btn-style-two open-formation" data-slug="{{ $formation->slug }}">
                                Se former
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- MODAL --}}
<div class="modal" id="formationModal" tabindex="-1" style="z-index:1050;">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="formationTitre"></h5>
                <button type="button" class="btn btn-danger close-modal">×</button>
            </div>

            <div class="modal-body">

                <img id="formationImage" class="img-fluid mb-3 rounded" style="display:none">

                <p id="formationDescription"></p>

                <ul class="list-group mb-3">
                    <li class="list-group-item">Niveau : <strong id="formationNiveau"></strong></li>
                    <li class="list-group-item">Mode : <strong id="formationMode"></strong></li>
                    <li class="list-group-item">Durée : <strong id="formationDuree"></strong> h</li>
                    <li class="list-group-item">Prix : <strong id="formationPrix"></strong></li>
                </ul>

                <div class="d-grid gap-2">
                    <a id="btnInscription" class="btn btn-primary">S'inscrire</a>
                    <a id="btnWhatsapp" class="btn btn-success" target="_blank">Discuter sur WhatsApp</a>
                    <a id="btnPartager" class="btn btn-outline-secondary" target="_blank">Partager</a>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
.close-modal {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    font-size: 20px;
    line-height: 20px;
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    // Modal Bootstrap sans backdrop
    const modalEl = document.getElementById('formationModal');
    const modal = new bootstrap.Modal(modalEl, { backdrop: false, keyboard: true });

    document.querySelectorAll('.open-formation').forEach(btn => {
        btn.addEventListener('click', function () {

            fetch(`/formations/${this.dataset.slug}/popup`)
                .then(res => res.json())
                .then(data => {

                    document.getElementById('formationTitre').textContent = data.titre;
                    document.getElementById('formationDescription').innerHTML = data.description;
                    document.getElementById('formationNiveau').textContent = data.niveau;
                    document.getElementById('formationMode').textContent = data.mode;
                    document.getElementById('formationDuree').textContent = data.duree;
                    document.getElementById('formationPrix').textContent = data.prix;

                    const img = document.getElementById('formationImage');
                    if (data.image) {
                        img.src = `/storage/${data.image}`;
                        img.style.display = 'block';
                    } else {
                        img.style.display = 'none';
                    }

                    document.getElementById('btnInscription').href = `/inscription/${data.slug}`;
                    document.getElementById('btnWhatsapp').href =
                        `https://wa.me/22378794089?text=${encodeURIComponent('Je veux la formation ' + data.titre)}`;
                    document.getElementById('btnPartager').href =
                        `https://www.facebook.com/sharer/sharer.php?u=${window.location.href}`;

                    modal.show();
                });
        });
    });

    document.querySelector('.close-modal').addEventListener('click', () => modal.hide());

});
</script>
@endpush
