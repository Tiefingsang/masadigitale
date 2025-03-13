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

<section class="contact-form-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="sec-title text-center">
                <span class="title">Write a Message</span>
                <h2>Have Any Questions?</h2>
            </div>
            <div class="contact-form-two">
                <form method="post" action="" {{-- id="contact-form" --}} novalidate="novalidate">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <input type="text" name="username" placeholder="Your Name" required="">
                        </div>
                        
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                            <input type="email" name="email" placeholder="Your Email" required="">
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                            <textarea name="message" placeholder="Your Massage"></textarea>
                        </div>
                        
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group text-center">
                            <button class="theme-btn btn-style-three" type="submit" name="Submit">Send Massage</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="contact-info-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="flaticon-mail"></span></div>
                    <ul>
                        <li><a href="#">info@domain.com</a></li>
                        <li>+880 258 158 58215</li>
                    </ul>
                </div>
            </div>

            <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="flaticon-watch-2"></span></div>
                    <ul>
                        <li>Mon - Sat 8.00 to 18.00</li>
                        <li><strong>Sunday Closed</strong></li>
                    </ul>
                </div>
            </div>

            <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box"><span class="flaticon-pin-1"></span></div>
                    <ul>
                        <li><strong>Address</strong></li>
                        <li>2A0, Queenstown St, USA.</li>
                    </ul>
                </div>
            </div>

            <div class="contact-info-box col-lg-3 col-md-6 col-sm-12">
                <ul class="social-links">
                    <li><strong>Follow Us:</strong></li>
                    <li>
                        <ul class="social-icon-one">
                            <li><a href="#"><i class="la la-facebook-official"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-google-plus"></i></a></li>
                            <li><a href="#"><i class="la la-dribbble"></i></a></li>
                            <li><a href="#"><i class="la la-pinterest"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Info Section -->

<!-- Contact Map Section -->
<section class="contact-map-section">
    <!-- Map Column -->
    <div class="map-column">
        <!--Map Outer-->
        <div class="map-outer">
            <div class="map-canvas"
                data-zoom="12"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-icon-path="{{ asset('assets/images/icons/map-marker-2.png') }}"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </div>
</section>
<!--End Contact Map Section -->

<!-- Call To Action -->
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