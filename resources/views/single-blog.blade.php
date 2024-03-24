@extends('layouts.app')

@section('title', 'Single Blog Page Title')
@section('styles')
    <style>
        .card-img-top {
            height: 83vh !important;
        }
    </style>
@endsection
@section('content')

    <div class="">
        @if ($blog->image != null || $blog->image != '')
            <img src="{{ asset($blog->image) }}" class="card-img-top" alt="{{ $blog->title }}">
        @else
            <img src="{{ asset('./images/blogs/default.jpg') }}" class="card-img-top" style="height: 85vh;"
                alt="Sisnovate blogs">
        @endif

    </div>


    <section class="section">
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card-body">
                        <h1 class="card-title">{{ $blog->title }}</h1>
                        {!! $blog->content !!}
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
                                <li class="list-inline-item mb-3"><a href="#" class="shadow">{{ $blog->tags }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
