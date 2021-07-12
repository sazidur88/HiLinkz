@extends('layouts.web')

@section('custom_styles')
<style type="text/css">
    img.logo {
        width: 150px;
    }
</style>
@endsection

@section('content')

<!-- Start Contact Address Area  -->
<div class="rn-contact-address-area rn-section-gap bg_color--5">
    <div class="container">
        <div class="row mt_dec--40">
            <!-- Start Single Address  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--40">
                <div class="rn-address">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="inner">
                        <h4 class="title">Contact via Phone</h4>
                        <p><a href="tel:+8801719347688">+88 01719-347688</a></p>
                    </div>
                </div>
            </div>
            <!-- End Single Address  -->

            <!-- Start Single Address  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--40">
                <div class="rn-address">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="inner">
                        <h4 class="title">Email Address</h4>
                        <p><a href="mailto:info@hilinkz.com">info@hilinkz.com</a></p>
                    </div>
                </div>
            </div>
            <!-- End Single Address  -->

            <!-- Start Single Address  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--40">
                <div class="rn-address">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="inner">
                        <h4 class="title">Location</h4>
                        <p>KA-7,Adapt ST Complex(4th Floor) Jaggannathpur, Dhaka-1229</p>
                    </div>
                </div>
            </div>
            <!-- End Single Address  -->

        </div>
    </div>
</div>
<!-- End Contact Address Area  -->

<!-- Start Contact Area  -->
<div class="rn-contact-area rn-section-gap bg_color--5" id="contact">
    <div class="contact-form--1">
        <div class="container">
            <div class="row row--35 align-items-start">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="section-title text-left mb--50 mb_sm--30 mb_md--30">
                        <h2 class="title">Let's Talk.</h2>
                        <p class="description">We always want to hear from you. Connect with us via phone:
                            <a href="tel: +8801719347688"> +88 01719-347688</a> or email:
                            <a href="mailto:info@hilinkz.com">info@hilinkz.com</a>
                        </p>
                    </div>
                    <div class="form-wrapper">
                        <form>
                            <label>
                                <input type="text" name="name" id="item01" placeholder="Your Name *" />
                            </label>

                            <label>
                                <input type="text" name="email" id="item02" placeholder="Your email *">
                            </label>

                            <label>
                                <input type="text" name="subject" id="item03" placeholder="Write a Subject">
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
                        <img src="{{asset('assets/images/about/contact-2.jpg')}}" alt="trydo" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area  -->

@endsection
