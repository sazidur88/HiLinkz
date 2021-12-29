@extends('layouts.web-inner')
@section('title', 'Contact With Us')

@section('custom_styles')
    <style type="text/css">
        img.logo {
            width: 150px;
        }

        @media only screen and (max-width: 600px) {
            .mtm-10{
                margin-top:30px;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Start Breadcrump Area  -->
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--contact" data-black-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient">Contact With Us</h2>
                        <!-- <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrump Area  -->
    <!-- Start Contact Address Area  -->
    <div class="rn-contact-address-area rn-section-gap bg_color--5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-center mb-5">Bangladesh Address </h3><br>
                    <div class="mt_dec--40">
                        <!-- Start Single Address  -->
                        <div class="">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.1878157431133!2d90.42111361489638!3d23.81191949234048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7be9f19d62b%3A0x65917897cd5576c9!2sHilinkz!5e0!3m2!1sen!2sbd!4v1640786322013!5m2!1sen!2sbd"
                                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            <div class="rn-address">
                                {{-- <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div> --}}
                                <div class="inner mb-4">
                                    <h4 class="title theme-color"><i class="fas fa-phone fa-lg"></i> &nbsp;&nbsp;Contact via
                                        Phone</h4>

                                    <p><a href="tel:+8801792806811">+88 01792-806811</a></p>
                                    <p><a href="tel:+88017075381238">+88 01707-538123</a></p>
                                </div>
                                <div class="inner mb-4">
                                    <h4 class="title theme-color"><i class="fas fa-envelope fa-lg"></i> &nbsp;&nbsp;Email
                                        Address</h4>
                                    <p><a href="mailto:into@hilinkz.com">into@hilinkz.com</a></p>
                                    <p><a href="mailto:hilinkzltd@gmail.com">hilinkzltd@gmail.com</a></p>
                                </div>
                                <div class="inner mb-4">
                                    <h4 class="title theme-color"><i class="fas fa-map-marker-alt fa-lg"></i>
                                        &nbsp;&nbsp;Location</h4>
                                    <p>KA-7,Adapt ST Complex(4th Floor) Jaggannathpur, Dhaka-1229</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address  -->

                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="text-center mb-5 mtm-10">Australia Address </h3><br>
                    <div class="mt_dec--40">
                        <!-- Start Single Address  -->
                        <div class="">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3156.914573982389!2d144.56712671543778!3d-37.69820523521288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad692d4eef4e1ef%3A0xcf1a71b49b8aa0e!2sUnit%2017%2F3%20Austin%20Pl%2C%20Melton%20South%20VIC%203338%2C%20Australia!5e0!3m2!1sen!2sbd!4v1640786485968!5m2!1sen!2sbd"
                                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            <div class="rn-address">
                                <div class="inner mb-4">
                                    <h4 class="title theme-color"><i class="fas fa-phone fa-lg"></i> &nbsp;&nbsp;Contact via
                                        Phone</h4>
                                    <p><a href="tel:+61466 612 281">+61466 612 281</a></p>
                                    <p class="text-white unselectable"><a href="tel:+88017075381238"></a>--------</p>
                                </div>
                                <div class="inner mb-4">
                                    <h4 class="title theme-color"><i class="fas fa-envelope fa-lg"></i> &nbsp;&nbsp;Email
                                        Address</h4>
                                    <p><a href="mailto:into@hilinkz.com">into@hilinkz.com</a></p>
                                    <p><a href="mailto:au.manager@hilinkz.com">au.manager@hilinkz.com</a></p>
                                </div>
                                <div class="inner mb-4">
                                    <h4 class="title theme-color"><i class="fas fa-map-marker-alt fa-lg"></i>
                                        &nbsp;&nbsp;Location</h4>
                                    <p>Unit 17, 3 Austin Place, Melton South, Victoria 3338
                                        Australia</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Address Area  -->

    <!-- Start Contact Area  -->
    <div class="rn-contact-area bg_color--5 contact" id="contact">
        <div class="contact-form--1">
            <div class="container">
                <div class="row row--35 align-items-start">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="section-title text-left mb--50 mb_sm--30 mb_md--30">
                            <h2 class="title">Let's Talk.</h2>
                            <p class="description">We always want to hear from you. Connect with us via phone:
                                <a href="tel:+8801792806811">+88 01792-806811</a> or email:
                                <a href="mailto:contact@hilinkz.com">contact@hilinkz.com</a>
                            </p>
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
                                {{-- <div class="form-row">
                                <div class="captcha col-md-6 form-group text-center">
                                    <span class="mr-2">{!! captcha_img() !!}</span>
                                    <button type="button" class="btn btn-danger" id="captcha_reload">
                                        &#x21bb;
                                    </button>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" id="captcha" placeholder="Enter Captcha" name="captcha" required>
                                </div>

                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div> --}}
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
    <!-- End Contact Area  -->

@endsection

@section('extra_js')
    {{-- Captcha --}}
    {{-- <script type="text/javascript">
    $('#refresh-captcha').click(function() {
        $.ajax({
            type: 'GET',
            url: 'refresh-captcha',
            success: function(data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script> --}}

@endsection
