@extends('layouts.web-inner')
@section('title', 'IT solutions and Services')

@section('custom_styles')
    <style type="text/css">

    </style>
@endsection
@section('content')
    <!-- Start Breadcrump Area  -->
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--it" data-black-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient">IT SOLUTIONS & SERVICES</h2>
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
                        <h3 class="text-left title-h3">IT Solutions and Services</h3>
                        <p>IT solutions and services often require integration of hardware and software applications (web
                            and/or mobile applications) because of handling complex functionalities that require interaction
                            among multiple platforms. Through our top class partner organizations we provide complete IT
                            solutions i.e. building IT infrastructure to developing and maintaining software systems for
                            businesses. Since organizations need a wide array of solutions and services, our goal is to
                            provide and maintain excellent IT services to organizations. In short, we take the burden of IT
                            management on behalf of organizations so that they can focus on their core business.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->
    <!-- Start Column Area  -->
    <div class="rn-column-area mb--80 bg_color--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-column text-justify">
                        <h3 class="text-left title-h3">Cost effective custom-fit solutions</h3>
                        <p>While procuring IT solutions and services very often organizations make mistakes in choosing the
                            right products, thus creating many troubles and hindering growth of actual business. The reason
                            behind this is that organizations do not know what they actually need and what to expect from
                            the procured services. There are considerable understanding gaps because IT management is not
                            the core business of these organizations. As a result they purchase services that under delivers
                            their expectations or over delivers to increase the total cost. We like to provide the right
                            solutions and services for optimum results in a cost effective way.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->
    <!-- Start Column Area  -->
    <div class="rn-column-area rn-section-gap bg_color--5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="thumb">
                        <img class="w-100"
                            src="{{ asset('assets/images/service/it/HiLinkz 800-600Office Automation Software.jpg') }}"
                            alt="Service Images" />
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--30 ">
                    <div class="about-inner inner">
                        <!-- <div class="single-column"> -->
                        <h4 class="tilte">Office Automation Systems</h4>
                        <p class="text-justify">We are experienced in a wide range of web based office automation software
                            such as Human Resource Management System (HRM), Inventory Management System (IMS), Customer
                            Relationship Management System (CRMS), Project Management System (PMS), Accounting Software and
                            so on. We can even integrate different existing legacy systems and modernize those for seamless
                            integration to increase productivity and boost company profitability.</p>
                        <div class="button-group mt--30">
                            <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get
                                Started <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->
    <!-- Start Column Area  -->
    <div class="rn-column-area rn-section-gap bg_color--1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="thumb position-relative">
                        <img class="w-100"
                            src="{{ asset('assets/images/service/it/HiLinkz 800-600SaaS Application Development.jpg') }}"
                            alt="Service Images" />
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--30">
                    <div class="about-inner inner">
                        <!-- <div class="single-column"> -->
                        <h4 class="tilte">SaaS Application Development</h4>
                        <p class="text-justify">Software as a Service (SaaS) also known as "on-demand software" is a
                            software licensing and delivery model in which software is licensed on a subscription basis and
                            is centrally hosted. The software architecture of a SaaS model, often known as multitenant
                            architecture or multitenancy, is quite challenging and our software engineers are very adept at
                            this. We have successfully developed the RyoGas system at ryogas.com as a SaaS model, where
                            multiple gas stations manage their day to day activities on subscription basis. </p>
                        <div class="button-group mt--30">
                            <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get
                                Started <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->
    <div class="button-group mt--30 mb--30 text-center">
        <a class="btn-transparent rn-btn-dark" href="{{ route('all_services') }}"><span class="text font-italic">View More
                Services </span><i class="fas fa-arrow-right"></i></a>
    </div>
    <!-- Contact Form Starts Here -->
    <div class="rn-contact-area rn-section-gap bg_color--5" id="contact">
        <div class="contact-form--1">
            <div class="container">
                <div class="row row--35 align-items-start">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="section-title text-left mb--50 mb_sm--30 mb_md--30">
                            <h2 class="title">Get Started</h2>
                            <p class="description">We always want to hear from you. Connect with us via phone:
                                <a href="tel:+8801792806811">+88 01792-806811</a> or email:
                                <a href="mailto:contact@hilinkz.com">contact@hilinkz.com</a>
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
