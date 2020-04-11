<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders = Order::all();        
        return view('pages.cms.orders', compact('orders'));
    }
    

    public function orderDetail()
    {        
        return view('pages.cms.order-detail');
    }
}
