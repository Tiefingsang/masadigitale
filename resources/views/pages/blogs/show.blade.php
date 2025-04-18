@extends('layouts.master')
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
                            <div class="image"><img src="{{ $getBlogBySlug->image }}" alt=""></div>
                            <h3>{{ $getBlogBySlug->title }}</h3>
                            <ul class="info">
                                <li>{{ $getBlogBySlug->create_at }}</li>
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
                            <p>{{ $getBlogBySlug->content }}</p>
                            <div class="two-column">
                                <div class="row clearfix">
                                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                        <div class="image"><a href="images/resource/post-image-1.jpg" class="lightbox-image" data-fancybox="images"><img src="images/resource/post-image-1.jpg" alt=""></a></div>
                                    </div>
                                    <div class="text-column col-lg-6 col-md-12 col-sm-12">
                                        <p>Academic, co-create change-makers humanitarian. Low-hanging fruit contextuali rubric, shine progress. Blended value relief shared value outcomes, unprecedented transparent targeted. Mobilize emerging provoking targeted paradigm; humanitarian accessibility. We must stand up innovate, </p>
                                    </div>
                                </div>
                            </div>
                            <p>society; replicable, human-centered commitment shared unit of analysis paradigm sustainable. Design thinking game changer greenwashing innovate improve the world data challenges and opportunities capacity building. Expose the truth, innovate; collective impact impact investing shared vocabulary living a fully ethical life compassion invest move the needle triple bottom line entrepreneur. Design thinking efficient, B-corp; data youth ecosystem challenges and opportunities, strengthening infrastructure transparent outcomes improve the world resist circular shared value. Families thought leadership invest impact investing </p>
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
                        <div class="group-title"><h2>User Comments</h2></div>

                        <!--Comment Box-->
                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img src="images/resource/thumb-3.jpg" alt=""></div>
                                <div class="comment-inner">
                                    <div class="text">The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</div>
                                    <div class="comment-info">
                                        <h4 class="name">Callahan James</h4>
                                        <span class="designation">California University</span>
                                    </div>
                                </div>
                                <a class="comment-reply" href="#">Reply Now</a>
                            </div>
                        </div>

                        <!--Comment Box-->
                        <div class="comment-box reply-comment">
                            <div class="comment">
                                <div class="author-thumb"><img src="images/resource/thumb-4.jpg" alt=""></div>
                                <div class="comment-inner">
                                    <div class="text">The wise man therefore always holds in these matters to this principle of selection he rejects pleasures to secure other greater pleasures, .</div>
                                    <div class="comment-info">
                                        <h4 class="name">Sean Bean</h4>
                                        <span class="designation">California University</span>
                                    </div>
                                </div>
                                <a class="comment-reply" href="#">Reply Now</a>
                            </div>
                        </div>

                        <!--Comment Box-->
                        <div class="comment-box">
                            <div class="comment">
                                <div class="author-thumb"><img src="images/resource/thumb-5.jpg" alt=""></div>
                                <div class="comment-inner">
                                    <div class="text">The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</div>
                                    <div class="comment-info">
                                        <h4 class="name">James Dean</h4>
                                        <span class="designation">James Dean</span>
                                    </div>
                                </div>
                                <a class="comment-reply" href="#">Reply Now</a>
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
                        <div class="sidebar-title"><h2>Recent Posts</h2></div>
                        <div class="widget-content">
                            <article class="post">
                                <div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-3.jpg" alt=""></a></div>
                                <h3><a href="blog-detail.html">Our operations worldwide have been neutral.</a></h3>
                                <div class="post-info">Dec. 20, 2017</div>
                            </article>

                            <article class="post">
                                <div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-4.jpg" alt=""></a></div>
                                <h3><a href="blog-detail.html">Our operations worldwide have been neutral.</a></h3>
                                <div class="post-info">Dec. 20, 2017</div>
                            </article>

                            <article class="post">
                                <div class="post-thumb"><a href="blog-detail.html"><img src="images/resource/post-thumb-5.jpg" alt=""></a></div>
                                <h3><a href="blog-detail.html">A digital prescription for the pharma industry.</a></h3>
                                <div class="post-info">Dec. 20, 2017</div>
                            </article>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="sidebar-widget categories">
                        <div class="sidebar-title"><h2>Best Categories</h2></div>
                        <ul class="cat-list">
                            <li><a href="#">Business <span>(6)</span></a></li>
                            <li><a href="#">Corporate <span>(9)</span></a></li>
                            <li><a href="#">Portfolio <span>(3)</span></a></li>
                            <li><a href="#">Finince <span>(5)</span></a></li>
                            <li><a href="#">Investment planning <span>(7)</span></a></li>
                        </ul>
                    </div>



                    <!-- Tags -->
                    <div class="sidebar-widget tags">
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
                    </div>
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
                    <a href="contact.html" class="theme-btn btn-style-one">Get A Quotes</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection