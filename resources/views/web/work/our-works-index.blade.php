@extends('layouts.web-inner')

@section('custom_styles')
<style type="text/css">
    img.logo {
        width: 150px;
    }

    .zoom {
        width: 100%;
        transition: 0.2s all ease-in-out;
    }

    .zoom:hover {
        transform: scale(1.02);
    }

    .standard-service .thumbnai img {
        border-radius: 3px;
    }


    @media screen and (min-width: 768px) {
        #work-mid {
            visibility: visible;
            padding-top: 180px !important;

        }
    }

    @media screen and (min-width: 768px) {
        #work_bottom {
            visibility: visible;
            padding-bottom: 150px !important;

        }
    }

    .gradient-work {
        background: linear-gradient(-259deg, #f81f01 0, #ee076e 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* a.btn-transparent::after {

        height: 3px;
        background: #4b7bec;
    }

    a.btn-transparent:hover::after {
        width: 100%;
    } */
</style>



<link rel="stylesheet" href="{{asset('assets/css/work.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/custom-work.css')}}">


@endsection
@section('content')
<!-- Start Breadcrump Area  -->
<div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--work" data-black-overlay="3">
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
                    <h3 class="text-center title-h3 font-weight-bold">HiLinkz partners for exponential growth through innovative technology solutions</h3>
                    <p>Technology is continually evolving, providing endless opportunities for organizations to improve processes, products and services. Digital transformation can radically improve organization efficiency and productivity through the strategic application of emerging technologies. As a top consulting and app development agency we have a decade of experience in building innovative technology solutions for our clients. </p>
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
                <div class="card-left zoom" style="background-image: url({{asset('assets/images/work/portfolio-2.jpg')}});">
                    <div class="card-body-left bg_color--9">
                        <a href="{{route('our_works_ryogas')}}">
                            <h2 class="card-title theme-gradient">RyoGas</h2>
                        </a>
                        <h3 class="card-text">A Smart Gas Pump Solution<br></h3>

                        <div class="read-more ">
                            <a class="btn-transparent rn-btn-dark" href="{{route('our_works_ryogas')}}"><span class="text font-italic">Explore </span><i class="fas fa-arrow-right"></i></a>
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
                <div class="card-right zoom" style="background-image: url({{asset('assets/images/work/DipSpace.jpg')}});">
                    <div class="card-body-right bg_color--9">
                        <a href="{{route('dipspace')}}">
                            <h2 class="card-title theme-gradient">DipSpace</h2>
                        </a>
                        <h3 class="card-text">To dip into digital space for digital asset management<br></h3>

                        <div class="read-more ">
                            <a class="btn-transparent rn-btn-dark" href="{{route('dipspace')}}"><span class="text font-italic">Explore </span><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="works-page" class="works-page rn-column-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card-left zoom" style="background-image: url({{asset('assets/images/work/CoviSense.jpg')}});">
                    <div class="card-body-left bg_color--9">
                        <a href="{{route('our_works_covi_sense')}}">
                            <h2 class="card-title theme-gradient">CoviSense</h2>
                        </a>
                        <h3 class="card-text">A low cost IoT device for sensing COVID Symptoms<br></h3>

                        <div class="read-more ">
                            <a class="btn-transparent rn-btn-dark" href="{{route('our_works_covi_sense')}}"><span class="text font-italic">Explore </span><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="works-page" class="works-page rn-column-area bg_color--5 pb--80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card-right zoom" style="background-image: url({{asset('assets/images/work/DipSpace.jpg')}});">
                    <div class="card-body-right bg_color--9">
                        <h2 class="card-title theme-gradient">DipSpace</h2>
                        <h3 class="card-text">To dip into digital space for digital asset management<br></h3>

                        <div class="read-more ">
                            <a class="btn-transparent rn-btn-dark" href="{{route('dipspace')}}"><span class="text font-italic">Explore </span><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Values Section -->


{{--
<section class="u-align-left u-clearfix u-section-1 bg_color--5" id="sec-ab03">
    <div class="u-clearfix u-sheet u-sheet-1">
        <a href="{{route('our_works_ryogas')}}">
<div class="u-container-style u-group u-image u-image-round u-radius-3 u-image-1 zoom">
    <div class="u-container-layout u-container-layout-1"></div>
</div>
</a>
<div class="u-container-style u-expanded-width-sm u-expanded-width-xs  u-group u-radius-3 u-shape-round u-group-2 bg_color--1" data-animation-name="swing" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
    <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
        <a href="{{route('our_works_ryogas')}}">
            <h2 class="u-align-left u-text u-text-default u-text-1 gradient-work">RyoGas</h2>
        </a>
        <h3 class="u-align-left u-text u-text-default u-text-2 pb--10">A Smart Gas Pump Solution
        </h3>
        <p class="u-align-justify u-text u-text-3"> IoT Based Gas Station Management Solutions for Smart Owners</p>
        <a class="btn-transparent rn-btn-dark mb--10 mt--10" href="{{route('our_works_ryogas')}}"><span class="text font-italic">Read More </span><i class="fas fa-arrow-right"></i></a>
    </div>
</div>




<a href="{{route('dipspace')}}">
    <div class="u-container-style u-group u-image u-image-round u-radius-3 u-image-2 zoom" style="background-image: url({{asset('assets/images/work/DipSpace.jpg')}});">
        <div class="u-container-layout u-container-layout-3"></div>
    </div>
</a>
<div class="u-container-style u-expanded-width-sm u-expanded-width-xs  u-group u-radius-3 u-shape-round u-group-4 bg_color--1" data-animation-name="swing" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
    <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-4">
        <a href="{{route('dipspace')}}">
            <h2 class="u-align-left u-text u-text-default u-text-4 gradient-work">DipSpace</h2>
        </a>
        <h3 class="u-align-left u-text u-text-default u-text-5 pb--10">To dip into digital space for digital asset management.</h3>
        <a class="btn-transparent rn-btn-dark mb--10 mt--10" href="{{route('dipspace')}}"><span class="text font-italic">Read More </span><i class="fas fa-arrow-right"></i></a>
    </div>
</div>

<div class="" id="work-mid"></div>

</div>
</section>


<section class="u-align-left u-clearfix u-section-1 bg_color--5" id="sec-ab03">
    <div class="u-clearfix u-sheet u-sheet-1">
        <a href="{{route('our_works_covi_sense')}}">
            <div class="u-container-style u-group u-image u-image-round u-image-1 u-radius-3 zoom" style="background-image: url({{asset('assets/images/work/CoviSense.jpg')}});">
                <div class="u-container-layout u-container-layout-1"></div>
            </div>
        </a>
        <div class="u-container-style u-expanded-width-sm u-expanded-width-xs  u-group u-radius-3 u-shape-round u-group-2 bg_color--1" data-animation-name="swing" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">
            <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                <a href="{{route('our_works_covi_sense')}}">
                    <h2 class="u-align-left u-text u-text-default u-text-1 gradient-work">CoviSense</h2>
                </a>
                <h3 class="u-align-left u-text u-text-default u-text-2 pb--10">A low cost IoT device for sensing COVID Symptoms</h3>
                <a class="btn-transparent rn-btn-dark mb--10 mt--10" href="{{route('our_works_covi_sense')}}"><span class="text font-italic">Read More </span><i class="fas fa-arrow-right"></i></a>
            </div>
        </div>


        <div class="" id="work-mid"></div>

    </div>
</section> --}}

@endsection

@section('custom_js')

@endsection