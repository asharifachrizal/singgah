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
        $carts = Cart::where('user_id', Sentinel::getUser()->id)->get();
        $totalCart = 0;
        foreach($carts as $row){
            $totalCart += $row->product->price;
        }
        return view('pages.cart.index', compact('carts', 'totalCart'));
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
        $product = Product::where('slug', $slug)->first();
        $data = [
            'user_id'       => Sentinel::getUser()->id,
            'product_id'    => $product->id
        ];
        $cart = Cart::create($data);
        $notification = [
            'heading' => 'Berhasil Disimpan!',
            'message' => 'Produk berhasil ditambahkan ke Keranjang.',
            'alert-type' => 'success'
        ];
        return $notification;
    }
}
