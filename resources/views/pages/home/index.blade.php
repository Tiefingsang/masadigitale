@extends('layouts.master')
@section('content')

<!--Main Slider-->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                <!-- Slide 1 -->
                {{-- @foreach ($slider as $item) --}}
                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset( $slider->image) }}">

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-width="auto"
                    data-hoffset="['0','15','15','15']"
                    data-voffset="['-165','-165','-165','-165']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <h4>{{ $slider->title }}</h4>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-fontsize="['64','40','36','24']"
                    data-width="auto"
                    data-hoffset="['0','15','15','15']"
                    data-voffset="['-75','-75','-85','-95']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"delay":500,"split":"chars","splitdelay":0.1,"speed":2000,"frame":"0","from":"x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h2>{{ $slider->short }}</h2>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="normal"
                    data-width="['600','800','750','550']"
                    data-hoffset="['0','15','15','15']"
                    data-voffset="['15','15','15','15']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="text">{{ $slider->description }}</div>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-width="auto"
                    data-hoffset="['-10','5','5','5']"
                    data-voffset="['140','140','140','150']"
                    data-x="['left','left','left','left']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    <a href="{{ route('about.index') }}" class="theme-btn btn-style-one"><span>En savoir plus</span></a>
                    <a href="{{ route('services.index') }}" class="theme-btn btn-style-two"><span>Nos services</span></a>

                    </div>
                </li>

                {{-- @endforeach --}}


                <!-- Slide 1 -->
                 <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset( $slider1->image) }}">

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-textalign="center"
                    data-width="auto"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-165','-165','-165','-165']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <h4>{{ $slider1->short }}</h4>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-textalign="center"
                    data-whitespace="nowrap"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-75','-75','-75','-95']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h2>Experaiences</h2>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="normal"
                    data-textalign="center"
                    data-width="['600','600','600','500']"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['15','15','15','15']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="text">{{ $slider1->description }}</div>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-width="auto"
                    data-textalign="center"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['140','140','140','160']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    <a href="{{ route('about.index') }}" class="theme-btn btn-style-one"><span>En savoir plus</span></a>
                    <a href="{{ route('services.index') }}" class="theme-btn btn-style-two"><span>Nos services</span></a>

                    </div>
                </li>

                {{-- <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset( $slider2->image) }}">

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-textalign="center"
                    data-width="auto"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-165','-165','-165','-165']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <h4>{{ $slider2->short }}</h4>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-textalign="center"
                    data-whitespace="nowrap"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-75','-75','-75','-95']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                        <h2>Experaiences</h2>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="normal"
                    data-textalign="center"
                    data-width="['600','600','600','500']"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['15','15','15','15']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                        <div class="text">{{ $slider2->description }}</div>
                    </div>

                    <div class="tp-caption"
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-width="auto"
                    data-textalign="center"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['140','140','140','160']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                    <a href="{{ route('about.index') }}" class="theme-btn btn-style-one"><span>En savoir plus</span></a>
                    <a href="{{ route('services.index') }}" class="theme-btn btn-style-two"><span>Nos services</span></a>

                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</section>
<!--End Main Slider-->

<!-- About Us -->
<section class="about-us">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <span class="title">À propos de EGS S.A.R.L</span>
                    <h2>Une entreprise au service de l’innovation, du BTP et du développement au Mali.</h2>
                    <div class="text">
                        Créée en 2011 sous le nom de SATEC, EGS S.A.R.L est une entreprise malienne spécialisée dans les services informatiques, le bâtiment et le commerce général. Grâce à une équipe jeune, dynamique et compétente, nous accompagnons les entreprises publiques et privées dans l’amélioration de leurs performances à travers des solutions sur mesure et un engagement de qualité.
                    </div>
                    <div class="link-box">
                        <a href="{{ route('about.index') }}" class="theme-btn btn-style-three">En savoir plus</a>
                        <a href="tel:+22398256435" class="theme-btn call-btn"><i class="icon la la-phone"></i> +223 98 25 64 35</a>
                    </div>
                </div>
            </div>

            <!-- Video Column -->
            <div class="video-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <figure class="image"><img src="{{ asset( $slider1->image) }}" alt=""></figure>
                    <div class="link-box"><a href="https://www.youtube.com/watch?v=SfFmnvikknQ&list=PPSV&t=1093s" class="link" data-fancybox="gallery" data-caption=""><span class="icon la la-play-circle-o"></span></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Us -->


