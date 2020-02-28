<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Product;
use App\Category;
use App\Cart;

class ProductController extends BaseController
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('pages.product.index', compact('products', 'categories'));
    }

    public function detail($slug)
    {
        $product = Product::where('slug', '=', $slug)->first();
        $relatedProducts = Product::orderBy('created_at', 'desc')->take(4)->get();
        return view('pages.product.detail', compact('product', 'relatedProducts'));
    }
}
