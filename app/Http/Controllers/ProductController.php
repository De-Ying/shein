<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all() {
        return view('pages.product.all');
    }

    public function category_slug($category_slug) {
        return view('pages.product.category_slug')->with('category_slug', $category_slug);
    }

    public function category_featured($category_featured) {
        return view('pages.product.category_featured')->with('category_featured', $category_featured);
    }

    public function detail($product_slug) {
        return view('pages.product.detail')->with('product_slug', $product_slug);
    }
}
