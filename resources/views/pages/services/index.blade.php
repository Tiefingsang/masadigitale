@extends('layouts.master')
@section('content')

<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Services</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="i{{ route('home.index') }}">Accueil </a></li>
            <li>Services</li>
        </ul>
    </div>
</section>


<!-- End Services Section -->

<!-- Services Section -->
<section class="services-section-two" style="background-image: url({{ asset('assets/images/background/5.jpg') }});">
    <div class="auto-container">
        <div class="sec-title light text-center">
            <span class="title">Nos Services</span>
            <h2>Ce que nous Offrons</h2>
        </div>


        <div class="row clearfix">
            @foreach ($getServices as $item)
                <a href="{{ route('services-detail', ['title' => $item->title]) }}">
                    <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                       <div style="width: 250px; height: 200px; margin: auto; ">
                        <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}"
                         style="width: 250px; height: 200px; object-fit: cover; border-radius: 8px;">
                    </div>

                        <h3><a href="{{ route('services-detail', ['title'=>$item->title]) }}">{{ $item->title }}</a></h3>
                    <div class="text">{{ $item->description }}</div>
                         <div class="link-box">
                        <a href="{{ route('services-detail', ['title' => $item->title]) }}">
                            En savoir plus <i class="la la-angle-double-right"></i>
                        </a>
                        </div>
                    </div>
                </div>
                </a>
                
            @endforeach


        </div>
    </div>
</section>
<!-- End Services Section -->

<!--Clients Section-->
<section class="clients-section">
    <div class="auto-container">
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/1.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/2.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/3.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/4.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/5.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/1.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/2.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/3.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/4.png') }}" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/5.png') }}" alt=""></a></figure></li>
            </ul>
        </div>
    </div>
</section>


@endsection

