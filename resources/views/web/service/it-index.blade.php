@extends('layouts.web')

@section('custom_styles')
<style type="text/css">
    img.logo {
        width: 150px;
    }
</style>
@endsection
@section('content')
<!-- Start Breadcrump Area  -->
<div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--it" data-black-overlay="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rn-page-title text-center pt--100">
                    <h2 class="title theme-gradient">IT SOLUTIONS & SERVICES</h2>
                    <p>Fresh From The Press Discription</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrump Area  -->
<!-- Start Page Wrapper  -->

<div class="rn-service-details rn-section-gap bg_color--1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-details-inner">
                    <div class="inner">
                        <!-- Start Single Content  -->
                        <div class="row sercice-details-content pb--80 align-items-center">

                            <div class="col-lg-6 col-12">
                                <div class="details mt_md--30 mt_sm--30">
                                    <p class="text-justify">Through our top class partner organizations we provide complete IT solutions i.e. building IT infrastructure to developing and maintaining software systems for businesses. Since organizations need a wide array of solutions and services, our goal is to provide and maintain excellent IT services to organizations. In short, we take the burden of IT management on behalf of organizations so that they can focus on their core business.</p>
                                    <p class="text-justify">While procuring IT solutions and services very often organizations make mistakes in choosing the right products, thus creating many troubles and hindering growth of actual business. The reason behind this is that organizations do not know what they actually need and what to expect from the procured services. There is considerable understanding gaps because IT management is not the core business of these organizations. As a result they purchase services that under delivers their expectations or over delivers to increase the total cost. We like to provide the right solutions and services for optimum results in a cost effective way. </p>


                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="thumb">
                                    <img class="w-100" src="{{asset('assets/images/service/service-01.png')}}" alt="Service Images" />
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content  -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('custom_js')

@endsection