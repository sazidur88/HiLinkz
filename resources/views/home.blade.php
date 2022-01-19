@extends('layouts.web')

@section('custom_styles')
<style type="text/css">
    .zoom {
        width: 100%;
        transition: 0.4s all ease-in-out;
    }

    .zoom:hover {
        /* background-color: #f8f9fc; */
        /* background-color: #f8f9fcda; */
        transform: scale(1.01);
    }

    .standard-service .thumbnai img {
        border-radius: 3px;
    }

    .title-h3 {
        font-size: 2em !important;
    }

    .card:hover h5{
        background: #ffffff;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .ease-out {
        /* border: 5px solid #ccc; */
        /* float: left; */
        margin-top: 10px;
        -webkit-transition: margin 0.5s ease-out;
        -moz-transition: margin 0.5s ease-out;
        -o-transition: margin 0.5s ease-out;
    }

    .ease-out:hover {
        margin-top: 2px;
    }
</style>
@endsection
@section('content')

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


@include('web.home-page.main-slider')

@include('web.home-page.services')

@include('web.home-page.works')

@include('web.home-page.about')

@include('web.home-page.portfolio')

@include('web.home-page.counter')

@include('web.home-page.testimonial')

@include('web.home-page.team')

{{--@include('web.home-page.blogs')--}}

@include('web.home-page.contact')

@include('web.home-page.brands')

@endsection

@section('custom_js')

<script>
    particlesJS('particles-js',

        {
            "particles": {
                "number": {
                    "value": 50,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    // "value": "#ffffff",
                    "value": "#ff0000",
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 4
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 4,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true,
            "config_demo": {
                "hide_card": false,
                "background_color": "#b61924",
                "background_image": "",
                "background_position": "50% 50%",
                "background_repeat": "no-repeat",
                "background_size": "cover"
            }
        }

    );
</script>
@endsection