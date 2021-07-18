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
<div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--app" data-black-overlay="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rn-page-title text-center pt--100">
                    <h2 class="title theme-gradient">MOBILE APP DEVELOPMENT</h2>
                    <!-- <p>Fresh From The Press Discription</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrump Area  -->
<!-- Start Column Area  -->
<div class="rn-column-area rn-section-gap-heading bg_color--1">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="single-column text-justify">
                    <div class="single-column text-justify">
                        <h3 class="text-left title-h3">App Development</h3>
                        <!-- <p class="page-description-category">Consulting is more than giving advice</p> -->
                    </div>
                    <p>We have highly skilled mobile app developers who over the years have acquired extensive know how and experience. We turn our customers’ app ideas into successful mobile applications very quickly to bring mobility and agility to their business. </p>
                    <p>Over the last decade use of mobile devices such as smartphones, tables have exploded. Almost everywhere, everyone is using mobile devices. Accessing information through mobile devices is a lot easier than before. As a result, almost all business processes can be transformed to mobile apps. This offers companies a great opportunity to transform their operations by taking a mobile first approach. Custom mobile applications can improve business process management, better customer relations and innovate new revenue channels. </p>
                    <p>Developing mobile apps can be a huge undertaking for any company. As we have strong team members for app development, any company can rely on our expertise to automate their processes. We offer a full life cycle of app development, including backend development, and guide our customers throughout the development process to turn their app idea into a success story.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Column Area  -->
<!-- Start Page Wrapper  -->
<div class="rn-service-details rn-section-gap bg_color--1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-details-inner">
                    <div class="inner">
                        <!-- Start Single Content  -->
                        <div class="row sercice-details-content align-items-center bg_color--3 pt--80 pb--80">
                            <div class="col-lg-6 col-12">
                                <div class="thumb">
                                    <img class="w-100" src="{{asset('assets/images/service/app/HiLinkz 800-600Android App Development.jpg')}}" alt="Service Images" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="details mt_md--30 mt_sm--30">
                                    <h4 class="title">Android App Development</h4>

                                    <p class="text-justify">Android based devices have around 95% market share in Bangladesh. We thus focus on Android app development for better user experience in mobile apps. However, the Android ecosystem is complex as there are numerous manufacturers producing Android-based devices. The range and capabilities of these devices vary greatly. This makes it complicated to create and support Android apps. We understand the complexities involved in creating successful Android apps. Our engineers build nicely designed secure android apps for our clients. We developed three apps for ryogas.com.</p>
                                    <div class="button-group mt--30">
                                        <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get Started <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content  -->

                        <!-- Start Single Content  -->
                        <div class="row sercice-details-content align-items-center pb--50 pt--50">
                            <div class="col-lg-6 col-12 order-2 order-lg-1">
                                <div class="details mt_md--30 mt_sm--30">
                                    <h4 class="title">User Experience and Design</h4>
                                    <p class="text-justify">User Experience (UX) and User Interface (UI) Design are very important for any application. Here at HiLinkz, we take every step to build a nice UI and for excellent user experience. We prefer native apps, rather than cross platform apps, as the app is created specifically for Android devices and thus provides a much better and delightful experience. We follow Google recommended certain design guidelines so that it increases the chances of success in the App Store. We also strive for faster loading speed to make a great mobile UX experience for your customers.</p>
                                    <div class="button-group mt--30">
                                        <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get Started <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 order-1 order-lg-2">
                                <div class="thumb position-relative">
                                    <img class="w-100" src="{{asset('assets/images/service/app/HiLinkz 800-600User Experience and Design.jpg')}}" alt="Service Images" />
                                    <!-- <a class="video-popup play__btn" href="https://www.youtube.com/watch?v=ZOoVOfieAF8"><span class="play-icon"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="button-group mt--30 text-center">
        <a class="btn-transparent rn-btn-dark" href="{{route('all_services')}}"><span class="text font-italic">View More Services </span><i class="fas fa-arrow-right"></i></a>
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