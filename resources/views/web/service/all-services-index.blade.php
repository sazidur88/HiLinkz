@extends('layouts.web-inner')
@section('title', 'Our Services')

@section('custom_styles')
<style type="text/css">
    .zoom {
        width: 100%;
        transition: 0.4s all ease-in-out;
    }

    .zoom:hover {
        transform: scale(1.01);
    }

    .standard-service .thumbnai img {
        border-radius: 3px;

    }

</style>
@endsection
@section('content')
<!-- Start Breadcrump Area  -->
<div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--service" data-black-overlay="4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rn-page-title text-center pt--100">
                    <h2 class="title theme-gradient">OUR SERVICES</h2>
                    <!-- <p>Fresh From The Press Discription</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrump Area  -->
<!-- Start Page Wrapper  -->

<!-- Start Column Area  -->
<div class="rn-column-area rn-section-gap-heading bg_color--1">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="single-column text-justify">
                    <h3 class="tilte text-center">HiLinkz partners for exponential growth through innovative technology solutions</h3>
                    <p>Technology is continually evolving, providing endless opportunities for organizations to improve processes, products and services. Digital transformation can radically improve organization efficiency and productivity through the strategic application of emerging technologies. As a top consulting and app development agency we have a decade of experience in building innovative technology solutions for our clients. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Column Area  -->



<!-- Start Featured Area  -->
<div class="rn-featured-service-area pt--90 pb--120 bg_color--1">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-3 col-md-6 col-12 mt--30">
                <div class="section-title text-left">
                    <h2 class="title">Our Services</h2>
                    <p>HiLinkz offers a range of services to assist individuals, organizations, and institutions around the world in pursuing their goals.</p>
                </div>
            </div> -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt--30 pb--50 zoom">
                        <div class="standard-service">
                            <div class="thumbnai"><img src="{{asset('assets/images/portfolio/HiLinkzMiniConsultancy.jpg')}}" alt="Corporate Images"></div>
                            <!-- <div class="single-column custom-color"> -->
                                <div class="content shadow p-3 mb-3">
                                    <h3><a class="text-center" href="{{route('consultancy')}}">Consultancy</a></h3>
                                    <p>We are here with our deeper levels of IT expertise to advise and guide our clients for successful digital transformation of their companies.</p>
                                    <a href="{{route('consultancy')}}" class="text-left font-italic btn-transparent rn-btn-dark"><small>Learn more</small> <i class="fas fa-arrow-right"></i></a>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt--30 pb--50 zoom">
                        <div class="standard-service">
                            <div class="thumbnai"><img src="{{asset('assets/images/portfolio/HiLinkzMiniIT.jpg')}}" alt="Corporate Images"></div>
                            <div class="content shadow p-3 mb-3 ">
                                <h3><a class="text-center" href="{{route('it_solutions')}}">IT solutions and Services</a></h3>
                                <p>Through our top class partner organizations we provide complete IT solutions i.e. building IT infrastructure to developing and maintaining software ...</p>
                                <a href="{{route('it_solutions')}}" class="text-left font-italic btn-transparent rn-btn-dark"><small>Learn more</small> <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt--30 pb--50 zoom">
                        <div class="standard-service">
                            <div class="thumbnai"><img src="{{asset('assets/images/portfolio/HiLinkzMiniEmerging.jpg')}}" alt="Corporate Images"></div>
                            <div class="content shadow p-3 mb-3 ">
                                <h3><a class="text-center" href="{{route('emerging_technologies')}}">Emerging Technologies</a></h3>
                                <p>Our emerging technologies consulting team strives to help companies achieve success while minimizing financial risk. We partner with organizations to develop ...</p>
                                <a href="{{route('emerging_technologies')}}" class="text-left font-italic btn-transparent rn-btn-dark"><small>Learn more</small> <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt--30 pb--50 zoom">
                        <div class="standard-service">
                            <div class="thumbnai"><img src="{{asset('assets/images/portfolio/HiLinkzMiniWEB.jpg')}}" alt="Corporate Images"></div>
                            <!-- <div class="single-column custom-color"> -->
                                <div class="content shadow p-3 mb-3  custom-color--1">
                                    <h3><a class="text-center" href="{{route('web_development')}}">Web Development</a></h3>
                                    <p>We develop customized and unique Web solutions starting from simple corporate websites to office automation, e-commerce solutions...</p>
                                    <a href="{{route('web_development')}}" class="text-left font-italic btn-transparent rn-btn-dark"><small>Learn more</small> <i class="fas fa-arrow-right"></i></a>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt--30 pb--50 zoom">
                        <div class="standard-service">
                            <div class="thumbnai"><img src="{{asset('assets/images/portfolio/HiLinkzMiniAppDevelopment.jpg')}}" alt="Corporate Images"></div>
                            <!-- <div class="single-column custom-color"> -->
                                <div class="content shadow p-3 mb-3 ">
                                    <h3><a class="text-center" href="{{route('app_development')}}">App Development</a></h3>
                                    <p>Our highly skilled app developers turn our customers’ app ideas into successful mobile applications very quickly to bring mobility and agility to...</p>
                                    <a href="{{route('app_development')}}" class="text-left font-italic btn-transparent rn-btn-dark"><small>Learn more</small> <i class="fas fa-arrow-right"></i></a>
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt--30 pb--50 zoom">
                        <div class="standard-service">
                            <div class="thumbnai"><img src="{{asset('assets/images/portfolio/HiLinkzMiniDigitalMarketting_New.jpg')}}" alt="Corporate Images"></div>
                            <div class="content shadow p-3 mb-3 ">
                                <h3><a class="text-center" href="{{route('digital_marketing')}}">Digital Marketing</a></h3>
                                <p>We can boost up your business growth connecting with thousands of internet users using digital marketing. There are many tactics in digital marketing ...</p>
                                <a href="{{route('digital_marketing')}}" class="text-left font-italic btn-transparent rn-btn-dark"><small>Learn more</small> <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt--30 pb--50 zoom">
                        <div class="standard-service">
                            <div class="thumbnai"><img src="{{asset('assets/images/portfolio/HiLinkzMiniDATA INTELLIGENCE.jpg')}}" alt="Corporate Images"></div>
                            <div class="content shadow p-3 mb-3 ">
                                <h3><a class="text-center" href="{{route('data_intelligence')}}">Data Intelligence</a></h3>
                                <p>All smart businesses today require data analytics and business intelligence (BI), which we call data intelligence, for its survival and future growth.</p>
                                <a href="{{route('data_intelligence')}}" class="text-left font-italic btn-transparent rn-btn-dark"><small>Learn more</small> <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Featured Area  -->


@endsection

@section('custom_js')

@endsection