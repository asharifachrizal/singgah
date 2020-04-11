<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Cart;
use App\Product;

class CartController extends BaseController
{
    public function index()
    {
        $carts = Cart::where('status', '>', 0)->get();        
        return view('pages.cms.carts', compact('carts'));
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

    public function additem(Request $request, $slug)
    {
        if(Sentinel::check())
        {
            $product = Product::where('slug', $slug)->first();
            $data = [
                'user_id'       => Sentinel::getUser()->id,
                'product_id'    => $product->id
            ];
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
}
