@extends('layouts.web-inner')

@section('custom_styles')
<style type="text/css">
    img.logo {
        width: 150px;
    }
</style>
@endsection
@section('content')
<!-- Start Breadcrump Area  -->
<div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--consul" data-black-overlay="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rn-page-title text-center pt--100">
                    <h2 class="title theme-gradient">CONSULTENCY</h2>
                    <!-- <p>Fresh From The Press Discription</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrump Area  -->
<!-- Start Page Wrapper  -->

    <div class="rn-service-details rn-section-gap bg_color--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-details-inner">
                        <div class="inner">
                            <!-- Start Single Content  -->
                            <div class="row sercice-details-content align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="thumb">
                                        <img class="w-100" src="assets/images/service/consultency/HiLinkz 800-600Consultency.jpg" alt="Service Images" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="details mt_md--30 mt_sm--30">
                                        <p class="text-justify">We are here to advise and guide clients with our deeper levels of IT expertise to grow their business that would otherwise be financially challenging to retain in-house on a long-term basis. Today any smart business requires IT (Information Technology) solutions for its day to day operations and future growth. Services like establishing IT infrastructure, purchasing software solutions, online security of IT systems, data analytics and business intelligence, digital marketing etc. are required by modern businesses.</p>

                                        <p>
                                        Running any business smoothly and efficiently, one needs to focus on many things as mentioned in the previous paragraph. Very often it is not financially viable to keep many different in house IT experts and maintain IT systems for non-IT businesses. We fill the gap by providing our IT expertise to non-IT businesses and help them grow as we grow together.
                                        </p>
                                        <div class="button-group mt--30">
                                        <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get Started <i class="fas fa-arrow-right"></i></a>
                                    </div>

    
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Content  -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <a href="tel: +8801719347688"> +88 01719-347688</a> or email:
                            <a href="mailto:info@hilinkz.com">info@hilinkz.com</a>
                        </p>
                    </div>
                    <div class="form-wrapper">
                        <form action="{{route('contact_us_send_message')}}" method="POST">
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

                            <button class="rn-button-style--2 btn_solid" type="submit" value="submit" name="submit" id="mc-embedded-subscribe">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="thumbnail mb_md--40 mb_sm--40">
                        <img src="{{asset('assets/images/about/LetsTalk.jpg')}}" alt="trydo" />
                    </div>
                </div>
                <!-- <div class="col-lg-6 order-1 order-lg-2">
                    <div class="footer-left">
                        <div class="inner">
                            <span>Ready To Do This</span>
                            <h2 class="text-white">Get to work</h2>
                            <a class="rn-button-style--2" href="{{route('contact_form')}}">
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