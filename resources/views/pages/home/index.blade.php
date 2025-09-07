@extends('layouts.master')
@section('content')

<!--Main Slider-->
<section class="main-slider">
    <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
        <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
            <ul>
                <!-- Slide 1 -->
                
                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('assets/images/slides/slide1.png') }}">

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
                        <h4>titre</h4>
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
                        <h2> </h2>
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
                        <div class="text"></div>
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

                


                <!-- Slide 1 -->
                 <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src=" {{ asset('assets/images/slides/slide2.png') }}">

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
                        <h4> </h4>
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
                        <h2> </h2>
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
                        <div class="text"> </div>
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

                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('assets/images/slides/slide3.png') }}">

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
                        <h4></h4>
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
                        <h2> </h2>
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
                        <div class="text"></div>
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
                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('assets/images/slides/slide4.png') }}">

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
                        <h4></h4>
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
                        <h2> </h2>
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
                        <div class="text"></div>
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

                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('assets/images/slides/slide5.jpg') }}">

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
                        <h4></h4>
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
                        <h2> </h2>
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
                        <div class="text"></div>
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
                <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{ asset('assets/images/slides/slide6.jpg') }}">

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
                        <h4></h4>
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
                        <h2> </h2>
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
                        <div class="text"></div>
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
                    <span class="title">À propos de Masadigitale</span>
                    <h2>Nous aidons les entreprises à grandir grâce au digital et au marketing moderne.</h2>
                    <div class="text">
                        Masadigitale est une entreprise spécialisée dans le marketing digital, la création de solutions web et la communication en ligne. 
                        Notre mission est d’accompagner les entrepreneurs, PME et grandes entreprises dans leur transformation digitale afin d’augmenter leur visibilité, attirer plus de clients et développer leurs performances.  
                        Avec une équipe jeune, créative et passionnée, nous mettons en place des stratégies personnalisées et innovantes adaptées au marché malien et international.
                    </div>
                    <div class="link-box">
                        <a href="{{ route('about.index') }}" class="theme-btn btn-style-three">En savoir plus</a>
                        <a href="tel:+22392516405" class="theme-btn call-btn"><i class="icon la la-phone"></i> +223 92516405</a>
                    </div>
                </div>
            </div>

            <!-- Video Column -->
            <div class="video-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <figure class="image"><img src="{{ asset('assets/images/slides/slide6.jpg') }}" alt="Présentation Masadigitale"></figure>
                    <div class="link-box">
                        <a href="https://youtube.com/@masadigitale?si=IE7ggFBmOyzMRXYP" class="link" data-fancybox="gallery" data-caption="Présentation de Masadigitale">
                            <span class="icon la la-play-circle-o"></span>
                        </a>
                    </div>
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
                    <span class="title">Pourquoi choisir Masadigitale</span>
                    <h2>Le partenaire digital <br>qui fait grandir votre entreprise</h2>
                    <div class="text">
                        Dans un monde en pleine transformation numérique, Masadigitale accompagne les entreprises maliennes et africaines dans leur croissance grâce à des solutions digitales modernes, efficaces et adaptées à leur marché.  
                        Notre équipe jeune et créative combine expertise en <strong>marketing digital, communication en ligne et développement web</strong> pour booster votre visibilité, attirer plus de clients et améliorer vos performances.
                    </div>
                </div>
                <ul class="list-style-one clearfix">
                    @foreach ($getServices as $item)
                        <li><a href="{{ route('services-detail', ['title'=>$item->title]) }}">{{ $item->title }} </a></li>
                    @endforeach
                </ul>
                <div class="btn-box">
                    <a href="{{ route('services.index') }}" class="theme-btn btn-style-three">Découvrir nos services</a>
                </div>
            </div>
        </div>

        <!-- Image Column -->
        <div class="image-column" style="background-image: url({{ asset('assets/images/about/about3.jpeg') }});">
            <figure class="image-box">
                <img src="{{ asset('assets/images/resource/imag-2.jpg') }}" alt="Pourquoi choisir Masadigitale">
            </figure>
        </div>
    </div>
</section>
<!--End Why Choose Us -->

<!-- Call To Action -->
<section class="call-to-action" style="background-image: url({{ asset('assets/images/background/2.jpg') }});">
    <div class="auto-container">
        <div class="outer-box clearfix">
            <div class="title-column">
                <h3>Des solutions digitales fiables et innovantes pour faire évoluer votre activité</h3>
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



