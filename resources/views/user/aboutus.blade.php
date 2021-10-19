@extends('user.layout.main')
@section('title', 'About Us | Sage Advisory')
@section('content')
 <!-- Page title -->
 <div class="page-title parallax parallax1">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">About Us</h1>
                </div><!-- /.page-title-captions -->
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"><i class="fa fa-home"></i><a href="/">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

</section>

<section class="flat-row">
    <div class="container">
        <div class="">
            {!!html_entity_decode($aboutus->value)!!}
        </div>
    </div>
</section>

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
