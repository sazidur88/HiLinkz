<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HiLinkz - Partnership in Growth</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta property="og:image" content="https://hilinkz.com/assets/images/logo/HLINKZ-Logo-Transperant.png" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Custom CSS Area -->
    @yield('custom_styles')


</head>

<body class="position-relative spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="150">
    <div id="my_switcher" class="my_switcher">
        <ul>
            <li>
                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                    <img src="{{asset('assets/images/about/sun-01.svg')}}" alt="Sun images"><span title="Light Mode"> Light</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                    <img src="{{asset('assets/images/about/vector.svg')}}" alt="Vector Images"><span title="Dark Mode"> Dark</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main-page">
        <!-- Start Header Area -->
        @include('include.header-inner')
        <!-- End Header Area -->


        @include('include.messages')
        <!-- Error/Success Message Show -->
        {{-- <div class="container">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>  --}}
        
        <!-- Start Content Area -->
        @yield('content')
        <!-- End Content Area -->

        <!-- Start Page Wrapper  -->
        <main class="page-wrapper">

            <!-- Start Slider Area  -->
            <!-- End Slider Area  -->


            <!-- Start Service Area  -->
            <!-- End Service Area  -->


            <!-- Start About Area  -->
            <!-- End About Area  -->


            <!-- Start Portfolio Area  -->
            <!-- Start Portfolio Area  -->


            <!-- Start Counterup Area  -->
            <!-- End Counterup Area  -->


            <!-- Start Team Area  -->
            <!-- End Team Area  -->


            <!-- Start Testimonial Area  -->
            <!-- Start Testimonial Area  -->


            <!-- Start Blog Area  -->
            <!-- End Blog Area  -->


            <!-- Start Contact Area  -->
            <!-- End Contact Area  -->


            <!-- Start Brand Area -->
            <!-- End Brand Area -->
        </main>
        <!-- End Page Wrapper  -->


        <!-- Start Footer Style Two  -->
        @include('include.footer')
        <!-- End Footer Style Two  -->

    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/vendor/modernizr.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{asset('assets/js/vendor/jquery.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/stellar.js')}}"></script>
    <script src="{{asset('assets/js/vendor/particles.js')}}"></script>
    <script src="{{asset('assets/js/vendor/masonry.js')}}"></script>
    <script src="{{asset('assets/js/vendor/stickysidebar.js')}}"></script>
    <script src="{{asset('assets/js/plugins/plugins.js')}}"></script>
    <script src="{{asset('assets/js/vendor/js.cookie.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.style.switcher.js')}}"></script>
    <!-- Owl Carousel  -->
    {{-- <script src="{{asset('assets/js/owl_carousel.js')}}"></script> --}}
    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    

    <!-- Custom JS area -->
    @yield('custom_js')


</body>


</html>