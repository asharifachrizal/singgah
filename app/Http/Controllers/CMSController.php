<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use App\Invoice;
use App\Cart;

class CMSController extends BaseController
{

    public function dashboard(){
        $invoices = Invoice::where('status', '=', 2)->get();
        
        //Get Total Revenue
        $totalRevenue = 0;
        foreach ($invoices as $invoice) {
            $carts = Cart::where('invoice_id', '=', $invoice->id)->get();
            foreach ($carts as $cart) {
                $totalRevenue += $cart->price;
            }
        }

        //Get Total Customer
        $role = Sentinel::findRoleById(2);
        $totalUsers = $role->users()->with('roles')->get()->count();

        return view('pages.cms.dashboard', compact('totalRevenue','totalUsers'));
    }
    public function customer()
    {
        $role = Sentinel::findRoleById(2);
        $users = $role->users()->with('roles')->get();
        
        return view('pages.cms.customers', compact('users'));
    }




    public function transaction()
    {
        return view('pages.cms.transaction');
    }

    public function productList()
    {
        return view('pages.cms.productList');
    }
    public function addProduct()
    {
        return view('pages.cms.addProduct');
    }

    

    
}
