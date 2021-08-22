@extends('layouts.web-inner')
@section('title', 'SIMS')

@section('custom_styles')
    <style type="text/css">
        .single-tab-content ul li a {
            font-weight: 500;
            display: inline-block;
            color: #717173;
        }
        .key {
            font-weight: 500;
            display: inline-block;
            color: #525252;
            transition: 400ms;
        }
        .key:hover {
            color: #f74831;
        }

        .a ul {
            list-style: none;
            padding-left: 0;
        }


        .a li {
            position: relative;
            padding-left: 1.2em;
        }

        .a li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: red;

        }

    </style>
@endsection
@section('content')
    <!-- Start Breadcrump Area  -->
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--KnotERP" data-black-overlay="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient">SIMS</h2>
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
                        <h3 class="text-left title-h3">About SIMS</h3>
                        <!-- <p class="page-description-category">Consulting is more than giving advice</p> -->
                        <p>SIMS (School Information Management System) brings the best of technology to simplify academic & administrative process effortlessly. It improves productivity of all the stakeholders such as principal, management, teachers, administration staff, students and parents.</p>
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
                {{-- <div class="col-12">
                    <div class="about-inner inner mb--40">
                        <div class="section-title">
                            <h4 class="theme-gradient">Accounting Module</h4>
                            <p class="description">The accounting module ensures a double-entry system of bookkeeping to
                                prepare accurate financial statements, allowing for improved detection of errors.</p>
                        </div>
                    </div>
                </div> --}}

                <div class="col-lg-6 ">
                    <div class="thumbnail">
                        <img class="w-100" src="{{ asset('assets/images/work/KnotERP/HiLinkz 800-600Accounting.jpg') }}"
                            alt="Service Images" />
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--30 ">
                    <div class="about-inner inner">    
                        <div class="single-tab-content">
                                <h4 class="key">Key Features: </h4>                       
                            <ul class="a">
                                <li> <a>Student information - </a> Stores student information details</li>
                                <li> <a>Parent access - </a> Parents can access student attendance and results</li>
                                <li> <a>Teacher information - </a> Records teacher information details</li>
                                <li> <a>Result processing - </a> Process results based on marks</li>
                                <li> <a>Attendance Management - </a> Tracks student, teacher and staff attendance</li>
                                <li> <a>Online assignments - </a> Assign online quizzes and assignments</li>
                                <li> <a>Report cards - </a> Generates individual student report cards</li>
                                <li> <a>Admission management - </a> Manage admission activities</li>
                                <li> <a>Tuition fee management - </a> Manage tuition fee payments of students</li>
                            </ul>
                        </div>
                    </div>
                    <div class="button-group mt--30">
                        <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get
                            Started <i class="fas fa-arrow-right"></i></a>
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
                        <div class="thumbnailnail mb_md--40 mb_sm--40">
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
