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

        $category = Category::all();
        return view('pages.product.index', compact('category'));

    }

    public function order($id)
    {
        $product = Product::where('id', '=', $id)->first();
        return view('pages.product.myOrder', compact('product'));
    }

    public function selectCategory()
    {
        return view('pages.product.category');
    }

    public function selectProduct($slug, $id)
    {
        $product = Product::where('category_id', '=', $id)->first();
        // dd($product->category_id);
        $products = Product::where('category_id', '=', $id)->get();
        // dd($products->category->id);
        return view('pages.product.selectCategory', compact('products', 'product'));
    }

    public function detailProduct($category_id)
    {
        $products = Product::where('category_id', '=', $category_id)->get();
        return view('pages.product.selectProduct', compact('products'));
    }


}
