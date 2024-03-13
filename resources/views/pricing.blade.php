@extends('layouts.app')
@section('title', 'Pricing Page Title')
@section('banner-slider')

    <div class="nornal-banner pb-0 particles-container">
        <div id="particles-js"></div>

        <div class="about-us-text w-50 service contact pb-4">

            <h1 class="display-3" data-aos="fade-up">Pricings !!</h1>
            <p data-aos="fade-left">What We Provide?</p>

        </div>

    </div>
    <img src="{{ asset('./shapes/contact-us-animate (1).svg') }}" data-aos="fade-up" class="about-image service-img"
        alt="" srcset="">

    <img src="{{ asset('shapes/dot-line.svg') }}" class="dot-img-left" alt="">
    <img src="{{ asset('shapes/dot-line.svg') }}" class="dot-img-right" alt="">
    <div style="height:150px" style="z-index: -1">
        <img src="{{ asset('shapes/wave.svg') }}" width="100%" height="150px" class="wave-image" alt=""
            srcset="">
    </div>
    <div style="clear: both">

    </div>
@endsection
@section('content')
    @include('includes.pricing')


@endsection
