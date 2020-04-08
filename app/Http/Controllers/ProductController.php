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

    public function produksi()
    {
        $products = Product::where('category_id', '=', 1 )->get();
        $categories = Category::all();
        return view('pages.product.produksi', compact('products', 'categories'));
    }

    public function nonproduksi()
    {
        $products = Product::where('category_id', '=', 2 )->get();
        $categories = Category::all();
        return view('pages.product.nonproduksi', compact('products', 'categories'));
    }

    public function video()
    {
        $products = Product::where('category_id', '=', 3 )->get();
        $categories = Category::all();
        return view('pages.product.video', compact('products', 'categories'));
    }

    public function detail($category, $slug)
    {
        $product = Product::where('slug', '=', $slug)->first();
        $relatedProducts = Product::orderBy('created_at', 'desc')->take(6)->get();
        return view('pages.product.detail', compact('product', 'relatedProducts'));
    }

    public function addProductToCart($category, $slug)
    {
        $product = Product::where('slug', '=', $slug)->first();
        $relatedProducts = Product::orderBy('created_at', 'desc')->take(6)->get();
        return view('pages.product.detail', compact('product', 'relatedProducts'));
    }
}
