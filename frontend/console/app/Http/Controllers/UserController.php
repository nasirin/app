<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{

    protected $api;

    public function __construct()
    {
        $this->api = env("API_BACKEND");
    }

    public function index()
    {
        $res = Http::get($this->api . 'employee/' . session('user.id'))->json();
        $data['admin'] = $res['data'];
        return view('pages.admin.profil', $data);
    }
}
