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
        // dd($orders);
        return view('pages.cms.order-list', compact('orders'));
    }


    public function orderDetail()
    {
        return view('pages.cms.order-detail');
    }

    public function store()
    {
        $data = [
            'nama-produk'
        ];
    }
}
