@extends('user.layout.main')
@section('title', 'Services | Sage Advisory')
@section('content')
 <!-- Page title -->
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
                        <li>Services</li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

<section class="flat-row section-services2">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="title-section style3 left">
                    <h1 class="title">Our Services</h1>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
            <div class="col-lg-3 col-sm-6">
                <div class="item style2 clearfix">
                    <div class="item-border clearfix">
                        <div class="featured-item">
                            @php
                            $service->image='images/'.$service->image;
                            @endphp

                            <a href="services-details.html"> <img src="{{asset($service->image)}}" alt="image"></a>
                        </div><!-- /.feature-item -->
                        <div class="content-item">
                            <h2 class="title-item"><a href="services-details.html">{{ $service->title }}</a></h2>
                            <p>{!! \Illuminate\Support\Str::limit($service->description, 150, '...') !!}</p>
                            <a href="/services/{{ $service->id }}" class="readmore">Check Details</a>
                        </div><!-- /.Content-item -->
                    </div><!-- /.item-border -->
                </div>
            </div>
            @endforeach

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
           <a href="/contact-us" class="flat-button style2">Let's Connect</a>
        </div>
    </div>
</section> --}}

<section class="flat-row v3 parallax parallax4">
    <div class="section-overlay style2"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section style2 color-white padding-lr180 text-center">
                    <h1 class="title">{!!html_entity_decode($req1->value)!!}</h1>
                    <div class="sub-title">
                        {!!html_entity_decode($req2->value)!!}
                    </div>
                    <a href="/contact-us" class="flat-button mt-3">Let's Connect</a>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div>
</section>
@endsection
