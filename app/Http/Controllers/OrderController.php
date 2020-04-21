<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Invoice;

class OrderController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();        
        return view('pages.cms.order-list', compact('invoices'));
    }

    public function updateOrder(Request $request, $invoice_id)
    {
                
        $carts = Cart::where('invoice_id', '=', $invoice_id)->get();
        
        $temp = $request->prices;        
        foreach ($carts as &$cart) {
            foreach ($temp as &$item) {
                if( $cart->id == (int)$item['cart_id'] ) {
                    $data = [ 'price' => (int)$item['price'] ];
                    Cart::where('id', '=', (int)$item['cart_id'])->update($data);
                } 
            }
        }   

        $dataInvoice = [ 'outputURL' => $request->outputURL ];
        Invoice::where('id', '=', $invoice_id)->update($dataInvoice);
        
        return response()->json(['success' => true]);

    }


    public function orderDetail($invoice_id)
    {
        $carts = Cart::where('invoice_id', '=', $invoice_id)->get();                
        return view('pages.cms.order-detail', compact('carts'));
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
