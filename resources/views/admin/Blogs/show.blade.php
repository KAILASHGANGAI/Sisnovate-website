@extends('layouts.adminApp')

@section('admin_content')
    <div class="container">
        @if ($blog->image != null || $blog->image != '')
            <img src="{{ asset($blog->image) }}" class="card-img-top" alt="...">
        @endif
        <div class="card-body">
            <h1 class="card-title">{{ $blog->title }}</h1>


            {!! $blog->content !!}
        </div>
    </div>
@endsection