<!-- Cases Section -->
<section class="cases-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Nos Réalisations</span>
            <h2>Projets digitaux signés Masadigitale</h2>
            <p>Découvrez quelques-unes de nos meilleures créations en <strong>marketing digital, conception de sites web et communication en ligne</strong>, réalisées pour accompagner nos clients vers plus de visibilité et de performance.</p>
        </div>

        <div class="row clearfix">
            <!-- Bloc Cas -->
             @foreach ($latestServices as $item)
                <div class="case-block col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <div class="image">
                            <a href="{{ asset('storage/' . $item->image) }}" class="lightbox-image" data-fancybox="gallery">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="Projet digital : {{ $item->title }}">
                            </a>
                        </div>
                        <div class="caption-box">
                            <h5>
                                <a href="{{ route('services-detail', ['title' => $item->title]) }}">
                                    {{ $item->title }}
                                </a>
                            </h5>
                            <ul class="info">
                                <li>{{ $item->short }}</li>
                            </ul>
                            <div class="icon-box">
                                <a href="{{ route('services-detail', ['title' => $item->title]) }}">
                                    <i class="la la-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- End Bloc Cas -->
        </div>

        <div class="btn-box text-center">
            <a href="{{ route('services.index') }}" class="theme-btn btn-style-three">Voir tous nos projets</a>
        </div>
    </div>
</section>
<!-- End Cases Section -->

<!--End Cases Section -->


<!-- Call Back Section -->
<section class="call-back-section" style="background-image: url({{ asset('assets/images/porte.jpeg') }});">
    <div class="outer-box">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Texte -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3>Des solutions digitales sur mesure<br> pour votre entreprise</h3>
                        <div class="text">
                            Que ce soit pour développer votre <strong>application mobile</strong>, créer un <strong>site web professionnel</strong>, 
                            mettre en place une <strong>application de gestion d’entreprise ou de stock</strong>, ou encore booster votre 
                            <strong>visibilité digitale</strong> via les réseaux sociaux, Masadigitale est votre partenaire de confiance.
                        </div>
                    </div>
                </div>

                <!-- Formulaire -->
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
                                    <input type="text" name="subject" placeholder="Votre besoin (ex: appli mobile, gestion de stock, site web)">
                                </div>

                                <div class="form-group">
                                    <textarea name="message" placeholder="Décrivez votre projet..."></textarea>
                                </div>

                                <div class="form-group text-right">
                                    <button class="theme-btn btn-style-two" type="submit" name="submit-form">
                                        Envoyer la demande
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Fin Formulaire -->
            </div>
        </div>
    </div>
</section>
<!-- End Call Back Section -->



<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="title">Notre Équipe</span>
            <h2>Les talents derrière Masadigitale</h2>
            <p>Une équipe jeune, dynamique et passionnée, spécialisée dans la création 
               d’<strong>applications mobiles</strong>, de <strong>logiciels de gestion</strong>, 
               et de <strong>solutions digitales</strong> adaptées aux entreprises africaines.</p>
        </div>

        <div class="row clearfix">
            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image">
                            <a href="{{ asset('assets/images/equipe/tiefing.jpeg') }}" 
                               class="lightbox-image" data-fancybox="gallery">
                               <img src="{{ asset('assets/images/equipe/tiefing.jpeg') }}" alt="Directeur Masadigitale">
                            </a>
                        </div>
                    </div>
                    <div class="info-box">
                        <h4 class="name">SANGARE Tiefing</h4>
                        <span class="designation">Directeur Général & Fondateur</span>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image">
                            <a href="{{ asset('assets/images/equipe/awa.jpeg') }}" 
                               class="lightbox-image" data-fancybox="gallery">
                               <img src="{{ asset('assets/images/equipe/awa.jpeg') }}" alt="Commerciale Masadigitale">
                            </a>
                        </div>
                    </div>
                    <div class="info-box">
                        <h4 class="name">COULIBALY Haoua</h4>
                        <span class="designation">Responsable Commerciale</span>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image">
                            <a href="{{ asset('assets/images/equipe/kadi.png') }}" 
                               class="lightbox-image" data-fancybox="gallery">
                               <img src="{{ asset('assets/images/equipe/kadi.png') }}" alt="Comptable Masadigitale">
                            </a>
                        </div>
                    </div>
                    <div class="info-box">
                        <h4 class="name">DEMBELE Kafiatou</h4>
                        <span class="designation">Secrétaire & Comptable</span>
                    </div>
                </div>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="image-box">
                        <div class="image">
                            <a href="{{ asset('assets/images/equipe/mohamed.jpg') }}" 
                               class="lightbox-image" data-fancybox="gallery">
                               <img src="{{ asset('assets/images/equipe/mohamed.jpg') }}" alt="Développeur Masadigitale">
                            </a>
                        </div>
                    </div>
                    <div class="info-box">
                        <h4 class="name">SANGARE Mohamed</h4>
                        <span class="designation">Développeur</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Team Section -->


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
<!-- <section class="clients-section">
    <div class="auto-container">
        <div class="sponsors-outer">
            
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/1.png') }}" alt=""></a></figure></li>
                
            </ul>
        </div>
    </div>
</section>-->
<!--End Clients Section--> 


@endsection






