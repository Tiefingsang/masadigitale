@extends('layouts.master')
@section('content')

<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Contact</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="i{{ route('home.index') }}">Accueil </a></li>
            <li>Contact</li>
        </ul>
    </div>
</section>

<div class="alert alert-danger text-center ">
    <h1>CONTACT</h1>
</div>
	

@endsection