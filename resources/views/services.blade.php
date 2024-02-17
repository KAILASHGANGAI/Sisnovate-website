@extends('layouts.app')
@section('title', 'Service Page Title')
@section('banner-slider')
    <div class="nornal-banner pb-0 ">
        <div id="particles-js"></div>

        <div class="about-us-text w-50 service">

            <h1 class="display-3" data-aos="fade-up">Our Services !!</h1>
            <p data-aos="fade-left">What We Provide?</p>
            <p data-aos="fade-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque rem, quidem doloremque
                magnam asperiores
                cupiditate dolores repudiandae maiores sunt recusandae?</p>
        </div>
        <div data-aos="fade-up" class="d-flex pt-4">
            <a class="button-86 mx-3" href="#" role="button">Contact Us</a>
            <a class="button-87 mx-3" href="#" role="button">Let's Demo</a>
        </div>
    </div>
    <img src="{{ asset('images/services/services.png') }}" data-aos="fade-up" class="about-image service-img" alt=""
        srcset="">

    <img src="{{ asset('shapes/dot-line.svg') }}" class="dot-img-left" alt="">
    <img src="{{ asset('shapes/dot-line.svg') }}" class="dot-img-right" alt="">
    <div style="height:150px" style="z-index: -1">
        <img src="{{ asset('shapes/wave.svg') }}" width="100%" height="150px" alt="" srcset="">
    </div>
@endsection

