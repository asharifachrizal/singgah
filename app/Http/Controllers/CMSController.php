<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;


class CMSController extends BaseController
{
    public function dashboard()
    {        
        return view('pages.cms.dashboard');
    }
    public function order()
    {        
        return view('pages.cms.order');
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
