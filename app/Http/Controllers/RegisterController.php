<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Sentinel;
use Validator;

class RegisterController extends Controller
{
    //
    public function create()
    {
        return view('pages.register');
    }


    public function store(Request $request)
    {
        $rules = [
            'name'                  => 'required',
			'gender'                => 'required',
			'email'                 => 'required',
			'username'              => 'required',
			'password'              => 'required|min:8',
			'password-confirmation' => 'required|min:8|same:password',
        ];

        $messages = [
            'name.required' => 'Kolom nama tidak boleh kosong.',
            'gender.required' => 'Kolom jenis kelamin tidak boleh kosong.',
            'email.required' => 'Kolom email tidak boleh kosong.',
            'username.required' => 'Kolom username tidak boleh kosong.',
            'password.required' => 'Kolom password tidak boleh kosong.',
            'password.min' => 'Kolom password harus lebih dari 8 char.',
            'password-confirmation.required' => 'Kolom konfirmasi password tidak boleh kosong.',
            'password-confirmation.min' => 'Kolom password harus lebih dari 8 char.',
            'password-confirmation.same' => 'Kolom password dan konfirmasi password tidak sama.',
        ];

        $validation = Validator::make($request->all(), $rules, $messages);
        if (!$validation->fails()) {
            $data = [
                'name'                  => $request->name,
                'gender'                => $request->gender,
                'email'                 => $request->email,
                'username'              => $request->username,
                'password'              => $request->password,
            ];


            $user = Sentinel::registerAndActivate($data);
            $role = Sentinel::findRoleBySlug('visitor');
            $user->roles()->attach($role);
            $notification = [
                'heading' => 'Berhasil Disimpan!',
                'message' => 'User berhasil dibuat silahkan login.',
                'alert-type' => 'success'
            ];
            return redirect()->route('pages.login')->with($notification);
        }
        $notification = [
            'heading' => 'Gagal Disimpan!',
            'message' => 'Silahkan memastikan tiap inputan yang dibutuhkan terisi dengan benar.',
            'alert-type' => 'error'
        ];
        return redirect()->back()->withInput()->with($notification)->withErrors($validation);
    }
}
