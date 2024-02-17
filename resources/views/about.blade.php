@extends('layouts.app')
@section('title', 'About Page Title')
@section('banner-slider')
    <div class="nornal-banner particles-container pb-0">
        <div id="particles-js"></div>
        <div class="about-us-text w-50">

            <h1 class="display-3" data-aos="fade-up">About Us !!</h1>
            <p data-aos="fade-left">Who We Are?</p>
            <p data-aos="fade-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque rem, quidem doloremque
                magnam asperiores
                cupiditate dolores repudiandae maiores sunt recusandae?</p>
        </div>
        <div data-aos="fade-up" class="d-flex pt-4">
            <a class="button-86 mx-3" href="#" role="button">Contact Us</a>
            <a class="button-87 mx-3" href="#" role="button">Let's Demo</a>
        </div>
    </div>
    <img src="{{ asset('shapes/5.png') }}" data-aos="fade-up" class="about-image" alt="" srcset="">

    <img src="{{ asset('shapes/dot-line.svg') }}" class="dot-img-left" alt="">
    <img src="{{ asset('shapes/dot-line.svg') }}" class="dot-img-right" alt="">
    <div style="height:150px">
        <img src="{{ asset('shapes/wave.svg') }}" width="100%" height="150px" alt="" srcset="">
    </div>
@endsection
<style>
    .features-area {

        padding: 80px 0 60px;
        margin-top: 40px;
    }

    .bdrop-section-title .sub-titler {
        font-size: 15px;
        color: #035c73;
        font-family: "Outfit", sans-serif;
        font-weight: 700;
    }

    .bdrop-section-title .main-title {
        font-size: 32px;
        margin-top: 7px;
    }

    .single-features {
        text-align: center;
        background: white;
        margin-bottom: 40px;
        padding: 37px 15px 40px;
        -webkit-transition: .4s;
        transition: .4s;
        -webkit-box-shadow: 0 -2px 20px 0 rgba(0, 0, 0, .06);
        box-shadow: 0 -2px 20px 0 rgba(0, 0, 0, .06);
    }

    .item-title {
        font-weight: 700;
    }

    .tab-content {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 0 5px 5px 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin-top: -1px;
    }

    .nav-pills .nav-link {
        border-radius: 0;
        margin: 1px;
    }

    .tab-content {
        border: 1px solid #ccc;
        border-left: none;
    }

    .nav-pills .nav-link {
        /* Base styling */
        font-family: 'Montserrat', sans-serif;
        /* Example custom font */

        text-transform: uppercase;

        padding: 10px 15px;
        border-radius: 0;
        transition: all 0.3s ease-in-out;
        /* Enable transitions */

        /* Gradient background */
        background: linear-gradient(to bottom, #f0f0f0, #e0e0e0);

        /* Hover effects */
        &:hover {
            background: #f4f4f4;
            color: #007bff;
            /* Bootstrap's primary color */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
            /* Subtle upward movement */
        }

        /* Active link styling */
        &.active {
            background: #035c73;
            color: #fff;
            font-weight: bold;
        }

    }



    #v-pills-tab .active {
        background: #035c73;

    }

    #v-pills-tab li a {
        position: relative;
        display: block;

    }

    #v-pills-tab li a:before {
        content: "\f054";
        font-family: "Font Awesome 5 Free";
        font-weight: 600;
        position: absolute;
        top: 10px;
        right: 3;
        z-index: 1;
        color: white;
        transition: all 0.5s ease-out;
    }

    #v-pills-tab li a:after {
        content: "";
        position: absolute;
        height: 25px;
        width: 1px;
        top: 10px;
        left: 0;
        z-index: 1;
        font-size: 28px;
        background-color: white;
        transition: all 0.5s ease-out;
    }

    .section-title {
        position: relative;
        text-align: center;
        align-items: center;
    }

    .section-title-img {
        position: absolute;
        top: -41px;
        left: 321px;
        width: 100px;
        height: 100px;
        animation: rotateAnimation 8s linear infinite;


    }

    @keyframes rotateAnimation {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }
