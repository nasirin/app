<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    protected $apibe;
    protected $apiconsole;
    public function __construct()
    {
        $this->apibe = env('API_BACKEND');
        $this->apiconsole = env('API_CONSOLE');
    }

    public function index($id)
    {
        $fasility = Http::get($this->apibe . 'fasility');
        $user = Http::get($this->apibe . 'customer/' . session('user.id'))->json();
        $data = [
            'fasilities' => $fasility['data'],
            'booking' => $user['data']['booking']
        ];
        return view('pages.profile', $data);
    }
}
