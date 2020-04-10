<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;


class CMSController extends BaseController
{
    
    public function customer()
    {        
        return view('pages.cms.customers');
    }
    public function order()
    {        
        return view('pages.cms.orders');
    }

    public function orderDetail()
    {        
        return view('pages.cms.order-detail');
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
