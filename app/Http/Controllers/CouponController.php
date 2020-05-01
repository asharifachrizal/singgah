<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::get();
        return view('pages.cms.coupon.coupon-list', compact('coupons'));
    }

    public function clientIndex()
    {
        $coupons = Coupon::orderBy('order', 'DESC')->get();
        return view('pages.client-coupon', compact('coupons'));
    }

    public function formAdd()
    {                
        return view('pages.cms.coupon.coupon-form');
    }

    public function formUpdate($id)
    {                
        $coupon = Coupon::where('id', '=', $id)->first();  
        return view('pages.cms.coupon.coupon-form',compact('coupon'));
    }

    public function update($id, Request $request)
    {        
        $coupon = Coupon::where('id', '=', $id)->first();  
        $data = [
            'title'         => $request->title,
            'description'         => $request->description,
            'percent'        => $request->percent,
            'cash'        => $request->cash,
        ];
         

        $coupon->update($data);
        
        return redirect()->route('cms.coupon.list');

    }

    public function store(Request $request)
    {        
        
        $data = [
            'title'         => $request->title,
            'description'         => $request->description,
            'percent'        => $request->percent,
            'cash'        => $request->cash,
        ];
        
        Coupon::create($data);
        // dd($data);        
        return redirect()->route('cms.coupon.list');

    }
    public function delete($id) 
    {
        $coupon = Coupon::find($id)->delete(); 
        return redirect()->route('cms.coupon.list');
    }
}
