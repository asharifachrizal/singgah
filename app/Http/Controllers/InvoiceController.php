<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Cart;
use App\Product;
use App\Category;
use App\Invoice;

class InvoiceController extends Controller
{
    //
    public function invoiceClient($id)
    {
        $carts = Cart::where('user_id', Sentinel::getUser()->id)->get();
        $totalCart = 0;
        foreach($carts as $row){
            $totalCart += $row->product->price;
        }
        return view('pages.cart.checkout', compact('carts', 'totalCart'));
    }

    public function invoiceCMS($no_order)
    {
        $invoice = Invoice::where('no_order', '=', $no_order)->first();
        $invoices = Invoice::where('no_order', '=', $no_order)->get();
        $totalInvoices = 0;
        foreach($invoices as $row){
            // $totalAmmount =
            $totalInvoices += $row->price;
        }
        return view('pages.cms.invoice', compact('invoice', 'invoices', 'totalInvoices'));
    }

    public function store(Request $request)
    {
        $arrayFile = $request->cart_id;
        $arrayPrice = $request->price;
        // return dd($arrayFile);
        // $arrayFile2 = $request->user_id;
        // $arrayFile3 = $request->no_order;

        foreach ($arrayFile as $index=>$row){

            // $carts = Cart::where('id', '=', $row);
            $data = [
                'user_id'       => $request->user_id,
                'cart_id'       => $arrayFile[$index],
                'status'        => 1,
                'no_order'      => $request->no_order,
                'briefURL'      => $request->brief,
                'outputURL'      => $request->output,
                'price'      => $arrayPrice[$index],
            ];
            // dd($data);

            $invoice = Invoice::create($data);
        }


        // dd($data);

        return redirect()->route('cms.order.detail', $request->no_order);
    }
}
