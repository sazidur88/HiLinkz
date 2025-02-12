@extends('layouts.web-inner')
@section('title', 'DipSpace')

@section('custom_styles')
    <style type="text/css">
        h3 {
            font-size: 40px;
        }

        .ease-out {
            /* border: 5px solid #ccc; */
            /* float: left; */
            margin-top: 10px;
            -webkit-transition: margin 0.5s ease-out;
            -moz-transition: margin 0.5s ease-out;
            -o-transition: margin 0.5s ease-out;
        }

        .ease-out:hover {
            margin-top: 2px;
        }

    </style>
@endsection
@php
$address = hilinkz_contact();
$location_bd = $address['address_bd'];
$location_aus = $address['address_aus'];
$email_bd1 = $address['email_bd1'];
$email_bd2 = $address['email_bd2'];
$email_aus = $address['email_aus'];
$phone_bd1 = $address['phone_bd1'];
$phone_bd2 = $address['phone_bd2'];
$phone_aus = $address['phone_aus'];
$map_bd = $address['map_bd'];
$map_aus = $address['map_aus'];
@endphp
@section('content')
    <!-- Start Breadcrump Area  -->
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--dipspace" data-black-overlay="1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient">DipSpace</h2>
                        <p>To dip into digital space for digital asset management</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrump Area  -->

    <!-- Start Column Area  -->
    <div class="rn-column-area rn-section-gap-work bg_color--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-column text-justify">
                        <h3 class="text-left title-h3">About DipSpace</h3>
                        <p>Digital assets like documents, media files etc. can be stored, managed and shared by this
                            software. DipSpace is a customized work built upon DSpace, an open source software for academic,
                            non-profit & commercial organizations to build open digital repositories. At HiLinkz we have the
                            necessary expertise to customize DSpace and implement it for organizational repositories. </p>

                        <p>DSpace was originally developed by MIT Libraries and Hewlett-Packard (HP) Labs as an open source
                            project in 2002. It became a <a href="http://duraspace.org/dspace/" target="_blank"><b
                                    class="text-primary">DuraSpace</b></a> project in 2009. Today it is the most widely
                            used repository software platform (open source or proprietary), with more than 2,000
                            installations worldwide. Mostly academic and research institutions use this software to manage
                            and publish scholarly articles as an open access institutional repository. Also many other
                            government, private and commercial institutions use this software to manage their digital
                            assets. </p>
                    </div>
                </div>
                <div class="col-lg-12 text-center mt--50 mb--30">
                    <div class="inner-wrapper">
                        <div class="inner pb--20">
                            <div class="thumbnail">
                                <img class=""
                                    src="{{ asset('assets/images/work/dipspace/dipspace-cover.jpeg') }}" alt="Blog Images">
                            </div>
                        </div>
                        <span class="font-weight-bold">Figure 1: Visual explanation of DSpace</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->

    <!-- Services Section Start -->
    <div class="rn-column-area rn-section-gap-work bg_color--5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-column text-center pb--40">
                        <h3 class="text-center theme-gradient">Top Reasons to use DSpace</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 ease-out">
                    <div class="service-item style-2">
                        <div class="content">
                            <h5 class="card-title">Large number of users</h5>

                            <p class="card-text">More than 1000 organizations are using DSpace worldwide and there is a
                                large number of developers for this software.</p>
                            <!-- <a class="btn-link" href="#">read more</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 ease-out">
                    <div class="service-item style-2">
                        <div class="content">
                            <h5 class="card-title">Completely Customizable</h5>

                            <p class="card-text">DSpace is customizable for authentication, look and feel of an
                                institution’s website and any fields one likes to display for browsing.</p>
                            <!-- <a class="btn-link" href="#">read more</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 ease-out">
                    <div class="service-item style-2">
                        <div class="content">
                            <h5 class="card-title">All types of digital assets</h5>

                            <p class="card-text">Although DSpace can recognize and manage file formats such as PDF,
                                Word, JPEG, MPEG, TIFF etc., files of any format can be managed.</p>
                            <!-- <a class="btn-link" href="#">read more</a> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services Section End -->



    <!-- End Column Area  -->
    <div class="button-group mt--30 mb--30 text-center">
        <a class="btn-transparent rn-btn-dark" href="{{ route('our_works') }}"><span class="text font-italic">View More
                Works </span><i class="fas fa-arrow-right"></i></a>
    </div>

    <!-- Contact Form Starts Here -->
    <div class="rn-contact-area rn-section-gap-work  bg_color--5" id="contact">
        <div class="contact-form--1">
            <div class="container">
                <div class="row row--35 align-items-start">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="section-title text-left mb--50 mb_sm--30 mb_md--30">
                            <h2 class="title">Get Started</h2>
                            <p class="description">We always want to hear from you. Connect with us via phone:
                                <a href="tel:{{ $phone_bd1 }}"> {{ $phone_bd1 }}</a> or email:
                                <a href="mailto:{{ $email_bd1 }}">{{ $email_bd1 }}</a>
                            </p>
                        </div>
                        <div class="form-wrapper">
                            <form action="{{ route('contact_us_send_message') }}" method="POST">
                                @csrf

                                <label>
                                    <input type="text" name="name" id="item01" placeholder="Your Name *" required />
                                </label>

                                <label>
                                    <input type="text" name="email" id="item02" placeholder="Your email *" required>
                                </label>

                                <label>
                                    <input type="text" name="subject" id="item03" placeholder="Write a Subject">
                                </label>
                                <label>
                                    <input type="text" name="phone" id="item04" placeholder="Your phone no.">
                                </label>
                                <label>
                                    <textarea id="item04" name="message" placeholder="Your Message"></textarea>
                                </label>

                                <button class="rn-button-style--2 btn_solid" type="submit" value="submit" name="submit"
                                    id="mc-embedded-subscribe">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="thumbnail mb_md--40 mb_sm--40">
                            <img src="{{ asset('assets/images/about/LetsTalk.jpg') }}" alt="trydo" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('custom_js')

@endsection
