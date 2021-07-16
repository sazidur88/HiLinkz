<div class="rn-gallery-area rn-section-gap bg_color--1 position-relative" id="service">
    <div class="rn-masonary-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title text-left mb--30">
                        <h2>Our Services</h2>
                        <p class="text-left p-2">HiLinkz offers a range of services to assist individuals, organizations, and institutions around the world in pursuing their goals. </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper plr--70 plr_sm--30 plr_md--30">
            <div class="gallery-wrapper gallery-grid mesonry-list grid-metro3" id="">
                <!-- Start Single Gallery -->
                <a class="item-portfolio-static gallery masonry_item portfolio-33-33 cat--2 cat--3" href="{{route('web_development')}}">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{asset('assets/images/portfolio/HiLinkzMiniebDevelopment.jpg')}}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content text-center">
                            <div class="inner p-3 bg_color--5">
                                <h4>Web Development</h4>
                                <p class="text-left">We develop customized and unique Web solutions starting from simple corporate websites to office automation, e-commerce solutions and many more.</p>
                                <p class="text-left font-italic lm--hover lm--hover">Learn more <i class="fas fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Single Gallery -->
                <!-- Start Single Gallery -->

                <a class="item-portfolio-static gallery masonry_item portfolio-33-33 cat--2 cat--3" href="{{route('app_development')}}">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{asset('assets/images/portfolio/HiLinkzMiniAppDevelopment.jpg')}}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content text-center">
                            <div class="inner p-3 bg_color--5">
                                <h4>App Development</h4>
                                <p class="text-left">Our highly skilled app developers turn our customers’ app ideas into successful mobile applications very quickly to bring mobility and agility to their business.</p>
                                <p class="text-left font-italic lm--hover">Learn more <i class="fas fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- End Single Gallery -->

                <!-- Start Single Gallery -->
                <a class="item-portfolio-static gallery masonry_item portfolio-33-33 cat--2 cat--3" href="{{route('digital_marketing')}}">
                    <div class="portfolio-static">
                        <div class="thumbnail-inner">
                            <div class="thumbnail">
                                <img src="{{asset('assets/images/portfolio/HiLinkzMiniDigitalMarketting.jpg')}}" alt="Portfolio Images">
                            </div>
                        </div>
                        <div class="content text-center">
                            <div class="inner p-3 bg_color--5">
                                <h4>Digital Marketing</h4>
                                <p class="text-left">We can boost up your business growth connecting with thousands of internet users using digital marketing.</p>
                                <p class="text-left font-italic lm--hover">Learn more <i class="fas fa-arrow-right"></i></p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- End Single Gallery -->
            </div>
        </div>
    </div>
    <div class="button-group mt--30 text-center">
        <a class="btn-transparent rn-btn-dark" href="{{route('all_services')}}"><span class="text font-italic">View All Services </span><i class="fas fa-arrow-right"></i></a>
    </div>
</div>

{{-- 
<!-- old services area -->
<div class="rn-service-area rn-section-gap bg_color--1" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title text-left mb--30">
                    <h2>Our Services</h2>
                    <p>HiLinkz offers a range of services to assist individuals, organizations, and institutions around the world in pursuing their goals. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Start Single Service  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                <div class="single-service service__style--2 bg-color-gray">
                    <a href="{{route('consultancy')}}">
                        <div class="service">
                            <div class="icon">
                                <i data-feather="book-open"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">Consultancy</h3>
                                <p>We are here to advise and guide clients with our deeper levels of IT expertise to grow their business that would otherwise...</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Single Service  -->

            <!-- Start Single Service  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                <div class="single-service service__style--2 bg-color-gray">
                    <a href="{{route('it_solutions')}}">
                        <div class="service">
                            <div class="icon">
                                <i data-feather="layers"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">IT solutions & Services</h3>
                                <!-- style="text-align:justify" -->
                                <p>We take the burden of IT management on behalf of organizations so that they can focus on their core business...</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Single Service  -->

            <!-- Start Single Service  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                <div class="single-service service__style--2 bg-color-gray">
                    <a href="{{route('data_intelligence')}}">
                        <div class="service">
                            <div class="icon">
                                <i data-feather="cloud-lightning"></i>
                                <!-- <i class="far fa-lightbulb"></i> -->
                            </div>
                            <div class="content">
                                <h3 class="title">Data Intelligence</h3>
                                <p>All smart businesses today require data analytics and business intelligence (BI), which we call data intelligence...</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Single Service  -->

            <!-- Start Single Service  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                <div class="single-service service__style--2 bg-color-gray">
                    <a href="{{route('app_development')}}">
                        <div class="service">
                            <div class="icon">
                                <i data-feather="smartphone"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">App Development</h3>
                                <p>We have established a strong expertise in the mobile domain by acquiring extensive know-how and experience...</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Single Service  -->

            <!-- Start Single Service  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                <div class="single-service service__style--2 bg-color-gray">
                    <a href="{{route('web_development')}}">
                        <div class="service">
                            <div class="icon">
                                <i data-feather="monitor"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">Web Development</h3>
                                <p>HiLinkz develops customized and unique web solutions starting from simple corporate websites to eCommerce solutions... </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Single Service  -->

            <!-- Start Single Service  -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">
                <div class="single-service service__style--2 bg-color-gray">
                    <a href="{{route('all_services')}}">
                        <div class="service">
                            <div class="icon">
                                <i data-feather="activity"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">Digital Marketing</h3>
                                <p>We can boost up your business growth connecting with hundreds and thousands of internet users using digital...</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Single Service  -->

        </div>
    </div>
</div>
--}}