<!-- Services Section -->
<section class="services-section" style="background-image: url({{ asset('assets/images/background/1.jpg') }});">
    <div class="auto-container">
        <div class="sec-title light">
            <span class="title">Nos Services</span>
            <h2>Ce que nous proposons</h2>
        </div>


        <div class="services-carousel owl-carousel owl-theme">

            @foreach ($getServices as $item)
                <div class="service-block">
                    <div class="inner-box" style="background-image: url('{{ $item->image }}')">
                        <div class="content-box">
                            <span class="{{ $item->icone }}"></span>
                            <h3><a href="service-detail.html">{{ $item->title }}</a></h3>
                            <div class="text">
                                {{-- {{ $item->description }} --}}
                                {{ \Illuminate\Support\Str::limit($item->description, 50, '...') }}
                            </div>
                            <div class="link-box"><a href="service-detail.html">En savoir plus <i class="la la-angle-double-right"></i></a></div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</section>
<!-- End Services Section -->

<!-- Why Choose Us -->
<section class="why-us-section">
    <div class="outer-box clearfix">
        <!-- Content Column -->
        <div class="content-column">
            <div class="inner-column">
                <div class="sec-title">
                    <span class="title">Pourquoi choisir EGS S.A.R.L</span>
                    <h2>Une expertise multidisciplinaire <br>au service de votre performance</h2>
                    <div class="text">
                        Depuis plus de 10 ans, EGS S.A.R.L s'engage à fournir des prestations fiables, innovantes et adaptées aux réalités locales. Notre équipe jeune et dynamique combine savoir-faire technique et rigueur professionnelle pour répondre efficacement à vos besoins en informatique, BTP et services généraux.
                    </div>
                </div>
                <ul class="list-style-one clearfix">
                    @foreach ($getServices as $item)
                        <li><a href="{{ route('services-detail', ['title'=>$item->title]) }}">{{ $item->title }} </a></li>
                    @endforeach
                </ul>
                <div class="btn-box">
                    <a href="{{ route('services.index') }}" class="theme-btn btn-style-three">Commencer</a>
                </div>
            </div>
        </div>

        <!-- Image Column -->
        <div class="image-column" style="background-image: url({{ asset('assets/images/about/about3.jpeg') }});">
            <figure class="image-box"><img src="{{ asset('assets/images/resource/imag-2.jpg') }}" alt=""></figure>
        </div>
    </div>
</section>

<!--End Why Choose Us -->

<!-- Call To Action -->
<section class="call-to-action" style="background-image: url({{ asset('assets/images/background/2.jpg') }});">
    <div class="auto-container">
        <div class="outer-box clearfix">
            <div class="title-column">
                <h3>Des solutions informatiques, techniques et commerciales fiables pour faire évoluer votre activité</h3>
            </div>

            <div class="btn-column">
                <div class="btn-box">
                    <a href="{{ route('contact.index') }}" class="theme-btn btn-style-one">Nous Contacter</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Call To Action -->


<!-- Cases Section Section -->
<section class="cases-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Nos Meilleures Réalisations</span>
            <h2>Projets réalisés par EGS S.A.R.L</h2>
        </div>

        <div class="row clearfix">
            <!-- Bloc Cas -->
             @foreach ($latestServices as $item)
                <div class="case-block col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <div class="image">
                            <a href="{{ asset('storage/' . $item->image) }}" class="lightbox-image" data-fancybox="gallery">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                            </a>
                        </div>
                        <div class="caption-box">
                            <h5><a href="{{ route('services-detail', ['title' => $item->title]) }}">{{ $item->title }}</a></h5>
                            <ul class="info">
                                <li>{{ $item->short }}</li>
                                
                            </ul>
                            <div class="icon-box">
                                <a href="{{ route('services-detail', ['title' => $item->title]) }}"><i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- End Bloc Cas -->


           
            
        </div>

        <div class="btn-box">
            <a href="{{ route('services.index') }}" class="theme-btn btn-style-three">Voir Tout</a>
        </div>

    </div>
</section>
<!--End Cases Section -->


<!-- Call Back Section -->
<section class="call-back-section" style="background-image: url({{ asset('assets/images/porte.jpeg') }});">
    <div class="outer-box">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3>Vous êtes à quelques clics<br> d'une solution fiable et sur mesure</h3>
                        <div class="text">Confiez vos projets à EGS S.A.R.L pour des résultats concrets en informatique, BTP et commerce général.</div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="appointment-form">
                            <div class="title-box">
                                <span>Notre équipe est à votre écoute</span>
                                <h3>Demandez à être rappelé</h3>
                            </div>

                            <form method="post" action="">
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Nom" required="">
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Objet">
                                </div>

                                <div class="form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>

                                <div class="form-group text-right">
                                    <button class="theme-btn btn-style-two" type="submit" name="submit-form">Envoyer le message</button>
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


