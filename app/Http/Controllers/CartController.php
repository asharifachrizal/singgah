<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Cart;
use App\Product;
use App\Category;

use Faker\Factory as Faker;

class CartController extends BaseController
{
    public function index()
    {
        $carts = Cart::where('status', '>', 0)->get();
        return view('pages.cms.carts', compact('carts'));
    }

    public function cartClient()
    {
        $tempcarts = Cart::where('user_id', Sentinel::getUser()->id);
        $carts = $tempcarts->where('status', '=', 0)->get();
        return view('pages.cart.index', compact('carts'));
    }

    public function checkout()
    {
        $carts = Cart::where('user_id', Sentinel::getUser()->id)->get();
        $totalCart = 0;
        foreach($carts as $row){
            $totalCart += $row->product->price;
        }
        return view('pages.cart.checkout', compact('carts', 'totalCart'));
    }

    public function myOrder($id)
    {

        // $carts = Cart::where('user_id', '=', $id)->get();
        $tempcarts = Cart::where('status', '=', 1)->where('user_id', '=', $id);
        $carts = $tempcarts->orderBy('created_at', 'ASC')->get()->unique('no_order');
        // $carts = $cart->groupBy('no_order')->get();
        // dd($carts);
        // $totalCart = 0;
        // foreach($carts as $row){
        //     $totalCart += $row->product->price;
        // }
        return view('pages.order.list', compact('carts'));
    }

    public function detailOrder($no_order)
    {
        $order = Cart::where('no_order', '=', $no_order)->get();

        return view('pages.order.detail', compact('order'));
    }

    public function additem(Request $request)
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
                'status'      => 0,


            ];

            // dd ($data);

            $cart = Cart::create($data);
            $notification = [
                'heading' => 'Berhasil!',
                'message' => 'Item berhasil ditambahkan ke keranjang.',
                'bgColor' => '#2b6c45',
                'alert-type' => 'success'
            ];
        }
        else
        {
            $notification = [
                'heading' => 'Gagal!',
                'message' => 'Anda belum login. Silahkan login terlebih ada',
                'bgColor' => '#990000',
                'alert-type' => 'error'
            ];
        }

        return $notification;
    }

    public function addOrder(Request $request, $id)
    {
        $faker = Faker::create();

        $carts = Cart::where('user_id', '=', $id);
        $data = [
            'status'         => 1,
            'no_order'        => $faker->unixTime($max = 'now'),
        ];
        // dd($data);

        $carts->update($data);

        return redirect()->route('profile');

    }




}
