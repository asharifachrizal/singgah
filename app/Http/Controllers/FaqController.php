<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderBy('order', 'DESC')->get();
        return view('pages.cms.faq-list', compact('faqs'));
    }

    public function clientIndex()
    {
        $faqs = Faq::orderBy('order', 'DESC')->get();
        return view('pages.client-faq', compact('faqs'));
    }

    public function formAdd()
    {                
        return view('pages.cms.faq-form');
    }

    public function formUpdate($id)
    {                
        $faq = Faq::where('id', '=', $id)->first();  
        return view('pages.cms.faq-form',compact('faq'));
    }

    public function update($id, Request $request)
    {        
        $faq = Faq::where('id', '=', $id)->first();  
        $data = [
            'order'         => $request->order,
            'question'         => $request->question,
            'answer'        => $request->answer,
        ];
         

        $faq->update($data);
        
        return redirect()->route('cms.faq.list');

    }

    public function store(Request $request)
    {        
        
        $data = [
            'order'         => $request->order,
            'question'         => $request->question,
            'answer'        => $request->answer,
        ];
        
        Faq::create($data);
        // dd($data);        
        return redirect()->route('cms.faq.list');

    }
    public function delete($id) 
    {
        $faq = Faq::find($id)->delete(); 
        return redirect()->route('cms.faq.list');
    }
}
