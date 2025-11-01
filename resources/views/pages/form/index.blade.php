@extends('layouts.master')
@section('content')

<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Formations</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home.index') }}">Accueil </a></li>
            <li>Formations</li>
        </ul>
    </div>
</section>

<section class="news-section style-two">
    <div class="auto-container">
        <div class="row clearfix">

            <h3 class="mb-3 text-center">Formulaire d’inscription à la formation Photoshop</h3>

            {{-- ✅ Message de succès --}}
            {{-- @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif --}}

            {{-- ✅ Message d’erreurs globales --}}
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Veuillez corriger les erreurs suivantes :</strong>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

            <form action="{{ route('form.store') }}" method="POST">
                @csrf

                <div class="row">
                    <!-- Nom et prénom -->
                    <div class="col-md-6 mb-3">
                        <label for="nom">Nom et Prénom *</label>
                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Ex: Sangaré Tiefing" value="{{ old('nom') }}">
                        {{-- ⚠️ Correction : les quotes autour de nom --}}
                        @error('nom')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Quartier -->
                    <div class="col-md-6 mb-3">
                        <label for="quartier">Quartier *</label>
                        <input type="text" name="quartier" id="quartier" class="form-control" placeholder="Ex: Hamdallaye ACI" value="{{ old('quartier') }}">
                        @error('quartier')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Numéro de téléphone -->
                    <div class="col-md-6 mb-3">
                        <label for="telephone">Numéro de téléphone *</label>
                        <input type="tel" name="telephone" id="telephone" class="form-control" placeholder="Ex: 70 00 00 00" value="{{ old('telephone') }}">
                        @error('telephone')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Avez-vous un ordinateur ? -->
                    <div class="col-md-6 mb-3">
                        <label for="ordinateur">Avez-vous un ordinateur ? *</label>
                        <select name="ordinateur" id="ordinateur" class="form-control">
                            <option value="">-- Sélectionnez --</option>
                            <option value="OUI" {{ old('ordinateur') == 'OUI' ? 'selected' : '' }}>Oui</option>
                            <option value="NON" {{ old('ordinateur') == 'NON' ? 'selected' : '' }}>Non</option>
                        </select>
                        @error('ordinateur')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Niveau d’étude -->
                    <div class="col-md-6 mb-3">
                        <label for="niveau_etude">Niveau d’étude *</label>
                        <select name="niveau_etude" id="niveau_etude" class="form-control">
                            <option value="">-- Sélectionnez --</option>
                            @foreach(['CEP', 'DEF', 'BAC', 'LICENCE', 'MASTER', 'DOCTORAT'] as $niveau)
                                <option value="{{ $niveau }}" {{ old('niveau_etude') == $niveau ? 'selected' : '' }}>{{ $niveau }}</option>
                            @endforeach
                        </select>
                        @error('niveau_etude')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Métier -->
                    <div class="col-md-6 mb-3">
                        <label for="metier">Votre métier / activité principale *</label>
                        <input type="text" name="metier" id="metier" class="form-control" placeholder="Ex: Étudiant, Entrepreneur, Fonctionnaire..." value="{{ old('metier') }}">
                        @error('metier')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-4">Soumettre l’inscription</button>
                </div>
            </form>

        </div>
    </div>
</section>

<!-- Call To Action -->
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