<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">L'équipe</span>
            <h2>Operations Direction</h2>
        </div>

        <div class="row clearfix">
            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image"><a href="{{ asset('assets/images/equipe/mohamed.jpg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/equipe/mohamed.jpg') }}" alt=""></a></div>
                        <!-- <ul class="social-links">
                            <li><a href="#"><i class="la la-facebook-official"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-google-plus"></i></a></li>
                            <li><a href="#"><i class="la la-dribbble"></i></a></li>
                            <li><a href="#"><i class="la la-pinterest"></i></a></li>
                        </ul> -->
                    </div>
                    <div class="info-box">
                        <h4 class="name"><a href="team.html">M.SANGARE Mohamed</a></h4>
                        <span class="designation">Directeur et Fondateur</span>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image"><a href="{{ asset('assets/images/equipe/awa.jpeg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/equipe/awa.jpeg') }}" alt=""></a></div>
                        <ul class="social-links">
                            <li><a href="#"><i class="la la-facebook-official"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-google-plus"></i></a></li>
                            <li><a href="#"><i class="la la-dribbble"></i></a></li>
                            <li><a href="#"><i class="la la-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <h4 class="name"><a href="team.html">COULIBALY Haoua</a></h4>
                        <span class="designation">commerciale</span>
                    </div>

                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image"><a href="{{ asset('assets/images/equipe/kadi.png') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/equipe/kadi.png') }}" alt=""></a></div>
                        <ul class="social-links">
                            <li><a href="#"><i class="la la-facebook-official"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-google-plus"></i></a></li>
                            <li><a href="#"><i class="la la-dribbble"></i></a></li>
                            <li><a href="#"><i class="la la-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <h4 class="name"><a href="team.html">DEMBELE Kafiatou</a></h4>
                        <span class="designation">Sécretaire et comptable</span>
                    </div>

                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image"><a href="{{ asset('assets/images/equipe/tiefing.jpeg') }}" class="lightbox-image" data-fancybox="gallery"><img src="{{ asset('assets/images/equipe/tiefing.jpeg') }}" alt=""></a></div>
                        <ul class="social-links">assets/images/resource/team-4.jpg
                            <li><a href="#"><i class="la la-facebook-official"></i></a></li>
                            <li><a href="#"><i class="la la-twitter"></i></a></li>
                            <li><a href="#"><i class="la la-google-plus"></i></a></li>
                            <li><a href="#"><i class="la la-dribbble"></i></a></li>
                            <li><a href="#"><i class="la la-pinterest"></i></a></li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <h4 class="name"><a href="team.html">M.SANGARE Mohamed</a></h4>
                        <span class="designation">Dévéloppeur</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Team Section -->

<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <div class="sec-title">
            <span class="title">Ne manquez pas</span>
            <h2>Nos dernières nouvelles</h2>
        </div>

        <!-- <div class="news-carousel owl-carousel owl-theme">
           
            @foreach ($getBlogs as $item)
            <div class="news-block">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image"><a href="{{ route('blogs-detail', ['slug'=>$item->slug]) }}"><img src="{{ $item->image }}" alt=""></a></div>
                    </div>
                    <div class="lower-content">
                        <h3><a href="{{ route('blogs-detail', ['slug'=>$item->slug]) }}">{{ $item->title }}</a></h3>
                        <span class="date">Publié : {{ $item->created_at }}</span>
                        <div class="text">{{ $item->contente }}</div>
                        <div class="link-box"><a href="{{ route('blogs-detail', ['slug'=>$item->slug]) }}">Lire la suite</a></div>
                    </div>
                </div>
            </div>
            @endforeach




        </div> -->

        </div>
    </div>
</section>
<!-- News Section -->

<!-- Testimonial Section -->
<section class="testimonial-section" style="background-image: url({{ asset('assets/images/background/3.jpg') }});">
    <div class="auto-container">
        <div class="testimonial-carousel owl-carousel owl-theme">
            <!-- Testimonial Block -->
            @foreach ($getClients as $item)
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="info-box">
                            <div class="thumb">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                            </div>
                            <h3 class="name">{{ $item->name }}</h3>
                            
                        </div>
                        <div class="text">{{ $item->description }}</div>
                    </div>
                </div>
            @endforeach


            <!-- Bloc de Témoignage -->
            

        </div>
    </div>
</section>
<!-- End Testimonial Section -->

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
<!--End Clients Section-->


@endsection






