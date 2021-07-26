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

    /* .single-column.custom-color {
        background: #ff5252;
    }

    .standard-service .content h3 a {
        color: #ffffff;
    }

    .standard-service .content a {
        color: #ffffff;
    }

    .standard-service .content h3 a:hover {
        color: black;
    }

    a.btn-transparent:hover {
        color: black;
    }

    a.btn-transparent::after {
        position: absolute;
        content: "";
        left: 0;
        bottom: 0;
        width: 40px;
        height: 2px;
        background: black;
        opacity: 0.75;
    } */
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


<!-- Start old service area -->
{{--<div class="rn-gallery-area rn-section-gap-all-s bg_color--1 position-relative pb--120">
    <div class="rn-masonary-wrapper">
        <div class="wrapper plr--70 plr_sm--30 plr_md--30">
            <div class="gallery-wrapper gallery-grid mesonry-list grid-metro3" id="">
                <!-- Start Single Gallery -->

                <a class="item-portfolio-static gallery masonry_item portfolio-33-33 cat--2 cat--3" href="{{route('consultancy')}}">
<div class="portfolio-static">
    <div class="thumbnail-inner">
        <div class="thumbnail">
            <img src="{{asset('assets/images/portfolio/HiLinkzMiniConsultancy.jpg')}}" alt="Portfolio Images">
        </div>
    </div>
    <div class="content text-center">
        <div class="inner p-3 bg_color--8">
            <h4>Consultancy</h4>
            <p class="text-left">We are here to advise and guide clients with our deeper levels of IT expertise to grow their business that would otherwise be financially</p>
            <p class="text-left font-italic btn-transparent rn-btn-dark"><small>Learn more</small> <i class="fas fa-arrow-right"></i></p>
        </div>
    </div>
</div>
</a>
<!-- End Single Gallery -->
<!-- Start Single Gallery -->

<a class="item-portfolio-static gallery masonry_item portfolio-33-33 cat--2 cat--3" href="{{route('web_development')}}">
    <div class="portfolio-static">
        <div class="thumbnail-inner">
            <div class="thumbnail">
                <img src="{{asset('assets/images/portfolio/HiLinkzMiniWEB.jpg')}}" alt="Portfolio Images">
            </div>
        </div>
        <div class="content text-center">
            <div class="inner p-3 bg_color--8">
                <h4>Web Development</h4>
                <p class="text-left">We develop customized and unique Web solutions starting from simple corporate websites to office automation, e-commerce solutions and many more.</p>
                <p class="text-left font-italic btn-transparent rn-btn-dark"><small>Learn more</small> <i class="fas fa-arrow-right"></i></p>
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
            <div class="inner p-3 bg_color--8 ">
                <h4>App Development</h4>
                <p class="text-left">Our highly skilled app developers turn our customers’ app ideas into successful mobile applications very quickly to bring mobility and agility to their business.</p>
                <p class="text-left font-italic btn-transparent rn-btn-dark"><small>Learn more</small> <i class="fas fa-arrow-right"></i></p>
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
                <img src="{{asset('assets/images/portfolio/HiLinkzMiniDigitalMarketting_New.jpg')}}" alt="Portfolio Images">
            </div>
        </div>
        <div class="content text-center">
            <div class="inner p-3 bg_color--8 ">
                <h4>Digital Marketing</h4>
                <p class="text-left">We can boost up your business growth connecting with thousands of internet users using digital marketing. There are many tactics in digital marketing...</p>
                <Learn class="text-left font-italic btn-transparent rn-btn-dark"><small>Learn more</small> <i class="fas fa-arrow-right"></i></p>
            </div>
        </div>
    </div>
</a>
<!-- End Single Gallery -->
<!-- Start Single Gallery -->

<a class="item-portfolio-static gallery masonry_item portfolio-33-33 cat--2 cat--3" href="{{route('it_solutions')}}">
    <div class="portfolio-static">
        <div class="thumbnail-inner">
            <div class="thumbnail">
                <img src="{{asset('assets/images/portfolio/HiLinkzMiniIT.jpg')}}" alt="Portfolio Images">
            </div>
        </div>
        <div class="content text-center">
            <div class="inner p-3 bg_color--8">
                <h4>IT solutions and Services</h4>
                <p class="text-left">Through our top class partner organizations we provide complete IT solutions i.e. building IT infrastructure to developing and maintaining ...</p>
                <p class="text-left font-italic btn-transparent rn-btn-dark"><small>Learn more</small> <i class="fas fa-arrow-right"></i></p>
            </div>
        </div>
    </div>
</a>

<!-- End Single Gallery -->
<!-- Start Single Gallery -->
<a class="item-portfolio-static gallery masonry_item portfolio-33-33 cat--2 cat--3" href="{{route('web_development')}}">
    <div class="portfolio-static">
        <div class="thumbnail-inner">
            <div class="thumbnail">
                <img src="{{asset('assets/images/portfolio/HiLinkzMiniData.jpg')}}" alt="Portfolio Images">
            </div>
        </div>
        <div class="content text-center">
            <div class="inner p-3 bg_color--8">
                <h4>Data Intelligence</h4>
                <p class="text-left">All smart businesses today require data analytics and business intelligence (BI), which we call data intelligence, for its survival and future growth.</p>
                <p class="text-left font-italic btn-transparent rn-btn-dark"><small>Learn more</small> <i class="fas fa-arrow-right"></i></p>
            </div>
        </div>
    </div>
</a>
<!-- End Single Gallery -->
</div>
</div>
</div>
<div class="button-group mt--30 text-center">
    <!-- <a class="btn-transparent rn-btn-dark" href="{{route('all_services')}}"><span class="text font-italic">View All Services </span><i class="fas fa-arrow-right"></i></a> -->
</div>
</div>--}}
<!-- End old service area -->

