<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends BaseController
{
    public function index()
    {
        $categories = Category::all();
        return view('pages.category.index', compact('products', 'categories'));
    }

    public function detail($slug)
    {
        $category = Category::where('slug', '=', $slug)->first();
        $randomProducts = Product::all()->random(3);
        return view('pages.category.detail', compact('category', 'randomProducts'));
    }
}
