@extends('layouts.app')
@section('title', 'Blogs Page Title')
@section('banner-slider')
    <div class="nornal-banner pb-0 ">
        <div id="particles-js"></div>

        <div class="about-us-text w-50 service contact pb-4">

            <h1 class="display-3" data-aos="fade-up">Blogs and News !!</h1>
            <p data-aos="fade-left">What We Provide?</p>


        </div>

    </div>
    <img src="{{ asset('./shapes/blog.svg') }}" style="z-index: 9" data-aos="fade-up" class="about-image service-img"
        alt="" srcset="">

    <img src="{{ asset('shapes/dot-line.svg') }}" class="dot-img-left" alt="">
    <img src="{{ asset('shapes/dot-line.svg') }}" class="dot-img-right" alt="">
    <div style="height:150px" style="z-index: -1">
        <img src="{{ asset('shapes/wave.svg') }}" width="100%" height="150px" alt="" class="wave-image"
            srcset="">
    </div>
    <div style="clear: both">

    </div>
@endsection
@section('content')


    <section class="section">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <div class="card border-0 shadow rounded-lg ">
                                <img src="{{ asset('./images/blogs/blog-post-1.jpg') }}" width="465" height="310"
                                    class="img-fluid blog-img" alt="post-thumb">
                                <div class="card-body">
                                    <p class="card-date">Dec 30, 2018</p>
                                    <h5><a class="text-dark text-decoration-none" href="#">Cupidat non proident sunt
                                            officia
                                            deserunt mollit
                                            anim.</a></h5>
                                </div>
                                <div class="read-more-link text-right pr-3 pb-3">
                                    <a href="#" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="card border-0 shadow rounded-lg">
                                <img src="{{ asset('./images/blogs/blog-post-1.jpg') }}" class="img-fluid blog-img"
                                    width="465" height="310" alt="post-thumb">
                                <div class="card-body">
                                    <p class="card-date">Dec 30, 2018</p>
                                    <h5><a class="text-dark text-decoration-none" href="#">Cupidat non proident sunt
                                            officia
                                            deserunt mollit
                                            anim.</a></h5>
                                </div>
                                <div class="read-more-link text-right pr-3 pb-3">
                                    <a href="#" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="card border-0 shadow rounded-lg">
                                <img src="{{ asset('./images/blogs/blog-post-1.jpg') }}" class="img-fluid blog-img"
                                    width="465" height="310" alt="post-thumb">
                                <div class="card-body">
                                    <p class="card-date">Dec 30, 2018</p>
                                    <h5><a class="text-dark text-decoration-none" href="#">Cupidat non proident sunt
                                            officia
                                            deserunt mollit
                                            anim.</a></h5>
                                </div>
                                <div class="read-more-link text-right pr-3 pb-3">
                                    <a href="#" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="card border-0 shadow rounded-lg">
                                <img src="{{ asset('./images/blogs/blog-post-1.jpg') }}" class="img-fluid blog-img"
                                    width="465px" height="310" alt="post-thumb">
                                <div class="card-body">
                                    <p class="card-date">Dec 30, 2018</p>
                                    <h5><a class="text-dark text-decoration-none" href="#">Cupidat non proident sunt
                                            officia
                                            deserunt mollit
                                            anim.</a></h5>
                                </div>
                                <div class="read-more-link text-right pr-3 pb-3">
                                    <a href="#" class="btn">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rounded-sm bg-white shadow p-3">
                        <div class="">
                            <form action="#">
                                <div class="search-bar">
                                    <input type="text" class="search-input" placeholder="Search...">
                                    <i class="fas fa-search search-icon"></i>

                                </div>
                            </form>
                        </div>


                        <div class="pt-4">
                            <h4 class="category">Category</h4>
                            <ul class="list-styled">
                                <li class="nav-item"><a class="d-block text-decoration-none py-3"
                                        href="#">Investment
                                        Planning</a>
                                </li>
                                <li class="nav-item"><a class="d-block text-decoration-none py-3" href="#">Valuable
                                        Idea</a></li>
                                <li class="nav-item"><a class="d-block text-decoration-none py-3" href="#">Market
                                        Strategy</a></li>
                                <li class="nav-item"><a class="d-block text-decoration-none py-3"
                                        href="#">development
                                        Maping</a>
                                </li>
                                <li class="nav-item"><a class="d-block text-decoration-none py-3"
                                        href="#">Afiliated Marketing</a>
                                </li>
                                <li class="nav-item"><a class="d-block text-decoration-none py-3" href="#">Targated
                                        Marketing</a>
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <div class="widget">
                            <h4>Tags</h4>
                            <ul class="list-inline tag-list mt-4">
                                <li class="list-inline-item mb-3"><a href="#" class="shadow">Business</a></li>
                                <li class="list-inline-item mb-3"><a href="#" class="shadow">Market Analysis</a>
                                </li>
                                <li class="list-inline-item mb-3"><a href="#" class="shadow">Consultancy</a></li>
                                <li class="list-inline-item mb-3"><a href="#" class="shadow">Marketing</a></li>
                                <li class="list-inline-item mb-3"><a href="#" class="shadow">Finance</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
