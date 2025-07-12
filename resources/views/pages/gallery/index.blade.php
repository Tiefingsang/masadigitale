@extends('layouts.master')
@section('content')

<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Galerie</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="{{ route('home.index') }}">Accueil </a></li>
            <li>Galerie</li>
        </ul>
    </div>
</section>


<section class="cases-section">
    <div class="auto-container">
        <!--MixitUp Galery-->
       <div class="row clearfix">
        <!-- Cases Block -->
        @foreach ($getGallery as $item)
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="image-box">
                <div class="image"><a href="{{ asset('storage/' . $item->image) }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('storage/' . $item->image) }}" alt=""></a></div>
                <div class="caption-box">
                    <h5><a href="">{{ $item->title }}</a></h5>
                </div>
            </div>
        </div>
        @endforeach
     </div>
    </div>
</section>
<!--End Cases Section -->


@endsection

