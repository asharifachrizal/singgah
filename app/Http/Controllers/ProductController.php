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
        $products = Product::where('category_id', '=', $category_id)->get();        
        return view('pages.product.selectProduct', compact('products'));
    }

}
