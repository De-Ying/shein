<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function all()
    {
        return view('pages.blog.all');
    }

    public function detail($blog_slug)
    {
        return view('pages.blog.detail');
    }
}
