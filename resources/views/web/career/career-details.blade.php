@extends('layouts.web-inner')
@section('title', 'Job Details')

@section('custom_styles')
    <style type="text/css">

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
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--contact" data-black-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient">Job Details</h2>
                        <!-- <p>Fresh From The Press Discription</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrump Area  -->
    <!-- Start Column Area  -->
    <div class="rn-column-area rn-section-gap-custom bg_color--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-column text-justify">
                        <h3 class="text-left title-h3 text-danger mb--50">Intern (Web, PHP, React, Flutter, Startup-Development &
                            Marketing)</h3>
                        <p class="mb--30">If you are interested to apply for the position, please follow the below Google Form link and submit your application with updated Resume. Good Luck!<br>

                            <p class="">Application link: <a href="http://form.google.com" class="text-primary">http://form.google.com/###########################</a></p>

                            <p class="mb--30">** Only short listed candidates will be called for interview.</p><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->


    <!-- Contact Form Starts Here -->
    <div class="rn-contact-area rn-section-gap bg_color--5" id="contact">
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
                    <!-- <div class="col-lg-6 order-1 order-lg-2">
                            <div class="footer-left">
                                <div class="inner">
                                    <span>Ready To Do This</span>
                                    <h2 class="text-white">Get to work</h2>
                                    <a class="rn-button-style--2" href="{{ route('contact_form') }}">
                                        <span>Contact Us</span>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
        </div>
    </div>


@endsection

@section('custom_js')

@endsection
