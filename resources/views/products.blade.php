@extends('layouts.app')
@section('title', 'Product Page Title')
@section('banner-slider')
    <div class="nornal-banner pb-0 ">
        <div id="particles-js"></div>

        <div class="about-us-text w-50 service product pb-4">

            <h1 class="display-3" data-aos="fade-up">A Complete School Management Syatem</h1>
            <p data-aos="fade-left">We are the best all-in-one cloud-based school software and digital learning system for
                growing, big and ambitious names in education.</p>

        </div>

    </div>
    <img src="{{ asset('./images/product/edu.svg') }}" style="z-index: 9" data-aos="fade-up" class="product-img" alt=""
        srcset="">

    <img src="{{ asset('shapes/dot-line.svg') }}" class="dot-img-left" alt="">
    <img src="{{ asset('shapes/dot-line.svg') }}" class="dot-img-right" alt="">
    <div style="height:150px" style="z-index: -1">
        <img src="{{ asset('shapes/wave.svg') }}" class="product-svg" width="100%" height="150px" alt=""
            srcset="">
    </div>
    <div style="clear: both">

    </div>
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="row m-45px-b justify-content-center text-center">
                <div class="col-lg-8">
                    <span class="badge">Explore</span>
                    <h3 class="display-3 fw-bold ">Ultimate Features</h3>
                    <p class="m-0px font-2">Luper is a HTML5 template based on Sass and Bootstrap 4 with modern and creative
                        multipurpose design you can use it as a startups.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4 ">
                    <div class="media">
                        <div class="">
                            <img src="{{ asset('images/product/route.png') }}" alt="" srcset="">
                        </div>
                        <div class="media-body px-2">

                            <h6 class="position">Attendance Tracking</h6>
                            <p class="location">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit harum itaque
                                molestias!</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 ">
                    <div class="media">
                        <div class="">
                            <img src="{{ asset('images/product/route.png') }}" alt="" srcset="">
                        </div>
                        <div class="media-body px-2">

                            <h6 class="position">Parents Access</h6>
                            <p class="location">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit harum itaque
                                molestias!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 ">
                    <div class="media">
                        <div class="">
                            <img src="{{ asset('images/product/route.png') }}" alt="" srcset="">
                        </div>
                        <div class="media-body px-2">

                            <h6 class="position">Admission Process</h6>
                            <p class="location">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit harum itaque
                                molestias!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 ">
                    <div class="media">
                        <div class="">
                            <img src="{{ asset('images/product/route.png') }}" alt="" srcset="">
                        </div>
                        <div class="media-body px-2">

                            <h6 class="position">Grade Management</h6>
                            <p class="location">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit harum itaque
                                molestias!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 ">
                    <div class="media">
                        <div class="">
                            <img src="{{ asset('images/product/route.png') }}" alt="" srcset="">
                        </div>
                        <div class="media-body px-2">

                            <h6 class="position">Online Learning</h6>
                            <p class="location">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit harum itaque
                                molestias!</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 ">
                    <div class="media">
                        <div class="">
                            <img src="{{ asset('images/product/route.png') }}" alt="" srcset="">
                        </div>
                        <div class="media-body px-2">

                            <h6 class="position">Ready Compliance</h6>
                            <p class="location">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit harum itaque
                                molestias!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes/no_of_clients')

    <section class="section">
        <div class="container py-4 my-4">
            <div class="row m-45px-b justify-content-center text-center">
                <div class="col-lg-8">
                    <span class="badge">Explore</span>

                    <h3 class="display-3 fw-bold">Leading Schools
                    </h3>
                    <p class="m-0px font-2">Luper is a HTML5 template based on Sass and Bootstrap 4 with modern and
                        creative
                        multipurpose design you can use it as a startups.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-2">
                    <img src="{{ asset('images/school/1.svg') }}" class="" height="150px" width="150px">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2">
                    <img src="{{ asset('images/school/17.png') }}" class="" height="150px" width="150px">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2">
                    <img src="{{ asset('images/school/1.svg') }}" class="" height="150px" width="150px">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2">
                    <img src="{{ asset('images/school/1.svg') }}" class="" height="150px" width="150px">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2">
                    <img src="{{ asset('images/school/1.svg') }}" class="" height="150px" width="150px">
                </div>
                <div class="col-sm-6 col-md-3 col-lg-2">
                    <img src="{{ asset('images/school/1.svg') }}" class="" height="150px" width="150px">
                </div>
            </div>


        </div>
    </section>
    @include('includes/demo_contact')

@endsection
