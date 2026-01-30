@extends('layouts.master')

@section('content')

<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>{{ $formation->titre }}</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home.index') }}">Accueil</a></li>
            <li>Formations</li>
            <li>{{ $formation->titre }}</li>
        </ul>
    </div>
</section>

<section class="news-section style-two">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8 col-md-12">

                <h3>Description</h3>
                <p>{{ $formation->description_longue }}</p>

                <ul class="post-info mt-3">
                    <li><strong>Niveau :</strong> {{ $formation->niveau }}</li>
                    <li><strong>Mode :</strong> {{ $formation->mode }}</li>
                    <li><strong>Durée :</strong> {{ $formation->duree }} heures</li>
                    <li><strong>Statut :</strong> {{ ucfirst($formation->statut) }}</li>
                </ul>

            </div>
        </div>
    </div>
</section>

<section class="call-to-action style-two alternate">
    <div class="auto-container">
        <div class="outer-box clearfix">
            <div class="title-column">
                <h3>Des solutions pour une croissance fiable et durable</h3>
            </div>
            <div class="btn-column">
                <div class="btn-box">
                    <a href="{{ route('contact.index') }}" class="theme-btn btn-style-one">Demander un devis</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
