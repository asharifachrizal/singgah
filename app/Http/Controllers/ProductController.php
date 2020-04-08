<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\ProductName;
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

    public function selectProduct($slug, $category_id)
    {
        // dd($category_id);
        // dd($slug);
        $productNames = ProductName::where('category_id', '=', $category_id)->get();        
        return view('pages.product.selectProduct', compact('productNames'));
    }

    public function produksi()
    {
        $productNames = ProductName::where('category_id', '=', 1 )->get();        
        // dd($productNames);
        return view('pages.product.produksi', compact('productNames'));
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