</style>
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-sm-4 col-md-3 shadow py-3">
                <ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="whoweare-tab" data-bs-toggle="pill" href="#whoweare" role="tab"
                            aria-controls="whoweare" aria-selected="true">Who We Are?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="missionsVision-tab" data-bs-toggle="pill" href="#missionsVision"
                            role="tab" aria-controls="missionsVision" aria-selected="false">Our Missions & Vissions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="experiences-tab" data-bs-toggle="pill" href="#experiences" role="tab"
                            aria-controls="experiences" aria-selected="false">Experiances </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="questionnaires-tab" data-bs-toggle="pill" href="#questionnaires"
                            role="tab" aria-controls="questionnaires" aria-selected="false">questionnaires </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-8 col-md-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade tab show active" id="whoweare" role="tabpanel"
                        aria-labelledby="whoweare-tab">
                        <h2 class="item-title">Who We Are?</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe sequi delectus earum pariatur
                            aliquam accusantium nobis quam nostrum perferendis obcaecati labore unde exercitationem
                            molestiae, culpa corporis, distinctio impedit ratione, sunt minus praesentium! Suscipit
                            deleniti, optio dolorem nemo laudantium laboriosam culpa. Rem incidunt eius amet delectus eos
                            autem a quam perferendis ex quisquam. Deserunt exercitationem magni, tempore adipisci iusto cum
                            voluptates, dolor, totam sed accusamus hic! Facere reprehenderit cupiditate provident voluptate
                            consectetur. Ad quas aliquam et illum! Iste hic, sit deserunt adipisci error laborum pariatur
                            odit sequi consequuntur reprehenderit temporibus, at excepturi exercitationem ea nobis ad ipsa
                            rerum veniam doloribus quae.
                        </p>
                    </div>
                    <div class="tab-pane fade tab" id="missionsVision" role="tabpanel" aria-labelledby="missionsVision-tab">
                        <h2 class="item-title">Our Missions and Vissions.</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto odit libero, nemo corporis, vero
                            voluptatum, corrupti iure eligendi ullam quaerat facilis. A magni aspernatur corrupti maiores
                            blanditiis culpa nam dolor illo neque aliquam veniam voluptatem cumque cupiditate omnis
                            perferendis iusto, est molestiae sequi expedita iure repellat qui fuga. Ipsum, iure
                            voluptatibus. Delectus numquam sapiente maiores, obcaecati, recusandae ducimus officiis
                            quibusdam minima ut quod reprehenderit harum laboriosam vero ad rem ratione modi sint ab dolore
                            aliquid consectetur eligendi, autem veritatis. Nihil aliquam maiores dolores error natus libero,
                            officia eaque, nulla officiis voluptatibus ratione, eligendi atque. Labore porro quae
                            exercitationem fugit adipisci.</p>
                    </div>
                    <div class="tab-pane fade tab" id="experiences" role="tabpanel" aria-labelledby="experiences-tab">
                        <h2 class="item-title">Our Experiances.</h2>
                        <p>This is the content for "experiance?" tab.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto odit libero, nemo corporis, vero
                            voluptatum, corrupti iure eligendi ullam quaerat facilis. A magni aspernatur corrupti maiores
                            blanditiis culpa nam dolor illo neque aliquam veniam voluptatem cumque cupiditate omnis
                            perferendis iusto, est molestiae sequi expedita iure repellat qui fuga. Ipsum, iure
                            voluptatibus. Delectus numquam sapiente maiores, obcaecati, recusandae ducimus officiis
                            quibusdam minima ut quod reprehenderit harum laboriosam vero ad rem ratione modi sint ab dolore
                            aliquid consectetur eligendi, autem veritatis. Nihil aliquam maiores dolores error natus libero,
                            officia eaque, nulla officiis voluptatibus ratione, eligendi atque. Labore porro quae
                            exercitationem fugit adipisci.</p>
                    </div>
                    <div class="tab-pane fade tab" id="questionnaires" role="tabpanel" aria-labelledby="questionnaires-tab">
                        <h2 class="item-title">Any Questions ?</h2>
                        <p>This is the content for "questionnaires?" tab.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto odit libero, nemo corporis, vero
                            voluptatum, corrupti iure eligendi ullam quaerat facilis. A magni aspernatur corrupti maiores
                            blanditiis culpa nam dolor illo neque aliquam veniam voluptatem cumque cupiditate omnis
                            perferendis iusto, est molestiae sequi expedita iure repellat qui fuga. Ipsum, iure
                            voluptatibus. Delectus numquam sapiente maiores, obcaecati, recusandae ducimus officiis
                            quibusdam minima ut quod reprehenderit harum laboriosam vero ad rem ratione modi sint ab dolore
                            aliquid consectetur eligendi, autem veritatis. Nihil aliquam maiores dolores error natus libero,
                            officia eaque, nulla officiis voluptatibus ratione, eligendi atque. Labore porro quae
                            exercitationem fugit adipisci.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-60">
                        <h6 class="sub-titler">Our</h6>
                        <h3 class="main-title display-4 fw-bold  pb-4">Supports and Services</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed eaque facere veritatis dolorem ab
                            molestiae cumque eius hic? Cumque, aperiam!</p>
                        <img src="{{ asset('shapes/star.svg') }}" class="section-title-img" alt=""
                            srcset="">
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-features" data-aos="fade-up">
                        <img src="images/features/sass.png" class="features-image" alt="image">

                        <h3>Built with Sass</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-features" data-aos="fade-up">
                        <img src="images/features/sass.png" class="features-image" alt="image">

                        <h3>Built On Bootstrap(5.x)</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-features" data-aos="fade-up">
                        <img src="images/features/sass.png" class="features-image" alt="image">

                        <h3>Browser Compatibility</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-features" data-aos="fade-up">
                        <img src="images/features/sass.png" class="features-image" alt="image">

                        <h3>Easy to customize</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-features" data-aos="fade-up">
                        <img src="images/features/sass.png" class="features-image" alt="image">

                        <h3>Retina Ready</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-features" data-aos="fade-up">
                        <img src="images/features/sass.png" class="features-image" alt="image">

                        <h3>Developer Friendly</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-features" data-aos="fade-up">
                        <img src="images/features/sass.png" class="features-image" alt="image">

                        <h3>Quick Support</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-features" data-aos="fade-up">
                        <img src="images/features/sass.png" class="features-image" alt="image">

                        <h3>Free Lifetime Updates</h3>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-features" data-aos="fade-up">
                        <img src="images/features/sass.png" class="features-image" alt="image">

                        <h3>Well documented</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.testinomial')
@endsection
