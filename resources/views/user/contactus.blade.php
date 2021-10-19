@extends('user.layout.main')
@section('title', 'Contact Us | Sage Advisory')
@section('content')
<div class="page-title parallax parallax1">
    <div class="section-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading">
                    <h1 class="title">Contact Us</h1>
                </div><!-- /.page-title-captions -->
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"><i class="fa fa-home"></i><a href="/">Home</a></li>
                        <li><a href="new-fullwidth.html">Contact</a></li>
                    </ul>
                </div><!-- /.breadcrumbs -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.page-title -->

<section class="flat-row page-contact">
    <div class="container">
        <div class="wrap-infobox">
            <div class="row">
                <div class="col-lg-4">
                    <div class="info-box text-center">
                        <h3>France</h3>
                        <ul>
                            <li>John Doe, 123 Main St Chicago, IL 60626</li>
                            <li>Email: info@greenorganic.com</li>
                            <li>Phone: 258-556-189</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-box text-center">
                        <h3>United States</h3>
                        <ul>
                            <li>John Doe, 123 Main St Chicago, IL 60626</li>
                            <li>Email: info@greenorganic.com</li>
                            <li>Phone: 258-556-189</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-box text-center">
                        <h3>Viet Nam</h3>
                        <ul>
                            <li>John Doe, 123 Main St Chicago, IL 60626</li>
                            <li>Email: info@greenorganic.com</li>
                            <li>Phone: 258-556-189</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="wrap-formcontact">
            <div class="row">
                <div class="col-lg-5">
                    <h1>How can we help you?</h1>
                    <div class="list-author">
                        <div class="info-author clearfix">
                            <div class="featured-author float-left">
                                <img src="images/team/c1.jpg" alt="image">
                            </div>
                            <div class="contact-author">
                                <h3>Azure Wilson</h3>
                                <ul>
                                    <li>Customer Realations</li>
                                    <li>963.806.0919</li>
                                    <li>AzureWilson@consulting.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-author clearfix">
                            <div class="featured-author float-left">
                                <img src="images/team/c2.jpg" alt="image">
                            </div>
                            <div class="contact-author">
                                <h3>Keith Wilson</h3>
                                <ul>
                                    <li>Customer Support</li>
                                    <li>963.806.0919</li>
                                    <li>KeithWilson@consulting.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="margin-left_12">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                           @endif
                           @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                           @endif
                           @if (session('fail'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('fail') }}
                            </div>
                           @endif
                        <form class="contactform style4 clearfix" method="post" action="/F39B993C2AA0285BEE3CDEEEC14EC530FB23CF192525581EDA0B25D0319FF1E3">
                            @csrf
                            <span class="flat-input"><input name="name" id="name" type="text" placeholder="Name*" required="required"></span>
                            <span class="flat-input"><input name="email" id="email" type="email" placeholder="Email*" required="required"></span>
                            <span class="flat-input"><input name="Mobilenumber" id="number" type="text" placeholder="Number*"></span>
                            <span class="flat-input"><textarea name="message" placeholder="Message*" required="required"></textarea></span>
                            <span class="flat-input"><button name="submit" type="submit" class="flat-button" id="submit" title="Submit now">send message</button></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
