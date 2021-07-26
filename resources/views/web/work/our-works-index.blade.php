@extends('layouts.web-inner')

@section('custom_styles')
<style type="text/css">
    img.logo {
        width: 150px;
    }

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
<div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--17" data-black-overlay="5">
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
                    <h3 class="tilte text-center">HiLinkz delivers exponential growth through innovative technology solutions</h3>
                    <p>Technology is continually evolving, providing endless opportunities for improving productivity, connecting to your customers, and discovering new products and services. Digital transformation can radically improve your business through the strategic application of modern technology for processes, products, and assets. As a top app development agency, we have over a decade of expertise in building innovative technology solutions for our clients, ranging from small businesses through large global corporations.</p>
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
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-lg-4 col-md-6 mt--30 pb--50 zoom">
                        <div class="standard-service">
                            <div class="thumbnai"><img src="{{asset('assets/images/portfolio/HiLinkzMiniConsultancy.jpg')}}" alt="Corporate Images"></div>
                            <div class="content shadow p-3 mb-3">
                                <h3><a class="text-center" href="{{route('consultancy')}}">Consultancy</a></h3>
                                <p>We are here with our deeper levels of IT expertise to advise and guide our clients for successful digital transformation of their companies.</p>
                                <a href="{{route('consultancy')}}" class="text-left font-italic btn-transparent rn-btn-dark"><small>Learn more</small> <i class="fas fa-arrow-right"></i></a>
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