@extends('layouts.web-inner')
@section('custom_styles')
<style type="text/css">
    .w-80 {
        width: 80%;
    }

    .br-0 {
        border-radius: 0px;
    }

    .page-wrapper {
        width: 80%;
    }

    .imagex {


        max-width: 100%;
        object-fit: cover;
        display: block;
        height: 20rem !important;

    }


    .blog-full-image {

        width: 100%;
        height: 400px !important;
        object-fit: cover;
        padding: 0;
    }

    .logo,
    .logo-f {

        height: auto !important;

    }

    .my_switcher {
        display: none;
    }


    .blog-row {
        display: grid;
        place-items: center;
        margin-top: 0;
        margin-bottom: 0;
    }

    .blog-single-page-title ul.blog-metablog-meta {
        color: black;
        bottom: -60px;
        border-top: 1px grey dotted;
        margin: 0;
    }

    @media (max-width: 1180px) {
        .imagex {
            float: none !important;
            margin: 0 auto;
            padding: 0.5rem 0;

        }

    }

    @media (min-width:301px) and (max-width: 500px) {
        .blog-meta {
            color: black;
            bottom: -110px;
            border-top: 1px grey dotted;
            margin: 0;
        }

    }

    @media (max-width: 300px) {
        .blog-meta {
            color: black;
            bottom: -155px;
            border-top: 1px grey dotted;
            margin: 0;
        }

        .blog-full-image {
            margin-top: 3rem;
        }


    }
</style>
@endsection
@php
$address = hilinkz_contact();
$location_bd = $address['address_bd'];
$location_aus = $address['address_aus'];
$email_bd1 = $address['email_bd1'];
$email_bd2 = $address['email_bd2'];
$email_aus = $address['email_aus'];
$phone_bd1 = $address['phone_bd1'];
$phone_bd2 = $address['phone_bd2'];
$phone_aus = $address['phone_aus'];
$map_bd = $address['map_bd'];
$map_aus = $address['map_aus'];
@endphp
@section('content')


<!-- Start Breadcrump Area  -->
<div class="rn-page-title-area pt--120 pb--90 bg_image bg_image--7 blog-banner m-auto">
    <div class="container w-80">
        <div class="row">
            <div class="col-lg-12 pl-0">
                <div class="blog-single-page-title pt--50">
                    <h2 class=" py-4">{{$blog->title}}</h2>
                    <div class="">
                        <ul class="blog-meta d-flex justify-content-start align-items-center m-0">
                            <li class="my-auto py-3"><i data-feather="clock"></i>{{$blog->published_date}}</li>
                            <li class="my-auto py-3"><i data-feather="user"></i>{{$blog->author_name}}</li>
                            <li class="my-auto py-3 "><i data-feather="tag"></i>{{$blog->tags}}</li>
                            <!-- <li><i data-feather="message-circle"></i>15 Comments</li>
                        <li><i data-feather="heart"></i>Like</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrump Area  -->

<!-- Start Page Wrapper  -->
<main class="page-wrapper container p-0 py-3">

    <!-- Start Blog Details Area  -->
    <div class="rn-blog-details  pb--70 bg_color--1">
        <div class="container">
            <div class="row blog-row">
                <div class="col-lg-12 p-0">

                    <div class="inner-wrapper">
                        <div class="inner p-0">
                            <div class="thumbnail container mx-auto p-0">
                                <img class="blog-full-image br-0" id="blogImage" src="{{ asset('storage/'.$blog->full_image)}}" alt="Blog Images">
                            </div>

                            <p class="mt--40 p-0 "> {!! html_entity_decode($blog->detail) !!} </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- End Blog Details Area  -->


@endsection
@section('custom_js')
<!-- Summernote -->

<script>
    $(document).ready(function() {
        $("img").addClass("imagex");
    });
    document.getElementById("my_switcher").disabled = true;
</script>
@endsection