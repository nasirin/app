<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    protected $api;
    protected $url;
    public function __construct(UrlGenerator $url)
    {
        $this->api = env('API_BACKEND');
        $this->url = $url->to('/') . '/storage/';
    }

    public function login()
    {
        return view('pages.login');
    }

    public function signin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $data = $request->all();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ]);
        }

        $login = Http::post($this->api . 'admin/login', $data)->json();

        if ($login['status'] === 'success') {
            session([
                "user" => [
                    'id' => $login['data']['id'],
                    'name' => $login['data']['fullname'],
                    'avatar' => $login['data']['url'] . $login['data']['avatar'],
                    'level' => $login['data']['level']
                ]
            ]);

            return redirect('/');
        } else {
            return redirect()->back()->with('error', $login['message']);
        }

        // return response()->json([
        //     // 'status' => 'error',
        //     'data' => $login
        // ]);
    }

    public function logout()
    {
        session()->flush();
        return redirect('login');
    }
}
