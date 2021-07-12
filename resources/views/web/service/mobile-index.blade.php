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
<div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--5" data-black-overlay="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rn-page-title text-center pt--100">
                    <h2 class="title theme-gradient">Mobile App DEVELOPMENT</h2>
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
                                        <p>but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum. You need to be sure there isn't anything embarrassing</p>
                                        <p>hidden in the middle of text. All the Lorem Ipsum generators tend toitrrepeat predefined chunks. Necessary, making this the first true generator on the Internet.</p>
                                        <h4 class="title">Proceess of metel</h4>
                                        <ul class="liststyle bullet">
                                            <li>Yet this above sewed flirted opened ouch</li>
                                            <li>Goldfinch realistic sporadic ingenuous</li>
                                            <li>Abominable this abidin far successfully then like piquan</li>
                                            <li>Risus commodo viverra</li>
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Content  -->

                            <!-- Start Single Content  -->
                            <div class="row sercice-details-content align-items-center">
                                <div class="col-lg-6 col-12 order-2 order-lg-1">
                                    <div class="details mt_md--30 mt_sm--30">
                                        <p>but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum. You need to be sure there isn't anything embarrassing</p>
                                        <p>hidden in the middle of text. All the Lorem Ipsum generators tend toitrrepeat predefined chunks. Necessary, making this the first true generator on the Internet.</p>
                                        <h4 class="title">Our Working Process</h4>
                                        <ul class="liststyle bullet">
                                            <li>Yet this above sewed flirted opened ouch</li>
                                            <li>Goldfinch realistic sporadic ingenuous</li>
                                            <li>Abominable this abidin far successfully then like piquan</li>
                                        </ul>
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