@extends('layouts.master')
@section('content')
<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Blogs</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="i{{ route('home.index') }}">Accueil </a></li>
            <li>Blogs</li>
        </ul>
    </div>
</section>

<section class="news-section style-two">
    <div class="auto-container">
        <div class="row clearfix">

            @foreach ($blogs as $item)
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image">
                            <a href="{{ route('blogs-detail', ['slug'=>$item->slug]) }}"><img src="{{ $item->image }}" alt=""></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="{{ route('blogs-detail', ['slug'=>$item->slug]) }}">{{ $item->title }}</a></h3>
                        <span class="date">Publié: {{ $item->created_at }}</span>
                        <div class="text">{{ \Illuminate\Support\Str::limit($item->content, 50, '...') }}</div>
                        <div class="link-box"><a href="{{ route('blogs-detail', ['slug'=>$item->slug]) }}">En savoir plus</a></div>
                    </div>
                </div>
            </div>

            @endforeach


            <!-- News Block -->


        </div>



    </div>
</section>
<!-- News Section -->

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
