@extends('layouts.web-inner')
@section('title', 'Career')

@section('custom_styles')
    <style type="text/css">
        .bg_text_color {
            color: #f8f9fc !important;
        }

        body {
            /* margin-top: 20px; */
        }

        .shadow-sm,
        .shadow-sm--on-hover:hover {
            box-shadow: 0 0.125rem 0.25rem rgba(132, 138, 163, 0.1) !important
        }

        .gradient-light--lean-left {
            background-image: -webkit-linear-gradient(110deg, #f2f3fa 0%, #fcfdff 100%);
            background-image: -ms-linear-gradient(110deg, #f2f3fa 0%, #fcfdff 100%)
        }

        .color--heading {
            color: #101f41 !important
        }

        .color--text {
            color: #4f5464 !important
        }


        .badge-circle {
            border-radius: 50%;
            height: 2.5rem;
            width: 2.5rem;
            font-size: 1rem;
            line-height: 2.5rem;
            padding: 0
        }

        .text-white {
            color: #fff !important;
        }


        .background--white,
        .bg-white {
            background-color: #fff !important
        }

        .background--brand,
        .background--primary,
        .bg-brand,
        .bg-primary {
            background-color: #4d5bed !important;
            color: #fff
        }

        .background--dark,
        .bg-dark {
            background: #0c2050 !important;
            color: #939eb8
        }

        .background--secondary,
        .bg-secondary {
            background-color: #939eb8 !important
        }

        .background--tertiary,
        .bg-tertiary {
            background-color: #9779e3 !important
        }

        .background--danger,
        .bg-danger {
            background-color: #f53d55 !important
        }

        .background--success,
        .bg-success {
            background-color: #66df7c !important
        }

        .background--warning,
        .bg-warning {
            background-color: #f6c460 !important
        }

        .background--warning2,
        .bg-warning2 {
            background-color: #f89c59 !important
        }

        .background--info,
        .bg-info {
            background-color: #52bbd3 !important
        }

        .background--light,
        .bg-light {
            background-color: #f6f8fb !important
        }

        a {
            text-decoration: none !important;
        }

        .job-title {
            font-weight: 600;
            line-height: 1.3em;
            color: #333;
            font-size: 20px;
            margin: 0;
        }
        .section__title{
            font-size: 28px;

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
                        <h2 class="title theme-gradient">Career</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrump Area  -->

    <!-- Start Column Area  -->
    <div class="rn-column-area rn-section-gap-heading pb-20 bg_color--1">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="row row-grid justify-content-center">
                        <div class="col-md-8 col-lg-7 col-xl-6 text-center mb-10">
                            <h2 class="text-center text-uppercase section__title">Join us to learn together</h2>       
                                    <p>We’re always searching for amazing people to join our team. Take a look at our current openings and grab the opportunity to start your career with us.</p><br>
        
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->

    <section id="sectionJobList" class="rn-column-area rn-section-gap-heading section section-job-list gradient-light--lean-left">
        <div class="container">

            <div class="row row-grid justify-content-center">

                {{-- <div class="col-md-8 col-lg-7 col-xl-6 text-center mb-10">
                    <h2 class="section__title mb-4">Jobs Openings at Fluxo</h2>
                    <h3 class="text-center text-uppercase">Join us to learn together</h3>
                    <p>We’re always searching for amazing people to join our team. Take a look at our current openings.</p><br>

                </div> --}}

                <div class="col-md-10">

                    <div class="job-list__wrapper mb-6 mb--100">
                        {{-- <h3 class="mb-4 text-center">Available Positions</h3> --}}

                        <div class="card p-0 mb-3 border-0 shadow-sm shadow--on-hover">
                            <div class="card-body">
                                <span class="row justify-content-between align-items-center">
                                    <span class="job-title col-md-8 col-sm-12 color--heading">
                                        <a href="{{route('career_details')}}"><span class="badge badge-circle background--success text-white mr-3">#</span>Intern (Web, PHP, React, Flutter, Startup-Development & Marketing)</a>
                                    </span>

                                    <span class="col-md-4 col-sm-12 my-3 text-center color--text">                                        
                                        <a href="{{route('career_details')}}" class="btn btn-danger text-white">Details <small><i class="fas fa-chevron-right"></i></small> </a>
                                    </span>
                                </span>
                            </div>
                        </div> <!-- Job Card -->

                        <div class="card p-0 mb-3 border-0 shadow-sm shadow--on-hover">
                            <div class="card-body">
                                <span class="row justify-content-between align-items-center">
                                    <span class="job-title col-md-8 col-sm-12 color--heading">
                                        <a href="{{route('career_details')}}"><span class="badge badge-circle background--warning text-white mr-3">#</span>Web, PHP, React, Flutter, Startup-Development & Marketing Intern</a>
                                    </span>

                                    <span class="col-md-4 col-sm-12 my-3 text-center color--text">                                        
                                        <a href="{{route('career_details')}}" class="btn btn-danger text-white">Details <small><i class="fas fa-chevron-right"></i></small> </a>
                                    </span>
                                </span>
                            </div>
                        </div> <!-- Job Card -->
                        
                        


                        {{-- <a href="career-single.html" class="card p-0 mb-3 border-0 shadow-sm shadow--on-hover">
                            <div class="card-body">
                                <span class="row justify-content-between align-items-center">
                                    <span class="col-md-5 color--heading">
                                        <span class="badge badge-circle background--info text-white mr-3">>></span> .NET
                                        Developer
                                    </span>

                                    <span class="col-5 col-md-3 my-3 my-sm-0 color--text">
                                        <i class="fas fa-clock mr-1"></i> Full time
                                    </span>

                                    <span class="col-7 col-md-3 my-3 my-sm-0 color--text">
                                        <i class="fas fa-map-marker-alt mr-1"></i> Manchester, UK
                                    </span>

                                    <span class="d-none d-md-block col-1 text-center color--text">
                                        <small><i class="fas fa-chevron-right"></i></small>
                                    </span>
                                </span>
                            </div>
                        </a> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Start Contact Area  -->
    {{-- <div class="rn-contact-area contact rn-section-gap bg_color--1" id="contact">
        <div class="contact-form--1">
            <div class="container">
                <div class="row row--35 align-items-start">
                    <div class="col-lg-5 col-md-12 order-2 order-lg-1 order-sm-2">
                        <div class="section-title text-left mb--50 mb_sm--30 mb_md--30">
                            <h2 class="title">Let's Talk.</h2>
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
    </div> --}}
    <!-- End Contact Area  -->


@endsection

@section('extra_js')
@endsection
