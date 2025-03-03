@extends('layouts.master')
@section('content')

<div class="alert alert-info">
    <h1>Apropos</h1>
</div>
<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Apropos de nous</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="i{{ route('home.index') }}">Accueil </a></li>
            <li>Apropos</li>
        </ul>
    </div>
</section>
	

@endsection