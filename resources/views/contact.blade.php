@extends('layouts.app')
@section('title', 'Contact Page Title')
@section('banner-slider')
    <div class="nornal-banner pb-0 ">
        <div id="particles-js"></div>

        <div class="about-us-text w-50 service contact pb-4">

            <h1 class="display-3" data-aos="fade-up">Contact Us !!</h1>
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
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 contact-form">
                <div class="shadow p-3">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    @if (session()->has('failed'))
                        <div class="alert alert-danger">
                            {{ session()->get('failed') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.insert') }}" method="POST">
                        @csrf
                        <div class="row ">
                            <div class="col-12">
                                <label for="fullname" class="form-label text-white">Full Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="fullname" name="name"
                                    value="{{ old('name') }}" required>

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label text-white">Email <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </span>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="phone" class="form-label">Phone Number</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                            <path
                                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                        </svg>
                                    </span>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        value="{{ old('phone') }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                            </div>
                            <div class="col-12">
                                <div class="d-grid mt-2 pb-2">
                                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="shapes">
        <img class="shape-3" src="{{ asset('shapes/shape-3.svg') }}" alt="">
    </div>
    <section class="below-contact">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-7">
                    <div class=" container  container-item row">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Address:</span> <br> Biratnagar, Morang , Nepal</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Phone:</span> <br> <a href="tel://9807365078">+977 9807365078</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Email:</span> <br> <a
                                                href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5 map">
                    <div class="col-lg-8 mx-auto">
                        <div class="common-heading text-center">
                            <span class="my-4">Let's work together</span>
                            <h2 class=" display-5 fw-bold attractive-heading py-4">We Love to Listen to Your Requirements &
                                <br>
                                Queries
                            </h2>
                            <a href="#" class="button-87 px-1 mx-5 text-decoration-none ">Let's Work Together <i
                                    class="fas fa-chevron-right fa-icon"></i></a>
                            <p class="cta-call">Or call us now <a href="#">+977-9807365078 </a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class="py-4">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127674.18625098077!2d0!3d0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xea460ec3843df3%3A0x63da67e261f1c363!2sSisnovate!5e0!3m2!1sen!2snp!4v1707805223134!5m2!1sen!2snp"
            width="100%" height="400" style="border:1;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    @include('includes.testinomial')
@endsection
