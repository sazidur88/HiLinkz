@extends('layouts.web-inner')
@section('title', 'Contact With Us')

@section('custom_styles')
    <style type="text/css">
        .bg_text_color {
            color: #f8f9fc !important;
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
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--contact" data-black-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient">Contact With Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrump Area  -->


    <!-- Start Contact Area  -->
    <div class="rn-contact-area contact rn-section-gap bg_color--5" id="contact">
        <div class="contact-form--1">
            <div class="container">
                <div class="row row--35 align-items-start">
                    <div class="col-lg-5 col-md-12 order-2 order-lg-1 order-sm-2">
                        <div class="section-title text-left mb--50 mb_sm--30 mb_md--30">
                            <h2 class="title">Let's Talk.</h2>
                            {{-- <p class="description">We always want to hear from you. Connect with us via phone:
                                <a href="tel:+8801792806811">+88 01792-806811</a> or email:
                                <a href="mailto:contact@hilinkz.com">contact@hilinkz.com</a>
                            </p> --}}
                        </div>
                        <div class="form-wrapper">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br />
                            @endif

                            <form action="{{ route('contact_us_send_message') }}" method="POST" class="">
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
                    {{-- <div class="col-lg-6 order-1 order-lg-2">
                        <div class="thumbnail mb_md--40 mb_sm--40">
                            <img src="{{ asset('assets/images/about/LetsTalk.jpg') }}" alt="trydo" />
                        </div>
                    </div> --}}


                    <div class="col-lg-7 order-1 order-lg-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="rn-address">
                                    <div class="inner mb-4">
                                        <img src="{{ asset('assets/img/bd_flag.png') }}" alt="Bangladesh flag Hilinkz Ltd"
                                            loading="lazy" width="80" height="80" sizes="(max-width: 80px) 100vw, 50px" />
                                    </div>
                                    <div class="inner mb-4">
                                        <h4 class="title theme-color">Bangladesh Address</h4>
                                    </div>
                                    <div class="inner mb-4">
                                        <p><i class="fas fa-phone"></i> &nbsp;<a
                                                href="tel:{{ $phone_bd1 }}">{{ $phone_bd1 }}</a></p>
                                        <p><i class="fas fa-phone"></i> &nbsp;<a
                                                href="tel:{{ $phone_bd2 }}">{{ $phone_bd2 }}</a></p>
                                    </div>
                                    <div class="inner mb-4">
                                        <p><i class="fas fa-envelope"></i> &nbsp;<a
                                                href="mailto:{{ $email_bd1 }}">{{ $email_bd1 }}</a></p>
                                        <p><i class="fas fa-envelope"></i> &nbsp;<a
                                                href="mailto:{{ $email_bd2 }}">{{ $email_bd2 }}</a></p>
                                    </div>
                                    <div class="inner">
                                        <p><i class="fas fa-map-marker-alt"></i>&nbsp;<a href="{{ $map_bd }}"
                                                target="_blank"> {{ $location_bd }}</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="rn-address">
                                    <div class="inner mb-4">
                                        <img src="{{ asset('assets/img/aus_flag.png') }}"
                                            alt="Australia flag Hilinkz Ltd" loading="lazy" width="80" height="80"
                                            sizes="(max-width: 80px) 100vw, 50px" />
                                    </div>
                                    <div class="inner mb-4">
                                        <h4 class="title theme-color">Australia Address</h4>
                                    </div>
                                    <div class="inner mb-4">
                                        <p><i class="fas fa-phone"></i> &nbsp;<a
                                                href="tel:{{ $phone_aus }}">{{ $phone_aus }}</a></p>
                                        <p class="bg_text_color unselectable">___</p>
                                    </div>
                                    <div class="inner mb-4">
                                        <p><i class="fas fa-envelope"></i> &nbsp;<a
                                                href="mailto:{{ $email_bd1 }}">{{ $email_bd1 }}</a></p>
                                        <p><i class="fas fa-envelope"></i> &nbsp;<a
                                                href="mailto:{{ $email_aus }}">{{ $email_aus }}</a></p>
                                    </div>
                                    <div class="inner">
                                        <p><i class="fas fa-map-marker-alt"></i>&nbsp;<a href="{{ $map_aus }}"
                                                target="_blank"> {{ $location_aus }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area  -->


@endsection

@section('extra_js')
@endsection
