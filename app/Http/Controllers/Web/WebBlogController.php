<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class WebBlogController extends Controller
{
    public function home_blogs()
    {

        $blogs = Blog::with('blog_category')->get();

        return view('home', ['blogs' => $blogs]);
    }

    public function single_blog($blog_id)
    {
        $blog = Blog::find($blog_id);
        return view('web.blogs.single-blog', compact('blog'));
    }
}
