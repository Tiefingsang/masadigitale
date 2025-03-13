@extends('layouts.master')
@section('content')


<section class="page-title" style="background-image:url({{ asset('assets/images/background/8.jpg') }});">
    <div class="auto-container">
        <h1>Apropos de nous</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="i{{ route('home.index') }}">Accueil </a></li>
            <li>Apropos</li>
        </ul>
    </div>
</section>


 <!-- About Us -->
 <section class="about-section-two alternate">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <span class="title">We Are Expert</span>
                    <h2>20 Years Experience in <br> Financial & Business</h2>
                    <div class="text">Apparently we had reached a great height in the atmosphere, for the sky was a dead black and the stars had ceased to twinkle, By the same illusion which lifts the horizon of the sea to the level of the speactator on press for miles on a hillside. Each business niche may require a unique functionality of its own… </div>

                    <div class="fact-counter">
                        <div class="row clearfix">
                            <!--Column-->
                            <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                                <div class="count-box">
                                    <span class="count-text" data-speed="3000" data-stop="350">0</span>
                                    <h4 class="counter-title">Consultatns</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                                <div class="count-box">
                                    <span class="count-text" data-speed="3000" data-stop="25">0</span>
                                    <h4 class="counter-title">Awards</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                                <div class="count-box">
                                    <span class="count-text" data-speed="3000" data-stop="954">0</span>
                                    <h4 class="counter-title">Cases Completed</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blocks Column -->
            <div class="block-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="row clearfix">
                        <!-- Feature Block -->
                        <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="about.html"><img src="{{ asset('assets/images/resource/feature-1.jpg') }}" alt=""></a></div>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="about.html">Our Mission</a></h4>
                                    <div class="text">Our Mission for the explorer of the truth, master who builder of human hapiness one but because those who do know.</div>
                                </div>
                            </div>
                        </div>

                        <!-- Feature Block -->
                        <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image"><a href="about.html"><img src="{{ asset('assets/images/resource/feature-2.jpg') }}" alt=""></a></div>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="about.html">Our Vision</a></h4>
                                    <div class="text">Our Mission for the explorer of the truth, master who builder of human hapiness one but because those who do know.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us -->

<!-- Call Back Section -->
<section class="call-back-section" style="background-image: url({{ asset('assets/images/background/2.jpg') }});">
    <div class="outer-box">        
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3>You are <br> 10 minitues away from the Help you need</h3>
                        <div class="text">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test.</div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="appointment-form">
                            <div class="title-box">
                                <span>We are always ready</span>
                                <h3>Request a call back</h3>
                            </div>
                            <form method="post" action="">
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Name" required="">
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                                
                                <div class="form-group">
                                    <textarea name="message" placeholder="Massage"></textarea>
                                </div>

                                <div class="form-group text-right">
                                    <button class="theme-btn btn-style-two" type="submit" name="submit-form">Send Massage</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Call Back Section -->

     <!-- Integrity Section -->
<section class="integrity-section">
    <div class="outer-container clearfix">
        <!--Content Column-->
        <div class="content-column">
            <div class="inner-column">
                <div class="sec-title">
                    <span class="title">Integrity</span>
                    <h2>Thinking of Building</h2>
                    <div class="text">We help global leaders with their organization’s most critical issues and opportunities. Together, we create enduring change and results.</div>
                </div>
                <div class="graph-image"><img src="{{ asset('assets/images/resource/graph.png') }}" alt=""></div>
                <div class="link-box"><a href="{{ route('services.index') }}" class="theme-btn">Explore All Cases</a></div>
            </div>
        </div>

        <div class="image-column" style="background-image: url({{ asset("assets/images/resource/image-3.png") }});">
            <div class="inner-column">
                <div class="image-box"><img src="{{ asset('assets/images/resource/image-3.png') }}" alt=""></div>
            </div>
        </div>
    </div>
</section>
<!-- End Integrity Section -->


