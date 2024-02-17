@extends('layouts.app')
@section('title', 'Career Page Title')
@section('banner-slider')
    <div class="nornal-banner pb-0 ">
        <div id="particles-js"></div>

        <div class="about-us-text w-50 service contact pb-4">

            <h1 class="display-3" data-aos="fade-up">Career With Us !!</h1>
            <p data-aos="fade-left">What We Provide?</p>

        </div>

    </div>
    <img src="{{ asset('./shapes/job-hunt-animate.svg') }}" class="about-image service-img" alt="" srcset="">

    <img src="{{ asset('shapes/dot-line.svg') }}" class="dot-img-left" alt="">
    <img src="{{ asset('shapes/dot-line.svg') }}" class="dot-img-right" alt="">
    <div style="height:150px" style="z-index: -1">
        <img src="{{ asset('shapes/wave.svg') }}" width="100%" height="150px" alt="" srcset="">
    </div>
    <div style="clear: both">

    </div>
@endsection
@section('content')
    <section class="section">
        <div class="container">
            <div class="row md-m-25px-b m-45px-b justify-content-center text-center">
                <div class="col-lg-8">
                    <h3 class="h1 m-15px-b">Job Positions</h3>
                    <p class="m-0px font-2">Luper is a HTML5 template based on Sass and Bootstrap 4 with modern and creative
                        multipurpose design you can use it as a startups.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4 ">
                    <div class="media">
                        <a class="overlay-link" href="#"></a>
                        <div class="icon">
                            <i class="number">LD</i>
                        </div>
                        <div class="media-body">
                            <span class="time">Full
                                time</span>
                            <h6 class="position">Laravel Developer</h6>
                            <p class="location">Mid Level, 3 Years Of Experiance</p>
                            <span class="date">5 days Ago</span>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 ">
                    <div class="media">
                        <a class="overlay-link" href="#"></a>
                        <div class="icon">
                            <i class="number">RD</i>
                        </div>
                        <div class="media-body">
                            <span class="time">Full
                                time</span>
                            <h6 class="position">React Developer</h6>
                            <p class="location">Mid Level, 3 Years Of Experiance</p>
                            <span class="date">5 days Ago</span>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 ">
                    <div class="media">
                        <a class="overlay-link" href="#"></a>
                        <div class="icon">
                            <i class="number">QA</i>
                        </div>
                        <div class="media-body">
                            <span class="time">Full
                                time</span>
                            <h6 class="position">Quality Assurance</h6>
                            <p class="location">Mid Level, 3 Years Of Experiance</p>
                            <span class="date">5 days Ago</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 ">
                    <div class="media">
                        <a class="overlay-link" href="#"></a>
                        <div class="icon">
                            <i class="number">QA</i>
                        </div>
                        <div class="media-body">
                            <span class="time">Full
                                time</span>
                            <h6 class="position">Quality Assurance</h6>
                            <p class="location">Mid Level, 3 Years Of Experiance</p>
                            <span class="date">5 days Ago</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 ">
                    <div class="media">
                        <a class="overlay-link" href="#"></a>
                        <div class="icon">
                            <i class="number">QA</i>
                        </div>
                        <div class="media-body">
                            <span class="time">Remote
                            </span>
                            <h6 class="position">Quality Assurance</h6>
                            <p class="location">Mid Level, 3 Years Of Experiance</p>
                            <span class="date">5 days Ago</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 ">
                    <div class="media">
                        <a class="overlay-link" href="#"></a>
                        <div class="icon">
                            <i class="number">QA</i>
                        </div>
                        <div class="media-body">
                            <span class="time">Part
                                time</span>
                            <h6 class="position">Quality Assurance</h6>
                            <p class="location">Mid Level, 3 Years Of Experiance</p>
                            <span class="date">5 days Ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var icons = document.querySelectorAll('.icon');
        icons.forEach(function(icon) {
            var randomColor = getRandomColor();
            icon.style.backgroundColor = randomColor;
        });
    });

    function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
</script>
