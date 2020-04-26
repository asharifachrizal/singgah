<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('pages.cms.faq', compact('faqs'));
    }

    public function form()
    {        
        return view('pages.cms.faq-form');
    }

    public function store(Request $request)
    {        
        
        $data = [
            'question'         => $request->question,
            'answer'        => $request->answer,
        ];
        
        Faq::create($data);
        // dd($data);        

        return redirect()->route('cms.faq.list');

    }
}
