<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Notification;

class NotificationController extends Controller
{
    //
    
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
