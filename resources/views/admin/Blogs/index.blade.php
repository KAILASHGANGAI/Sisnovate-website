@extends('layouts.adminApp')

@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Blogs</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blogs</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    {{-- data table for blog code --}}
    <div class="container-fluid">
        <table class="table table-bordered table-hover table-striped text-center">
            <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>category</th>
                <th>Tags</th>
                <th>Image</th>
                <th>Action</th>

            </tr>

            <tbody>

                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->category->name ?? 'N/A' }}</td>
                        <td>

                            {{ $blog->tags }}
                        </td>
                        <td><img src="{{ asset($blog->image) }}" alt="" width="100px" height="100px"></td>
                        <td>
                            
                            <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary">Edit</a>

                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </td>

                    </tr>
                @endforeach
            </tbody>


        </table>


    </div>
@endsection