<!-- Start Blog Details Area  -->
{{--
<div class="rn-blog-details pb--70 bg_color--1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pb--70">

            </div>
            <div class="button-group mt--30 text-center">                <!-- <a class="btn-transparent rn-btn-dark" href="{{route('all_services')}}"><span class="text font-italic">View All Services </span><i class="fas fa-arrow-right"></i></a> -->

</div>
</div>
<div class="inner-wrapper">
    <div class="inner">
        <h4 class="title">HILINKZ offers a range of services to assist individuals, organizations, and institutions around the world in pursuing their goals. </h4>
        <p>Our development pattern is as follows…</p>
        <ul class="list-style pb--30">
            <li>Analysis, Prototyping, and Proof-of-Concept
            </li>
            <li>Joint Application Development (JAD)</li>
            <li>Customization and Integration</li>
            <li>Software Testing, Website Testing, and Validation
            </li>
            <li>Maintenance
            </li>
            <li>Software Product Upgradation (new versions)

            </li>
        </ul>


        <div class="thumbnail">
            <img src="assets/images/blog/bl-big-01.jpg" alt="Blog Images">
        </div>

        <p class="mt--40">Our development pattern is as follows…</p>

        <h4 class="title">Software Product Development</h4>
        <p class="mt--20 text-justify">We help our customers convert their product vision into a tangible design, scalable architecture, and finally a successful product. Managing time and resources, effectively to ensure a successful product release, allowing you to focus on reaching your business objectives.</p>
        <p>Necessary, making this the first true generator on the Internet. It re are many
            variations of passages of Lo rem Ipsum available, but the majority have suffered
            alteration in some form, by injectedeed eedhumour, or randomised words which
            don't look even slightly believable.</p>


        <h4 class="title">Web Development and Design</h4>
        <p class="mt--20 text-justify">HILINKZ develops customized and unique web solutions starting from simple corporate websites to eCommerce solutions, extensive web-based applications. A website is an integral part of your image, identification and communication strategy. HILINKZ offers a website design with crucial blend of expertise including creative conception, brand sensitivity, and technical and interactive architecture skill and design execution.</p>

        <h4 class="title">Mobile Application Development</h4>
        <p class="mt--20 text-justify">HILINKZ develops Mobile Applications consistently enhancing the competencies that are vital to introduce innovation in the one technology which has become the center stage in today’s world- the rapidly growing mobile space. We have established a strong expertise in the mobile domain by acquiring extensive know-how and experience in building groundbreaking mobile applications on the major mobile operating systems: iPhone, Android, BlackBerry, Symbian, Windows, and J2ME.</p>


        <blockquote class="rn-blog-quote">Services offered by us are…</blockquote>


        <h4 class="title">Custom Application Development and Maintenance (CADM):</h4>
        <p class="mt--20 text-justify">Client’s existing application can be customized, updated, or migrated to a newer application development platform. By making complicated and tedious operations simpler, our Desktop Applications help you synchronize important processes and streamline your IT operations in a proper, growth-enhancing manner.</p>

        <div class="blog-single-list-wrapper d-flex flex-wrap">
            <div class="thumbnail"><img class="w-100" src="assets/images/blog/blog-single-01.png" alt="BLog Images"><span></span>
            </div>

            <div class="content">

                <h4 class="mt--40 title">Application Re Engineering:</h4>
                <p class="mt--20 text-justify">Your existing application might need increase in speed, better usability or up-gradation to another technical platform, consolidation or defined process and methodology, or a user-friendly architecture. With the need to upgrade strategies and applications to keep pace with increasing challenges and objectives to be met in a short span of time, businesses are increasingly opting for Application Re-engineering. There is a race to keep up with cutting-edge technological advancements for increased productivity.</p>


                <h4 class="mt--20 title">Extended Workforce:</h4>
                <p class="mt--20 text-justify">HILINKZ allows you to hire our skilled resources as Dedicated Programmers on a monthly contract hiring basis. You can monitor and stay connected with the hired development team at your assigned working hour. Alternatively, you can also set up an Offshore Development Centre at HILINKZ.</p>

            </div>
        </div>

        <h4 class="mt--20 title">Consulting Services:</h4>
        <p class="mt--20 text-justify">HILINKZ takes a consultative approach to help our clients. We work within your strategic objectives, align with your goals, and offer full support and knowledge transfer to your team. Our proven methodologies allow us to ramp up quickly, and our governance structure is designed to offer you the transparency and quality you demand.</p>
    </div>
</div>
</div>
</div>
--}}
<!-- End Blog Details Area  -->


@endsection

@section('custom_js')

@endsection