@extends('layouts.app')
@section('title', 'Page Title')
@section('banner-slider')
    {{-- carouselExampleCaptions --}}
    <div id="carouselExampleCaptions" class="carousel slide banner" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item banner1 active">
                <img src="{{ asset('images/b3.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block banner-text">

                    <div class="row">
                        <div class="col-sm-8" data-aos="fade-down">
                            <p data-aos="fade-right">We Provide IT-Services</p>
                            <h1 data-aos="fade-up">Welcome To Sisnovate.Inc</h1>
                            <p data-aos="fade-down">Transform the way you work
                                with a unique and powerful
                                IT Solution to run your Entire
                                Business.</p>
                            <div class="d-flex pt-4">
                                <button class="button-86 mx-3" role="button">Contact Us</button>
                                <button class="button-87 mx-3" role="button">Let's Start</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <img data-aos="fade-right" class="hero-img hero-image" src="{{ asset('images/hero-img.png') }}"
                                alt="" srcset="">

                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item banner1">
                <img src="{{ asset('images/b2.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block banner-text">
                    <div class="row">
                        <div class="col-sm-8" data-aos="fade-down">
                            <p data-aos="fade-right">We Provide IT-Services</p>
                            <h1 data-aos="fade-up">Welcome To Sisnovate.Inc</h1>
                            <p data-aos="fade-down">Transform the way you work
                                with a unique and powerful
                                IT Solution to run your Entire
                                Business.</p>
                            <div class="d-flex pt-4">
                                <button class="button-86 mx-3" role="button">Contact Us</button>
                                <button class="button-87 mx-3" role="button">Let's Start</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <img class="hero-img hero-image" data-aos="fade-right" src="{{ asset('images/hero-img.svg') }}"
                                alt="" srcset="">

                        </div>
                    </div>

                </div>
            </div>
            <div class="carousel-item banner1 ">
                <img src="{{ asset('images/b1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block banner-text">
                    <div class="row">
                        <div class="col-sm-8" data-aos="fade-down">
                            <p data-aos="fade-right">We Provide IT-Services</p>
                            <h1 data-aos="fade-up">Welcome To Sisnovate.Inc</h1>
                            <p data-aos="fade-down">Transform the way you work
                                with a unique and powerful
                                IT Solution to run your Entire
                                Business.</p>
                            <div class="d-flex pt-4">
                                <button class="button-86 mx-3" role="button">Contact Us</button>
                                <button class="button-87 mx-3" role="button">Let's Start</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <img class="hero-img hero-image" data-aos="fade-right" src="{{ asset('images/hero-img4.png') }}"
                                alt="" srcset="">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="particles-js"></div>

    </div>
    <div>
        <img class="svg-img" src="{{ asset('images/lotify-images/shape_27.svg') }}" alt="" srcset="">
    </div>
@endsection

@section('content')
    <section class="container-fluid">

        <div class="service-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <span class="badge">Explore</span>
                            <h1 class="display-3 fw-bold">World best IT-Services we provide</h1>

                            <p>We develop all kinds of Software and provide unique branding to your business. Some of the
                                key developments
                                are given below, but we are not limited only to them. </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="single-service">
                            <i class="fa fa-laptop"></i>
                            <h3>Product Design</h3>
                            <p>A software engineer based in Boston, MA who enjoys building things that live on the internet
                                exceptional</p>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="single-service">
                            <i class="fa-solid fa-lightbulb"></i>
                            <h3>Idea Generate & Implementation </h3>
                            <p>A software engineer based in Boston, MA who enjoys building things that live on the internet
                                exceptional</p>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="single-service">
                            <i class="fa-solid fa-code"></i>
                            <h3>Website Design & Development</h3>
                            <p>A software engineer based in Boston, MA who enjoys building things that live on the internet
                                exceptional</p>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="single-service">
                            <i class="fa-brands fa-android"></i>
                            <h3>Mobile App Development</h3>
                            <p>A software engineer based in Boston, MA who enjoys building things that live on the internet
                                exceptional</p>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="single-service">
                            <i class="fa-solid fa-chart-line"></i>
                            <h3>Digital Marketing & Ads</h3>
                            <p>A software engineer based in Boston, MA who enjoys building things that live on the internet
                                exceptional</p>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up">
                        <div class="single-service">
                            <i class="fa fa-laptop"></i>
                            <h3>Product Design</h3>
                            <p>A software engineer based in Boston, MA who enjoys building things that live on the internet
                                exceptional</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="find" class="home-find2">
        <div class="home-heading09 py-4">
            <h2 class="home-header13">Find a local guide now</h2>
            <p class="home-caption09">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam.
            </p>
            <button class="button-87 mx-3" role="button">Let's Start</button>

        </div>
    </section>
    @include('includes.pricing')
    @include('includes.our-product')
    @include('includes.missions')

    <div class="hero">
        <div class="">

            <div class="why-choose-us">
                <div class="">
                    <h2 class="mb-4">Why Choose Us?</h2>

                    <div class="row">
                        <div data-aos="zoom-in" class="col-md-4 feature">
                            <i class="fas fa-code"></i>
                            <h3>Expert Developers</h3>
                            <p>Our team consists of skilled and experienced developers who deliver high-quality code
                                tailored to
                                your needs.</p>
                        </div>

                        <div data-aos="zoom-in" class="col-md-4 feature">
                            <i class="fas fa-cogs"></i>
                            <h3>Cutting-edge Technology</h3>
                            <p>We stay up-to-date with the latest technologies to ensure your projects are built using the
                                best
                                tools available.</p>
                        </div>

                        <div data-aos="zoom-in" class="col-md-4 feature">
                            <i class="fas fa-handshake"></i>
                            <h3>Customer-Centric Approach</h3>
                            <p>Your satisfaction is our priority. We work closely with you, listen to your requirements, and
                                provide
                                personalized solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
        <div class="cube"></div>
    </div>
    @include('includes.testinomial')
    @include('includes.model')
    @include('includes/no_of_clients')

@endsection

@section('scripts')
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.7/lottie.min.js"></script>
    <script></script>
@endsection
