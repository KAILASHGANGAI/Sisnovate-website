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

                        @forelse ($blogs as $item)
                            <div class="col-sm-6 mb-4">
                                <div class="card border-0 shadow rounded-lg ">
                                    @if ($item->image != null || $item->image != '')
                                        <img src="{{ asset($item->image) }}" width="465" height="310"
                                            class="img-fluid blog-img" alt="{{ $item->title }}">
                                    @else
                                        <img src="{{ asset('./images/blogs/default.jpg') }}" class="card-img-top"
                                            alt="Sisnovate blogs">
                                    @endif
                                    <div class="card-body">
                                        <p class="card-date">{{ $item->created_at->format('d M, Y') }}</p>
                                        <h5><a class="text-dark text-decoration-none"
                                                href="{{ route('blogs.view', $item->slug) }}">{{ $item->title }}</a>
                                        </h5>
                                    </div>
                                    <div class="read-more-link text-right pr-3 pb-3">
                                        <a href="{{ route('blogs.view', $item->slug) }}" class="btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h4>No Blogs Found</h4>
                        @endforelse

                        {{-- Pagination --}}

                        {{ $blogs->links() }}

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
                                @forelse ($categories as $category)
                                    <li class="nav-item"><a class="d-block text-decoration-none py-3"
                                            href="{{ route('blogs.category', $category->slug) }}">{{ $category->name }}</a>
                                    </li>
                                @empty
                                    <li class="nav-item">No Category
                                    </li>
                                @endforelse
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
