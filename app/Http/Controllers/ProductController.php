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
        // dd($products->id);
        return view('pages.product.category', compact('products', 'categories'));

    }

    public function order()
    {
        return view('pages.product.order');
    }

    public function selectProduct($slug, $id)
    {
        $products = Product::where('category_id', '=', $id)->get();
        return view('pages.product.selectProduct', compact('products'));
    }

    public function detailProduct($category_id)
    {
        $products = Product::where('category_id', '=', $category_id)->get();
        return view('pages.product.selectProduct', compact('products'));
    }

}
