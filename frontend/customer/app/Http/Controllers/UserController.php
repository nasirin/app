<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    protected $apibe;
    protected $apiconsole;
    public function __construct()
    {
        $this->apibe = env('API_BACKEND');
        $this->apiconsole = env('API_CONSOLE');
    }

    public function index()
    {
        $fasility = Http::get($this->apibe . 'fasility');
        $user = Http::get($this->apibe . 'customer/' . session('user.id'))->json();
        $data = [
            'fasilities' => $fasility['data'],
            'booking' => $user['data']['booking']
        ];
        return view('pages.profile', $data);
    }

    public function show()
    {
        // dd(session('user'));
        $fasility = Http::get($this->apibe . 'fasility');
        $user = Http::get($this->apibe . 'customer/' . session('user.id'))->json();
        $data = [
            'fasilities' => $fasility['data'],
            'booking' => $user['data']['booking']
        ];
        return view('pages.profile-ubah', $data);
    }

    public function update(Request $request)
    {
        $rules = [
            "first_name" => "required|string|min:3",
            "last_name" => "required|string|min:3",
            "nick_name" => "required|string|min:3",
            "avatar" => 'mimes:jpg,jpeg,png|max:1024',
            "address" => "required|string|min:3",
            "phone" => "required|string|min:11|max:16",
            "email" => "required|email",
            "identity" => 'mimes:jpg,jpeg,png|max:1024',
            "gender" => "required|in:male,female",
            "status" => "required|in:single,married",
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            dd($validator->errors());
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        Http::patch($this->apibe . 'customer/' . session('user.id'), $data);
        session()->flush();
        return redirect()->to('/login');
    }
}
