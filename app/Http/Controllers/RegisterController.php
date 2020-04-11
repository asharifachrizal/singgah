<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;
use Validator;

class RegisterController extends Controller
{
    //
    public function create()
    {
        return view('pages.register');
    }


    public function registerStore(Request $request)
    {
        // dd($request->all());


            // $data = [
            //     'full_name'         => $request->fullName,
            //     'address'           => $request->address,
            //     'city'              => $request->city,
            //     'phone_number'       => $request->phoneNumber,
            //     'email'             => $request->email,
            //     'password'          => $request->password
            // ];
            // dd($request->all());

            $user = Sentinel::registerAndActivate($request->all());
            $role = Sentinel::findRoleBySlug('visitor');
            $user->roles()->attach($role);

            return redirect()->route('login');

    }
}
