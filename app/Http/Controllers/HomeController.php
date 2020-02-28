<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slider;

class HomeController extends BaseController
{
    public function index()
    {
        $latestProducts = Product::orderBy('created_at', 'desc')->take(4)->get();
        $slider = Slider::all();
        return view('pages.home', compact('latestProducts', 'slider'));
    }

    public function comingSoon()
    {
        return view('pages.comingsoon');
    }
}