<!-- Faq Section -->
<section class="faq-section style-two" style="background-image: url({{ asset('assets/images/background/7.jpg') }});">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="accordion-column col-lg-6 col-md-12 col-sm-12">
                <div class="sec-title light">
                    <span class="title">Some FAQ’s</span>
                    <h2>Frequently Asked Questions</h2>
                </div>             
                <!--Accordian Box-->
                <ul class="accordion-box">
                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn"><div class="icon">+</div>How to remove a business risk ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">The perfect harmony between innovation and creativity, our bathroom tiles are produced in compliance with the international standards. High quality 20mm thick porcelain tiles that can be laid on pedestals.</div>
                            </div>
                        </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block active-block">
                        <div class="acc-btn active"><div class="icon">+</div>Evidence shows advisers already working ?</div>
                        <div class="acc-content current">
                            <div class="content">
                                <div class="text">The perfect harmony between innovation and creativity, our bathroom tiles are produced in compliance with the international standards. High quality 20mm thick porcelain tiles that can be laid on pedestals.</div>
                            </div>
                        </div>
                    </li>
                    
                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn"><div class="icon">+</div>Conflicted advice can substantially compromise ? Expression</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">The perfect harmony between innovation and creativity, our bathroom tiles are produced in compliance with the international standards. High quality 20mm thick porcelain tiles that can be laid on pedestals.</div>
                            </div>
                        </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn"><div class="icon">+</div>Our ethos reflects our vision ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">The perfect harmony between innovation and creativity, our bathroom tiles are produced in compliance with the international standards. High quality 20mm thick porcelain tiles that can be laid on pedestals.</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="stat-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title light">
                        <span class="title">Some State skill</span>
                        <h2>Our Statistics Rate</h2>
                        <div class="text">This product is meant for educational purposes only. Resemblance to real persons, living or dead is coincidental.</div>
                    </div>             

                    <div class="progress-bars">
                        <!--Skill Item-->
                        <div class="bar-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Strategy &amp; Analysis</div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="74"></div><div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="74">0</span>%</div></div>
                                </div>
                            </div>
                        </div>

                        <!--Skill Item-->
                        <div class="bar-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Eeconomic Growth</div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="90"></div><div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="90">0</span>%</div></div>
                                </div>
                            </div>
                        </div>

                        <!--Skill Item-->
                        <div class="bar-item">
                            <div class="skill-header clearfix">
                                <div class="skill-title">Achieves Goals</div>
                            </div>
                            <div class="skill-bar">
                                <div class="bar-inner"><div class="bar progress-line" data-width="82"></div><div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="82">0</span>%</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Faq Section -->

    <!-- Why Choose Us -->
<section class="why-us-section">
    <div class="outer-box clearfix">
        <!-- Content Column -->
        <div class="content-column">
            <div class="inner-column">
                <div class="sec-title">
                    <span class="title">Why Us</span>
                    <h2>Read Why We Expert <br>in The Market</h2>
                    <div class="text">This product is meant for educational purposes only. Resemblance to real persons, living or dead is purely coincidental. Void prohibited. Some assembly required. List each check separately by number.</div>
                </div>
                <ul class="list-style-one clearfix">
                    <li><a href="{{ route("services.index") }}">Audit & Assurance</a></li>
                    <li><a href="{{ route("services.index") }}">Dedicated Team</a></li>
                    <li><a href="{{ route("services.index") }}">Best Advisors</a></li>
                    <li><a href="{{ route("services.index") }}">Network Solutions</a></li>
                    <li><a href="{{ route("services.index") }}">24/7 Supports</a></li>
                    <li><a href="{{ route("services.index") }}">Work Deadline</a></li>
                </ul>
                <div class="btn-box">
                    <a href="{{ route("services.index") }}" class="theme-btn btn-style-three">Get Start</a>
                </div>
            </div>
        </div>

        <!-- Image Column -->
        <div class="image-column" style="background-image: url({{ asset('assets/images/resource/image-2.jpg') }});">
            <figure class="image-box"><img src="{{ asset("assets/images/resource/image-2.jpg") }}" alt=""></figure>
        </div>
    </div>
