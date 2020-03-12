<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromoController extends BaseController
{
    public function index()
    {
        
        return view('pages.promo.index');
    }
}
