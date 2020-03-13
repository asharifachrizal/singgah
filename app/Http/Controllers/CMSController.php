<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;


class CMSController extends BaseController
{
    public function order()
    {        
        return view('pages.cms.order');
    }
    public function transaction()
    {        
        return view('pages.cms.transaction');
    }
    

    
}