</section>
<!--End Why Choose Us -->

<!-- Work Section -->
<section class="work-section style-two">
    <div class="auto-container">
        <div class="sec-title">
            <span class="title">How We Work</span>
            <h2>We Make Successful Business in 4 Steps</h2>
        </div>
        <div class="row clearfix">
            <!-- Work Step -->
            <div class="work-step col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <h3><span class="count">1</span> <a href="service-detail.html">Analize</a></h3>
                    <div class="text">We deliver business results via hands-on execution and leading teams through complex change.</div>
                </div>
            </div>

            <!-- Work Step -->
            <div class="work-step col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <h3><span class="count">2</span> <a href="service-detail.html">Advise</a></h3>
                    <div class="text">We deliver business results via hands-on execution and leading teams through complex change.</div>
                </div>
            </div>

            <!-- Work Step -->
            <div class="work-step col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <h3><span class="count">3</span> <a href="service-detail.html">Strategy</a></h3>
                    <div class="text">We deliver business results via hands-on execution and leading teams through complex change.</div>
                </div>
            </div>

            <!-- Work Step -->
            <div class="work-step col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <h3><span class="count">4</span> <a href="service-detail.html">Result</a></h3>
                    <div class="text">We deliver business results via hands-on execution and leading teams through complex change.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Work Section -->

<!-- About Us -->
<section class="about-us">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <span class="title">About Mushawart</span>
                    <h2>We Aim to Provide Expert Advice and Quality Service.</h2>
                    <div class="text">We are rethoric question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</div>
                    <div class="link-box">
                        <a href="about.html" class="theme-btn btn-style-three">About More</a>
                        <a href="#" class="theme-btn call-btn"><i class="icon la la-phone"></i> +880 258  58215</a>
                    </div>
                </div>
            </div>

            <!-- Video Column -->
            <div class="video-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <figure class="image"><img src="{{ asset('assets/images/resource/image-1.jpg') }}" alt=""></figure>
                    <div class="link-box"><a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="link" data-fancybox="gallery" data-caption=""><span class="icon la la-play-circle-o"></span></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us -->

    <!-- Testimonial Section -->
<section class="testimonial-section" style="background-image: url({{ asset('assets/images/background/3.jpg') }});">
    <div class="auto-container">
        <div class="testimonial-carousel owl-carousel owl-theme">
            <!-- Testimonial Block -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="info-box">
                        <div class="thumb"><img src="{{ asset('images/resource/thumb.jpg') }}" alt=""></div>
                        <h3 class="name">Sarah Arevik</h3>
                        <span class="designation">Chief Executive</span>
                    </div>
                    <div class="text">The Forexnic loan has been the most attractive loan products on the market, helping numerous businesses gain access to financing they would not be able to obtain conventionally and at extremely favorable rates and terms.</div>
                </div>
            </div>

            <!-- Testimonial Block -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="info-box">
                        <div class="thumb"><img src="{{ asset('assets/images/resource/thumb.jpg') }}" alt=""></div>
                        <h3 class="name">Sarah Arevik</h3>
                        <span class="designation">Chief Executive</span>
                    </div>
                    <div class="text">The Forexnic loan has been the most attractive loan products on the market, helping numerous businesses gain access to financing they would not be able to obtain conventionally and at extremely favorable rates and terms.</div>
                </div>
            </div>

            <!-- Testimonial Block -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="info-box">
                        <div class="thumb"><img src="{{ asset('assets/images/resource/thumb.jpg') }}" alt=""></div>
                        <h3 class="name">Sarah Arevik</h3>
                        <span class="designation">Chief Executive</span>
                    </div>
                    <div class="text">The Forexnic loan has been the most attractive loan products on the market, helping numerous businesses gain access to financing they would not be able to obtain conventionally and at extremely favorable rates and terms.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Section -->
	

@endsection