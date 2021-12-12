<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function loginAuth(Request $request)
    {
    }

    public function regAuth(Request $request)
    {
        # code...
    }

    public function logout()
    {
        # code...
    }
}
