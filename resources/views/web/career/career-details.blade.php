@extends('layouts.web-inner')
@section('title', 'Job Details')
@section('meta_og_image')
<meta property="og:url" content="https://hilinkz.herokuapp.com/assets/img/HiLinkz_OG.jpg">
<meta property="og:image" content="https://hilinkz.herokuapp.com/assets/img/HiLinkz_OG.jpg">
<meta property="og:description" content="HiLinkz Career">
@endsection
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
<div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--19" data-black-overlay="5">
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
                    <h4 class="text-left title-h4 text-danger mb--50">Intern (Web Design, PHP, React JS, Flutter, Software Quality Assurance, System Analysis, Business Development)</h4>

                    <div class="mb--50">
                        <h4 class="text-light bg-dark p-1">Qualifications & Requirements</h4>
                        <ul class="pb-2">
                            <li class="">
                                <p>Students of Bachelor of Science in CSE or equivalent degree</p>
                            </li>
                            <li class="">
                                <p>Analytical and problem-solving mindset</p>
                            </li>
                            <li class="">
                                <p>Familiarity with version controlling tools</p>
                            </li>
                            </li>
                        </ul>
                        <h5 class="font-weight-bold pt-2">Web Design:</h5>
                        <ul class="">
                            <li class="">
                                <p>Proficiency in HTML, CSS, and JavaScript</p>
                            </li>
                            <li class="">
                                <p>Awareness of UI/UX principles</p>
                            </li>
                            <li class="">
                                <p>Knowledge in Responsive Design for different devices (PC/Mobile/Tabs)</p>
                            </li>
                        </ul>
                        <h5 class="font-weight-bold pt-2">PHP (Laravel):</h5>
                        <ul class="">
                            <li class="">
                                <p>Knowledge of OOP concept is must</p>
                            </li>
                            <li class="">
                                <p>Having some experience in PHP</p>
                            </li>
                            <li class="">
                                <p>Knowledge of Laravel framework is a plus</p>
                            </li>
                            </li>
                            <li class="">
                                <p>Experienced with MySQL/PostgreSQL</p>
                            </li>
                        </ul>
                        <h5 class="font-weight-bold pt-2">React JS:</h5>
                        <ul class="">
                            <li class="">
                                <p>Knowledge of JavaScript is must</p>
                            </li>
                            <li class="">
                                <p>Proficiency in HTML and CSS</p>
                            </li>
                            <li class="">
                                <p>Awareness of UI/UX principles</p>
                            </li>
                            <li class="">
                                <p>Knowledge of any JavaScript Framework is a plus</p>
                            </li>
                        </ul>
                        <h5 class="font-weight-bold pt-2">Flutter:</h5>
                        <ul class="">
                            <li class="">
                                <p>Experienced with mobile app development</p>
                            </li>
                            <li class="">
                                <p>Knowledge about Flutter widgets</p>
                            </li>
                            <li class="">
                                <p>Basic knowledge of RESTfull APIs</p>
                            </li>
                            <li class="">
                                <p>Understanding of cross-platform ecosystem </p>
                            </li>
                        </ul>
                        <h5 class="font-weight-bold pt-2">Software Quality Assurance:</h5>
                        <ul class="">
                            <li class="">
                                <p>Sound Knowledge of Software Testing Life-cycle</p>
                            </li>
                            <li class="">
                                <p>Experience in writing test plans and test cases</p>
                            </li>
                        </ul>
                        <h5 class="font-weight-bold pt-2">System Analysis:</h5>
                        <ul class="">
                            <li class="">
                                <p>Analytical and conceptual thinking skills</p>
                            </li>
                            <li class="">
                                <p>Excellent technical documentation skills</p>
                            </li>
                            </li>
                            <li class="">
                                <p>Excellent writing and verbal communication skill to work closely with the stakeholders</p>
                            </li>
                        </ul>
                    </div>

                    <div class="mb--50">
                        <h4 class="text-light bg-dark p-1">Qualifications & Requirements for Business Development</h4>
                        <ul class="">
                            <li class="">
                                <p>Students of BBA/BSc/BSS or from any equivalent background can apply</p>
                            </li>
                            <li class="">
                                <p>Interested in sales, marketing or related field</p>
                            </li>
                            <li class="">
                                <p>Public communication skills and IT fluency</p>
                            </li>
                            <li class="">
                                <p>Proficiency in documentation tools (Word, Excel, PowerPoint)</p>
                            </li>
                        </ul>
                    </div>

                    <div class="">
                        <h4 class="text-light bg-dark p-1">Application Process</h4>

                        <p class="mb--30">If you are interested to apply for the position, please follow the
                            below link and submit your application with updated Resume. Good Luck!

                        <p class=""><b>Application link:</b> <a href="https://forms.gle/FnmVt5DEiT1N45WVA" target="_blank" class="text-primary">https://forms.gle/FnmVt5DEiT1N45WVA</a></p>

                        <p class=""><b>Deadline:</b> January 27, 2022</p>
                        <p class=""><b>**</b> Only short listed candidates will be invited for the
                            interview.</p>
                        <br>
                    </div>

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
                        <h2 class="title">Contact us</h2>
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

                            <button class="rn-button-style--2 btn_solid" type="submit" value="submit" name="submit" id="mc-embedded-subscribe">Submit</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="thumbnail mb_md--40 mb_sm--40">
                        <img src="{{ asset('assets/images/about/LetsTalk.jpg') }}" alt="trydo" />
                    </div>
                </div>
                {{-- <div class="col-lg-6 order-1 order-lg-2">
                            <div class="footer-left">
                                <div class="inner">
                                    <span>Ready To Do This</span>
                                    <h2 class="text-white">Get to work</h2>
                                    <a class="rn-button-style--2" href="">
                                        <span>Contact Us</span>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
            </div>
        </div>
    </div>
</div>


@endsection

@section('custom_js')

@endsection