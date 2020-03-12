<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Sentinel;
use App\Category;
use App\Product;
use App\Cart;

class BaseController extends Controller
{
    public function __construct() {
        $headerCategories = Category::all();
        $footerProducts = Product::all()->random(9);
        
        if(Sentinel::check())
        {
            $carts = Cart::where('user_id', Sentinel::getUser()->id)->get();
            $cartQuantity = 0;
            foreach($carts as $row){
                $cartQuantity += $row->quantity;
            }
        } else {
            $cartQuantity = 0;
        }
        
        $data = array(
            'headerCategories' => $headerCategories,
            'footerProducts' => $footerProducts,
            'cartQuantity' => $cartQuantity,
        );

        View::share('data', $data);
     }  
}
