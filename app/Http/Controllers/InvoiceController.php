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
        $carts = Cart::where('invoice_id', '=', $id)->get();
        return view('pages.order.detail', compact('carts'));        
    }

    public function invoiceCMSDetail($id)
    {                        
        $carts = Cart::where('invoice_id', '=', $id)->get();      
        return view('pages.cms.invoice', compact('carts'));
    }

    public function invoiceCMSUpdate($id)
    {                        
        $invoice = Invoice::where('id', '=', $id)->first();  
        date_default_timezone_set("Asia/Bangkok");
        $data = [
            'status' => 1,            
            'updated_at' => date("Y/m/d"),   
        ];        

        $invoice->update($data);

        return redirect()->route('cms.invoice',$id);
        
    }

    public function invoiceCMSPaid($id)
    {                        
        $invoice = Invoice::where('id', '=', $id)->first();  
        date_default_timezone_set("Asia/Bangkok");
        $data = [
            'status' => 2,            
            'updated_at' => date("Y/m/d"),   
        ];        

        $invoice->update($data);

        return redirect()->route('cms.invoice',$id);
        
    }

    public function invoiceReject($id)
    {                        
        $invoice = Invoice::where('id', '=', $id)->first();          
        $data = [
            'status' => 3,                        
        ];        

        $invoice->update($data);

        return redirect()->route('myorder',$id);
        
    }

    
}
