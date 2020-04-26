<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;
use Validator;
use App\Notification;

class RegisterController extends Controller
{
    //
    public function create()
    {
        return view('pages.register');
    }


    public function registerStore(Request $request)
    {        

            $user = Sentinel::registerAndActivate($request->all());
            $role = Sentinel::findRoleBySlug('visitor');
            $user->roles()->attach($role);

            $this->welcomeNotif($user);

            return redirect()->route('login');

    }

    public function welcomeNotif(User $user)
    {                
        $data = [
            'user_id'         => $user->id,
            'notif_type_id'         => 1,
            'title'         => 'Selamat Datang!',
            'value'        => 'Hallo ' . $user->full_name . ' Selamat Datang di Singgah Chambers',
            'created_at' => date('Y-m-d H:i:s')
        ];
                    
        Notification::create($data);

    }
}
