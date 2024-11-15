<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function showBlogs()
    {
        $blogs = Blog::all();

        return view("blogs/list", [
            "blogs" => $blogs
        ]);
    }

    public function tambahBlog() {
        return view('blogs/create');
    }

    public function createBlog(Request $request) {
        Blog::create($request->only('judul', 'isi', 'pembuat'));

        return redirect("/blogs");
    }
}
