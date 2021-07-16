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
<div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--web" data-black-overlay="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rn-page-title text-center pt--100">
                    <h2 class="title theme-gradient">WEB DEVELOPMENT</h2>
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
                    <h3 class="tilte text-center">Web Development</h3>
                    <p>We develop customized and unique Web solutions starting from simple corporate websites to office automation, e-commerce solutions and many more. We also assist companies in maintaining their existing web applications and modernizing the legacy systems. By leveraging modern technologies, we build scalable and secure web applications.</p>
                    <p>Our designers are excellent at showcasing any company on the Web. Our software engineers are very good at developing custom business applications for SMEs and large enterprises. They are highly skilled when it comes to scalability and security. We have a defined process to develop quality and reliable software. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Column Area  -->
<!-- Start Page Wrapper  -->
<div class="rn-service-details rn-section-gap-heading bg_color--1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-details-inner">
                    <div class="inner">
                        <!-- Start Single Content  -->
                        <div class="row sercice-details-content align-items-center bg_color--3 pt--80 pb--80">
                            <div class="col-lg-6 col-12">
                                <div class="thumb">
                                    <img class="w-100" src="{{asset('assets/images/service/web/HiLinkz 800-600Office Automation Software.jpg')}}" alt="Service Images" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="details mt_md--30 mt_sm--30">
                                    <h4 class="title">Office Automation Software</h4>
                                    <p class="text-justify">We are experienced in a wide range of web based office automation software such as Human Resource Management System (HRM), Inventory Management System (IMS), Customer Relationship Management System (CRMS), Project Management System (PMS), Accounting Software and so on. We can even integrate different existing legacy systems and modernize those for seamless integration to increase productivity and boost company profitability. </p>
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
                                    <h4 class="title">SaaS Application Development</h4>
                                    <p class="text-justify">Software as a Service (SaaS) also known as "on-demand software" is a software licensing and delivery model in which software is licensed on a subscription basis and is centrally hosted. The software architecture of a SaaS model, often known as multitenant architecture or multitenancy, is quite challenging and our software engineers are very adept at this. We have successfully developed the RyoGas system at ryogas.com as a SaaS model, where multiple gas stations manage their day to day activities on subscription basis.</p>
                                    <div class="button-group mt--30">
                                    <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get Started <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 order-1 order-lg-2">
                                <div class="thumb position-relative">
                                    <img class="w-100" src="{{asset('assets/images/service/web/HiLinkz 800-600SaaS Application Development.jpg')}}" alt="Service Images" />
                                    <!-- <a class="video-popup play__btn" href="https://www.youtube.com/watch?v=ZOoVOfieAF8"><span class="play-icon"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content  -->
                        <!-- Start Single Content  -->
                        <div class="row sercice-details-content align-items-center bg_color--3 pt--80 pb--80">
                            <div class="col-lg-6 col-12">
                                <div class="thumb">
                                    <img class="w-100" src="{{asset('assets/images/service/web/HiLinkz 800-600Responsive Web Design.jpg')}}" alt="Service Images" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="details mt_md--30 mt_sm--30">
                                    <h4 class="title">Responsive Web Design</h4>
                                    <p class="text-justify">People are spending more and more time on mobile devices, especially smartphones for different reasons. For example, customers use it to find products and services, employees use it to access data and communicate with coworkers, visitors access websites to find information from social media advertisements and so on. Businesses rely more on mobile devices to connect with customers, employees and other stakeholders. Modern mobile devices are so powerful that they can run web applications optimally and efficiently. Thus mobile friendly web applications are not a necessity but a must have option. We leverage UI frameworks like Bootstrap to build web applications that fit across devices smoothly e.g. desktop, tablets and smartphones. </p>
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
                                    <h4 class="title">System Architecture and Design</h4>
                                    <p class="text-justify">Our software engineers start a project with system design and application architecture. Depending on business needs we choose the technology stack and the framework. Even for a simple application we choose a Model-View-Controller (MVC) framework as an architectural pattern that separates an application into three main logical components Model, View, and Controller. In service oriented architecture we choose microservice frameworks to develop APIs. </p>
                                    <p class="text-justify">Our APIs and microservice architecture strive to stand the test of time. We extensively use all the standard practices of a framework e.g. ORM (Object Relational Mappers) for designing our models. We apply OOAD (Object Oriented Analysis and Design) for domain modeling; design patterns for solving common problems that help us build highly scalable, maintainable and testable software. </p>
                                    <div class="button-group mt--30">
                                    <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get Started <i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 order-1 order-lg-2">
                                <div class="thumb position-relative">
                                    <img class="w-100" src="{{asset('assets/images/service/web/HiLinkz 800-600System Architecture and Design.jpg')}}" alt="Service Images" />
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
    <div class="button-group mt--30 pb--50 text-center">
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