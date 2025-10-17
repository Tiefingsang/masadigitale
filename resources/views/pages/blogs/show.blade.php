@extends('layouts.master')
@section('title', 'Blog Detail')
@section('content')
<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Blogs</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="i{{ route('home.index') }}">Accueil </a></li>
            <li>Blog détail</li>
        </ul>
    </div>
</section>

<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-detail">
                     <div class="inner-box">
                        <div class="image-box">
                            <div class="image"><img src="{{ asset('storage/'.$getBlogBySlug->image) }}" alt=""></div>
                            

                            <h3>{{ $getBlogBySlug->title }}</h3>
                            <ul class="info">
                                <li>{{ $getBlogBySlug->created_at }}</li>
                                <li><a href="#">Par masadigitale</a></li>
                            </ul>
                        </div>
                        <div class="content-box sticky-container">
                            <!-- Post Share Option -->
                            <div class="post-share-options">
                            <div class="social-links">
                                <h4>Partager :</h4>

                                {{-- Facebook --}}
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" 
                                target="_blank">
                                    <span class="la la-facebook"></span>
                                </a>

                                {{-- Twitter (X) --}}
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($getBlogBySlug->title) }}" 
                                target="_blank">
                                    <span class="la la-twitter"></span>
                                </a>

                                {{-- WhatsApp --}}
                                <a href="https://api.whatsapp.com/send?text={{ urlencode($getBlogBySlug->title . ' ' . request()->fullUrl()) }}" 
                                target="_blank">
                                    <span class="la la-whatsapp"></span>
                                </a>

                                {{-- LinkedIn --}}
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" 
                                target="_blank">
                                    <span class="la la-linkedin"></span>
                                </a>

                                {{-- Email --}}
                                <a href="mailto:?subject={{ urlencode($getBlogBySlug->title) }}&body={{ urlencode(request()->fullUrl()) }}">
                                    <span class="la la-envelope"></span>
                                </a>
                            </div>
                        </div>

                            <p>{!! $getBlogBySlug->content !!}</p>
                            
                        </div>
                    </div>

                    {{-- <div class="post-control">
                        <ul class="clearfix">
                            <li class="prev pull-left"><a href="#"><i class="la la-angle-double-left"></i> Prev</a></li>
                            <li class="next pull-right"><a href="#">Next <i class="la la-angle-double-right"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar default-sidebar">

                    <!--search box-->
                    {{-- <div class="sidebar-widget search-box">
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Search....." required="">
                                <button type="submit"><span class="icon la la-search"></span></button>
                            </div>
                        </form>
                    </div> --}}

                                            <!-- Latest News -->
                    <div class="sidebar-widget latest-news">
                        <div class="sidebar-title"><h2>Les postes récentes</h2></div>
                        <div class="widget-content">

                            @foreach($recentBlogs as $recent)
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="{{ route('blogs-detail', ['slug'=>$recent->slug]) }}">
                                            <img src="{{ asset('storage/'.$recent->image) }}" alt="{{ $recent->title }}" style="width:80px; height:80px; ">
                                        </a>
                                    </div>
                                    <h3>
                                        <a href="{{ route('blogs-detail', ['slug'=>$recent->slug]) }}">
                                            {{ \Illuminate\Support\Str::limit($recent->title, 40) }}
                                        </a>
                                    </h3>
                                    <div class="post-info">{{ $recent->created_at->format('M d, Y') }}</div>
                                </article>
                            @endforeach

                        </div>
                    </div>


                    <!-- Categories -->
                    <div class="sidebar-widget categories">
                        <div class="sidebar-title"><h2>Categories</h2></div>
                        <ul class="cat-list">
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('blogs-detail', $category->slug) }}">
                                        {{ $category->name }} <span>({{ $category->blogs_count }})</span>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
        



                    <!-- Tags -->
                    {{-- <div class="sidebar-widget tags">
                        <div class="sidebar-title"><h2>Cool Tags</h2></div>
                        <ul class="tag-list clearfix">
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Money</a></li>
                            <li><a href="#">Entertanment</a></li>
                            <li><a href="#">Logo</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Development</a></li>
                        </ul>
                    </div> --}}
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Container -->



<section class="call-to-action style-two alternate">
    <div class="auto-container">
        <div class="outer-box clearfix">
            <div class="title-column">
                <h3>Fournir des solutions pour une croissance fiable</h3>
            </div>

            <div class="btn-column">
                <div class="btn-box">
                    <a href="c" class="theme-btn btn-style-one">Masadigitale</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection