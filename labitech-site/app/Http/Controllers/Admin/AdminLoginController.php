<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function forget_password()
    {
        return view('admin.forget_password');
    }

    public function forget_password_submit(Request $request)
    {
        $request-> validate([
            'email' => 'required|email',
        ]);

    }


    public function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // if (Auth::guard('admin')->attempt($credentials)) {
        //     return redirect()->route('admin_home');
        // } else {
        //     return redirect()->back()->with('error', 'Invalid Credentials !!');
        // }
    }

}
