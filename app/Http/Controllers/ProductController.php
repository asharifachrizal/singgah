<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Product;
use App\Category;
use App\Cart;

class ProductController extends BaseController
{
    
    public function selectProduct($slug, $category_id)
    {
        $productNames = ProductName::where('category_id', '=', $category_id)->get();        
        return view('pages.product.selectProduct', compact('productNames'));
    }

    public function addProductToCart($category, $slug)
    {
        $product = Product::where('slug', '=', $slug)->first();
        $relatedProducts = Product::orderBy('created_at', 'desc')->take(6)->get();
        return view('pages.product.detail', compact('product', 'relatedProducts'));
    }
}
