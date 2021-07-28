@extends('layouts.web-inner')

@section('custom_styles')
<style type="text/css">
    img.logo {
        width: 150px;
    }

    .gradient-work {
        background: linear-gradient(-259deg, #f81f01 0, #ee076e 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
@endsection
@section('content')
<!-- Start Breadcrump Area  -->
<div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--covin" data-black-overlay="4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rn-page-title text-center pt--100">
                    <h2 class="title theme-gradient">CoviSense</h2>
                    <!-- <p>Fresh From The Press Discription</p> -->
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
                    <h3 class="text-left title-h3">About CoviSense</h3>
                    <p>Severely infected with the COVID virus causes Pneumonia that associates higher pulse and breathing rates with a lower oxygen saturation level than optimum level. Pulse rate and blood oxygen saturation (SpO2) are two of the major health parameters along with a few more that doctors usually look for and measure to diagnose Pneumonia as well as Bronchitis. To monitor these COVID related vital health parameters we developed <b>CoviSense</b>, an IoT device based on Atmel Atmega 328P-PU and MAX30100 to monitor pulse rate and blood oxygen saturation of COVID patients. We analyzed and compared its performance with a commercially available reference device, Rossmax SB150 pulse oximeter and found that CoviSense was as good as Rossmax but the unit price of CoviSense was around 12 USD only.</p>
                </div>
            </div>
            <div class="col-lg-12 text-center mt--50 mb--30">
                <div class="inner-wrapper">
                    <div class="inner pb--20">
                        <div class="thumbnail">
                            <img class="" src="{{asset('assets/images/work/CoviSense_DIAG.jpg')}}" alt="Blog Images">
                        </div>
                    </div>
                    <span class="font-weight-bold">Figure 1: Functional principle of the sensor (datasheet, 2019)
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Column Area  -->

<!-- Start Column Area  -->
<div class="rn-column-area rn-section-gap-work bg_color--5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-column text-justify">
                    {{-- <h3 class="text-left title-h3">About CoviSense</h3> --}}
                    <p>A research paper on the performance analysis of CoviSense has been accepted for presentation in the 2021 IEEE International Conference on IoT, Electronics and Mechatronics (IEMTRONICS), which was held virtually in Toronto, Canada from 21-24 April 2021. The research contribution created quite a good resonance among the audience. Navid and Nuzhat Arifa presented the paper in that conference and won the best presenter title competing with the presenters from 7 other countries in the session. </p>
                </div>
            </div>
            <div class="col-lg-12 text-center mt--50 mb--30">
                <div class="inner-wrapper">
                    <div class="inner pb--20">
                        <div class="thumbnail">
                            <img class="" style="max-width:80%" src="{{asset('assets/images/work/CoviSense_Project.jpg')}}" alt="Blog Images">
                        </div>
                    </div>
                    <span class="font-weight-bold pt--5">Figure 2: Application of CoviSense on children to measure pulse rate (BPM) and SpO2 (%)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Column Area  -->


<!-- End Column Area  -->
<div class="button-group mt--30 mb--30 text-center">
    <a class="btn-transparent rn-btn-dark" href="{{route('our_works')}}"><span class="text font-italic">View More Works </span><i class="fas fa-arrow-right"></i></a>
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
            </div>
        </div>
    </div>
</div>


@endsection

@section('custom_js')

@endsection