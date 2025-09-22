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
                                <li><a href="#">by Adam Smith</a></li>
                            </ul>
                        </div>
                        <div class="content-box sticky-container">
                            <!-- Post Share Option -->
                            <div class="post-share-options">
                                <div class="social-links {{-- sticky-box --}}">
                                    <a href="#"><span class="la la-facebook"></span></a>
                                    <a href="#"><span class="la la-twitter"></span></a>
                                    <a href="#"><span class="la la-google-plus"></span></a>
                                    <a href="#"><span class="la la-dribbble"></span></a>
                                    <a href="#"><span class="la la-pinterest"></span></a>
                                    <h4>Share:</h4>
                                </div>
                            </div>
                            <p>{!! $getBlogBySlug->content !!}</p>
                            
                        </div>
                    </div>

                    <div class="post-control">
                        <ul class="clearfix">
                            <li class="prev pull-left"><a href="#"><i class="la la-angle-double-left"></i> Prev</a></li>
                            <li class="next pull-right"><a href="#">Next <i class="la la-angle-double-right"></i></a></li>
                        </ul>
                    </div>


                    <!--Comments Area-->
                    <div class="comments-area">
                    <div class="group-title"><h2>Commentaires des utilisateurs</h2></div>

                    <!--Comment Box-->
                    <div class="comment-box">
                        <div class="comment">
                            <div class="author-thumb"><img src="{{ asset('assets/images/resource/thumb-3.jpg') }}" alt=""></div>
                            <div class="comment-inner">
                                <div class="text">
                                    L’homme sage, dans ces situations, s’en tient toujours à ce principe de sélection : il rejette certains plaisirs pour en obtenir de plus grands, ou bien il endure des peines afin d’éviter de plus grandes souffrances.
                                </div>
                                <div class="comment-info">
                                    <h4 class="name">Callahan James</h4>
                                    <span class="designation">Université de Californie</span>
                                </div>
                            </div>
                            <a class="comment-reply" href="#">Répondre maintenant</a>
                        </div>
                    </div>

                    <!--Comment Box-->
                    <div class="comment-box reply-comment">
                        <div class="comment">
                            <div class="author-thumb"><img src="images/resource/thumb-4.jpg" alt=""></div>
                            <div class="comment-inner">
                                <div class="text">
                                    L’homme sage, dans ces situations, s’en tient toujours à ce principe de sélection : il rejette certains plaisirs pour en obtenir de plus grands.
                                </div>
                                <div class="comment-info">
                                    <h4 class="name">Sean Bean</h4>
                                    <span class="designation">Université de Californie</span>
                                </div>
                            </div>
                            <a class="comment-reply" href="#">Répondre maintenant</a>
                        </div>
                    </div>

                    <!--Comment Box-->
                    <div class="comment-box">
                        <div class="comment">
                            <div class="author-thumb"><img src="images/resource/thumb-5.jpg" alt=""></div>
                            <div class="comment-inner">
                                <div class="text">
                                    L’homme sage, dans ces situations, s’en tient toujours à ce principe de sélection : il rejette certains plaisirs pour en obtenir de plus grands, ou bien il endure des peines afin d’éviter de plus grandes souffrances.
                                </div>
                                <div class="comment-info">
                                    <h4 class="name">James Dean</h4>
                                    <span class="designation">James Dean</span>
                                </div>
                            </div>
                            <a class="comment-reply" href="#">Répondre maintenant</a>
                        </div>
                    </div>

                </div>

                    <!--End Comments Area-->

                    <!-- Comment Form -->
                    <div class="comment-form">
                        <div class="group-title"><h2>Leave a Reply</h2></div>

                        <!--Comment Form-->
                        <form method="post" action="">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Name" required>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Your Comments"></textarea>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <button class="theme-btn btn-style-three" type="submit" name="submit-form">Post Comment</button>
                                </div>

                            </div>
                        </form>

                    </div>
                    <!--End Comment Form -->

                </div><!-- Blog List -->
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar default-sidebar">

                    <!--search box-->
                    <div class="sidebar-widget search-box">
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="search" name="search-field" value="" placeholder="Search....." required="">
                                <button type="submit"><span class="icon la la-search"></span></button>
                            </div>
                        </form>
                    </div>

                                            <!-- Latest News -->
                    <div class="sidebar-widget latest-news">
                        <div class="sidebar-title"><h2>Les postes récentes</h2></div>
                        <div class="widget-content">

                            @foreach($recentBlogs as $recent)
                                <article class="post">
                                    <div class="post-thumb">
                                        <a href="{{ route('blogs-detail', $recent->slug) }}">
                                            <img src="{{ asset('storage/'.$recent->image) }}" alt="{{ $recent->title }}" style="width:80px; height:80px; ">
                                        </a>
                                    </div>
                                    <h3>
                                        <a href="{{ route('blogs-detail', $recent->slug) }}">
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
                <h3>Provide Solutions For the Realiable Growth</h3>
            </div>

            <div class="btn-column">
                <div class="btn-box">
                    <a href="c" class="theme-btn btn-style-one">Get A Quotes</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection