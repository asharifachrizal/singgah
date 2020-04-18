<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use App\Invoice;

class CMSController extends BaseController
{

    public function customer()
    {
        $role = Sentinel::findRoleById(2);
        // or findRoleBySlug('admin'); for example
        $users = $role->users()->with('roles')->get();
        // dd($users);
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

    public function invoice($no_order)
    {
        $invoice = Cart::where('no_order', '=', $no_order)->get();
        return view('pages.cms.transaction', compact('invoice'));
    }

    
}
