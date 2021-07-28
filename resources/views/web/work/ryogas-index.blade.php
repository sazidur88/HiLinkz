@extends('layouts.web-inner')

@section('custom_styles')
<style type="text/css">
    img.logo {
        width: 150px;
    }

    .gradient-work {
        background: linear-gradient(-259deg, #f81f01 0, #ee076e 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
@endsection
@section('content')
<!-- Start Breadcrump Area  -->
<div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--ryogas" data-black-overlay="3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rn-page-title text-center pt--100">
                    <h2 class="title theme-gradient">RyoGas</h2>
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
                    <h3 class="text-left title-h3">About RyoGas</h3>
                    <p>RyoGas introduces IoT (Internet of Things) solutions to make the Fuel (LPG / CNG / Petrol) Stations a Smart One in Bangladesh. The company has a number of happy clients who use mobile apps and digital devices to fully automate the management of their fuel stations.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Column Area  -->

<!-- Start Column Area  -->
<div class="rn-column-area rn-section-gap-work bg_color--5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12" style="background-color:#f9004d">
                <div class="single-column custom-color">
                    <h4 class="tilte">For Whom</h4>
                    <p>For smart owners who like to manage their one or more gas stations from mobile apps. For companies that like to manage their gas stations remotely.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt_sm--30" style="background-color:#F79F1F">
                <div class="single-column custom-color custom-color--3">
                    <h4 class="tilte">For What</h4>
                    <p>Smart owners can monitor daily sales, purchase, stock, cash / bank statements, sales profit / loss from anywhere. Provide sales receipts to customers. </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt_sm--30 mt_md--30" style="background-color: #c93ec7">
                <div class="single-column custom-color custom-color--2">
                    <h4 class="tilte">Benefits</h4>
                    <p>Remote and efficient gas station management. Reduced operational costs. Increased sales and profits.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mt_sm--30 mt_md--30" style="background-color:#009432">
                <div class="single-column custom-color custom-color--4">
                    <h4 class="tilte">Why RyoGas</h4>
                    <p>
                        <i data-feather="check"></i> Attractive price model<br>
                        <i data-feather="check"></i> Ease of use<br>
                        <i data-feather="check"></i> Excellent service
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Column Area  -->
<!-- Start Column Area  -->
<div class="rn-column-area rn-section-gap-work bg_color--1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-column text-justify">
                    <h3 class="text-left title-h3">RyoGas Android Apps</h3>
                    <p>There are three different android apps to facilitate managing gas stations. Station owners can subscribe to one or more apps of their convenience. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Column Area  -->
<!-- Start About Area  -->
<div class="rn-column-area rn-section-gap-work bg_color--5">
    <div class="container">
        <div class="row ">
            <div class="single-column text-justify">
                <h3 class="text-left title-h3 gradient-work">Project #1 : RyoGas POS</h3>
                <p class="pb--20">There are three different android apps to facilitate managing gas stations. Station owners can subscribe to one or more apps of their convenience. </p>
            </div>

            <div class="col-lg-6 order-2 order-lg-1">
                <div class="about-inner inner">

                    <div class="mt--30">
                        <h4>Sales Receipts</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i>Sales people print sales receipts for customers</li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <h4>Payment Methods</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i>Accepts cash, bKash, credit card payments</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="about-inner inner">
                    <div class="mt--30">
                        <h4>Credit Sales</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i>Allows credit sales and reconcile later on </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<!-- End About Area  -->
<!-- Start About Area  -->
<div class="rn-column-area rn-section-gap-work  bg_color--1">
    <div class="container">
        <div class="row">
            <div class="single-column text-justify">
                <h3 class="text-left title-h3 gradient-work">Project #2 : RyoGas Accounts</h3>
                <p class="pb--20">This app records daily sales summary, gas purchase, gas stock, petty cash and cash statements.

                </p>
            </div>

            <div class="col-lg-6 order-2 order-lg-1">
                <div class="about-inner inner">
                    <div class="mt--30">
                        <h4>Gas Sales</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i>Input daily sales summary for individual nozzles</li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <h4>Gas Purchase</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i>Records purchase history from suppliers</li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <h4>Gas Stock</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i>Adjusts gas stock automatically after purchase and sales</li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <h4>Stock Level Monitoring</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i>Gives warning when stock level drops below certain levels</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="about-inner inner">
                    <div class="mt--30">
                        <h4>Petty Cash Management</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i>Manages daily expenditures detail</li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <ul class="list-style--1">
                            <h4>Cash Statement</h4>
                            <li><i data-feather="check" width="16" height="16"></i>Tracks daily sales amount, cash withdrawal and bank deposit</li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <h4>Profit / loss calculation</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i>Calculates approximate daily profit or loss </li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <h4>Reports</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i>Reports daily and monthly on gas sales, stock summary, cash statement</li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- End About Area  -->
<!-- Start About Area  -->
<div class="rn-column-area rn-section-gap-work  bg_color--5">
    <div class="container">
        <div class="row ">
            <div class="single-column text-justify">
                <h3 class="text-left title-h3 gradient-work">Project #3 : RyoGas Web Application</h3>
                <p class="pb--20">The Web application mainly manages activities for company admin and gas station owners. </p>
            </div>

            <div class="col-lg-6 order-2 order-lg-1">
                <div class="about-inner inner">

                    <div class="mt--30">
                        <h4>Company profile</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i></li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <h4>One or more gas station creation</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i></li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <h4>Station employee registration</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i></li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <h4>Employee role management</h4>
                           <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i></li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <h4>Manage approval process</h4>
                            <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="about-inner inner">
                    <div class="mt--30">
                        <h4>Station employee registration</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i></li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <h4>Employee role management</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i></li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <h4>Manage approval process</h4>
                         <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i></li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <h4>Daily Reports</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i></li>
                        </ul>
                    </div>
                    <div class="mt--30">
                        <h4>Monthly Reports</h4>
                        <ul class="list-style--1">
                            <li><i data-feather="check" width="16" height="16"></i></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>
<!-- End About Area  -->




<!-- End Column Area  -->
<div class="button-group mt--30 mb--30 text-center">
    <a class="btn-transparent rn-btn-dark" href="{{route('our_works')}}"><span class="text font-italic">View More Works </span><i class="fas fa-arrow-right"></i></a>
</div>

<!-- Contact Form Starts Here -->
<div class="rn-contact-area rn-section-gap-work  bg_color--5" id="contact">
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
            </div>
        </div>
    </div>
</div>


@endsection

@section('custom_js')

@endsection