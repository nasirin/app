<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class  AuthController extends Controller
{
    protected $apibe;
    public function __construct()
    {
        $this->apibe = env('API_BACKEND');
    }

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
        $data = $request->all();
        $login = Http::post($this->apibe . 'customer/login', $data)->json();
        if ($login['status'] === 'error') {
            return redirect()->back()->with('error', $login['message']);
        }

        session([
            "user" => $login['data']
        ]);

        return redirect('/');
    }

    public function regAuth(Request $request)
    {
        $data = $request->all();
        $register = Http::post($this->apibe . 'customer', $data);

        if ($register['status'] === 'error') {
            return redirect()->back()->withErrors($register['message'])->withInput();
        }

        return redirect('/login');
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
