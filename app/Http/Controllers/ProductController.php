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

        return view('pages.product.index');

    }

    public function order()
    {
        // $product = Product::where('category_id', '=', $id)->get();
        return view('pages.product.order');
    }

<<<<<<< HEAD
    public function selectProduct($slug, $id)
=======
    public function selectCategory()
    {
        return view('pages.product.category');
    }
    
    public function selectProduct($slug, $category_id)
>>>>>>> singgah-develop-v0
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
