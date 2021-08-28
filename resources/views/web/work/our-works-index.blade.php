@extends('layouts.web-inner')
@section('title', 'Our Works')

@section('custom_styles')
    <style type="text/css">
        .zoom {
            width: 100%;
            transition: 0.2s all ease-in-out;
        }

        .zoom:hover {
            transform: scale(1.02);
        }
}

    </style>
@endsection
@section('content')

    <!-- Start Breadcrump Area  -->
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--work" data-black-overlay="2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient">OUR WORKS</h2>
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
                        <h3 class="text-center title-h3 font-weight-bold">HiLinkz partners for exponential growth through
                            innovative technology solutions</h3>
                        <p>Technology is continually evolving, providing endless opportunities for organizations to improve
                            processes, products and services. Digital transformation can radically improve organization
                            efficiency and productivity through the strategic application of emerging technologies. As a top
                            consulting and app development agency we have a decade of experience in building innovative
                            technology solutions for our clients. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->

    <!-- ======= Values Section ======= -->
    <div id="works-page" class="works-page rn-column-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-left zoom"
                        style="background-image: url({{ asset('assets/images/work/devRyoGas.jpg') }});">
                        <div class="card-body-left bg_color--9">
                            <a href="{{ route('our_works_ryogas') }}">
                                <h2 class="card-title theme-gradient">RyoGas</h2>
                            </a>
                            <h3 class="card-text">IoT Based Gas Station Management Solutions for Smart Owners
                                <br>
                            </h3>

                            <div class="read-more">
                                <a class="btn-transparent rn-btn-dark" href="{{ route('our_works_ryogas') }}"><span
                                        class="text font-italic">Explore </span><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="works-page" class="works-page rn-column-area bg_color--5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-right zoom work_image--knotErp">
                        <div class="card-body-right bg_color--9">
                            <a href="{{ route('KnotERP') }}">
                                <h2 class="card-title theme-gradient">KnotERP</h2>
                            </a>
                            <h3 class="card-text">Accounting, HRMS, CRM, e-Commerce and Inventory Management<br></h3>

                            <div class="read-more ">
                                <a class="btn-transparent rn-btn-dark" href="{{ route('KnotERP') }}"><span
                                        class="text font-italic">Explore </span><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="works-page" class="works-page rn-column-area bg_color--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-left zoom"
                        style="background-image: url({{ asset('assets/images/work/devDipSpace.jpg') }});">
                        <div class="card-body-left bg_color--9">
                            <a href="{{ route('dipspace') }}">
                                <h2 class="card-title theme-gradient">DipSpace</h2>
                            </a>
                            <h3 class="card-text">To dip into digital space for digital asset management<br></h3>

                            <div class="read-more ">
                                <a class="btn-transparent rn-btn-dark" href="{{ route('dipspace') }}"><span
                                        class="text font-italic">Explore </span><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="works-page" class="works-page rn-column-area bg_color--5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-right zoom work_image--minias">
                        <div class="card-body-right bg_color--9">
                            <a href="{{ route('minias') }}">
                                <h2 class="card-title theme-gradient">Minias</h2>
                            </a>
                            <h3 class="card-text">Mini Accounting as Service<br></h3>

                            <div class="read-more ">
                                <a class="btn-transparent rn-btn-dark" href="{{ route('minias') }}"><span
                                        class="text font-italic">Explore </span><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="works-page" class="works-page rn-column-area bg_color--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-left zoom"
                        style="background-image: url({{ asset('assets/images/work/sims_s.jpg') }});">
                        <div class="card-body-left bg_color--9">
                            <a href="{{ route('sims') }}">
                                <h2 class="card-title theme-gradient">SIMS</h2>
                            </a>
                            <h3 class="card-text">School Information Management System<br></h3>

                            <div class="read-more ">
                                <a class="btn-transparent rn-btn-dark" href="{{ route('sims') }}"><span
                                        class="text font-italic">Explore </span><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="works-page" class="works-page rn-column-area pb--100 bg_color--5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-right zoom"
                        style="background-image: url({{ asset('assets/images/work/CoviSense.jpg') }});">
                        <div class="card-body-right bg_color--9">
                            <a href="{{ route('our_works_covi_sense') }}">
                                <h2 class="card-title theme-gradient">CoviSense</h2>
                            </a>
                            <h3 class="card-text">A low cost IoT device for sensing COVID Symptoms<br></h3>

                            <div class="read-more ">
                                <a class="btn-transparent rn-btn-dark" href="{{ route('our_works_covi_sense') }}"><span
                                        class="text font-italic">Explore </span><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- End Values Section -->


@endsection

@section('custom_js')

@endsection
