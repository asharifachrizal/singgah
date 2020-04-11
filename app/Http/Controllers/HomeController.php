<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slider;

class HomeController extends BaseController
{
    public function index()
    {
        $latestProducts = Product::orderBy('created_at', 'desc')->take(8)->get();
        $slider = Slider::all();
        return view('pages.landing', compact('latestProducts', 'slider'));
    
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function aboutUs()
    {
        return view('pages.aboutus');
    }

    public function comingSoon()
    {
        return view('pages.comingsoon');
    }
}
