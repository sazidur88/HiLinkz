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
<div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--12" data-black-overlay="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rn-page-title text-center pt--100">
                    <h2 class="title theme-gradient">WEBSITE DEVELOPMENT</h2>
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
                                <div class="thumb">
                                    <img class="w-100" src="{{asset('assets/images/service/service-01.png')}}" alt="Service Images" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="details mt_md--30 mt_sm--30">
                                    <p class="text-justify">All smart businesses today require data analytics and business intelligence (BI), which we call data intelligence, for its survival and future growth. According to Forrester “Business Intelligence is a set of methodologies, processes, platforms, applications, architectures, and technologies that transform raw data into meaningful and useful information used to enable more effective strategic, tactical, and operational insights and decision-making”.</p>

                                    <p class="text-justify">For example, through access to BI applications, a bank’s branch manager can determine who are the most profitable customers and which customers they should work on. Such intelligence often requires the following steps:</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Content  -->

                        <!-- Start Single Content  -->
                        <div class="row sercice-details-content align-items-center">
                            <div class="col-lg-6 col-12 order-2 order-lg-1">
                                <div class="details mt_md--30 mt_sm--30">
                                <h4 class="title">Proceess of metel</h4>
                                    <ul class="liststyle bullet">
                                        <li>Step 1) Raw Data from corporate databases is extracted. The data could be spread across multiple heterogeneous systems.</li>
                                        <li>Step 2) The data is cleaned and transformed into the data warehouse. The table can be linked, and data cubes are formed.</li>
                                        <li>Step 3) Using BI systems the user can ask queries, request ad-hoc reports or conduct any other analysis.</li>
                                    </ul>
                                    <p>We work on each three steps as clients needed.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 order-1 order-lg-2">
                                <div class="thumb position-relative">
                                    <img class="w-100" src="{{asset('assets/images/service/service-02.png')}}" alt="Service Images" />
                                    <a class="video-popup play__btn" href="https://www.youtube.com/watch?v=ZOoVOfieAF8"><span class="play-icon"></span></a>
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