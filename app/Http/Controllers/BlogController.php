<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $blogs = Blog::latest()->paginate(10);
        $categories = Category::all();
        return view('admin.blogs.index', compact('blogs', 'categories'));
    }
    public function view()
    {

        $blogs = Blog::latest()->paginate(10);
        $categories = Category::all();
        return view('blog', compact('blogs', 'categories'));
    }
    public function singleBlog($slug)
    {

        $blog = Blog::where('slug', $slug)->first();
        $categories = Category::all();
        return view('single-blog', compact('blog', 'categories'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.blogs.create', [
            'blogs' => Blog::all(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the request...
        $validated  = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $cid = $request->category;
        if ($request->category == 'create_new' && $request->newCategory) {
            $category = Category::updateOrCreate([
                'name' => $request->newCategory
            ], [
                'name' => $request->newCategory,
                'slug' => Str::slug($request->newCategory)
            ]);

            $cid = $category->id;
        }

        # srore image too 
        $name = '';

        if ($image = $request->file('image')) {
            $name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/blogs'), $name);
            $name = 'images/blogs/' . $name;
        }
        $blogs = Blog::updateOrcreate([
            'title' => $request->title,
            'slug' =>  Str::slug($request->title)
        ], [
            'category_id' => $cid,
            'title' => $request->title,
            'content' => $request->content,
            'slug' =>  Str::slug($request->title),
            'meta_title' => $request->meta_title ?? $request->title,
            'meta_description' => $request->meta_description ?? substr($request->content, 0, 150),
            'tags' => $request->tags,
            'image' => $name
        ]);

        # convert tags saperated by , into array


        return back()->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {

        return view('admin.blogs.show', ['blog' => $blog]);
    }
    public function showByTag(Tag $tag)
    {
        $posts = $tag->Blogs()->latest()->paginate(10);
        return view('admin.blogs.index', compact('posts'));
    }

    public function showByCategory($category)
    {
        $categoryId = Category::where('slug', $category)->first();

        $blogs = Blog::where('category_id', $categoryId->id)->latest()->paginate(10);
        $categories = Category::all();
        return view('blog', compact('blogs', 'categories'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();

        return view('admin.blogs.edit', ['blog' => $blog, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated  = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $cid = $request->category;

        if ($request->category == 'create_new' && $request->newCategory) {
            $category = Category::updateOrCreate([
                'name' => $request->newCategory
            ], [
                'name' => $request->newCategory,
                'slug' => Str::slug($request->newCategory)
            ]);

            $cid = $category->id;
        }
        $name = '';
        if ($image = $request->file('image')) {
            $name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/blogs'), $name);
            $name = 'images/blogs/' . $name;
        }

        $blogs = Blog::updateOrcreate([
            'title' => $request->title,
            'slug' =>  Str::slug($request->title)
        ], [
            'category_id' => $cid,
            'title' => $request->title,
            'content' => $request->content,
            'slug' =>  Str::slug($request->title),
            'meta_title' => $request->meta_title ?? $request->title,
            'meta_description' => $request->meta_description ?? substr($request->content, 0, 150),
            'tags' => $request->tags,
            'image' => $name
        ]);


        return back()->with('success', 'blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->delete()) {

            return back()->with('success', 'Blog deleted successfully');
        }
        return back()->with('error', 'Something went wrong');
    }
}
