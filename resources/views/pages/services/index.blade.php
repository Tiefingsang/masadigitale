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

<section class="services-section style-two">
    <div class="auto-container">

        <div class="row clearfix">
            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box" style="background-image: url({{ asset('assets/images/resource/service-1.jpg') }});">
                    <div class="content-box">
                        <span class="icon flaticon-pie-chart-1"></span>
                        <h3><a href="service-detail.html">Financial Planning</a></h3>
                        <div class="text">We possess within us two minds. So far I have written only of the conscious mind. I would now like to..</div>
                        <div class="link-box"><a href="service-detail.html">Read More <i class="la la-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box" style="background-image: url({{ asset('assets/images/resource/service-2.jpg') }});">
                    <div class="content-box">
                        <span class="icon flaticon-piggy-bank"></span>
                        <h3><a href="service-detail.html">Saving Strategy</a></h3>
                        <div class="text">We possess within us two minds. So far I have written only of the conscious mind. I would now like to..</div>
                        <div class="link-box"><a href="service-detail.html">Read More <i class="la la-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box" style="background-image: url({{ asset('assets/images/resource/service-3.jpg') }});">
                    <div class="content-box">
                        <span class="icon flaticon-stock"></span>
                        <h3><a href="service-detail.html">Trade & stock</a></h3>
                        <div class="text">We possess within us two minds. So far I have written only of the conscious mind. I would now like to..</div>
                        <div class="link-box"><a href="service-detail.html">Read More <i class="la la-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box" style="background-image: url({{ asset('assets/images/resource/service-4.jpg') }});">
                    <div class="content-box">
                        <span class="icon flaticon-manager-1"></span>
                        <h3><a href="service-detail.html">Strategic Planning</a></h3>
                        <div class="text">We possess within us two minds. So far I have written only of the conscious mind. I would now like to..</div>
                        <div class="link-box"><a href="service-detail.html">Read More <i class="la la-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box" style="background-image: url({{ asset('assets/images/resource/service-5.jpg') }});">
                    <div class="content-box">
                        <span class="icon flaticon-tools"></span>
                        <h3><a href="service-detail.html">Audit & Assurance</a></h3>
                        <div class="text">We possess within us two minds. So far I have written only of the conscious mind. I would now like to..</div>
                        <div class="link-box"><a href="service-detail.html">Read More <i class="la la-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box" style="background-image: url({{ asset('assets/images/resource/service-6.jpg') }});">
                    <div class="content-box">
                        <span class="icon flaticon-partnership"></span>
                        <h3><a href="service-detail.html">Financial Planning</a></h3>
                        <div class="text">We possess within us two minds. So far I have written only of the conscious mind. I would now like to..</div>
                        <div class="link-box"><a href="service-detail.html">Read More <i class="la la-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->

<!-- Services Section -->
<section class="services-section-two" style="background-image: url({{ asset('assets/images/background/5.jpg') }});">
    <div class="auto-container">
        <div class="sec-title light text-center">
            <span class="title">Our Services</span>
            <h2>What We Provide</h2>
        </div>

        <div class="row clearfix">
            <!-- Service BLock Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="flaticon-pie-chart-1"></span></div>
                    <h3><a href="{{ route('services.index') }}">Financial Planning</a></h3>
                    <div class="text">Bonds and commodities are much more stable than stocks sound bonds</div>
                </div>
            </div>

            <!-- Service BLock Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="flaticon-tools"></span></div>
                    <h3><a href="{{ route('services.index') }}">Financial Planning</a></h3>
                    <div class="text">Bonds and commodities are much more stable than stocks sound bonds</div>
                </div>
            </div>

            <!-- Service BLock Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="flaticon-stock"></span></div>
                    <h3><a href="{{ route('services.index') }}">Financial Planning</a></h3>
                    <div class="text">Bonds and commodities are much more stable than stocks sound bonds</div>
                </div>
            </div>

            <!-- Service BLock Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="flaticon-manager-1"></span></div>
                    <h3><a href="{{ route('services.index') }}">Financial Planning</a></h3>
                    <div class="text">Bonds and commodities are much more stable than stocks sound bonds</div>
                </div>
            </div>

            <!-- Service BLock Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="flaticon-piggy-bank-1"></span></div>
                    <h3><a href="{{ route('services.index') }}">Financial Planning</a></h3>
                    <div class="text">Bonds and commodities are much more stable than stocks sound bonds</div>
                </div>
            </div>

            <!-- Service BLock Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="flaticon-partnership"></span></div>
                    <h3><a href="{{ route('services.index') }}">Financial Planning</a></h3>
                    <div class="text">Bonds and commodities are much more stable than stocks sound bonds</div>
                </div>
            </div>
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

