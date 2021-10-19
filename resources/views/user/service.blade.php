
@extends('user.layout.main')
@php
$title=$service->title . " | Sage Advisory";
@endphp
@section('title')
{{$title}}
@endsection
@section('content')
<div class="page-title parallax parallax1">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Services</h1>
                </div><!-- /.page-title-captions -->
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"><i class="fa fa-home"></i><a href="/">Home</a></li>
                        <li><a href="/services">Services</a></li>
                        <li>{{ $service->title }}</li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->


<div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

    <!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->
    <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
        <div class="slotholder"></div>

            <ul><!-- SLIDE  -->

                <!-- SLIDE 1 -->
                <li data-index="rs-3049" data-transition="fade" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- <div class="overlay">
                    </div> -->
                    <!-- MAIN IMAGE -->
                    @php
                    $service->image='images/'.$service->image;
                    @endphp
                    <img src="{{asset($service->image)}}"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption title-slide"
                        id="slide-3049-layer-1"
                        data-x="['left','left','left','left']" data-hoffset="['35','20','50','50']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-96','-96','-96','-96']"
                        data-fontsize="['60','60','50','33']"
                        data-lineheight="['70','70','50','35']"
                        data-fontweight="['700','700','700','700']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"

                        data-type="text"
                        data-responsive_offset="on"

                        data-frames='[{"delay":100,"speed":3000,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[10,10,10,10]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 16; white-space: nowrap">{{ $service->title }}
                    </div>

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption sub-title"
                        id="slide-3049-layer-4"
                        data-x="['left','left','left','left']" data-hoffset="['35','20','50','50']"
                        data-y="['middle','middle','middle','middle']" data-voffset="['-14','-14','-14,'-14']"
                        data-fontsize="['18',18','18','16']"
                        data-lineheight="['30','30','22','16']"
                        data-fontweight="['400','400','400','400']"
                        data-width="['800',800','600','400']"
                        data-height="none"
                        data-whitespace="['nowrap',normal','normal','normal']"

                        data-type="text"
                        data-responsive_offset="on"

                        data-frames='[{"delay":1100,"speed":3000,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"

                        style="z-index: 17; white-space: normal;">
                    </div>
                </li>

            </ul>
    </div>
</div><!-- END REVOLUTION SLIDER -->

<section class="flat-row">
    <div class="container">
        <div class="">
            {!! $service->description !!}
        </div>
    </div>
</section>


{{-- <section class="flat-quote bg-theme clearfix">
    <div class="container">
        <div class="quote-text float-left">
           <h3>Would you like to speak to one of our financial advisers?</h3>
           <p>Just submit your contact details and we’ll be in touch shortly.</p>
        </div>
        <div class="quote-link float-right">
           <a href="#" class="flat-button style2">Let's Connect</a>
        </div>
    </div>
</section> --}}

<section class="flat-row v3 parallax parallax4">
    <div class="section-overlay style2"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section style2 color-white padding-lr180 text-center">
                    <h1 class="title">Request a call back.</h1>
                    <div class="sub-title">
                        Would you like to speak to one of our financial advisers? Just submit your contact details and we’ll be in touch shortly. You can also email us if you prefer that type of communication.
                    </div>
                    <a href="/contact-us" class="flat-button mt-3">Let's Connect</a>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div>
</section>

@endsection
