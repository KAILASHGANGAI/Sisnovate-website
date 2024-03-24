@extends('layouts.adminApp')

@section('admin_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Blog</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Blog</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    {{-- data table for blog code --}}
    <div class="container">
        {{-- success error  --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('blogs.update', $blog->id) }}" method="Post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-sm-6" id="categoryDiv">
                    <label for="category">Category</label>
                    <select class="form-control" name="category" id="category">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option @if ($category->id == $blog->category_id) selected @endif {{ $category->name }}
                                value="  {{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        <option class="bg-success" value="create_new">Create New Category</option>


                    </select>

                </div>
                <div class="col-sm-6" id="newCategoryForm" style="display: none;">
                    <label for="newCategory">New Category</label>
                    <input type="text" class="form-control" id="newCategory" name="newCategory">
                </div>
                <div class=" col-sm-6 form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
                </div>
                <div class=" col-sm-12 form-group">
                    <label for="title">Tags</label>
                    <input type="text" class="form-control" id="tagsInput" name="tags" placeholder="Enter tags"
                        value="{{ $blog->tags }}">
                    <div id="tagsContainer"></div>
                </div>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea cols="30" rows="10" class="ckeditor form-control" id="editor" name="content">{{ $blog->content }} </textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-" id="image" name="image">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>



    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#category').change(function() {
                if ($(this).val() == 'create_new') {
                    // Hide the entire div containing both the select dropdown and new category form
                    $('#categoryDiv').hide();
                    $('#newCategoryForm').show();
                }
            });

            $('#cancelNewCategory').click(function() {
                // Show the entire div containing both the select dropdown and new category form
                $('#categoryDiv').show();
                $('#newCategoryForm').hide();

                // Reset the select back to default
                $('#category').val('');
            });
        });
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/super-build/ckeditor.js"></script>
    <script src="{{ asset('js/editor.js') }}"></script>
@endsection
