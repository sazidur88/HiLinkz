@extends('layouts.web-inner')
@section('title', 'KnotERP')

@section('custom_styles')
    <style type="text/css">
        .single-tab-content ul li a {
            font-weight: 500;
            display: inline-block;
            color: #717173;
        }
        .key {
            font-weight: 500;
            display: inline-block;
            color: #525252;
            transition: 400ms;
        }
        .key:hover {
            color: #f74831;
        }

        .a ul {
            list-style: none;
            padding-left: 0;
        }


        .a li {
            position: relative;
            padding-left: 1.2em;
        }

        .a li:before {
            content: '✓';
            position: absolute;
            left: 0;
            color: red;

        }

    </style>
@endsection
@section('content')
    <!-- Start Breadcrump Area  -->
    <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--KnotERP" data-black-overlay="2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rn-page-title text-center pt--100">
                        <h2 class="title theme-gradient"></h2>
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
                        <h3 class="text-left title-h3">About Knot-ERP</h3>
                        <!-- <p class="page-description-category">Consulting is more than giving advice</p> -->
                        <p>Knot-ERP is an Enterprise Resource Planning (ERP) software that ties up different modules such as
                            accounting, HRMS, CRM, e-commerce and Inventory Management into a single platform. We customize
                            the software with one or more modules according to the client needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->

    <!-- Start Column Area  -->
    <div class="rn-column-area rn-section-gap bg_color--5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="about-inner inner mb--40">
                        <div class="section-title">
                            <h4 class="theme-gradient">Accounting Module</h4>
                            <p class="description">The accounting module ensures a double-entry system of bookkeeping to
                                prepare accurate financial statements, allowing for improved detection of errors.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 ">
                    <div class="thumbnail">
                        <img class="w-100" src="{{ asset('assets/images/work/KnotERP/HiLinkz 800-600Accounting.jpg') }}"
                            alt="Service Images" />
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--30 ">
                    <div class="about-inner inner">    
                        <div class="single-tab-content">
                                <h4 class="key">Key Features: </h4>                       
                            <ul class="a">
                                <li> <a>Chart of Accounts (COA) - </a> Create accounts in groups</li>
                                <li> <a>General Ledgers - </a> Store and organize financial data</li>
                                <li> <a>Invoicing - </a> Create and send professional-looking invoices in seconds</li>
                                <li> <a>Expenses - </a> Keep track of all expenses </li>
                                <li> <a>Account Reconciliation - </a> Maintain complete and accurate account balances</li>
                                <li> <a>VAT Tax Calculation - </a> Keep track of VAT and tax</li>
                                <li> <a>Financial Reports - </a> See business performance with a range of popular reports</li>
                            </ul>
                        </div>
                    </div>
                    <div class="button-group mt--30">
                        <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get
                            Started <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->
    <!-- Start Column Area  -->
    <div class="rn-column-area rn-section-gap bg_color--1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="about-inner inner mb--40">
                        <div class="section-title">
                            <h4 class="theme-gradient">HRM Module</h4>
                            <p class="description">Human Resource Management (HRM) module automates the practice of
                                recruiting, onboarding and managing an organization's employees.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="thumbnail">
                        <img class="w-100" src="{{ asset('assets/images/work/KnotERP/HiLinkz 800-600HRMS.jpg') }}"
                            alt="Service Images" />
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--30">
                    <div class="about-inner inner">
                        <div class="single-tab-content">
                            <h4 class="key">Key Features: </h4>                       
                            <ul class="a">
                                <li> <a>Organogram - </a> Can create any hierarchical organogram </li>
                                <li> <a>Recruitment - </a> Job posting, CV collection, interview scheduling</li>
                                <li> <a>Onboarding - </a> New employe creation, benefit management</li>
                                <li> <a>Attendance Management - </a> Keep track of attendance time, break etc. </li>
                                <li> <a>Leave Management - </a> Manage different kinds of leave, leave benefits etc.</li>
                                <li> <a>Payroll - </a> Salary sheet generation</li>
                                <li> <a>Performance Management - </a> Employee KPI management</li>
                                <li> <a>HR analytics - </a> Different types of analytics for better performance</li>
                            </ul>
                        </div>
                    </div>
                    <div class="button-group mt--30">
                        <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get
                            Started <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->
    <!-- Start Column Area  -->
    <div class="rn-column-area rn-section-gap bg_color--5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="about-inner inner mb--40">
                        <div class="section-title">
                            <h4 class="theme-gradient">CRM Module</h4>
                            <p class="description">Customer Relationship Management (CRM) module manages business
                                relationships with customers. The module enables teams to capture leads, nurture their sales
                                pipelines and retain customers in one customizable platform.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="thumbnail">
                        <img class="w-100" src="{{ asset('assets/images/work/KnotERP/HiLinkz 800-600CRM.jpg') }}"
                            alt="Service Images" />
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--30 ">

                    <div class="about-inner inner">
                        <div class="single-tab-content">
                            <h4 class="key">Key Features: </h4>                       
                            <ul class="a">
                                <li> <a>Lead Generation - </a> Store potential customer details</li>
                                <li> <a>Customer Information - </a> Store customer details for easy search and retrieval
                                </li>
                                <li> <a>Track Sales Pipeline - </a> Automatically perform a specific action based on
                                    triggers or events to be more productive</li>
                                <li> <a>Smart Filtering - </a> Quickly and easily see contacts or companies that meet
                                    certain criteria</li>
                                <li> <a>Analytics and Reporting - </a> Insights of potential and existing customers, sales
                                    forecasting etc.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="button-group mt--30">
                        <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get
                            Started <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->
    <!-- Start Column Area  -->
    <div class="rn-column-area rn-section-gap bg_color--1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="about-inner inner mb--40">
                        <div class="section-title">
                            <h4 class="theme-gradient">e-Commerce Module</h4>
                            <p class="description">This module enables companies to run an e-commerce platform for online
                                sales of items.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="thumbnail position-relative">
                        <img class="w-100" src="{{ asset('assets/images/work/KnotERP/HiLinkz 800-600E-commerce.jpg') }}"
                            alt="Service Images" />
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--30">
                    <div class="about-inner inner">
                        <div class="single-tab-content">
                            <h4 class="key">Key Features: </h4>                       

                            <ul class="a">
                                <li> <a>Product Catalog - </a> reate and share complete list of items in different
                                    categories</li>
                                <li> <a>Customer Registration - </a> Allows customers to register for online shopping
                                </li>
                                <li> <a>Shopping Cart - </a> Facilitate online shopping</li>
                                <li> <a>Promotion and Discount Offers - </a> Customized promotional and discount offers</li>
                                <li> <a>Payment Methods - </a> Allows different payment methods e.g. Credit Cards, bKash
                                    etc.</li>
                                <li> <a>Inventory Updates - </a> Automatically updates product inventory</li>
                                <li> <a>Sales Reports- </a> Generates different sales reports for better sales management
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="button-group mt--30">
                        <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get
                            Started <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->
    <!-- Start Column Area  -->
    <div class="rn-column-area rn-section-gap bg_color--5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="about-inner inner mb--40">
                        <div class="section-title">
                            <h4 class="theme-gradient">Inventory Module</h4>
                            <p class="description">Inventory module manages and tracks stocks of goods in one or multiple
                                warehouses. Even the goods.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="thumbnail">
                        <img class="w-100" src="{{ asset('assets/images/work/KnotERP/HiLinkz 800-600inventory.jpg') }}"
                            alt="Service Images" />
                    </div>
                </div>
                <div class="col-lg-6 mt_sm--30 ">

                    <div class="about-inner inner">
                        <div class="single-tab-content">
                            <ul class="a">
                                <li> <a>Warehouse Management - </a> Manage one or more warehouses, their shelves and
                                    personnel.</li>
                                <li> <a>Shipment Tracking - </a> For exported items track product shipment</li>
                                <li> <a>Barcoding and Tagging - </a> Exactly pinpoint about the location of an item through
                                    barcoding and tagging</li>
                                <li> <a>Inventory Update - </a>Automatically updates inventory when items are checked in or
                                    out</li>
                                <li> <a>Inventory Forecasting - </a> Based on sales trends forecasts for optimum inventory
                                </li>
                                <li> <a>Inventory Alerts - </a> Alert generation if inventory drops to a certain level
                                </li>
                                <li> <a>Stock Return Handling - </a> Handle return items, their payment etc.
                                </li>
                                <li> <a>Vendor Managemen - </a> Store and manage vendor or supplier information
                                </li>
                                <li> <a>Reporting and Analytics - </a> Real-time data regarding product status, driver’s
                                    whereabouts, order status, shipment and much more</li>
                            </ul>
                        </div>
                    </div>

                    <div class="button-group mt--30">
                        <a class="rn-button-style--2 btn_solid btn-size-sm nav-link smoth-animation" href="#contact">Get
                            Started <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Column Area  -->
    <div class="button-group mt--30 mb--30 text-center">
        <a class="btn-transparent rn-btn-dark" href="{{ route('all_services') }}"><span class="text font-italic">View More
                Services </span><i class="fas fa-arrow-right"></i></a>
    </div>
    <!-- Contact Form Starts Here -->
    <div class="rn-contact-area rn-section-gap bg_color--5" id="contact">
        <div class="contact-form--1">
            <div class="container">
                <div class="row row--35 align-items-start">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="section-title text-left mb--50 mb_sm--30 mb_md--30">
                            <h2 class="title">Get Started</h2>
                            <p class="description">We always want to hear from you. Connect with us via phone:
                                <a href="tel:+8801792806811">+88 01792-806811</a> or email:
                                <a href="mailto:contact@hilinkz.com">contact@hilinkz.com</a>
                            </p>
                        </div>
                        <div class="form-wrapper">
                            <form action="{{ route('contact_us_send_message') }}" method="POST">
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

                                <button class="rn-button-style--2 btn_solid" type="submit" value="submit" name="submit"
                                    id="mc-embedded-subscribe">Submit</button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="thumbnailnail mb_md--40 mb_sm--40">
                            <img src="{{ asset('assets/images/about/LetsTalk.jpg') }}" alt="trydo" />
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 order-1 order-lg-2">
                                                        <div class="footer-left">
                                                            <div class="inner">
                                                                <span>Ready To Do This</span>
                                                                <h2 class="text-white">Get to work</h2>
                                                                <a class="rn-button-style--2" href="{{ route('contact_form') }}">
                                                                    <span>Contact Us</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div> -->
                </div>
            </div>
        </div>
    </div>


@endsection

@section('custom_js')

@endsection
