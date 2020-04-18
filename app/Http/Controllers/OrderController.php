<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Cart;

class OrderController extends Controller
{
    //
    public function index()
    {
        $tempcarts = Cart::where('status', '=', 1);
        $orders = $tempcarts->orderBy('created_at', 'ASC')->get()->unique('no_order');
        // dd($orders);
        return view('pages.cms.order-list', compact('orders'));
    }


    public function orderDetail($no_order)
    {
        $orders = Cart::where('no_order', '=', $no_order)->get();
        $order = Cart::where('no_order', '=', $no_order)->first();
        // dd($orders);
        return view('pages.cms.order-detail', compact('orders', 'order'));
    }


    public function sendOrder()
    {
        if(Sentinel::check())
        {
            // $product = Product::where('slug', $slug)->first();
            $data = [
                'user_id'       => Sentinel::getUser()->id,
                'product_id'    => 2,
                'product_name'    => $request->namaproduk,
                'quantity'      => $request->quantity,
                'orientation'   => $request->orientation,
                'size'          => $request->size,
                'duration'      => $request->duration,
                'target_audience'   => $request->target_audience,
                'deadline'      => $request->deadline,
                'pattern'      => $request->pattern,
                'style'      => $request->style,
                'output'      => $request->output,
                'tone'      => $request->tone,
                'brief'      => $request->brief,
                'status'      => "ORDER SENT",


            ];

            // dd ($data);

            $order = Order::create($data);
            return view('pages.order.list');
        }
    }

    public function store()
    {
        $data = [
            'nama-produk'
        ];
    }
}