@section('content')
    <section class="service">
        <img src="{{ asset('shapes/blob.svg') }}" class="s-img" alt="" srcset="">
        <div class="bg">
            <div class="container">
                <div class=" row">
                    <div class="col-sm-6 mx-auto">
                        <div class="title-header text-center">
                            <h5>WHAT WE PROVIDE</h5>
                            {{-- <h2 class="title">Our Other <span>Services</span> </h2> --}}
                            <p>
                                Our experienced team is here to utilize valuable resources efficiently that ensures
                                client satisfaction. We guarantee you that our services will set exceptional growth
                                for your business.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="owl-carousel">
                <div>
                    <div class="featured-icon-box style9">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <img src="https://softbenz.com/uploads/services/service-1620109578.svg" height="70px"
                                    alt="Social Media Marketing">
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5 class="pt-3">Social Media Marketing</h5>
                            </div>
                            <div class="featured-desc">
                                Digital Marketing comprises a platform to&nbsp; approach your customers via email, content
                                marketing, social media, and many more
                            </div>
                            <a class="btn-my" href="#">
                                Get Started <i class="ti ti-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="featured-icon-box style9">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <img src="https://softbenz.com/uploads/services/service-1620109578.svg" height="70px"
                                    alt="Social Media Marketing">
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5 class="pt-3">Social Media Marketing</h5>
                            </div>
                            <div class="featured-desc">
                                Digital Marketing comprises a platform to&nbsp; approach your customers via email, content
                                marketing, social media, and many more
                            </div>
                            <a class="btn-my" href="#">
                                Get Started <i class="ti ti-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="featured-icon-box style9">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <img src="https://softbenz.com/uploads/services/service-1620109578.svg" height="70px"
                                    alt="Social Media Marketing">
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5 class="pt-3">Social Media Marketing</h5>
                            </div>
                            <div class="featured-desc">
                                Digital Marketing comprises a platform to&nbsp; approach your customers via email, content
                                marketing, social media, and many more
                            </div>
                            <a class="btn-my" href="#">
                                Get Started <i class="ti ti-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="featured-icon-box style9">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <img src="https://softbenz.com/uploads/services/service-1620109578.svg" height="70px"
                                    alt="Social Media Marketing">
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5 class="pt-3">Social Media Marketing</h5>
                            </div>
                            <div class="featured-desc">
                                Digital Marketing comprises a platform to&nbsp; approach your customers via email, content
                                marketing, social media, and many more
                            </div>
                            <a class="btn-my" href="#">
                                Get Started <i class="ti ti-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="featured-icon-box style9">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <img src="https://softbenz.com/uploads/services/service-1620109578.svg" height="70px"
                                    alt="Social Media Marketing">
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5 class="pt-3">Social Media Marketing</h5>
                            </div>
                            <div class="featured-desc">
                                Digital Marketing comprises a platform to&nbsp; approach your customers via email, content
                                marketing, social media, and many more
                            </div>
                            <a class="btn-my" href="#">
                                Get Started <i class="ti ti-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="featured-icon-box style9">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <img src="https://softbenz.com/uploads/services/service-1620109578.svg" height="70px"
                                    alt="Social Media Marketing">
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5 class="pt-3">Social Media Marketing</h5>
                            </div>
                            <div class="featured-desc">
                                Digital Marketing comprises a platform to&nbsp; approach your customers via email, content
                                marketing, social media, and many more
                            </div>
                            <a class="btn-my" href="#">
                                Get Started <i class="ti ti-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="featured-icon-box style9">
                        <div class="featured-icon">
                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                <img src="https://softbenz.com/uploads/services/service-1620109578.svg" height="70px"
                                    alt="Social Media Marketing">
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h5 class="pt-3">Social Media Marketing</h5>
                            </div>
                            <div class="featured-desc">
                                Digital Marketing comprises a platform to&nbsp; approach your customers via email, content
                                marketing, social media, and many more
                            </div>
                            <a class="btn-my" href="#">
                                Get Started <i class="ti ti-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 pt-4">
                    <!-- Single Item -->
                    <div class="service-support">
                        <div class="item">
                            <div class="icon">
                                <img decoding="async"
                                    src="https://wpriverthemes.com/tandaelem/wp-content/uploads/2023/01/1-2.png"
                                    alt="Icon">
                            </div>
                            <div class="info">
                                <h5>Manage customers</h5>
                                <p>
                                    Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything
                                    melancholy uncommonly but solicitude inhabiting projection resolving sportsmen do in
                                    listening. </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="service-support">
                        <div class="item">
                            <div class="icon">
                                <img decoding="async"
                                    src="https://wpriverthemes.com/tandaelem/wp-content/uploads/2023/01/2-3.png"
                                    alt="Icon">
                            </div>
                            <div class="info">
                                <h5>Ticket Manage</h5>
                                <p>
                                    Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything
                                    melancholy uncommonly but solicitude inhabiting projection resolving sportsmen do in
                                    listening. </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                </div>
                <div class="col-lg-6 col-md-6"> <!-- Single Item -->
                    <div class="service-support">
                        <div class="item">
                            <div class="icon">
                                <img decoding="async"
                                    src="https://wpriverthemes.com/tandaelem/wp-content/uploads/2023/01/3-2.png"
                                    alt="Icon">
                            </div>
                            <div class="info">
                                <h5>Live Messaging</h5>
                                <p>
                                    Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything
                                    melancholy uncommonly but solicitude inhabiting projection resolving sportsmen do in
                                    listening. </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

                    <!-- Single Item -->
                    <div class="service-support">
                        <div class="item">
                            <div class="icon">
                                <img decoding="async"
                                    src="https://wpriverthemes.com/tandaelem/wp-content/uploads/2023/01/4-1.png"
                                    alt="Icon">
                            </div>
                            <div class="info">
                                <h5>Email Workflow</h5>
                                <p>
                                    Prevailed mr tolerably discourse assurance estimable applauded to so. Him everything
                                    melancholy uncommonly but solicitude inhabiting projection resolving sportsmen do in
                                    listening. </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->


                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-sm-6 pt-4">
                <h1>E-commerce solutions.</h1>
                <p>
                    We provide eCommerce solutions for businesses of all sizes, from startups to large corporations. Our
                    team has extensive experience in developing and maintaining successful online stores that are both
                    We provide a wide range of eCommerce services to help you grow your business online. Our team has
                    extensive experience in developing and maintaining successful eCommerce platforms,
                </p>
                <ul>
                    <h2>Types of E-commerce Solutions:</h2>
                    <li><i class="fa fa-check"></i> Online Shopping Store Development</li>
                    <li><i class="fa fa-check"></i> Mobile App Development for eCommerce (Android & iOS)</li>
                    <li><i class="fa fa-check"></i> Mobile App Development</li>
                    <li><i class="fa fa-check"></i> Social Commerce Integration</li>
                </ul>
                </ul>

            </div>
            <div class="col-sm-6">
                <img src="{{ asset('shapes/ecommerce.svg') }}" width="100%" height="100%" alt=""
                    srcset="">

            </div>

        </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img src="{{ asset('shapes/website.svg') }}" width="100%" height="100%" alt=""
                    srcset="">

            </div>
            <div class="col-sm-6">
                <h1>Website Design & Development Services in Nepal.</h1>
                <p>We are a team of experienced web designers, developers, and digital strategists who specialize in
                    creating websites for businesses looking to reach the global marketplace. We provide
                <p>We provide website design, development, maintenance, SEO optimization, ecommerce solutions, social media
                    marketing services to businesses across the globe. Our team of experts
                <ul class="listing">
                    <li>Design a website that is user friendly, easy to navigate and visually appealing.</li>
                    <li>Develop an eCommerce site or B2B site based on your business requirements.</li>
                    <li>Optimize the website for search engines like Google with SEO services.</li>
                    <li>Provide regular updates and maintenance of the website to keep it running smoothly.</li>
                    <li>Provide support and maintenance service after launching the website.</li>
                </ul>
            </div>

        </div>
        <div class="row">
            <div class="col-sm-6">
                <h1>Android App Development Services:</h1>
                <p>
                    If you are a business owner planning to develop an Android app, we can help you out.
                    Our team has extensive experience in developing high quality apps for various industries.
                    Our team has expertise in developing high quality apps that cater to various needs.
                    Whether it’s a simple mobile game or a complex social networking application, our team
                </p>
                <ul>
                    <li> We understand how important it is to start small and then grow from there. That's why we </li>
                    <li> We start by building a basic version of what you want
                        to achieve. This allows us to understand if </li>
                    <li> We understand how important it is to start small and
                        gradually add features as they mature. That' </li>
                    <li> We will start by building a basic version of your
                        product which includes only the features that are necessary for </li>
                    <li> 30 days development cycle where we deliver a working
                        prototype to you within this timeframe.</li>
                    <li> We
                        start by building a basic version of the product which allows us to gather feedback from users. This
                    </li>


                </ul>
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('shapes/mobile.svg') }}" width="100%" height="100%" alt=""
                    srcset="">

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img src="{{ asset('shapes/app.svg') }}" width="100%" height="100%" alt="" srcset="">
            </div>
            <div class="col-sm-6">
                <h1>Digital Marketing Services:</h1>
                <p>We offer a wide range of digital marketing services including but not limited to Search Engine
                    Optimization (SEO), Pay Per Click Advertising (PPC) campaign
                <p>We offer a wide range of digital marketing services including but not limited to Search Engine
                    Optimization (SEO), Social Media Marketing (SMM) and Pay Per
                <p>We offer a wide range of digital marketing services including but not limited to Social Media Management
                    (Facebook, Twitter, LinkedIn), Search Engine Optimization (SEO)
                <p>We offer a wide range of digital marketing services including but not limited to Search Engine
                    Optimization (SEO), Pay Per Click Advertising (PPC) campaign
                <p>We offer a wide range of digital marketing services including but not limited to Search Engine
                    Optimization (SEO), Pay Per Click Advertising (PPC) campaign
                <p>We offer a wide range of digital marketing services including but not limited to: SEO, SEM, Social Media
                    Marketing, Google Adwords Management, and more.</p>
            </div>
        </div>
    </section>
@endsection
